<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 25/02/2018
 * Time: 11:46 AM
 */

use Illuminate\Database\Seeder;

class Division extends Seeder
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
            DB::table('division')->insert([ //,
                'division_id'  =>  $faker->randomNumber(6,true),
                'division_code'  =>  $faker->randomNumber(6),
                'division'   =>   $faker-> text(30),
                'province'       => $faker -> text(30)

            ]);
        }
    }
}