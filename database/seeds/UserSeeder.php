<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user  = \App\User::create([
            'name'=>'admin',
            'email'=>'admin@gym.com',
            'password'=>\Illuminate\Support\Facades\Hash::make('admin000'),
            'terms'=>true,
            'gender'=>'male' ,
            'is_admin'=>true,
            'target'=>'Гибкость']);
        $personal = \App\Model\Personal::create(['age'=>25,'weight'=>66,'height'=>178,'user_id'=>$user->id]);
    }
}
