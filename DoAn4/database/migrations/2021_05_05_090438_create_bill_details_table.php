<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_details', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('BillId')->unsigned();
            $table->foreign('BillId')->references('id')->on('bills')->onDelete('cascade');
            $table->integer('ProductId')->unsigned();
            $table->foreign('ProductId')->references('id')->on('product_singles')->onDelete('cascade');
            $table->Integer("Quantity")->default(0);
            $table->double("UnitPrice")->default(0);
            $table->date("AddDate")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_details');
    }
}
