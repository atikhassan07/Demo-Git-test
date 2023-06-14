<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'name' => 'Atik Hassan Himel',
            'email' => 'admin@example.com',
            'password' => bcrypt('12345678')
        ];
        Admin::create($admin);
    }
}
