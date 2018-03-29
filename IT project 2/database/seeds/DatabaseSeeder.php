<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(Employee::class);
        $this->call(FamilyBackground::class);
        $this->call(Children::class);
        $this->call(EducationalBackground::class);
        $this->call(CivilServiceEligibility::class);
        $this->call(WorkExperience::class);
        $this->call(Trainings::class);
        $this->call(VoluntaryWorks::class);
        $this->call(OtherInfo::class);
        $this->call(EmployeeResponse::class);
        $this->call(Division::class);
        $this->call(ApplicationForLeaveTableSeeder::class);
        $this->call(LeaveLedger::class);
        $this->call(Plantilla::class);
        $this->call(Position::class);
        $this->call(References::class);
        $this->call(ServiceRecord::class);
        $this->call(Template::class);
    }
}
