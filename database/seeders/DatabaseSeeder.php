<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\skripsi;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents; // Commented out
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create(); // Commented out (factory method)

       /*User::create([
            'name' => 'user1',
            'email' => 'user@gmail1.com', // Duplicate email for both User and Admin
            'password' => bcrypt('123456789'),
            'point' => 10000,
        ]);

        Admin::create([
            'name' => 'admin',
            'username' => "Admin", // Typos: 'usename' should be 'username'
            'email' => 'admin@gmail.com', // Duplicate email for both User and Admin
            'password' => bcrypt('123456789'),
        ]);*/
        skripsi::create([
            'judul' => 'laporan',
            'nama' => "yusri", // Typos: 'usename' should be 'username'
            'nim' => '6304221497',
            'angkatan' => '2022', 
            'dosen pembimbing 1' => 'lidya wati mkom',
            'dosen pembimbing 2' => 'supria mkom',// Duplicate email for both User and Admin
            
        ]);
    }
}