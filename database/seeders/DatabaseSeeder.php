<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Listing;
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
        $user = User::factory()->create([
            'name' => 'Rob Schmoe',
            'email' => 'rob@email.com'
        ]);

        $user1 = User::factory()->create([
            'name' => 'admin',
            'email' => 'aaa@aaa.aaa',
            'password' => bcrypt('123456')
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        Listing::factory(2)->create([
            'user_id' => $user1->id
        ]);
    }
}
