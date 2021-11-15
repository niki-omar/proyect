<?php

namespace Database\Factories;
use App\Models\Entry;
use Illuminate\Database\Eloquent\Factories\Factory;

/** @var \Illuminate\Database\Eloquent\Factories\Factory $factory; */
use Faker\Generator as Faker;

// $factory -> define(Entry::class, function(Faker $faker) {
//     return[
//         'title' => $faker -> title,
//         'content' => $faker -> text,
//         'user_id' => 1
//     ];
// });
class EntryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */



    public function definition() //minuto 52:40, diferente forma para la definicion
    {
        return [
            'title' =>$this-> faker -> sentence,
            'content' =>$this-> faker -> text,
            'user_id' => 1
        ];
    }
}
