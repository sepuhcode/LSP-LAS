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
        $user = User::create([
            'name'=>'admin1',
            'email'=>'admin1@gmail.com',
            'password'=>'P@ssw0rd',
            'phone'=>'0812345678911',
            'address'=>'Papua',
            'is_active'=> true
        ]);

        $user->assignRole('admin');

        $user2 = User::create([
            'name'=>'asesor1',
            'email'=>'asesor1@gmail.com',
            'password'=>'P@ssw0rd',
            'phone'=>'08123456789',
            'address'=>'Surabaya',
            'is_active'=> true
        ]);

        $user2->assignRole('asesor');

        $user3 = User::create([
            'name'=>'user1',
            'email'=>'user1@gmail.com',
            'password'=>'P@ssw0rd',
            'phone'=>'0812345678910',
            'address'=>'Jakarta',
            'is_active'=> true
        ]);

        $user3->assignRole('user');
    }
}
