<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 25/02/2018
 * Time: 11:37 AM
 */

use Illuminate\Database\Seeder;

class Children extends Seeder
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
            DB::table('children')->insert([ //,
                'family_id'  =>  $faker->randomNumber(6,true),
                'fullname'  =>  $faker-> name,
                'dateOfBirth'  =>  $faker-> date('Y-m-d')
            ]);
        }
    }
}