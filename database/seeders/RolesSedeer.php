<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Roles::insert([
            
            [
               
                'nama_role'=>'Pengunjung'

                
            ],
            [
              
                'nama_role'=>'Author'


                
            ],
            [
             
                'nama_role'=>'Admin'


                
            ],


        ]);
    }
}