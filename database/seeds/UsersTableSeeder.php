<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::firstOrCreate([
            'name' => 'Maesaraga Kelana',
            'email' => 'nazlea@gmail.com',
            'password' => bcrypt('nanozero1'),
            'date_of_birth' => date('Y-m-d'),
            'gender' => 'Laki-Laki',
            'phone' => '082125648844',
            'address' => 'Unknown',
            'photo' => null
        ]);
        $user->assignRole('Administrator');

        $user = User::firstOrCreate([
            'name' => 'Asri Wiguna Pramesti',
            'email' => 'asriwp@gmail.com',
            'password' => bcrypt('nanozero1'),
            'date_of_birth' => date('Y-m-d'),
            'gender' => 'Perempuan',
            'phone' => '088210216414',
            'address' => 'Unknown',
            'photo' => null
        ]);
        $user->assignRole('Pegawai');

        $user = User::firstOrCreate([
            'name' => 'Dyah Pramesti Langensari',
            'email' => 'dyahpl@gmail.com',
            'password' => bcrypt('nanozero1'),
            'date_of_birth' => date('Y-m-d'),
            'gender' => 'Perempuan',
            'phone' => 'Unknown',
            'address' => 'Unknown',
            'photo' => null
        ]);
        $user->assignRole('Pemilik');

        $user = User::firstOrCreate([
            'name' => 'Lena Fitriani',
            'email' => 'lenaF@gmail.com',
            'password' => bcrypt('nanozero1'),
            'date_of_birth' => date('Y-m-d'),
            'gender' => 'Perempuan',
            'phone' => 'Unknown',
            'address' => 'Unknown',
            'photo' => null
        ]);
        $user->assignRole('Pengguna');
    }
}
