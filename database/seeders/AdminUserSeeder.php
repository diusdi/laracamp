<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'Admin Laracamp',
            'email' => 'admin@laracamp.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => Hash::make('123qweasd'),
            'avatar' => 'gambar',
            'occupation' => 'Blitar',
            'is_admin' => true,
        ]);
    }
}
