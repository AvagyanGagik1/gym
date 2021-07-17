<?php

use Illuminate\Database\Seeder;

class AchievmentSeeder extends Seeder
{
    protected $achievement = [
        [
            'image' => '/images/achievement/Frame.svg',
            'name_ru'=>'Метан и дека',
            'name_en'=>'Метан и дека',
            'name_blr'=>'Метан и дека',
            'description_ru'=>'Награда за пройденные три тренировки за день',
            'description_en'=>'Награда за пройденные три тренировки за день',
            'description_blr'=>'Награда за пройденные три тренировки за день',
        ],
        [
            'image' => '/images/achievement/Frame1.svg',
            'name_ru'=>'Турникмен',
            'name_en'=>'Турникмен',
            'name_blr'=>'Турникмен',
            'description_ru'=>'Награда за пройденные две тренировки за день',
            'description_en'=>'Награда за пройденные две тренировки за день',
            'description_blr'=>'Награда за пройденные две тренировки за день',
        ],
        [
            'image' => '/images/achievement/Frame2.svg',
             'name_ru'=>'Абсолютли',
            'name_en'=>'Абсолютли',
            'name_blr'=>'Абсолютли',
            'description_ru'=>'Награда после пройденной программы',
            'description_en'=>'Награда после пройденной программы',
            'description_blr'=>'Награда после пройденной программы',
        ],
        [
            'image' => '/images/achievement/Frame3.svg',
             'name_ru'=>'Метан и дека',
            'name_en'=>'Метан и дека',
            'name_blr'=>'Метан и дека',
            'description_ru'=>'Награда за пройденные три тренировки за день',
            'description_en'=>'Награда за пройденные три тренировки за день;',
            'description_blr'=>'Награда за пройденные три тренировки за день;',
        ],
        [
            'image' => '/images/achievement/Frame4.svg',
             'name_ru'=>'Подстахуй',
            'name_en'=>'Подстахуй',
            'name_blr'=>'Подстахуй',
            'description_ru'=>'Награда после первой пройденной тренировки',
            'description_en'=>'Награда после первой пройденной тренировки',
            'description_blr'=>'Награда после первой пройденной тренировки',
        ],
        [
            'image' => '/images/achievement/Frame5.svg',
             'name_ru'=>'Турникмен',
            'name_en'=>'Турникмен',
            'name_blr'=>'Турникмен',
            'description_ru'=>'Награда за пройденные две тренировки за день',
            'description_en'=>'Награда за пройденные две тренировки за день',
            'description_blr'=>'Награда за пройденные две тренировки за день',
        ],
        [
            'image' => '/images/achievement/Frame6.svg',
             'name_ru'=>'1000 ccal',
            'name_en'=>'1000 ccal',
            'name_blr'=>'1000 ccal',
            'description_ru'=>'Награда после первой пройденной тренировки',
            'description_en'=>'Награда после первой пройденной тренировки',
            'description_blr'=>'Награда после первой пройденной тренировки',
        ],
        [
            'image' => '/images/achievement/Frame7.svg',
             'name_ru'=>'2000 ccal',
            'name_en'=>'2000 ccal',
            'name_blr'=>'2000 ccal',
            'description_ru'=>'Награда за регистрацию в проекте',
            'description_en'=>'Награда за регистрацию в проекте',
            'description_blr'=>'Награда за регистрацию в проекте',
        ],
        [
            'image' => '/images/achievement/Frame8.svg',
             'name_ru'=>'Абсолютли',
            'name_en'=>'Абсолютли',
            'name_blr'=>'Абсолютли',
            'description_ru'=>'Награда за регистрацию в проекте',
            'description_en'=>'Награда за регистрацию в проекте',
            'description_blr'=>'Награда за регистрацию в проекте',
        ],
        [
            'image' => '/images/achievement/Frame9.svg',
             'name_ru'=>'5000',
            'name_en'=>'5000',
            'name_blr'=>'5000',
            'description_ru'=>'Награда за пройденные две тренировки за день',
            'description_en'=>'Награда за пройденные две тренировки за день',
            'description_blr'=>'Награда за пройденные две тренировки за день',
        ],
        [
            'image' => '/images/achievement/Frame10.svg',
             'name_ru'=>'1 месяц с нами',
            'name_en'=>'1 месяц с нами',
            'name_blr'=>'1 месяц с нами',
            'description_ru'=>'Награда после первой пройденной тренировки',
            'description_en'=>'Награда после первой пройденной тренировки',
            'description_blr'=>'Награда после первой пройденной тренировки',
        ],
        [
            'image' => '/images/achievement/Frame11.svg',
             'name_ru'=>'Абсолютли',
            'name_en'=>'Абсолютли',
            'name_blr'=>'Абсолютли',
            'description_ru'=>'Награда после пройденной программы',
            'description_en'=>'Награда после пройденной программы',
            'description_blr'=>'Награда после пройденной программы',
        ],
        [
            'image' => '/images/achievement/Frame12.svg',
             'name_ru'=>'Абсолютли',
            'name_en'=>'Абсолютли',
            'name_blr'=>'Абсолютли',
            'description_ru'=>'Награда после пройденной программы',
            'description_en'=>'Награда после пройденной программы',
            'description_blr'=>'Награда после пройденной программы',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->achievement as $item){

            \App\Model\Achievement::create($item);
        }
    }
}
