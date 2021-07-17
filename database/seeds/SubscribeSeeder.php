<?php

use Illuminate\Database\Seeder;

class SubscribeSeeder extends Seeder
{
    public $subscriptions = [
        [
            'name_ru'=>'4 Недельная Трансформация',
            'name_en'=>'4 Недельная Трансформация',
            'name_blr'=>'4 Недельная Трансформация',
            'duration' => 365,
            'price'=>340,
            'image' => '/images/subscription/subscribe1.png'
        ],
        [
            'name_ru'=>'8 Недельная Трансформация',
            'name_en'=>'8 Недельная Трансформация',
            'name_blr'=>'8 Недельная Трансформация',
            'duration' => 365,
            'price'=>640,
            'image' => '/images/subscription/subscribe2.png'
        ],
        [
            'name_ru'=>'16 Недельная Трансформация',
            'name_en'=>'16 Недельная Трансформация',
            'name_blr'=>'16 Недельная Трансформация',
            'duration' => 365,
            'price'=>740,
            'image' => '/images/subscription/subscribe3.png'
        ],
        [
            'name_ru'=>'32 Недельная Трансформация',
            'name_en'=>'32 Недельная Трансформация',
            'name_blr'=>'32 Недельная Трансформация',

            'duration' => 365,
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
