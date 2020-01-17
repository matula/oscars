<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NominationMoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->movies();

        $this->screenplay();

        $this->documentary();

        $this->animated();

        $this->music();

        $this->sound();

        $this->vfx();

        DB::table('nominations')->insert([
            // live action - short
            [
                'category_id' => 19,
                'movie_id'    => 47, // brother
                'extra'       => null,
            ],
            [
                'category_id' => 19,
                'movie_id'    => 48, // nefta
                'extra'       => null,
            ],
            [
                'category_id' => 19,
                'movie_id'    => 49, // saria
                'extra'       => null,
            ],
            [
                'category_id' => 19,
                'movie_id'    => 50, // neighbor
                'extra'       => null,
            ],
            [
                'category_id' => 19,
                'movie_id'    => 51, // soeur
                'extra'       => null,
            ],
            // intl - feature
            [
                'category_id' => 14,
                'movie_id'    => 52, // corpus
                'extra'       => null,
            ],
            [
                'category_id' => 14,
                'movie_id'    => 30, // honey
                'extra'       => null,
            ],
            [
                'category_id' => 14,
                'movie_id'    => 53, // les mis
                'extra'       => null,
            ],
            [
                'category_id' => 14,
                'movie_id'    => 1, // pain
                'extra'       => null,
            ],
            [
                'category_id' => 14,
                'movie_id'    => 12, // parasite
                'extra'       => null,
            ],
            // film editing
            [
                'category_id' => 13,
                'movie_id'    => 8, // ford
                'extra'       => 'Andrew Buckland, Michael McCusker'
            ],
            [
                'category_id' => 13,
                'movie_id'    => 4, // joker
                'extra'       => 'Jeff Groth'
            ],
            [
                'category_id' => 13,
                'movie_id'    => 12, // paras
                'extra'       => 'Jinmo Yang'
            ],
            [
                'category_id' => 13,
                'movie_id'    => 7, // irish
                'extra'       => 'Thelma Schoonmaker'
            ],
            [
                'category_id' => 13,
                'movie_id'    => 10, // jojo
                'extra'       => 'Tom Eagles'
            ],
            // prod design
            [
                'category_id' => 18,
                'movie_id'    => 9, // 1917
                'extra'       => 'Dennis Gassner, Lee Sandales'
            ],
            [
                'category_id' => 18,
                'movie_id'    => 10, // jojo
                'extra'       => 'Ra Vincent, Nora Sopkova'
            ],
            [
                'category_id' => 18,
                'movie_id'    => 2, // once
                'extra'       => 'Barbara Ling, Nancy Haigh'
            ],
            [
                'category_id' => 18,
                'movie_id'    => 12, // paras
                'extra'       => 'Ha-jun Lee, Won-Woo Cho'
            ],
            [
                'category_id' => 18,
                'movie_id'    => 7, // irish
                'extra'       => 'Bob Shaw, Regina Graves'
            ],
            // costume
            [
                'category_id' => 10,
                'movie_id'    => 10, // jojo
                'extra'       => 'Mayes C. Rubeo'
            ],
            [
                'category_id' => 10,
                'movie_id'    => 4, // joker
                'extra'       => 'Mark Bridges'
            ],
            [
                'category_id' => 10,
                'movie_id'    => 11, // women
                'extra'       => 'Jacqueline Durran'
            ],
            [
                'category_id' => 10,
                'movie_id'    => 2, // once
                'extra'       => 'Arianne Phillips'
            ],
            [
                'category_id' => 10,
                'movie_id'    => 7, // irish
                'extra'       => 'Christopher Peterson, Sandy Powell'
            ],
            // cinematography
            [
                'category_id' => 9,
                'movie_id'    => 9, // 1917
                'extra'       => 'Roger Deakins'
            ],
            [
                'category_id' => 9,
                'movie_id'    => 4, // joker
                'extra'       => 'Lawrence Sher'
            ],
            [
                'category_id' => 9,
                'movie_id'    => 2, // once
                'extra'       => 'Robert Richardson'
            ],
            [
                'category_id' => 9,
                'movie_id'    => 7, // irish
                'extra'       => 'Rodrigo Prieto'
            ],
            [
                'category_id' => 9,
                'movie_id'    => 18, // lighthouse
                'extra'       => 'Jarin Blaschke'
            ],
            // makeup
            [
                'category_id' => 15,
                'movie_id'    => 9, // 1917
                'extra'       => 'Naomi Donne, Tristan Versluis, Rebecca Cole'
            ],
            [
                'category_id' => 15,
                'movie_id'    => 13, // bomb
                'extra'       => 'Kazu Hiro, Anne Morgan, Vivian Baker'
            ],
            [
                'category_id' => 15,
                'movie_id'    => 4, // joker
                'extra'       => 'Nicki Ledermann, Kay Georgiou'
            ],
            [
                'category_id' => 15,
                'movie_id'    => 15, // judy
                'extra'       => 'Jeremy Woodhead'
            ],
            [
                'category_id' => 15,
                'movie_id'    => 19, // mal
                'extra'       => 'Paul Gooch, Arjen Tuiten, David White'
            ],
        ]);
    }

    public function movies()
    {
        DB::table('nominations')->insert([
            // Movies
            [
                'category_id' => 5,
                'movie_id'    => 9 // 1917
            ],
            [
                'category_id' => 5,
                'movie_id'    => 8 // Ford
            ],
            [
                'category_id' => 5,
                'movie_id'    => 10 // Jojo
            ],
            [
                'category_id' => 5,
                'movie_id'    => 4 // Joker
            ],
            [
                'category_id' => 5,
                'movie_id'    => 2 // Once Upon
            ],
            [
                'category_id' => 5,
                'movie_id'    => 11 // Little Women
            ],
            [
                'category_id' => 5,
                'movie_id'    => 12 // Parasite
            ],
            [
                'category_id' => 5,
                'movie_id'    => 7 // Irishman
            ],
            [
                'category_id' => 5,
                'movie_id'    => 3 // Marriage
            ],
        ]);
    }

    public function screenplay()
    {
        DB::table('nominations')->insert([
            // Screen - Orig
            [
                'category_id' => 23,
                'movie_id'    => 9, // 1917
                'extra'       => 'Sam Mendes, Krysty Wilson-Cairns'
            ],
            [
                'category_id' => 23,
                'movie_id'    => 12, // parasite
                'extra'       => 'Bong Joon Ho, Jin Won Han'
            ],
            [
                'category_id' => 23,
                'movie_id'    => 2, // once upon
                'extra'       => 'Quentin Tarantino'
            ],
            [
                'category_id' => 23,
                'movie_id'    => 3, // marriage
                'extra'       => 'Noah Baumbach'
            ],
            [
                'category_id' => 23,
                'movie_id'    => 17, // knives
                'extra'       => 'Rian Johnson'
            ],
            // Screen - adapt
            [
                'category_id' => 24,
                'movie_id'    => 10, // jojo
                'extra'       => 'Taika Waititi'
            ],
            [
                'category_id' => 24,
                'movie_id'    => 4, // joker
                'extra'       => 'Todd Phillips, Scott Silver'
            ],
            [
                'category_id' => 24,
                'movie_id'    => 11, // little w
                'extra'       => 'Greta Gerwig'
            ],
            [
                'category_id' => 24,
                'movie_id'    => 7, // irish
                'extra'       => 'Steven Zaillian'
            ],
            [
                'category_id' => 24,
                'movie_id'    => 5, // popes
                'extra'       => 'Anthony McCarten'
            ],
        ]);
    }

    public function documentary()
    {
        DB::table('nominations')->insert([
            // doc - feature
            [
                'category_id' => 11,
                'movie_id'    => 28 // am fac
            ],
            [
                'category_id' => 11,
                'movie_id'    => 29 // sama
            ],
            [
                'category_id' => 11,
                'movie_id'    => 30 // honeyland
            ],
            [
                'category_id' => 11,
                'movie_id'    => 31 // cave
            ],
            [
                'category_id' => 11,
                'movie_id'    => 32 // democ
            ],
            // doc - short
            [
                'category_id' => 12,
                'movie_id'    => 33 // abs
            ],
            [
                'category_id' => 12,
                'movie_id'    => 34 // skate
            ],
            [
                'category_id' => 12,
                'movie_id'    => 35 // life
            ],
            [
                'category_id' => 12,
                'movie_id'    => 36 // st louis
            ],
            [
                'category_id' => 12,
                'movie_id'    => 37 // walk run
            ],
        ]);
    }

    public function animated()
    {
        DB::table('nominations')->insert([
            // animated - feature
            [
                'category_id' => 7,
                'movie_id'    => 38 // drag
            ],
            [
                'category_id' => 7,
                'movie_id'    => 39 // body
            ],
            [
                'category_id' => 7,
                'movie_id'    => 40 // klaus
            ],
            [
                'category_id' => 7,
                'movie_id'    => 41 // link
            ],
            [
                'category_id' => 7,
                'movie_id'    => 24 // toy
            ],
            // animated - short
            [
                'category_id' => 8,
                'movie_id'    => 42 // daught
            ],
            [
                'category_id' => 8,
                'movie_id'    => 43 // hair
            ],
            [
                'category_id' => 8,
                'movie_id'    => 44 // kitt
            ],
            [
                'category_id' => 8,
                'movie_id'    => 45 // memor
            ],
            [
                'category_id' => 8,
                'movie_id'    => 46 // sister
            ],
        ]);
    }

    public function music()
    {
        DB::table('nominations')->insert([
            // music score
            [
                'category_id' => 16,
                'movie_id'    => 9, // 1917
                'extra'       => 'Thomas Newman'
            ],
            [
                'category_id' => 16,
                'movie_id'    => 4, // joker
                'extra'       => 'Hildur Guonadottir'
            ],
            [
                'category_id' => 16,
                'movie_id'    => 3, // marriage
                'extra'       => 'Randy Newman'
            ],
            [
                'category_id' => 16,
                'movie_id'    => 11, // women
                'extra'       => 'Alexandre Desplat'
            ],
            [
                'category_id' => 16,
                'movie_id'    => 20, // star
                'extra'       => 'John Williams'
            ],
            // music song
            [
                'category_id' => 17,
                'movie_id'    => 21, // break
                'extra'       => 'I\'m Standing With You'
            ],
            [
                'category_id' => 17,
                'movie_id'    => 22, // frozen
                'extra'       => 'Into the Unknown'
            ],
            [
                'category_id' => 17,
                'movie_id'    => 14, // harriet
                'extra'       => 'Stand Up'
            ],
            [
                'category_id' => 17,
                'movie_id'    => 23, // rocket
                'extra'       => 'I\'m Gonna Love Me Again'
            ],
            [
                'category_id' => 17,
                'movie_id'    => 24, // toy
                'extra'       => 'I Can\'t Let You Throw Yourself Away'
            ],
        ]);
    }

    public function sound()
    {
        DB::table('nominations')->insert([
            // sound editing
            [
                'category_id' => 20,
                'movie_id'    => 9, // 1917
                'extra'       => 'Oliver Tarney, Rachael Tate'
            ],
            [
                'category_id' => 20,
                'movie_id'    => 8, // ford
                'extra'       => 'Donald Sylvester'
            ],
            [
                'category_id' => 20,
                'movie_id'    => 4, // joker
                'extra'       => 'Alan Robert Murray'
            ],
            [
                'category_id' => 20,
                'movie_id'    => 2, // once
                'extra'       => 'Wylie Stateman'
            ],
            [
                'category_id' => 20,
                'movie_id'    => 20, // star
                'extra'       => 'Matthew Wood, David Acord'
            ],
            // sound mixing
            [
                'category_id' => 21,
                'movie_id'    => 9, // 1917
                'extra'       => 'Mark Taylor, Stuart Wilson'
            ],
            [
                'category_id' => 21,
                'movie_id'    => 25, // adastra
                'extra'       => 'Gary Rydstrom, Tom Johnson, Mark Ulano'
            ],
            [
                'category_id' => 21,
                'movie_id'    => 8, // ford
                'extra'       => 'Paul Massey, David Giammarco, Steven Morrow'
            ],
            [
                'category_id' => 21,
                'movie_id'    => 4, // joker
                'extra'       => 'Tom Ozanich, Dean A. Zupancic, Tod A. Maitland'
            ],
            [
                'category_id' => 21,
                'movie_id'    => 2, // once
                'extra'       => 'Michael Minkler, Christian P. Minkler, Mark Ulano'
            ],
        ]);
    }

    public function vfx()
    {
        DB::table('nominations')->insert([
            [
                'category_id' => 22,
                'movie_id'    => 9, // 1917
                'extra'       => 'Guillaume Rocheron, Greg Butler, Dominic Tuohy'
            ],
            [
                'category_id' => 22,
                'movie_id'    => 26, // avg
                'extra'       => 'Dan DeLeeuw, Russell Earl, Matt Aitken, Daniel Sudick'
            ],
            [
                'category_id' => 22,
                'movie_id'    => 20, // star
                'extra'       => 'Neal Scanlan, Patrick Tubach, Dominic Tuohy, Roger Guyett'
            ],
            [
                'category_id' => 22,
                'movie_id'    => 7, // irish
                'extra'       => 'Pablo Helman, Leandro Estebecorena, Nelson Sepulveda, Stephane Grabli'
            ],
            [
                'category_id' => 22,
                'movie_id'    => 27, // lion
                'extra'       => 'Robert Legato, Adam Valdez, Andrew R. Jones, Elliot Newman'
            ],
        ]);
    }
}
