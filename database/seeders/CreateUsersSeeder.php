<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@up.com',
                'is_admin'=>'1',
                'is_cheif'=>'0',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'User',
               'email'=>'user@up.com',
                'is_admin'=>'0',
                'is_cheif'=>'0',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'Cheif',
               'email'=>'cheif@up.com',
               'is_admin'=>'0',
                'is_cheif'=>'1',
               'password'=> bcrypt('12345678'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
