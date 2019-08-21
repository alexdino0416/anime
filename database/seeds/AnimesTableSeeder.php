<?php

use Illuminate\Database\Seeder;
use App\Anime;

class AnimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Anime::create([
            'name' => 'Naruto',
            'father_id' => 0,
            'descendant_level' => 0
        ]);
        Anime::create([
            'name' => 'Naruto Shippuden',
            'father_id' => 1,
            'descendant_level' => 1
        ]);
        Anime::create([
            'name' => 'Naruto Movie',
            'father_id' => 2,
            'descendant_level' => 2
        ]);
        Anime::create([
            'name' => 'Boruto',
            'father_id' => 2,
            'descendant_level' => 2
        ]);
        Anime::create([
            'name' => 'Naruto Movie Boruto',
            'father_id' => 4,
            'descendant_level' => 3
        ]);
        Anime::create([
            'name' => 'Bleach',
            'father_id' => 0,
            'descendant_level' => 0
        ]);
        Anime::create([
            'name' => 'Bleach Fate',
            'father_id' => 6,
            'descendant_level' => 1
        ]);
        Anime::create([
            'name' => 'Bleach Hell',
            'father_id' => 6,
            'descendant_level' => 1
        ]);

    }
}
