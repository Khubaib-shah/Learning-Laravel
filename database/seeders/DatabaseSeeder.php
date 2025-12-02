<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // to seed data uncomment this line 
        // User::factory(10)->create();

        // if you want to again refresh data use this comman  php artisan migrate:refresh 

        //  and again if you want to add data use php artisan migrate:refresh --seed
    }
}
