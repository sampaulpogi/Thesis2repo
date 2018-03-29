<?php
/**
 * Created by PhpStorm.
 * User: Arvince Neil A. Alcaide
 * Date: 22/02/2018
 * Time: 10:42 PM
 */

use Illuminate\Database\Seeder;

class Plantilla extends Seeder
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
            DB::table('plantilla')->insert([ //,
                'plantilla_id'  =>  $faker->randomNumber(6,true),
                'emp_id'  =>  $faker->randomNumber(6,true),
                'position_id'  =>  $faker->randomNumber(6,true),
                'division_id'  =>  $faker->randomNumber(6,true),
                'itemNumber'  =>  $faker->text(30),
                'positionTitle'  =>  $faker-> text(30),
                'salaryGrade'  =>  $faker-> randomNumber(2),
                'authorized_sal'  =>  $faker-> randomNumber(7),
                'actual_sal'  =>  $faker-> randomNumber(7),
                'step_increment'  =>  $faker-> randomNumber(3),
                'area_code'  =>  $faker->text(30),
                'plantillacol'  =>  $faker->text(30),
                'area_type'  =>  $faker->randomElement(['R','R']),
                'level'  =>  $faker->randomElement(['K','S','A']),
                'ppaAttribution'  =>  $faker->text(15),
                'civil'  =>  $faker->text(6)
            ]);
        }
    }
}