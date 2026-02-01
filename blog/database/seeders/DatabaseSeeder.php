<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a test user
        $testUser = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Create additional users
        $users = User::factory(5)->create();

        // Create posts for the test user (5 published, 2 drafts)
        Post::factory(5)->published()->create([
            'user_id' => $testUser->id,
        ]);

        Post::factory(2)->draft()->create([
            'user_id' => $testUser->id,
        ]);

        // Create posts for other users (15 published posts)
        foreach ($users as $user) {
            Post::factory(3)->published()->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
