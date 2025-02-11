<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\table;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name' => 'robin',
            'is_active'=>1,
            'role_id'=>1,
            'email' => 'robincaulier3@gmail.com',
            'email_verified_at' => now(),
            'photo_id'=>1,
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        User::factory(50)->create();
        //User::factory()->count(50)->create();
    }
}
