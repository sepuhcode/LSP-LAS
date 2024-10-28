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
                'is_active' => true,
                'role' => 'asesor'
            ],
            [
                'name' => 'Asesor Dua',
                'email' => 'asesor2@gmail.com',
                'password' => 'password1',
                'phone' => '08194884888',
                'address' => 'Depok',
                'is_active' => true,
                'role' => 'asesor'
            ],
            [
                'name' => 'Asesor Tiga',
                'email' => 'asesor3@gmail.com',
                'password' => 'password1',
                'phone' => '083799334837',
                'address' => 'Jakarta',
                'is_active' => true,
                'role' => 'asesor'
            ],
            [
                'name' => 'User Satu',
                'email' => 'user1@gmail.com',
                'password' => 'password1',
                'phone' => '082299334397',
                'address' => 'Depok',
                'is_active' => true,
                'role' => 'user'
            ],
            [
                'name' => 'User Dua',
                'email' => 'user2@gmail.com',
                'password' => 'password1',
                'phone' => '082299334397',
                'address' => 'Depok',
                'is_active' => true,
                'role' => 'user'
            ],
            [
                'name' => 'TUK Satu',
                'email' => 'tuk1@gmail.com',
                'password' => 'password1',
                'phone' => '082468339844',
                'address' => 'Jakarta',
                'is_active' => true,
                'role' => 'tuk'
            ],
            [
                'name' => 'TUK Dua',
                'email' => 'tuk2@gmail.com',
                'password' => 'password1',
                'phone' => '082468339844',
                'address' => 'Jakarta',
                'is_active' => true,
                'role' => 'tuk'
            ]
        ];

        foreach ($data as $list) {
            $user = User::create([
                'name' => $list['name'],
                'email' => $list['email'],
                'password' => $list['password'],
                'phone' => $list['phone'],
                'address' => $list['address'],
                'is_active' => $list['is_active'],
            ]);

            $user->assignRole($list['role']);
        }
    }
}
