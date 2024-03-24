<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\models\Admin;


class admins extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'email' => 'admin@.com',
            'password' => encrypt('12333'), // Hashing the password
        ]);

    }
}
