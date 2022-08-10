<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Achmad Ibrahim',
            'email' => 'achmad@gmail.com',
            'password' => bcrypt('adm-2021'),
        ]);

        $admin -> assignRole('admin');

        $karyawan = User::create([
            'name' => 'Siti Fatimah',
            'email' => 'siti@gmail.com',
            'password' => bcrypt('krw-2021'),
        ]);

        $karyawan -> assignRole('karyawan');

        $sales = User::create([
            'name' => 'Firman Anugrah',
            'email' => 'firman@gmail.com',
            'password' => bcrypt('sls-2021'),
        ]);

        $sales -> assignRole('sales');

        $teknisi = User::create([
            'name' => 'Bagus Pratama',
            'email' => 'bagus@gmail.com',
            'password' => bcrypt('tkn-2021'),
        ]);

        $teknisi -> assignRole('teknisi');

        $dirut = User::create([
            'name' => 'Ludo Lustrous',
            'email' => 'ludo@gmail.com',
            'password' => bcrypt('drt-2021'),
        ]);

        $dirut -> assignRole('dirut');
    }
}
