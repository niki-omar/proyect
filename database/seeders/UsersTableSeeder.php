<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Factories\UserFactory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'niki',
            'username'=>'niki123',
            'email' =>'niki@hotmail.com',
            'password' => bcrypt('nikiomar1')
        ]);
        // factory(App\Models\Article::class, 30)->create();   before
        // \App\Models\Article::factory()->count(30)->create();   later

        \App\Models\User::factory() -> count(10) -> create ();
    }
}
