<?php

use Illuminate\Database\Seeder;

class SliderTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\SliderText::create([
            'text_ru'=>'ПОДПИСКА GYM PROJECT ПЕРВЫЙ ШАГ К ТВОЕЙ ЦЕЛИ!',
            'text_en'=>'ПОДПИСКА GYM PROJECT ПЕРВЫЙ ШАГ К ТВОЕЙ ЦЕЛИ!',
            'text_blr'=>'ПОДПИСКА GYM PROJECT ПЕРВЫЙ ШАГ К ТВОЕЙ ЦЕЛИ!',
            ]);
    }
}
