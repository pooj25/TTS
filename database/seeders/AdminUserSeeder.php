<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminUser;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        AdminUser::create([
            'name' => 'Track Tech Admin',
            'email' => 'admin@tracktech.com',
            'password' => 'admin123',
        ]);
    }
}