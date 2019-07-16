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
            $table->string("image",150);
            $table->integer("price", 6,2);
            $table->integer("rating",1,1);
            $table->string("category_id");
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string("state_id");
            $table->string("state_id")->references("id")->on("states");
            $table->string("typeproduct_id");
            $table->string("typeproduct_id")->references("id")->on("typeproducts");
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
