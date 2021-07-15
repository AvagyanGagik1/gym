<?php

use Illuminate\Database\Seeder;

class HwoAreWeSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\HwoAreWe::create(
            [
                'title_ru' => 'Тренируйтесь в любое время, в любом месте',
                'title_en' => 'Тренируйтесь в любое время, в любом месте',
                'title_blr' => 'Тренируйтесь в любое время, в любом месте',
            ]);
    }
}
