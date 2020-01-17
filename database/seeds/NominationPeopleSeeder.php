<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NominationPeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->actress();
        $this->actor();
    }

    public function actress()
    {
        DB::table('people')->insert([
            [
                'id'      => 1,
                'name'    => 'Charlize Theron',
                'imdb_id' => ''
            ],
            [
                'id'      => 2,
                'name'    => 'Cynthia Erivo',
                'imdb_id' => ''
            ],
            [
                'id'      => 3,
                'name'    => 'Renee Zellweger',
                'imdb_id' => ''
            ],
            [
                'id'      => 4,
                'name'    => 'Saoirse Ronan',
                'imdb_id' => ''
            ],
            [
                'id'      => 5,
                'name'    => 'Scarlett Johansson',
                'imdb_id' => ''
            ],
            [
                'id'      => 6,
                'name'    => 'Florence Pugh',
                'imdb_id' => ''
            ],
            [
                'id'      => 7,
                'name'    => 'Kathy Bates',
                'imdb_id' => ''
            ],
            [
                'id'      => 8,
                'name'    => 'Laura Dern',
                'imdb_id' => ''
            ],
            [
                'id'      => 9,
                'name'    => 'Margot Robbie',
                'imdb_id' => ''
            ],
        ]);


        DB::table('nominations')->insert([
            // actress lead
            [
                'category_id' => 1,
                'people_id'   => 1,
                'movie_id'    => 13 // bomb
            ],
            [
                'category_id' => 1,
                'people_id'   => 2,
                'movie_id'    => 14 // harriet
            ],
            [
                'category_id' => 1,
                'people_id'   => 3,
                'movie_id'    => 15 // judy
            ],
            [
                'category_id' => 1,
                'people_id'   => 4,
                'movie_id'    => 11 // women
            ],
            [
                'category_id' => 1,
                'people_id'   => 5,
                'movie_id'    => 3 // marriage
            ],
            // actress support
            [
                'category_id' => 2,
                'people_id'   => 6,
                'movie_id'    => 11 // women
            ],
            [
                'category_id' => 2,
                'people_id'   => 7,
                'movie_id'    => 16 // jewell
            ],
            [
                'category_id' => 2,
                'people_id'   => 8,
                'movie_id'    => 3 // marriage
            ],
            [
                'category_id' => 2,
                'people_id'   => 9,
                'movie_id'    => 13 // bomb
            ],
            [
                'category_id' => 2,
                'people_id'   => 5,
                'movie_id'    => 10 // jojo
            ],
        ]);
    }

    public function actor()
    {
        DB::table('people')->insert([
            [
                'id'      => 10,
                'name'    => 'Adam Driver',
                'imdb_id' => ''
            ],
            [
                'id'      => 11,
                'name'    => 'Antonio Banderas',
                'imdb_id' => ''
            ],
            [
                'id'      => 12,
                'name'    => 'Joaquin Phoenix',
                'imdb_id' => ''
            ],
            [
                'id'      => 13,
                'name'    => 'Jonathan Pryce',
                'imdb_id' => ''
            ],
            [
                'id'      => 14,
                'name'    => 'Leonardo DiCaprio',
                'imdb_id' => ''
            ],
            [
                'id'      => 15,
                'name'    => 'Al Pacino',
                'imdb_id' => ''
            ],
            [
                'id'      => 16,
                'name'    => 'Anthony Hopkins',
                'imdb_id' => ''
            ],
            [
                'id'      => 17,
                'name'    => 'Brad Pitt',
                'imdb_id' => ''
            ],
            [
                'id'      => 18,
                'name'    => 'Joe Pesci',
                'imdb_id' => ''
            ],
            [
                'id'      => 19,
                'name'    => 'Tom Hanks',
                'imdb_id' => ''
            ],
        ]);

        DB::table('nominations')->insert([
            // actor lead
            [
                'category_id' => 3,
                'people_id'   => 10,
                'movie_id'    => 3 // marriage
            ],
            [
                'category_id' => 3,
                'people_id'   => 11,
                'movie_id'    => 1 // pain
            ],
            [
                'category_id' => 3,
                'people_id'   => 12,
                'movie_id'    => 4 // joker
            ],
            [
                'category_id' => 3,
                'people_id'   => 13,
                'movie_id'    => 5 // popes
            ],
            [
                'category_id' => 3,
                'people_id'   => 14,
                'movie_id'    => 2 // once
            ],
            // actor support
            [
                'category_id' => 4,
                'people_id'   => 15,
                'movie_id'    => 7 // irish
            ],
            [
                'category_id' => 4,
                'people_id'   => 16,
                'movie_id'    => 2 // once
            ],
            [
                'category_id' => 4,
                'people_id'   => 17,
                'movie_id'    => 5 // popes
            ],
            [
                'category_id' => 4,
                'people_id'   => 18,
                'movie_id'    => 7 // irish
            ],
            [
                'category_id' => 4,
                'people_id'   => 19,
                'movie_id'    => 6 // beautiful
            ],
        ]);
    }
}
