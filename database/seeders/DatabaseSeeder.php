<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            EventSeeder::class,
            EventImageSeeder::class,
            EventTagSeeder::class,
            EventAttendeeSeeder::class,
            PaymentSeeder::class,
            CommentSeeder::class,
            FollowerSeeder::class,
            CategorySubscriptionSeeder::class,
            UserPreferenceSeeder::class,
        ]);
    }
}
