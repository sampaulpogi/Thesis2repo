<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 25/02/2018
 * Time: 12:58 AM
 */

use Illuminate\Database\Seeder;

class References extends Seeder
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
            DB::table('references')->insert([ //,
                'reference_id'  =>  $faker->randomNumber(6,true),
                'emp_id'  =>  $faker->randomNumber(6,true),
                'name'       => $faker -> name(),
                'address'       => $faker -> address,
                'telephoneNo'  =>  $faker-> randomNumber(6)
            ]);
        }
    }
}