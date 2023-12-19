<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'company' => 'LMP',
            'division' => 'UI/UX',
            'phone_number' => '082170200825',
            'linkedin' => '@galang123',
            'instagram' => '@galangs',
            'profile_picture' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
