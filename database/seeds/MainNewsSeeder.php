<?php

use Illuminate\Database\Seeder;

class MainNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\MainNew::create([
            'author'=>'Gym project',
            'quote_ru'=>'Я не жирный! У меня прекрасная комплекция вратаря! ну или свой вариан цитаты:)',
            'quote_en'=>'Я не жирный! У меня прекрасная комплекция вратаря! ну или свой вариан цитаты:)',
            'quote_blr'=>'Я не жирный! У меня прекрасная комплекция вратаря! ну или свой вариан цитаты:)',
            'text_ru'=>'Хотите похудеть? Привести свое тело в форму? Сжечь лишние калории?
            Поставьте перед собой цель и посмотрите, как Gym project может помочь вам
            преобразовать вашу жизнь. Получите онлайн-доступ ко всем программам тренировок для любого
            телосложения и любого уровня подготовки. Хотите похудеть? Привести свое тело в форму?
             Сжечь лишние калории? Поставьте перед собой цель и посмотрите, как Gym project
             может помочь вам преобразовать вашу жизнь. Получите онлайн-доступ ко всем программам
              тренировок для любого телосложения и любого уровня подготовки.',
            'text_en'=>'Хотите похудеть? Привести свое тело в форму? Сжечь лишние калории?
            Поставьте перед собой цель и посмотрите, как Gym project может помочь вам
            преобразовать вашу жизнь. Получите онлайн-доступ ко всем программам тренировок для любого
            телосложения и любого уровня подготовки. Хотите похудеть? Привести свое тело в форму?
             Сжечь лишние калории? Поставьте перед собой цель и посмотрите, как Gym project
             может помочь вам преобразовать вашу жизнь. Получите онлайн-доступ ко всем программам
              тренировок для любого телосложения и любого уровня подготовки.',
            'text_blr'=>'Хотите похудеть? Привести свое тело в форму? Сжечь лишние калории?
            Поставьте перед собой цель и посмотрите, как Gym project может помочь вам
            преобразовать вашу жизнь. Получите онлайн-доступ ко всем программам тренировок для любого
            телосложения и любого уровня подготовки. Хотите похудеть? Привести свое тело в форму?
             Сжечь лишние калории? Поставьте перед собой цель и посмотрите, как Gym project
             может помочь вам преобразовать вашу жизнь. Получите онлайн-доступ ко всем программам
              тренировок для любого телосложения и любого уровня подготовки.',
            'text_title_ru'=>'Что отделяет нас от остальных',
            'text_title_en'=>'Что отделяет нас от остальных',
            'text_title_blr'=>'Что отделяет нас от остальных'
        ]);
    }
}
