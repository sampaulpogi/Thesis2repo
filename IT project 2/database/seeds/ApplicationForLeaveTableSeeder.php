<?php

use Illuminate\Database\Seeder;

class ApplicationForLeaveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 100;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('applicationforleave')->insert([ //,
                'app_id'  =>  $faker->randomNumber(5,true),
                'emp_id'  =>  $faker->randomNumber(6,true),
                'typeOfLeave'    => $faker -> randomElement(['sick', 'vacation']),
                'location'       => $faker -> address,
                'sickInfo'       => $faker -> text,
                'noOfWorkingDays'  =>  $faker-> numberBetween(1, 31),
                'inclusiveDates'  =>  $faker-> date($format = 'Y-m-d'),
                'status'    => $faker-> randomElement(['Accepted', 'Declined'])
            ]);
        }
    }
}
