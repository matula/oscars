<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'id'      => 1,
                'name'    => 'Pain and Glory',
                'imdb_id' => 'tt8291806',
            ],
            [
                'id'      => 2,
                'name'    => 'Once Upon A Time... In Hollywood',
                'imdb_id' => 'tt7131622',
            ],
            [
                'id'      => 3,
                'name'    => 'Marriage Story',
                'imdb_id' => 'tt7653254',
            ],
            [
                'id'      => 4,
                'name'    => 'Joker',
                'imdb_id' => 'tt7286456',
            ],
            [
                'id'      => 5,
                'name'    => 'The Two Popes',
                'imdb_id' => 'tt8404614',
            ],
            [
                'id'      => 6,
                'name'    => 'A Beautiful Day in the Neighborhood',
                'imdb_id' => 'tt3224458',
            ],
            [
                'id'      => 7,
                'name'    => 'The Irishman',
                'imdb_id' => 'tt1302006',
            ],
            [
                'id'      => 8,
                'name'    => 'Ford v Ferrari',
                'imdb_id' => 'tt1950186',
            ],
            [
                'id'      => 9,
                'name'    => '1917',
                'imdb_id' => 'tt8579674',
            ],
            [
                'id'      => 10,
                'name'    => 'Jojo Rabbit',
                'imdb_id' => 'tt2584384',
            ],
            [
                'id'      => 11,
                'name'    => 'Little Women',
                'imdb_id' => 'tt3281548',
            ],
            [
                'id'      => 12,
                'name'    => 'Parasite',
                'imdb_id' => 'tt6751668',
            ],
            [
                'id'      => 13,
                'name'    => 'Bombshell',
                'imdb_id' => 'tt6394270',
            ],
            [
                'id'      => 14,
                'name'    => 'Harriet',
                'imdb_id' => 'tt4648786',
            ],
            [
                'id'      => 15,
                'name'    => 'Judy',
                'imdb_id' => 'tt7549996',
            ],
            [
                'id'      => 16,
                'name'    => 'Richard Jewell',
                'imdb_id' => 'tt3513548',
            ],
            [
                'id'      => 17,
                'name'    => 'Knives Out',
                'imdb_id' => 'tt8946378',
            ],
            [
                'id'      => 18,
                'name'    => 'The Lighthouse',
                'imdb_id' => 'tt7984734',
            ],
            [
                'id'      => 19,
                'name'    => 'Maleficent: Mistress of Evil',
                'imdb_id' => 'tt4777008',
            ],
            [
                'id'      => 20,
                'name'    => 'Star Wars: The Rise Of Skywalker',
                'imdb_id' => 'tt2527338',
            ],
            [
                'id'      => 21,
                'name'    => 'Breakthrough',
                'imdb_id' => 'tt7083526',
            ],
            [
                'id'      => 22,
                'name'    => 'Frozen II',
                'imdb_id' => 'tt4520988',
            ],
            [
                'id'      => 23,
                'name'    => 'Rocketman',
                'imdb_id' => 'tt2066051',
            ],
            [
                'id'      => 24,
                'name'    => 'Toy Story 4',
                'imdb_id' => 'tt1979376',
            ],
            [
                'id'      => 25,
                'name'    => 'Ad Astra',
                'imdb_id' => 'tt2935510',
            ],
            [
                'id'      => 26,
                'name'    => 'Avengers: Endgame',
                'imdb_id' => 'tt4154796',
            ],
            [
                'id'      => 27,
                'name'    => 'The Lion King',
                'imdb_id' => 'tt6105098',
            ],
            [
                'id'      => 28,
                'name'    => 'American Factory',
                'imdb_id' => 'tt9351980',
            ],
            [
                'id'      => 29,
                'name'    => 'For Sama',
                'imdb_id' => 'tt9617456',
            ],
            [
                'id'      => 30,
                'name'    => 'Honeyland',
                'imdb_id' => 'tt8991268',
            ],
            [
                'id'      => 31,
                'name'    => 'The Cave',
                'imdb_id' => 'tt7178226',
            ],
            [
                'id'      => 32,
                'name'    => 'The Edge of Democracy',
                'imdb_id' => 'tt6016744',
            ],
            [
                'id'      => 33,
                'name'    => 'In the Absence',
                'imdb_id' => 'tt9464764',
            ],
            [
                'id'      => 34,
                'name'    => 'Learning to Skateboard in a Warzone (If You\'re a Girl)',
                'imdb_id' => 'tt10397932',
            ],
            [
                'id'      => 35,
                'name'    => 'Life Overtakes Me',
                'imdb_id' => 'tt9204606',
            ],
            [
                'id'      => 36,
                'name'    => 'St. Louis Superman',
                'imdb_id' => 'tt10009148',
            ],
            [
                'id'      => 37,
                'name'    => 'Walk Run Cha-Cha',
                'imdb_id' => 'tt10182854',
            ],
            [
                'id'      => 38,
                'name'    => 'How to Train Your Dragon: The Hidden World',
                'imdb_id' => 'tt2386490',
            ],
            [
                'id'      => 39,
                'name'    => 'I Lost My Body',
                'imdb_id' => 'tt9806192',
            ],
            [
                'id'      => 40,
                'name'    => 'Klaus',
                'imdb_id' => 'tt4729430',
            ],
            [
                'id'      => 41,
                'name'    => 'Missing Link',
                'imdb_id' => 'tt6348138',
            ],
            [
                'id'      => 42,
                'name'    => 'Daughter',
                'imdb_id' => 'tt10923134',
            ],
            [
                'id'      => 43,
                'name'    => 'Hair Love',
                'imdb_id' => 'tt7129636',
            ],
            [
                'id'      => 44,
                'name'    => 'Kitbull',
                'imdb_id' => 'tt9536832',
            ],
            [
                'id'      => 45,
                'name'    => 'Memorable',
                'imdb_id' => 'tt10499942',
            ],
            [
                'id'      => 46,
                'name'    => 'Sister',
                'imdb_id' => 'tt9032798',
            ],
            [
                'id'      => 47,
                'name'    => 'Brotherhood',
                'imdb_id' => 'tt8906678',
            ],
            [
                'id'      => 48,
                'name'    => 'Nefta Football League',
                'imdb_id' => 'tt8551848',
            ],
            [
                'id'      => 49,
                'name'    => 'Saria',
                'imdb_id' => 'tt11421246',
            ],
            [
                'id'      => 50,
                'name'    => 'The Neighbors\' Window',
                'imdb_id' => 'tt8163822',
            ],
            [
                'id'      => 51,
                'name'    => 'Une soeur',
                'imdb_id' => 'tt8767544',
            ],
            [
                'id'      => 52,
                'name'    => 'Corpus Christi',
                'imdb_id' => 'tt8649186',
            ],
            [
                'id'      => 53,
                'name'    => 'Les Miserables',
                'imdb_id' => 'tt10199590',
            ],
        ]);
    }
}
