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
            ],
            [
                'id'       => 2,
                'category' => 'Actress in a Supporting Role',
            ],
            [
                'id'       => 3,
                'category' => 'Actor in a Leading Role',
            ],
            [
                'id'       => 4,
                'category' => 'Actor in a Supporting Role',
            ],
            [
                'id'       => 5,
                'category' => 'Motion Picture',
            ],
            [
                'id'       => 6,
                'category' => 'Director',
            ],
            [
                'id'       => 7,
                'category' => 'Animated Feature Film',
            ],
            [
                'id'       => 8,
                'category' => 'Animated Short Film',
            ],
            [
                'id'       => 9,
                'category' => 'Cinematographer',
            ],
            [
                'id'       => 10,
                'category' => 'Costume Design',
            ],
            [
                'id'       => 11,
                'category' => 'Documentary Feature',
            ],
            [
                'id'       => 12,
                'category' => 'Documentary Short Subject',
            ],
            [
                'id'       => 13,
                'category' => 'Film Editing',
            ],
            [
                'id'       => 14,
                'category' => 'International Feature Film',
            ],
            [
                'id'       => 15,
                'category' => 'Makeup and Hairstyling',
            ],
            [
                'id'       => 16,
                'category' => 'Original Score',
            ],
            [
                'id'       => 17,
                'category' => 'Original Song',
            ],
            [
                'id'       => 18,
                'category' => 'Production Design',
            ],
            [
                'id'       => 19,
                'category' => 'Live Action Short Film',
            ],
            [
                'id'       => 20,
                'category' => 'Sound Editing',
            ],
            [
                'id'       => 21,
                'category' => 'Sound Mixing',
            ],
            [
                'id'       => 22,
                'category' => 'Visual Effects',
            ],
            [
                'id'       => 23,
                'category' => 'Screenplay - Original',
            ],
            [
                'id'       => 24,
                'category' => 'Screenplay - Adapted',
            ],
        ]);
    }
}
