<?php

namespace Database\Seeders;

use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $credentials = array(
            "email" => 'admin@demo.com',
            "password" => '123456',
            "first_name" => 'Ramadan',
            "last_name" => 'Ntila',
            "phone" => '0783923269',
        );
        $user = Sentinel::registerAndActivate($credentials);
        $role = Sentinel::findRoleBySlug('admin');
        $role->users()->attach($user);
    }
}
