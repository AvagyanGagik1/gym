<?php

use Illuminate\Database\Seeder;

class FirstStepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\FirstStep::create(
            [
                'title_ru'=>'Решение начать =
                    более 70% результата!',
                'title_en'=>'Решение начать =
                    более 70% результата!',
                'title_blr'=>'Решение начать =
                    более 70% результата!',
                'description_ru'=>'Хотите похудеть? Привести свое тело в форму? Сжечь лишние калории? Поставьте перед собой цель и
                    посмотрите, как Gym project может помочь вам преобразовать вашу жизнь. Получите онлайн-доступ ко
                    всем
                    программам тренировок для любого телосложения и любого уровня подготовки.',
                'description_en'=>'Хотите похудеть? Привести свое тело в форму? Сжечь лишние калории? Поставьте перед собой цель и
                    посмотрите, как Gym project может помочь вам преобразовать вашу жизнь. Получите онлайн-доступ ко
                    всем
                    программам тренировок для любого телосложения и любого уровня подготовки.',
                'description_blr'=>'Хотите похудеть? Привести свое тело в форму? Сжечь лишние калории? Поставьте перед собой цель и
                    посмотрите, как Gym project может помочь вам преобразовать вашу жизнь. Получите онлайн-доступ ко
                    всем
                    программам тренировок для любого телосложения и любого уровня подготовки.',
                'video_link'=>'https://www.youtube.com/watch?v=PhGN1QQn__Q',
                'image'=>'/images/about.png'
            ]);
    }
}
