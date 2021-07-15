<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(ClientCommentHeaderSeeder::class);
         $this->call(FirstStepSeeder::class);
         $this->call(HwoAreWeSeeder::class);
         $this->call(MainNewsSeeder::class);
         $this->call(NewsHeaderSeeder::class);
         $this->call(SliderTextSeeder::class);
         $this->call(TrainerHeaderSeeder::class);
         $this->call(FirstStepIconSeeder::class);
         $this->call(HwoWeAreDescriptionSeeder::class);
    }
}
