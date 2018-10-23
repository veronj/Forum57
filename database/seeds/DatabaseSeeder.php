<?php

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
        $users = factory(App\User::class, 10)->create();

        
        $threads = $users->each(function ($user) { factory('App\Thread', 5)->create(['user_id' => $user->id]); });
        $threads->each(function ($thread) { factory('App\Reply', 5)->create(['thread_id' => $thread->id]); });
        // $this->call(UsersTableSeeder::class);
    }
}
