<?php

namespace Database\Seeders;

use App\Models\Listing;
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
        User::factory(5)->create();

        // if you want to again refresh data use this comman  php artisan migrate:refresh 
        // and again if you want to add data use php artisan migrate:refresh --seed


        // this how we create and seed static data
        Listing::create(
            [
                'title' => 'Laravel Developer Needed',
                'tags' => 'Laravel,PHP,Backend',
                'company' => 'Tech Solutions',
                'location' => 'New York, USA',
                'email' => 'hr@techsolutions.com',
                'website' => 'https://techsolutions.com',
                'description' => 'We are looking for a skilled Laravel developer to join our team.',
            ]
        );

        Listing::create([
            'title' => 'Frontend Engineer',
            'tags' => 'React,JavaScript,Frontend',
            'company' => 'Web Innovators',
            'location' => 'San Francisco, USA',
            'email' => 'jobs@webinnovators.com',
            'website' => 'https://webinnovators.com',
            'description' => 'Seeking a frontend engineer with experience in React and modern JS.',
        ]);

    }

}
