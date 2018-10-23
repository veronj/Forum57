<?php
use Illuminate\Database\Seeder;
class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $users = factory(App\User::class, 20)->create();
        $threads = $users->each(function ($user) { factory('App\Thread', 10)->create(['user_id' => $user->id]); });
        $threads->each(function ($thread) { factory('App\Reply', 10)->create(['thread_id' => $thread->id, 'user_id' => $users->random(1)->id]); }); */
    }
}