<?php
/**
 * Created by PhpStorm.
 * User: Arvince Neil A. Alcaide
 * Date: 22/02/2018
 * Time: 10:42 PM
 */

use Illuminate\Database\Seeder;

class LeaveLedger extends Seeder
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
            DB::table('leave_ledger')->insert([ //,
                'ledger_id'  =>  $faker->randomNumber(6,true),
                'emp_id'  =>  $faker->randomNumber(6,true),
                'app_id'  =>  $faker->randomNumber(6,true),
                'vacationAvailedLeaves'  => $faker ->  text(30),
                'tardiness'       => $faker -> randomNumber(2,true),
                'vacationEarned'  =>  $faker-> randomFloat(2),
                'vacationBalance'  =>  $faker-> randomFloat(2),
                'vacationAbsenceWithPay'  =>  $faker-> randomNumber(2,true),
                'vacationAbscencesWithoutPay'  =>  $faker-> randomNumber(2,true),
                'sickAvailedLeaves'  => $faker ->  text(30),
                'sickNoOfAbsenceTardiness'  => $faker ->  text(30),
                'sickEarned'  =>  $faker-> randomFloat(2),
                'sickBalance'  =>  $faker-> randomFloat(2),
                'sickAbsenceWithPay'  =>  $faker-> randomNumber(2,true),
                'sickAbsencesWithoutPay'  =>  $faker-> randomNumber(2,true),
                'year'  =>  $faker->year()
            ]);
        }
    }
}