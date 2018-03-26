<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 23/02/2018
 * Time: 3:08 PM
 */

use Illuminate\Database\Seeder;

class FamilyBackground extends Seeder
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
            DB::table('familybackground')->insert([ //,
                'family_id'  =>  $faker->randomNumber(6,true),
                'emp_id'  =>  $faker->randomNumber(6,true),
                'spouseName'       => $faker -> name(),
                'spouseOccupation'  =>  $faker-> text(30),
                'spouseEmployerBusiness'  =>  $faker-> text(30),
                'spouseBusinessAddress'  =>  $faker-> text(30),
                'spouseTelephoneNo'  =>  $faker-> randomNumber(6),
                'fatherName'  =>  $faker-> name('male'),
                'motherName'  =>  $faker-> name('female')
            ]);
        }
    }
}