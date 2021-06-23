<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'nama' => 'iswanti',
            'alamat' => 'Kp.Pasir kalong',
            'telpon' => '089512207654',
            'status' => 'aktif',
            'username' => 'admin',
            'password' => bcrypt('1234'),
            'akses' => 'admin',
        ]);

        User::insert([
            'nama' => 'Siti',
            'alamat' => 'Bogor',
            'telpon' => '085747362581',
            'status' => 'aktif',
            'username' => 'manager',
            'password' => bcrypt('1234'),
            'akses' => 'manager',
        ]);

        User::insert([
            'nama' => 'iswanwan',
            'alamat' => 'Megamendung',
            'telpon' => '0815741215',
            'status' => 'aktif',
            'username' => 'kasir',
            'password' => bcrypt('1234'),
            'akses' => 'kasir',
        ]);

    }
}
