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

        $user4 = User::create([
            'name'=>'Ma\'Mun Hidayat',
            'email'=>'Ma\'Mun_Hidayat@gmail.com',
            'password'=>'P@ssw0rd',
            'phone'=>'0123',
            'address'=>'Bogor',
            'is_active'=> false
        ]);

        $user4->assignRole('asesor');

        $user5 = User::create([
            'name'=>'Iman Heriyadi',
            'email'=>'Iman_Heriyadi@gmail.com',
            'password'=>'P@ssw0rd',
            'phone'=>'0456',
            'address'=>'Tangerang',
            'is_active'=> true
        ]);

        $user5->assignRole('asesor');

        $user6 = User::create([
            'name'=>'Asep Tajuddin Nur',
            'email'=>'Asep_Tajuddin_Nur@gmail.com',
            'password'=>'P@ssw0rd',
            'phone'=>'0101112',
            'address'=>'Depok',
            'is_active'=> true
        ]);

        $user6->assignRole('asesor');

        $user7 = User::create([
            'name'=>'Wahadi Sugijono',
            'email'=>'Wahadi_Sugijono@gmail.com',
            'password'=>'P@ssw0rd',
            'phone'=>'0131415',
            'address'=>'Jakarta Selatan',
            'is_active'=> false
        ]);

        $user7->assignRole('asesor');

        $user8 = User::create([
            'name'=>'Markus Pamenta',
            'email'=>'Markus_Pamenta@gmail.com',
            'password'=>'P@ssw0rd',
            'phone'=>'0161718',
            'address'=>'Kab.Crimea',
            'is_active'=> false
        ]);

        $user8->assignRole('asesor');

    }
}
