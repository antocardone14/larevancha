<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name", 50);
            $table->string("description", 250);
            $table->string("image",255);
            $table->integer("price");
            //$table->integer("rating",1,1)->default(0,0);   // ESTO TIRA ERROR
            $table->unsignedBigInteger("category_id")->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger("state_id")->nullable();
            $table->foreign("state_id")->references("id")->on("states");
            $table->unsignedBigInteger("typeproduct_id")->nullable();
            $table->foreign("typeproduct_id")->references("id")->on("typeproducts");
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
        Schema::dropIfExists('products');
    }
}
