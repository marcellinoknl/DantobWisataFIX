<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::insert([
            [
                'name'=>'AdminDantob',
                'email'=>'wisatadantob@gmail.com',
                'password'=>Hash::make('admin123'),
                'role'=>'2'


                
            ],
        ]);
    }
}