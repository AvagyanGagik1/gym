<?php

use Illuminate\Database\Seeder;

class HwoWeAreDescriptionSeeder extends Seeder
{

    public $description = [
        [
            'image' => '/images/icon/scales.svg',
            'text_ru' => '40 программ + питание',
            'text_en' => '40 программ + питание',
            'text_blr' => '40 программ + питание',
        ],
        [
            'image' => '/images/icon/brawn.svg',
            'text_ru' => 'Эксклюзивные программы от лучших тренеров',
            'text_en' => 'Эксклюзивные программы от лучших тренеров',
            'text_blr' => 'Эксклюзивные программы от лучших тренеров',
        ],
        [
            'image' => '/images/icon/weight.svg',
            'text_ru' => '40 программ + питание',
            'text_en' => '40 программ + питание',
            'text_blr' => '40 программ + питание',
        ],
        [
            'image' => '/images/icon/dumbbell.svg',
            'text_en' => 'Йога, кардио, танцы, сила и много другое',
            'text_ru' => 'Йога, кардио, танцы, сила и много другое',
            'text_blr' => 'Йога, кардио, танцы, сила и много другое',
        ],
        [
            'image' => '/images/icon/list1.svg',
            'text_ru' => 'Календари тренировок и трекеры прогресса',
            'text_en' => 'Календари тренировок и трекеры прогресса',
            'text_blr' => 'Календари тренировок и трекеры прогресса',
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
            \App\Model\HwoWeAreDescription::create($description);
        }
    }
}
