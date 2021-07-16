<?php

use Illuminate\Database\Seeder;

class ProjectVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\ProjectVideo::create(['link'=>'https://www.youtube.com/watch?v=_vrBW3wvFUA']);
    }
}
