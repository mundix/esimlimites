<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'ce.pichardo@gmail.com',
                'password'       => bcrypt('cepr0614'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);

        $users = [
            [
                'id'             => 2,
                'name'           => 'ESIM LIMITES',
                'email'          => 'ecommerce@simlimites.com',
                'password'       => bcrypt('Gamm@.Simlimites1'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
