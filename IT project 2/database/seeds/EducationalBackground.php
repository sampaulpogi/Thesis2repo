<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 23/02/2018
 * Time: 2:45 PM
 */

use Illuminate\Database\Seeder;

class EducationalBackground extends Seeder
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
            DB::table('educationalbackground')->insert([ //,
                'educ_id'  =>  $faker->randomNumber(6,true),
                'emp_id'  =>  $faker->randomNumber(6,true),
                'level'       => $faker -> randomElement(['Elementary', 'Secondary','Vocational/Trade Course','College','Graduate Studies']),
                'nameOfSchool'  =>  $faker-> text(50),
                'basicEducationDegreeCourse'  =>  $faker-> text(50),
                'periodOfAttendanceFrom'  =>  $faker-> year(),
                'periodOfAttendanceTo'  =>  $faker-> year(),
                'highestLevelEarnedUnits'  =>  $faker->randomNumber(2,true),
                'yearGraduated'  =>  $faker-> year(),
                'scholarshipsAcademicHonorsReceived'  =>  $faker-> text(50),
                'educationalbackgroundcol'  =>  $faker-> text(45),

            ]);
        }
    }
}