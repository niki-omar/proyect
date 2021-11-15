<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Factories\UserFactory;
use App\Models\Entry;
class EntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $users -> each (function($user){
            \App\Models\Entry::factory() -> count(10) ->create([
                'user_id' => $user -> id
            ]);
        });
        // factory(App\Models\Article::class, 30)->create();   before
        // \App\Models\Article::factory()->count(30)->create();   later
        // \App\Models\User::factory() -> count(10) -> create ();


    }
}
