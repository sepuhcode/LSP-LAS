<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Admin Satu',
                'email' => 'admin1@gmail.com',
                'password' => 'password1',
                'phone' => '0812645228911',
                'address' => 'Tangerang',
                'role' => 'admin'
            ],
            [
                'name' => 'Asesor Satu',
                'email' => 'asesor1@gmail.com',
                'password' => 'password1',
                'phone' => '08123456789',
                'address' => 'Depok',
                'role' => 'asesor'
            ],
            [
                'name' => 'Asesor Dua',
                'email' => 'asesor2@gmail.com',
                'password' => 'password1',
                'phone' => '08194884888',
                'address' => 'Depok',
                'role' => 'asesor'
            ],
            [
                'name' => 'Asesor Tiga',
                'email' => 'asesor3@gmail.com',
                'password' => 'password1',
                'phone' => '083736434837',
                'address' => 'Jakarta',
                'role' => 'asesor'
            ],
            [
                'name' => 'User Satu',
                'email' => 'user1@gmail.com',
                'password' => 'password1',
                'phone' => '082339334397',
                'address' => 'Depok',
                'role' => 'user'
            ],
            [
                'name' => 'User Dua',
                'email' => 'user2@gmail.com',
                'password' => 'password1',
                'phone' => '08287644597',
                'address' => 'Depok',
                'role' => 'user'
            ],
            [
                'name' => 'TUK Satu',
                'email' => 'tuk1@gmail.com',
                'password' => 'password1',
                'phone' => '082468129844',
                'address' => 'Jakarta',
                'role' => 'tuk'
            ],
            [
                'name' => 'TUK Dua',
                'email' => 'tuk2@gmail.com',
                'password' => 'password1',
                'phone' => '082468339844',
                'address' => 'Jakarta',
                'role' => 'tuk'
            ]
        ];

        foreach ($data as $list) {
            $user = User::create([
                'name' => $list['name'],
                'email' => $list['email'],
                'password' => $list['password'],
                'phone' => $list['phone'],
                'address' => $list['address']
            ]);

            $user->assignRole($list['role']);
        }
    }
}
