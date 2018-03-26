<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 25/02/2018
 * Time: 11:46 AM
 */

use Illuminate\Database\Seeder;

class Trainings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 50;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('trainings')->insert([ //,
                'training_id'  =>  $faker->randomNumber(6,true),
                'emp_id'  =>  $faker->randomNumber(6),
                'titleofTrainingLearning'   =>   $faker-> text(30),
                'trainingStart'       => $faker -> date('Y-m-d'),
                'trainingEnd'  =>  $faker-> date('Y-m-d'),
                'numberOfHours'  =>  $faker-> randomNumber(3),
                'typeOfLP'  =>  $faker-> randomElement(['Managerial','Supervisory','Technical']),
                'conductedSponsoredBy'  =>  $faker-> text(30)
            ]);
        }
    }
}