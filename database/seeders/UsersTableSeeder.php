<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Thing;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'        =>        1,
                'name'    =>  "Gwalesh",
                'email'    =>  "gwalesh@webwolf.in",
                'password'    =>  bcrypt("password"),
            ],

            [
                'id'        =>        2,
                'name'    =>  "Sahil",
                'email'    =>  "sahil@webwolf.in",
                'password'    =>  bcrypt("password"),
            ],
        ];

        User::insert($users);

        $things = [
            [
                'id'        =>        1,
                'name'      =>      "Phone",
                'price'     =>      "10000",
            ],
            
            [
                'id'        =>        2,
                'name'      =>      "Tablet",
                'price'     =>      "15000",
            ],
            
            [
                'id'        =>        3,
                'name'      =>      "Laptop",
                'price'     =>      "20000",
            ],
            
            [
                'id'        =>        4,
                'name'      =>      "Desktop",
                'price'     =>      "25000",
            ],

        ];
        
        Thing::insert($things);
    }
}
