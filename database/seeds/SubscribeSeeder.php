<?php

use Illuminate\Database\Seeder;

class SubscribeSeeder extends Seeder
{
    public $subscriptions = [
        [
            'name_ru'=>'Недельная Трансформация',
            'name_en'=>'Недельная Трансформация',
            'name_blr'=>'Недельная Трансформация',
            'duration_subscribe' => 365,
            'duration_program' => 4,
            'price'=>340,
            'image' => '/images/subscription/subscribe1.png'
        ],
        [
            'name_ru'=>' Недельная Трансформация',
            'name_en'=>' Недельная Трансформация',
            'name_blr'=>' Недельная Трансформация',
            'duration_subscribe' => 365,
            'duration_program' => 8,
            'price'=>640,
            'image' => '/images/subscription/subscribe2.png'
        ],
        [
            'name_ru'=>' Недельная Трансформация',
            'name_en'=>' Недельная Трансформация',
            'name_blr'=>' Недельная Трансформация',
            'duration_subscribe' => 365,
            'duration_program' => 16,
            'price'=>740,
            'image' => '/images/subscription/subscribe3.png'
        ],
        [
            'name_ru'=>' Недельная Трансформация',
            'name_en'=>' Недельная Трансформация',
            'name_blr'=>' Недельная Трансформация',
            'duration_subscribe' => 365,
            'duration_program' => 32,
            'price'=>979,
            'image' => '/images/subscription/subscribe4.png'
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->subscriptions as $subscribe){
            \App\Model\Subscription::create($subscribe);
        }
    }
}
