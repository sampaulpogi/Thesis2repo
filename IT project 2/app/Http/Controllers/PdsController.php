<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Users;
use App\applicationforleave;
use App\children;
use App\civilserviceeligibility;
use App\Employee;
use App\empvolu;
use App\empwork;
use App\familybackground;
use App\educationalbackground;
use DB;
use App\Quotation;
use PDF;

class PdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeedataf = DB::table('employee')
            ->join('familybackground','employee.emp_id', '=', 'familybackground.emp_id')
            ->where('familybackground.emp_id', Auth::user()->username)
            ->first();

        $employeedatachild = DB::table('employee')
            ->join('children', 'employee.emp_id', '=', 'children.emp_id')
            ->where('children.emp_id', Auth::user()->username)
            ->get();

        $employeedatawork = DB::table('employee')
            ->join('workexperience', 'employee.emp_id', '=', 'workexperience.emp_id')
            ->where('workexperience.emp_id', Auth::user()->username)
            ->get();

        $employeedataeduc = DB::table('employee')
            ->join('educationalbackground', 'employee.emp_id', '=', 'educationalbackground.emp_id')
            ->where('educationalbackground.emp_id', Auth::user()->username)
            ->get();

        $employeedatacivil = DB::table('employee')
            ->join('civilserviceeligibility', 'employee.emp_id', '=', 'civilserviceeligibility.emp_id')
            ->where('civilserviceeligibility.emp_id', Auth::user()->username)
            ->get();
        $employeedatavol = DB::table('employee')
            ->join('voluntary_works', 'employee.emp_id', '=', 'voluntary_works.emp_id')
            ->where('voluntary_works.emp_id', Auth::user()->username)
            ->get();

        $employeedatatrain = DB::table('employee')
            ->join('trainings', 'employee.emp_id', '=', 'trainings.emp_id')
            ->where('trainings.emp_id', Auth::user()->username)
            ->get();

        $employeedataotherinfo = DB::table('employee')
            ->join('other_info', 'employee.emp_id', '=', 'other_info.emp_id')
            ->where('other_info.emp_id', Auth::user()->username)
            ->get();

        $employeedataposition = DB::table ('employee')
            ->join('position', 'employee.position_id', '=', 'position.position_id')
            ->where('employee.emp_id', Auth::user()->username)
            ->first();

        $employeedatareferences = DB::table('employee')
            ->join('references', 'employee.emp_id', '=', 'references.emp_id')
            ->where('references.emp_id', Auth::user()->username)
            ->get();


        return view ('Employee.PdsOfEmp') ->with ("employeedatachild", $employeedatachild)->with ("employeedataf", $employeedataf)->with("employeedatawork", $employeedatawork)->with("employeedataeduc", $employeedataeduc)->with("employeedatacivil", $employeedatacivil)->with('employeedatavol', $employeedatavol)->with('employeedatatrain', $employeedatatrain)->with('employeedataotherinfo', $employeedataotherinfo)->with('employeedatareferences', $employeedatareferences);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $employeedataf = DB::table('employee')
            ->join('familybackground','employee.emp_id', '=', 'familybackground.emp_id')
            ->where('familybackground.emp_id', Auth::user()->username)
            ->first();

        $employeedatachild = DB::table('employee')
            ->join('children', 'employee.emp_id', '=', 'children.emp_id')
            ->where('children.emp_id', Auth::user()->username)
            ->get();

        $employeedatawork = DB::table('employee')
            ->join('workexperience', 'employee.emp_id', '=', 'workexperience.emp_id')
            ->where('workexperience.emp_id', Auth::user()->username)
            ->get();

        $employeedataeduc = DB::table('employee')
            ->join('educationalbackground', 'employee.emp_id', '=', 'educationalbackground.emp_id')
            ->where('educationalbackground.emp_id', Auth::user()->username)
            ->get();

        $employeedatacivil = DB::table('employee')
            ->join('civilserviceeligibility', 'employee.emp_id', '=', 'civilserviceeligibility.emp_id')
            ->where('civilserviceeligibility.emp_id', Auth::user()->username)
            ->get();
        $employeedatavol = DB::table('employee')
            ->join('voluntary_works', 'employee.emp_id', '=', 'voluntary_works.emp_id')
            ->where('voluntary_works.emp_id', Auth::user()->username)
            ->get();

        $employeedatatrain = DB::table('employee')
            ->join('trainings', 'employee.emp_id', '=', 'trainings.emp_id')
            ->where('trainings.emp_id', Auth::user()->username)
            ->get();

        $employeedataotherinfo = DB::table('employee')
            ->join('other_info', 'employee.emp_id', '=', 'other_info.emp_id')
            ->where('other_info.emp_id', Auth::user()->username)
            ->get();

        $employeedataposition = DB::table ('employee')
            ->join('position', 'employee.position_id', '=', 'position.position_id')
            ->where('employee.emp_id', Auth::user()->username)
            ->first();

        $employeedatareferences = DB::table('employee')
            ->join('references', 'employee.emp_id', '=', 'references.emp_id')
            ->where('references.emp_id', Auth::user()->username)
            ->get();


        return view ('Employee.editPdsOfEmp') ->with ("employeedatachild", $employeedatachild)->with ("employeedataf", $employeedataf)->with("employeedatawork", $employeedatawork)->with("employeedataeduc", $employeedataeduc)->with("employeedatacivil", $employeedatacivil)->with('employeedatavol', $employeedatavol)->with('employeedatatrain', $employeedatatrain)->with('employeedataotherinfo', $employeedataotherinfo)->with('employeedatareferences', $employeedatareferences);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $employeedata = Employee::where('emp_id', Auth::user()->username)->first();

        $employeedata->givenname = trim($request-> input('givenname'));
        $employeedata->middlename = trim($request-> input('middlename'));
        $employeedata->lastname = trim($request-> input('lastname'));
        $employeedata->sex = trim($request-> input('sex'));
        $employeedata->mobileNo = $request-> input('mobileNo');
        $employeedata->dateOfBirth = trim($request-> input('dateofbirth'));
        $employeedata->placeOfBirth =  trim($request-> input('placeofbirth'));
        $employeedata->civilStatus = trim($request-> input('civilstatus'));
        $employeedata->citizenship = trim($request-> input('citizenship'));
        $employeedata->height = trim($request-> input('height'));
        $employeedata->weight = trim($request-> input('weight'));
        $employeedata->emailaddress = $request-> input('emailaddress');
        $employeedata->save();

        $employeedataf = familybackground::where('emp_id', Auth::user()->username)->first();
        $employeedataf->spouseName = trim($request-> input('spousename'));
        $employeedataf->spouseDateOfBirth = trim($request-> input('spousedateofbirth'));
        $employeedataf->spouseOccupation = trim($request-> input('spouseoccupation'));
        $employeedataf->spouseEmployerBusiness = trim($request-> input('spouseemployerbusiness'));
        $employeedataf->spouseBusinessAddress = trim($request-> input('spousebusnessaddress'));
        $employeedataf->spouseTelephoneNo = trim($request-> input('spousetelephoneno'));
        $employeedataf->fatherName = trim($request-> input('fathername'));
        $employeedataf->motherName = trim($request-> input('mothername'));
        $employeedataf->save();
        
        $employeedataeduc = educationalbackground::where('emp_id', Auth::user()->username)->first();
        $employeedataeduc->level=trim($request-> input('lEvel'));
        $employeedataeduc->nameOfSchool=trim($request-> input('nameofschool'));
        $employeedataeduc->basicEducationDegreeCourse=trim($request-> input('basicdegree'));
        $employeedataeduc->periodOfAttendanceFrom=trim($request-> input('periodofattendancefrom'));
        $employeedataeduc->periodOfAttendanceTo=trim($request-> input('periodofattendanceto'));
        $employeedataeduc->highestLevelEarnedUnits=trim($request-> input('highestlevelearned'));
        $employeedataeduc->yearGraduated=trim($request-> input('yeargraduated'));
        $employeedataeduc->scholarshipsAcademicHonorsReceived=trim($request-> input('honorsReceieved'));
        $employeedataed = [
        $employeedataeduc = $employeedataed ];
        $employeedataed->save();

        $employeedatacivil = civilserviceeligibility:: where('emp_id', Auth::user()->username)->first();
        $employeedatacivil->civilServiceName=trim($request-> input('civilcivil'));
        $employeedatacivil->rating=trim($request-> input('rate'));
        $employeedatacivil->dateOfExamination=trim($request-> input('examdate'));
        $employeedatacivil->placeOfExamination=trim($request-> input('examplace'));
        $employeedatacivil->licenseNumber=trim($request-> input('numb'));
        $employeedatacivil->licenseDateOfValidity=trim($request-> input('license'));
        $employeedatacivil->save();

        $employeedataexperience = workexperience:: where('emp_id', Auth::user()->username)->first();
        $employeedataexperience->startJobDate=trim($request-> input('startdate'));
        $employeedataexperience->endJobDate=trim($request-> input('enddate'));
        $employeedataexperience->positionTitle=trim($request-> input('ptitle'));
        $employeedataexperience->departmentAgencyOfficeCompany=trim($request-> input('depagency'));
        $employeedataexperience->monthlySalary=trim($request-> input('msalary'));
        $employeedataexperience->salaryJobPayGradesStep=trim($request-> input('jobsalary'));
        $employeedataexperience->statusOfAppointment=trim($request-> input('appStatus'));
        $employeedataexperience->GovernmentService=trim($request-> input('gove'));
        $employeedataexperience->save();

        $employeedatavolu = voluntary_works:: where('emp_id', Auth::user()->username)->first();
        $employeedatavolu->nameAddressOfOrganization=trim($request-> input('orgadd'));
        $employeedatavolu->from=trim($request-> input('fromdate'));
        $employeedatavolu->to=trim($request-> input('todate'));
        $employeedatavolu->numberOfHours=trim($request-> input('numbh'));
        $employeedatavolu->position=trim($request-> input('pos'));
        $employeedatavolu->save();

        $employeedatatranings = trainings:: where('emp_id', Auth::user()->username)->first();
        $employeedatatranings->titleofTrainingLearning=trim($request-> input('ttraining'));
        $employeedatatranings->trainingStart=trim($request-> input('tstart'));
        $employeedatatranings->trainingEnd=trim($request-> input('tend'));
        $employeedatatranings->numberOfHours=trim($request-> input('tnumb'));
        $employeedatatranings->typeOfLP=trim($request-> input('ttype'));
        $employeedatatranings->conductedSponsoredBy=trim($request-> input('tsponsor'));
        $employeedatatranings->save();

        $employeedataother = other_info:: where('emp_id', Auth::user()->username)->first();
        $employeedataother->skillAndHobbies=trim($request-> input('hobb'));
        $employeedataother->nonAcademicDistinction=trim($request-> input('distinc'));
        $employeedataother->membership=trim($request-> input('mem'));
        $employeedataother->save();





        // Spouse's name: <br> <input class="col-md-6 col-sm-12" type="text" name="spousename" value="{{$employeedataf->spouseName}}"></input><br><br>
        // Spouse's occupation: <br> <input class="col-md-6 col-sm-12" type="text" name="middlename" value="{{$employeedataf->spouseOccupation}}"></input><br><br>
        // Spouse's date of birth: <br> <input class="col-md-6 col-sm-12" type="text" name="sex" value="{{$employeedataf->spouseDateOfBirth}}"></input><br><br>
        // Spouse's employer/business name: <br> <input class="col-md-6 col-sm-12" type="text" name="mobileNo" value="{{$employeedataf->spouseEmployerBusiness}}"></input><br><br>
        // Business address: <br> <input class="col-md-6 col-sm-12" type="text" name="dateofbirth" value="{{$employeedataf->spouseBusinessAddress}}"></input><br><br>
        // Telephone number: <br> <input class="col-md-6 col-sm-12" type="text" name="placeofbirth" value="{{$employeedataf->spouseTelephoneNo}}"></input><br><br>
        // Father's name: <br> <input class="col-md-6 col-sm-12" type="text" name="civilstatus" value="{{$employeedataf->fatherName}}"></input><br><br>
        // Mother's name: <br> <input class="col-md-6 col-sm-12" type="text" name="citizenship" value="{{$employeedataf->motherName}}"></input><br><br>

         return redirect('/PdsOfEmp');
    }

    public function prepAddChild()
    {

        $employeedataf = DB::table('employee')
            ->join('familybackground','employee.emp_id', '=', 'familybackground.emp_id')
            ->where('familybackground.emp_id', Auth::user()->username)
            ->first();

        $employeedatachild = DB::table('employee')
            ->join('children', 'employee.emp_id', '=', 'children.emp_id')
            ->where('children.emp_id', Auth::user()->username)
            ->get();

        $employeedatawork = DB::table('employee')
            ->join('workexperience', 'employee.emp_id', '=', 'workexperience.emp_id')
            ->where('workexperience.emp_id', Auth::user()->username)
            ->get();

        $employeedataeduc = DB::table('employee')
            ->join('educationalbackground', 'employee.emp_id', '=', 'educationalbackground.emp_id')
            ->where('educationalbackground.emp_id', Auth::user()->username)
            ->get();

        $employeedatacivil = DB::table('employee')
            ->join('civilserviceeligibility', 'employee.emp_id', '=', 'civilserviceeligibility.emp_id')
            ->where('civilserviceeligibility.emp_id', Auth::user()->username)
            ->get();
        $employeedatavol = DB::table('employee')
            ->join('voluntary_works', 'employee.emp_id', '=', 'voluntary_works.emp_id')
            ->where('voluntary_works.emp_id', Auth::user()->username)
            ->get();

        $employeedatatrain = DB::table('employee')
            ->join('trainings', 'employee.emp_id', '=', 'trainings.emp_id')
            ->where('trainings.emp_id', Auth::user()->username)
            ->get();

        $employeedataotherinfo = DB::table('employee')
            ->join('other_info', 'employee.emp_id', '=', 'other_info.emp_id')
            ->where('other_info.emp_id', Auth::user()->username)
            ->get();

        $employeedataposition = DB::table ('employee')
            ->join('position', 'employee.position_id', '=', 'position.position_id')
            ->where('employee.emp_id', Auth::user()->username)
            ->first();

        $employeedatareferences = DB::table('employee')
            ->join('references', 'employee.emp_id', '=', 'references.emp_id')
            ->where('references.emp_id', Auth::user()->username)
            ->get();


        return view ('Employee.addChildPdsOfEmp') ->with ("employeedatachild", $employeedatachild)->with ("employeedataf", $employeedataf)->with("employeedatawork", $employeedatawork)->with("employeedataeduc", $employeedataeduc)->with("employeedatacivil", $employeedatacivil)->with('employeedatavol', $employeedatavol)->with('employeedatatrain', $employeedatatrain)->with('employeedataotherinfo', $employeedataotherinfo)->with('employeedatareferences', $employeedatareferences);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}