<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(){
      $infos = [
        [
          'name'=> 'Admin',
          'surname'=>'FB',
          'email'=>'admin1@fancybeauty.com',
          'password'=>'123456',
          // 'rol'=>'100'
        ],
        [
          'name'=> 'Sabrina',
          'surname'=>'Zalio',
          'email'=>'sabrizalio1@gmail.com',
          'password'=>'123456',
          // 'rol'=>'100'                     //que es rol?
        ]
      ];
      foreach ($infos as $info){
        DB::table('users')->insert([
            'name'=> $info['name'],
            'surname'=>$info['surname'],
            // 'rol'=>$info['rol'],
            'email'=>$info['email'],
            'password'=>password_hash($info['password'], PASSWORD_DEFAULT),

        ]);
      }
    }
 }
