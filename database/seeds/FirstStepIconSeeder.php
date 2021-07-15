<?php

use Illuminate\Database\Seeder;

class FirstStepIconSeeder extends Seeder
{
    public $description = [
        [
            'number'=>'155+',
            'text_ru'=>'Эксклюзивные программы от лучших тренеров',
            'text_en'=>'Эксклюзивные программы от лучших тренеров',
            'text_blr'=>'Эксклюзивные программы от лучших тренеров'
        ],
        [
            'number'=>'455+',
            'text_ru'=>'Прошли программы',
            'text_en'=>'Прошли программы',
            'text_blr'=>'Прошли программы',
        ],
        [
            'number'=>'55+',
            'text_ru'=>'Календари тренировок и трекеры прогресса',
            'text_en'=>'Календари тренировок и трекеры прогресса',
            'text_blr'=>'Календари тренировок и трекеры прогресса',
        ],
        [
            'number'=>'7550+',
            'text_ru'=>'40 программ + питание',
            'text_en'=>'40 программ + питание',
            'text_blr'=>'40 программ + питание',
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->description as $description){
            \App\Model\FirstStepIcon::create($description);
        }
    }
}
