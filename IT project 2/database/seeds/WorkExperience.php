<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 23/02/2018
 * Time: 3:28 PM
 */

use Illuminate\Database\Seeder;

class WorkExperience extends Seeder
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
            DB::table('workexperience')->insert([ //,
                'workExperience_id'  =>  $faker->randomNumber(6,true),
                'emp_id'  =>  $faker->randomNumber(6,true),
                'startJobDate'       => $faker -> date('Y-m-d'),
                'endJobDate'       => $faker -> date('Y-m-d'),
                'positionTitle'  =>  $faker-> randomNumber(2,false),
                'departmentAgencyOfficeCOmpany'  =>  $faker-> text(30),
                'monthlySalary'  =>  $faker-> randomNumber(6),
                'salaryJobPayGradesStep'  =>  $faker-> randomNumber(2),
                'statusOfAppointment'  =>  $faker->  text(30),
                'GovernmentService'  =>  $faker-> randomElement(['Y','N'])

            ]);
        }
    }
}