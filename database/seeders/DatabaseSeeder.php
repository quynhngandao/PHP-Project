<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

// import Listing model
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        //  factory() create model instances with fake generated data
        Listing::factory(6)->create();

        // create() create new model instance using provided attributes
        // Listing::create([
        //     'name' => 'Roxie',
        //     'age' => 1,
        //     'breed' => 'Pit',
        //     'organization' => 'Animal Humane Society',
        //     'location' => 'Minneapolis',
        //     'contact' => 'AHS@ahs.org',
        // ]);
        // Listing::create([
        //     'name' => 'Petunia',
        //     'age' => 2,
        //     'breed' => 'Pit',
        //     'organization' => 'Animal Humane Society',
        //     'location' => 'Minneapolis',
        //     'contact' => 'AHS@ahs.org',
        // ]);
    }
}
