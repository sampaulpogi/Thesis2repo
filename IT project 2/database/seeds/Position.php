<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 25/02/2018
 * Time: 12:58 AM
 */

use Illuminate\Database\Seeder;

class Position extends Seeder
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
            DB::table('position')->insert([ //,
                'position_id'  =>  $faker->randomNumber(6,true),
                'emp_id'  =>  $faker->randomNumber(6,true),
                'position'       => $faker -> text(30),
                'salary_grade'       => $faker -> randomNumber(2),
                'salary'       => $faker -> randomNumber(6)
            ]);
        }
    }
}