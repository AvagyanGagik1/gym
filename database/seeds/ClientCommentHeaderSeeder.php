<?php

use Illuminate\Database\Seeder;

class ClientCommentHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\ClientCommentHeader::create(
            ['title_ru'=>'Что говорят о нас наши клиенты',
            'title_en'=>'Что говорят о нас наши клиенты',
            'title_blr'=>'Что говорят о нас наши клиенты']
        );
    }
}
