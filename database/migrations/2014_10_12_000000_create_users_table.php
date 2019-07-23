<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string("surname");
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image', 255)->default('user-profile-basic.jpg');
            $table->string('skintype', 20)->nullable();
            $table->string('skintone', 20)->nullable();
            $table->string('province', 20)->nullable();
            $table->string('genre', 20)->nullable();
            $table->date('birthday')->nullable();
            $table->rememberToken();
            $table->timestamps();                   //esto esta repetido?
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
