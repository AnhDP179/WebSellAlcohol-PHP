<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSinglesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_singles', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer("product_id")->unsigned();
            $table->foreign("product_id")->references("id")->on("products")->onDelete("cascade");
            $table->string("wine_name");
            $table->string("alcohol_concentration");
            $table->string("capacity");
            $table->integer("amount");
            $table->float("price");
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
        Schema::dropIfExists('product_singles');
    }
}
