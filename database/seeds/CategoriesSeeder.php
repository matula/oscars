<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id'       => 1,
                'category' => 'Actress in a Leading Role',
                'order'    => 1,
            ],
            [
                'id'       => 2,
                'category' => 'Actress in a Supporting Role',
                'order'    => 2,
            ],
            [
                'id'       => 3,
                'category' => 'Actor in a Leading Role',
                'order'    => 3,
            ],
            [
                'id'       => 4,
                'category' => 'Actor in a Supporting Role',
                'order'    => 4,
            ],
            [
                'id'       => 5,
                'category' => 'Motion Picture',
                'order'    => 5,
            ],
            [
                'id'       => 6,
                'category' => 'Director',
                'order'    => 6,
            ],
            [
                'id'       => 7,
                'category' => 'Animated Feature Film',
                'order'    => 9,
            ],
            [
                'id'       => 8,
                'category' => 'Animated Short Film',
                'order'    => 10,
            ],
            [
                'id'       => 9,
                'category' => 'Cinematography',
                'order'    => 11,
            ],
            [
                'id'       => 10,
                'category' => 'Costume Design',
                'order'    => 23,
            ],
            [
                'id'       => 11,
                'category' => 'Documentary Feature',
                'order'    => 13,
            ],
            [
                'id'       => 12,
                'category' => 'Documentary Short Subject',
                'order'    => 14,
            ],
            [
                'id'       => 13,
                'category' => 'Film Editing',
                'order'    => 19,
            ],
            [
                'id'       => 14,
                'category' => 'International Feature Film',
                'order'    => 12,
            ],
            [
                'id'       => 15,
                'category' => 'Makeup and Hairstyling',
                'order'    => 22,
            ],
            [
                'id'       => 16,
                'category' => 'Original Score',
                'order'    => 15,
            ],
            [
                'id'       => 17,
                'category' => 'Original Song',
                'order'    => 16,
            ],
            [
                'id'       => 18,
                'category' => 'Production Design',
                'order'    => 21,
            ],
            [
                'id'       => 19,
                'category' => 'Live Action Short Film',
                'order'    => 6,
            ],
            [
                'id'       => 20,
                'category' => 'Sound Editing',
                'order'    => 17,
            ],
            [
                'id'       => 21,
                'category' => 'Sound Mixing',
                'order'    => 18,
            ],
            [
                'id'       => 22,
                'category' => 'Visual Effects',
                'order'    => 20,
            ],
            [
                'id'       => 23,
                'category' => 'Screenplay - Original',
                'order'    => 7,
            ],
            [
                'id'       => 24,
                'category' => 'Screenplay - Adapted',
                'order'    => 8,
            ],
        ]);
    }
}
