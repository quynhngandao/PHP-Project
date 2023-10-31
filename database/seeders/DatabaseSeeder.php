<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create(); // users creation

        $user = User::factory()->create([
            'name' => 'Quynh',
            'email' => 'quynhdao@gmail.com'
        ]);

        //  factory() create model instances with 10 fake generated listings
        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // TEST DATA
        // Listing::create([
        //     'name' => 'Petunia',
        //     'tags' => 'cat, dog, bird, rabbit, rehome ,playdate',
        //     'owner' => 'Quynh',
        //     'location' => 'New York, NY',
        //     'email' => 'quynhdao@gmail.com',
        //     'description' => 'Petunia is a very sweet girl'
        //   ]);
    }
}
