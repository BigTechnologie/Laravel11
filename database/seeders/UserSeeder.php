<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@dawan.fr',
        //     'password' => Hash::make('admin'),
        // ]);
        /*
        User::insert([
           [
            'name' => 'admin4',
            'email' => 'admin4@dawan.fr',
            'password' => Hash::make('admin'),
           ],
           [ 'name' => 'admin4',
           'email' => 'admin4@dawan.fr',
           'password' => Hash::make('admin'),]
        ]);
        */


    }
}
