<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 25/02/2018
 * Time: 1:01 AM
 */

use Illuminate\Database\Seeder;

class EmployeeResponse extends Seeder
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
            DB::table('pds_employee_response')->insert([ //,
                'PdsEmployeeResponse_id'  =>  $faker->randomNumber(6,true),
                'emp_id'  =>  $faker->randomNumber(6,true),
                'no34ResponseA'       => $faker -> randomElement(['Y','N']),
                'no34ResponseB'       => $faker -> randomElement(['Y','N']),
                'no34ResponseDetails'       => $faker -> text(30),
                'no35ResponseA'       => $faker -> randomElement(['Y','N']),
                'no35ResponseB'       => $faker -> randomElement(['Y','N']),
                'no35Details'       => $faker -> text(30),
                'no36Response'       => $faker -> randomElement(['Y','N']),
                'no36ResponseDetails'       => $faker -> text(30),
                'no37Response'       => $faker -> randomElement(['Y','N']),
                'no37Details'       => $faker -> text(30),
                'no38ResponseA'       => $faker -> randomElement(['Y','N']),
                'no38ResponseADetails'       => $faker -> text(30),
                'no38ResponseB'       => $faker -> randomElement(['Y','N']),
                'no38ResponseBDetails'       => $faker -> text(30),
                'no39Response'       => $faker -> randomElement(['Y','N']),
                'no39ResponseDetails'       => $faker -> text(30),
                'no40ResponseA'       => $faker -> randomElement(['Y','N']),
                'no40ResponseADetails'       => $faker -> text(30),
                'no40ResponseB'       => $faker -> randomElement(['Y','N']),
                'no40ResponseBDetails'       => $faker -> text(30),
                'no40ResponseC'       => $faker -> randomElement(['Y','N']),
                'no40ResponseCDetails'       => $faker -> text(30)
            ]);
        }
    }
}