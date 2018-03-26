<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 24/02/2018
 * Time: 11:57 PM
 */

use Illuminate\Database\Seeder;

class VoluntaryWorks extends Seeder
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
            DB::table('voluntary_works')->insert([ //,
                'voluntaryWork_id'  =>  $faker->randomNumber(6,true),
                'emp_id'  =>  $faker->randomNumber(6,true),
                'nameAddressOfOrganization'       => $faker -> text(30),
                'from'       => $faker -> date('Y-m-d'),
                'to'  =>  $faker-> date('Y-m-d'),
                'numberOfHours'  =>  $faker-> randomNumber(3),
                'position'  =>  $faker-> text(30)
            ]);
        }
    }
}