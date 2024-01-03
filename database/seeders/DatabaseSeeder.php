<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => 'password'
        // ]);
        \App\Models\User::factory()->create([
            'name' => 'd.welter',
            'email' => 'welter@diwe-edv.de',
            'password' => 'hsv1887tv',
            'is_admin' => false
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@hsv.de',
            'password' => 'hsv1887tv',
            'is_admin' => true
        ]);

        \App\Models\Listing::factory(20)->create([
            //
        ]);
    }
}
