<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use Illuminate\Database\Seeder;

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
