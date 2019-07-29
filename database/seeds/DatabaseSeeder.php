<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesSeeder::class);
        $this->call(StatesSeeder::class);
        $this->call(TypeProductsSeeder::class);
        $this->call(UsersSeeder::class);
        // factory(\App\User::class, 2)->create();
        $this->call(ProductsSeeder::class);

        // factory(\App\Producto::class, 30)->create();

    }
}
