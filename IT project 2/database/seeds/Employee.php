<?php
/**
 * Created by PhpStorm.
 * User: Arvince Neil A. Alcaide
 * Date: 22/02/2018
 * Time: 10:42 PM
 */

use Illuminate\Database\Seeder;

class Employee extends Seeder
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
            DB::table('employee')->insert([ //,
                'emp_id'  =>  $faker->randomNumber(6,true),
                'name'    => $faker -> name(),
                'dateOfBirth'       => $faker ->  date('Y-m-d','1990-12-31'),
                'sex'       => $faker -> randomElement(['M', 'F']),
                'civilStatus'  =>  $faker-> randomElement(['Single', 'Married', 'Widowed']),
                'height'  =>  $faker-> randomFloat(2,40,70),
                'weight'  =>  $faker-> randomFloat(2,30,120),
                'bloodtype'  =>  $faker-> randomElement(['A', 'B', 'AB','O']),
                'gsis'  =>  $faker->randomLetter.$faker->randomLetter.'-'.$faker->randomNumber(7,false),
                'pagibig'  =>  $faker->randomNumber(4,false).'-'.$faker->randomNumber(4,false).'-'.$faker->randomNumber(4,false),
                'sss'  =>  $faker->randomNumber(2,false).'-'.$faker->randomNumber(6,false).'-'.$faker->randomNumber(1,false),
                'tin'  =>  $faker->randomNumber(3,false).'-'.$faker->randomNumber(3,false).'-'.$faker->randomNumber(3,false),
                'citizenship'  =>  $faker->text(10),
                'residentialAddressHouseBlockLotNo'  =>  $faker->randomNumber(2,false),
                'residentialAddressStreet'  =>  $faker->streetAddress,
                'residentialAddressSubdivisionVillage'  =>  $faker->streetAddress,
                'residentialAddressBarangay'  =>  $faker->streetAddress,
                'residentialAddressCityMunicipality'  =>  $faker->city,
                'residentialAddressProvince'  =>  $faker->city,
                'residentialAddressZipcode'  =>  $faker->randomNumber(4,false),
                'permanentAddressHouseBlockLotNo'  =>  $faker->randomNumber(2,false),
                'permanentAddressStreet'  =>  $faker->streetAddress,
                'permanentAddressSubdivisionVillage'  =>  $faker->streetAddress,
                'permanentAddressBarangay'  =>  $faker->streetAddress,
                'permanentAddressCityMunicipality'  =>  $faker->city,
                'permanentAddressProvince'  =>  $faker->city,
                'permanentAddressZipcode'  =>  $faker->randomNumber(4,false),
                'telephoneNo'  =>  '09'.$faker->randomNumber(9),
                'mobileNo'  =>  '09'.$faker->randomNumber(9),
                'emailaddress'  =>  $faker->text(10).'@gmail.com',
                'citezenship_country'  =>  $faker->country,
                'citizenship_info'  =>  $faker->text(10),
                'password'  =>  $faker->text(5)
            ]);
        }
    }
}