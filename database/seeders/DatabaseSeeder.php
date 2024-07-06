<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $this->call(PermissionSeeder::class);

        User::create([
            'name' => 'Juan Cardozo Dev',
            'email' => 'juanguillermopc@live.com',
            'password' => bcrypt('12345678')
        ])->assignRole(['Dev']);



    }
}
