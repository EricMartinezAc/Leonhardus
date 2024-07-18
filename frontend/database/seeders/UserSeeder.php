<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //defaults
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@leonhardusmaster.com',
            'password' => Hash::make('admin')
        ]);
        $admin->assignRole('admin');

        $editor = User::create([
            'name' => 'editor',
            'email' => 'editor@leonhardusmaster.com',
            'password' => Hash::make('editor')
        ]);
        $editor->assignRole('editor');
    }
}
