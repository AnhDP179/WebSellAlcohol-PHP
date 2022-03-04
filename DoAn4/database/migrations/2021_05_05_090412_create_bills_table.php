<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->Increments('id');
            $table->date("BillDate")->nullable();
            $table->string("ShipPhone")->nullable();
            $table->string("ShipAddress")->nullable();
            $table->Integer("Status")->default(0);
            $table->double("total")->defaul(0);
            $table->string("Note")->nullable();
            $table->integer('CustomerId')->unsigned();
            $table->foreign('CustomerId')->references('id')->on('customers')->onDelete('cascade');
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
        Schema::dropIfExists('bills');
    }
}
