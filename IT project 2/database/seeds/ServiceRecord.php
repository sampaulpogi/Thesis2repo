<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 25/02/2018
 * Time: 11:46 AM
 */

use Illuminate\Database\Seeder;

class ServiceRecord extends Seeder
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
            DB::table('service_record')->insert([ //,
                'service_id'  =>  $faker->randomNumber(6,true),
                'emp_id'  =>  $faker->randomNumber(6,true),
                'startJobDate'   =>   $faker-> date('Y-m-d'),
                'endJobDate'       => $faker -> date('Y-m-d'),
                'designation'  =>  $faker-> text(30),
                'status'  =>  $faker-> text(30),
                'annualSalary'  =>  $faker-> randomNumber(7),
                'division'  =>  $faker-> text(30),
                'branch'  =>  $faker-> text(30),
                'remarks'  =>  $faker-> text(30)
            ]);
        }
    }
}