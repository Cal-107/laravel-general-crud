<?php

use Illuminate\Database\Seeder;
use App\Joke;

class JokesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jokes = config('jokes-data');

        foreach ($jokes as $joke) {
            $new_joke = new Joke();

            $new_joke->author = $joke['author'];
            $new_joke->quote = $joke['quote'];
            $new_joke->date = $joke['date'];
            $new_joke->vote = $joke['vote'];

            $new_joke->save();
        }
    }
}
