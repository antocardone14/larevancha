<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        "nombre" =>$faker->sentence(4),
        "descripcion" =>$faker->text,
        "imagen" =>$faker->image(),
        "precio"=>$faker->numberBetween(600,6000),
        "rating" =>$faker->randomFloat(1, 1, 5),   //por que tres numeros?
    ]; //de donde saco los verdes? tienen que ser iguales a los de base de datos?
});
