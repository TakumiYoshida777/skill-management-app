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
            [
                'id' => '1',
                'employees' => '123456789',
                'name' => '吉田巧',
                'email' => 'yoshida.fm.0626@gmail.com',
                'email_verified_at' => null,
                'position' => '一般',
                'division' => '管理部',
                'section' => 'システム課',
                'industry_experience_months' => 18,
                'password' => Hash::make('password'),
                'pr' => '自己PR自己PR自己PR自己PR自己PR自己PR自己PR自己PR自己PR',
                'remember_token' => 'remember_token_value_here',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'employees' => '135792468',
                'name' => '佐藤健太',
                'email' => 'sato.kenta@example.com',
                'email_verified_at' => null,
                'position' => '一般',
                'division' => 'ICT事業部',
                'section' => '',
                'industry_experience_months' => 12,
                'password' => Hash::make('password'),
                'pr' => '自己PR自己PR自己PR自己PR自己PR自己PR自己PR自己PR自己PR',
                'remember_token' => 'remember_token_value_here',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '3',
                'employees' => '246813579',
                'name' => '鈴木美咲',
                'email' => 'suzuki.misaki@example.com',
                'email_verified_at' => null,
                'position' => 'ICT事業部',
                'division' => 'マネージャー',
                'section' => '',
                'industry_experience_months' => 36,
                'password' => Hash::make('password'),
                'pr' => '自己PR自己PR自己PR自己PR自己PR自己PR自己PR自己PR自己PR',
                'remember_token' => 'remember_token_value_here',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
