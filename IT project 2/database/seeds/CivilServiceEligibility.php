<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 23/02/2018
 * Time: 3:17 PM
 */

use Illuminate\Database\Seeder;

class CivilServiceEligibility extends Seeder
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
            DB::table('civilserviceeligibility')->insert([ //,
                'civilService_id'  =>  $faker->randomNumber(6,true),
                'emp_id'  =>  $faker->randomNumber(6,true),
                'civilServiceName'       => $faker -> text(50),
                'rating'  =>  $faker-> randomNumber(2,true),
                'dateOfExamination'  =>  $faker-> date('Y-m-d'),
                'placeOfExamination'  =>  $faker-> text(30),
                'licenseNumber'  =>  $faker-> randomNumber(6),
                'licenseDateOfValidity'  =>  $faker-> date('Y-m-d')

            ]);
        }
    }
}