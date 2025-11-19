<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt(123456789),
            'type'=>'admin',
            'email_verified_at'=>now()
        ]);
    }
}
