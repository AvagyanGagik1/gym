<?php

use Illuminate\Database\Seeder;

class NewsHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\NewsHeader::create(
            [
                'title_ru'=>'Последние новости и статьи',
                'title_en'=>'Последние новости и статьи',
                'title_blr'=>'Последние новости и статьи'
            ]
        );
    }
}
