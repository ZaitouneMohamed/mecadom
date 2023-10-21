<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => "admin",
            'last_name' => "admin",
            'email' => "admin@admin.com",
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
        ])->assignRole('admin');

        User::create([
            'first_name' => "user",
            'last_name' => "user",
            'email' => "user@user.com",
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
        ])->assignRole('user');

        User::create([
            'first_name' => "four",
            'last_name' => "sseur 1",
            'email' => "fournisseur1@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
        ])->assignRole('fournisseur');

        User::create([
            'first_name' => "four",
            'last_name' => "sseur 2",
            'email' => "fournisseur2@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
        ])->assignRole('fournisseur');

        // 5
        User::create([
            'first_name' => "mech",
            'last_name' => "anicien 1",
            'email' => "mechanicien1@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
        ])->assignRole('mecaniciens');

        // 6
        User::create([
            'first_name' => "mech",
            'last_name' => "anicien 2",
            'email' => "mechanicien2@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
        ])->assignRole('mecaniciens');

        // 7
        User::create([
            'first_name' => "entre",
            'last_name' => "prise 1",
            'email' => "entreprise1@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
        ])->assignRole('entreprise');

        // 8
        User::create([
            'first_name' => "entre",
            'last_name' => "prise 2",
            'email' => "entreprise2@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
        ])->assignRole('entreprise');
    }
}
