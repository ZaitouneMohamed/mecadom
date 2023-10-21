<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(15)->create();
        $this->call(RolesSeeder::class);
        $this->call(UserSeeder::class);
        \App\Models\Fournisseur::factory(1)->create();
        \App\Models\Mecanicien::factory(1)->create();
        \App\Models\Entreprise::factory(1)->create();
        \App\Models\Service::factory(10)->create();
    }
}
