<?php

use Illuminate\Database\Seeder;
use App\user;
use Faker\Factory as Faker;
class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        $numeracion=0;

        for($i=0;$i<=50;$i++){
        $numeracion=$numeracion+1;
        if($numeracion<=25){$gender='M';}
        else if ($numeracion>25){$gender='F';}
        $user=user::create([
        'names'=>$faker->name,
        'lastnames'=>$faker->lastname,
        'email'=>$faker->email,
        'profile_picture'=>'imagen.png',
        'gender'=>$gender,
        'birth_date'=>$faker->Date
        ]);
        }
    }
}
