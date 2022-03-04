<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bill;
use App\BillDetail;
use App\Picture;
use App\ProductSingle;
use App\Product;
use App\Customer;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $db = Bill::All();
        return view("admin.bill.bill", compact("db"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $bill_detail = BillDetail::where("BillId", $id)->get();

        return view("admin.bill.bill_detail", compact('bill_detail'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $db = Bill::findOrFail($id);
        $db->delete();
        return redirect()->route("bill.index")->with('message', 'Xóa đơn hàng thành công');

    }
    public function print_bill($checkout_code)
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->print_bill_convert($checkout_code));
        return $pdf->stream();
    }
    public function print_bill_convert($checkout_code)
    {
        $bill_details = BillDetail::where("billId", $checkout_code)->get();
        $bill = Bill::where("id", $checkout_code)->get();
        foreach ($bill as $key => $ord) {
            $customer_id = $ord->CustomerId;
        }
        $customer = Customer::where('id',$customer_id)->first();

        $bill_details_product = BillDetail::with("product")->where("BillId",$checkout_code)->get();

        $output = '';

        $output.='
        <style>
            body { 
                font-family: DejaVu Sans;
            }
            .table-styling {
                width: 100%;
                margin-top:170px;
                border: 1px solid;
            }
            .table-styling.product {
                width: 100%;
                margin-top:0px;
            }
            .table-styling.customer tr td{
                text-align: left;

            }
            .table-styling.product tr td.amount {
                text-align: center;
            }
            .table-styling.product tr td.price {
                text-align: right;
                color: orange;
            }
            
        </style>
        <div style="float:left; margin-right:70px">
            <h1>Liquor Store</h1>
            <p>Địa chỉ: TP.Hưng Yên,Tỉnh Hưng Yên</p>
            <p>Số điện thoại: 0911130712</p>
            <p>Email: vuivatva179@gmail.com</p>    
        </div>
        <div >
            <h1>Hóa đơn bán hàng</h1>
        </div>
        

            <table  class="table-styling customer" bbill=1 cellpadding=3 cellspacing=2>
                <thead>
                    <tr >
                        <th style:"border: 1px solid;" >Tên khách hàng</th>
                        <th style:"border: 1px solid;">Số diện thoại</th>
                        <th style:"border: 1px solid;">Email</th>
                        <th style:"border: 1px solid;"> Địa chỉ</th>
                    </tr>
                </thead>
                <tbody>';
              
        $output.='
                    <tr>
                        <td>'.$customer->CustomerName.'</td>
                        <td>'.$customer->Phone.'</td>
                        <td>'.$customer->Email.'</td>
                        <td>'.$customer->Address.'</td>
                    </tr>';
           
        $output.='
                </tbody>
        </table>


        <h1 style=" font-size: 18px;margin-top:40px;margin-bottom:40px;">Chi tiết đơn hàng</h1>
        <table class="table-styling product" bbill=1 cellpadding=3 cellspacing=2>
                <thead>
                       <tr>
                        <th style="text-align:left;">Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th style="text-align:right;">Đơn giá (VNĐ)</th>
                        <th style="text-align:right;">Thành tiền (VNĐ)</th>
                    </tr>
                </thead>
                <tbody >';
                $total = 0;
              foreach ($bill_details_product as $key => $pro) {
                  
                  $subtotal = $pro->Quantity*$pro->UnitPrice;
                  $total+=$subtotal;
        $output.='
                    <tr >
                    <td >'.$pro->productsingle->wine_name.'</td>
                        <td class="amount">'.$pro->Quantity.'</td>
                        <td class="price">'. number_format($pro->UnitPrice,0,',','.').'</td>
                        <td class="price">'. number_format($subtotal,0,',','.').'</td>
                    </tr>';
              }
        $output.= '
        <tr>
              <td colspan=6 >
                <p style="text-align:right;margin-left:300px;with:100%;color:red;" >Thanh toán: '. number_format($total,0,',','.').' VND '.'</p>
              </td>
        </tr>';
        $output.='
                </tbody>
        </table>
        
        <table width="100%" style="margin-top:80px;">
              <thead>
                    <tr>
                        <th width="200px">Người lập phiếu</th>
                        <th width="800px">Người nhận</th>
                    </tr>
              </thead>
        </table>
        
        ';

        return $output;

    }

}
