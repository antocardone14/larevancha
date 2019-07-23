<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

 $fakeimages = storage_path('public/productos');
 $categories = App\Categoria::all()->random()->id;
 $typeproducts = App\TipoProducto::all()->random()->id;
 $states = App\Estado::all()->random()->id;
 return [
     'name' => $faker->word(3),
     'description' => $faker->text,
     'price' => $faker->numberBetween(800, 9000),
     'image' => $faker->image($fakeimages, 200, 200, 'fashion', false),
     'category_id' => $categories,
     'state_id' => $states,
     'typeproduct_id'=> $typeproducts,
 ];
});
