<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\DB;
use App\Users;
use App\applicationforleave;
use App\children;
use App\civilserviceeligibility;
use App\employee;
use App\empvolu;
use App\empwork;
use App\familybackground;
use DB;
use App\Quotation;
use Illuminate\Support\Facades\Input;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $user = Auth::user()->name;
        $username = Auth::user()->username;
        //$username = user()->username;
//        echo $user;
//        $value = $request->session()->all();
        if ($user == 'admin1'||$user == 'admin2'||$user == 'admin3'){
            return view('/indexHR');
        }else if ($user == 'director'){
            return view('home');
        }else{
            return view('/indexEmp');
        }

    }

    public function getEmployees(){
        $employees = DB::table('employee As a')
        ->join('position As b', 'a.position_id', '=', 'b.position_id')
        ->select('a.emp_id','a.givenname', 'a.middlename', 'a.lastname', 'a.status', 'a.sex', 'b.position')
        ->get();
        return view ('HR.Employees')->with("employees", $employees);
    }

    public function getEmployeeProfile($emp_id){
        $employeedataf = DB::table('employee')
        ->join('familybackground','employee.emp_id', '=', 'familybackground.emp_id')
        ->where('familybackground.emp_id', $emp_id)
        ->first();

        $employeedatachild = DB::table('employee')
        ->join('children', 'employee.emp_id', '=', 'children.emp_id')
        ->where('children.emp_id', $emp_id)
        ->get();

        $employeedatawork = DB::table('employee')
        ->join('workexperience', 'employee.emp_id', '=', 'workexperience.emp_id')
        ->where('workexperience.emp_id', $emp_id)
        ->get();

        $employeedataeduc = DB::table('employee')
        ->join('educationalbackground', 'employee.emp_id', '=', 'educationalbackground.emp_id')
        ->where('educationalbackground.emp_id', $emp_id)
        ->get();

        $employeedatacivil = DB::table('employee')
        ->join('civilserviceeligibility', 'employee.emp_id', '=', 'civilserviceeligibility.emp_id')
        ->where('civilserviceeligibility.emp_id', $emp_id)
        ->get();

        $employeedatavol = DB::table('employee')
        ->join('voluntary_works', 'employee.emp_id', '=', 'voluntary_works.emp_id')
        ->where('voluntary_works.emp_id', $emp_id)
        ->get();

        $employeedatatrain = DB::table('employee')
        ->join('trainings', 'employee.emp_id', '=', 'trainings.emp_id')
        ->where('trainings.emp_id', $emp_id)
        ->get();

        $employeedataotherinfo = DB::table('employee')
        ->join('other_info', 'employee.emp_id', '=', 'other_info.emp_id')
        ->where('other_info.emp_id', $emp_id)
        ->get();

        $employeedatareferences = DB::table('employee')
            ->join('references', 'employee.emp_id', '=', 'references.emp_id')
            ->where('references.emp_id', $emp_id)
            ->get();

        $employeeservrec = DB::table('employee')
            ->join('service_record','employee.emp_id', '=', 'service_record.emp_id')
            ->where('service_record.emp_id', $emp_id)
            ->get();

        $_SESSION['employeeID'] = $emp_id;


        return view ('HR.EmpProf') ->with ("employeedatachild", $employeedatachild)->with ("employeedataf", $employeedataf)->with("employeedatawork", $employeedatawork)->with("employeedataeduc", $employeedataeduc)->with("employeedatacivil", $employeedatacivil)->with('employeedatavol', $employeedatavol)->with('employeedatatrain', $employeedatatrain)->with('employeedataotherinfo', $employeedataotherinfo)->with('employeedatareferences', $employeedatareferences) ->with('employeeservrec', $employeeservrec) ;

    }

    public function getEmployeesLeaveLedger(){
        $employees = DB::table('employee As a')
            ->join('applicationforleave As b', 'a.emp_id', '=', 'b.emp_id')
            ->select('a.emp_id','a.givenname', 'a.middlename', 'a.lastname', 'b.inclusiveDates', 'b.dateOfApplication', 'b.typeOfLeave', 'b.app_id')
            ->get();
        return view ('HR.PendingLeaves')->with("employees", $employees);
    }

    public function getDetermineLeave($emp_id,$app_id){
        $employeedataf = DB::table('employee')
            ->join('familybackground','employee.emp_id', '=', 'familybackground.emp_id')
            ->where('familybackground.emp_id', $emp_id)
            ->first();

        $employeependingleave = DB::table('employee')
            ->join('applicationforleave','employee.emp_id', '=', 'applicationforleave.emp_id')
            ->where('applicationforleave.emp_id', $emp_id)
            ->where ('applicationforleave.app_id', $app_id)
            ->first();

//        $_SESSION['appleaveID'] = $app_id;

        $_SESSION['employeeID'] = $emp_id;

        return view ('HR.DetermineLeaves') ->with ("employeedataf", $employeedataf) ->with ("employeependingleave", $employeependingleave);

    }

    public function rejectLeave(){

        $employees = DB::table('employee As a')
            ->join('applicationforleave As b', 'a.emp_id', '=', 'b.emp_id')
            ->select('a.emp_id','a.givenname', 'a.middlename', 'a.lastname', 'b.inclusiveDates', 'b.dateOfApplication', 'b.typeOfLeave', 'b.app_id')
            ->get();

        $app_id = $_SESSION['appleaveID'];

        DB::table('applicationforleave')->where('applicationforleave.app_id', $app_id)->delete();

        return view ('HR.PendingLeaves')->with("employees", $employees);

    }

    public function acceptLeave(Request $req){

        $employees = DB::table('employee As a')
            ->join('applicationforleave As b', 'a.emp_id', '=', 'b.emp_id')
            ->select('a.emp_id','a.givenname', 'a.middlename', 'a.lastname', 'b.inclusiveDates', 'b.dateOfApplication', 'b.typeOfLeave', 'b.app_id')
            ->get();

//        return view ('HR.PendingLeaves')->with("employees", $employees);
//        if ($employees->typeOfLeave == 'Vacation') {
            $emp_id = $_SESSION['employeeID'];
            $vacationNoOfAbsence = $req->input('vacationNoOfAbsence');
            $tardiness = $req->input('tardiness');
            $vacationEarned = '1.25';
            $vacationBalance = $req->input('vacationBalance');
            $vacationAbsencesWithPay = $req->input('vacationAbsencesWithPay');
            $vacationAbsencesWithoutPay = $req->input('vacationAbsencesWithoutPay');
//            $sickNoOfAbsenceTardiness = null;
//            $sickEarned = null;
//            $sickBalance = null;
//            $sickAbsencesWithPay = null;
//            $sickAbsencesWithoutPay = null;
//        }elseif(($employees->typeOfLeave == 'Sick')){
//            $vacationNoOfAbsence = null;
//            $tardiness = null;
//            $vacationEarned = null;
//            $vacationBalance = null;
//            $vacationAbsencesWithPay = null;
//            $vacationAbsencesWithoutPay = null;
            $sickNoOfAbsenceTardiness = $req->input('sickNoOfAbsenceTardiness');
            $sickEarned = '1.25';
            $sickBalance = $req->input('sickBalance');
            $sickAbsenceWithPay = $req->input('sickAbsencesWithPay');
            $sickAbsenceWithoutPay = $req->input('sickAbsencesWithoutPay');

//            }

        $data = array( "emp_id"=>$emp_id, "vacationNoOfAbsence"=>$vacationNoOfAbsence, "tardiness"=>$tardiness, "vacationEarned"=>$vacationEarned, "vacationBalance"=>$vacationBalance,"vacationAbsencesWithPay"=>$vacationAbsencesWithPay,"vacationAbsencesWithoutPay"=>$vacationAbsencesWithoutPay, "sickNoOfAbsenceTardiness"=>$sickNoOfAbsenceTardiness,"sickEarned"=>$sickEarned,"sickBalance"=>$sickBalance,"sickAbsenceWithPay"=>$sickAbsenceWithPay,"sickAbsenceWithoutPay"=>$sickAbsenceWithoutPay);

        DB::table('leave_ledger')->insert($data);

        return view ('HR.PendingLeaves')->with("employees", $employees);

    }

//$_POST['typeOfLeave']
    /*------Employee Controller------*/
    public function getPendingLeaves(Request $req){
        $app_id = "28051";
        $ledger_id = "28051";
        $emp_id = Auth::user()->username;
        $typeOfLeave = Input::get('typeOfLeave');
        if ($typeOfLeave == 'Sick') {
            $numberOfWorkingDays = "6";
            $reasons = $req->input('sickinfo');

            $fromsick = $req->input('fromsick');
            $tosick = $req->input('tosick');
            if ($tosick == '' || $tosick == null) {
                $inclusiveDates = $req->input('fromsick');
            }else {
                $inclusiveDates = $req->input('fromsick') . '-' . $req->input('tosick');
            }
            $inhospital = $req->input('inhospital');
            $outPatient = $req->input('outPatient');
            if ($outPatient == '' || $outPatient == null) {
                $location = $req->input('inhospital');
            }
            if ($inhospital == '' || $inhospital == null) {
                $location = $req->input('outPatient');
            }
        }else{
            $numberOfWorkingDays = "6";
            $reasons = 'N/A';

            $fromvacation = $req->input('fromvacation');
            $tovacation = $req->input('tovacation');
            if ($tovacation == '' || $tovacation == null) {
                $inclusiveDates = $req->input('$fromvacation');
            }else {
                $inclusiveDates = $req->input('fromvacation') . '-' . $req->input('tovacation');
            }
            $province = $req->input('province');
            $abroad = $req->input('abroad');
            if ($abroad == '' || $abroad == null) {
                $location = $req->input('province');
            }
            if ($province == '' || $province == null) {
                $location = $req->input('abroad');
            }
        }

        $dateOfApplication = date("Y/M/d");
        $status = "Pending";

        $data = array( "emp_id"=>$emp_id, "typeOfLeave"=>$typeOfLeave, "location"=>$location,"sickInfo"=>$reasons,"noOfWorkingDays"=>$numberOfWorkingDays, "inclusiveDates"=>$inclusiveDates,"dateOfApplication"=>$dateOfApplication,"status"=>$status);

//        return $data;

//        echo "Hello World", $emp_id, $typeOfLeave, $inHospital,$reasons,$numberOfWorkingDays, $inclusiveDates,$dateOfApplication,$status ;

//        DB::table('applicationforleave')->insert ([["app_id"=>$app_id, "emp_id"=>$emp_id, "typeOfLeave"=>$typeOfLeave, "location"=>$inHospital,"sickInfo"=>$reasons,"numberOfWorkingDays"=>$numberOfWorkingDays, "inclusiveDates"=>$inclusiveDates,"dateOfApplication"=>$dateOfApplication,"status"=>$status]]);

//        DB::table('applicationforleave')->insert($data);

//        return view ('Employee.empleaveform');

//        $pdf = PDF::loadView('../Generate/leaveApplication')->setPaper('legal', 'portrait');

        DB::table('applicationforleave')->insert($data);

        return PDF::loadView('../Generate/leaveApplication')->setPaper('legal', 'portrait')->download('leaveApplication.pdf');

        /*$leaves = DB::table('employee')
        ->join('applicationforleave', 'employee.emp_id', '=', 'applicationforleave.emp_id')
        ->where('employee.emp_id', $emp_id)->get();
        return view ('HR.PendingLeaves')->with("leaves", $leaves);*/
    }

    public function getPDS(){
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

    public function getServiceRecord(){
        $employeedataf = DB::table('employee')
            ->join('familybackground','employee.emp_id', '=', 'familybackground.emp_id')
            ->where('familybackground.emp_id', Auth::user()->username)
            ->first();

        $employeeservrec = DB::table('employee')
            ->join('service_record','employee.emp_id', '=', 'service_record.emp_id')
            ->where('service_record.emp_id', Auth::user()->username)
            ->get();

        return view ('Employee.empservrec') ->with ("employeedataf", $employeedataf) ->with ("employeeservrec", $employeeservrec);
    }

    public function getLeaveLedger(){
        $employeedataf = DB::table('employee')
            ->join('familybackground','employee.emp_id', '=', 'familybackground.emp_id')
            ->where('familybackground.emp_id', Auth::user()->username)
            ->first();

        $employeeleaveledger = DB::table('employee')
            ->join('leave_ledger','employee.emp_id', '=', 'leave_ledger.emp_id')
            ->where('leave_ledger.emp_id', Auth::user()->username)
            ->get();

        return view ('Employee.empleavesum') ->with ("employeedataf", $employeedataf) ->with ("employeeleaveledger", $employeeleaveledger);
    }

//    public function getGeneratePDS($emp_id){
//        $employeedataf = DB::table('employee')
//            ->join('familybackground','employee.emp_id', '=', 'familybackground.emp_id')
//            ->where('familybackground.emp_id', $emp_id)
//            ->first();
//
//        $employeedatachild = DB::table('employee')
//            ->join('children', 'employee.emp_id', '=', 'children.emp_id')
//            ->where('children.emp_id', $emp_id)
//            ->get();
//
//        $employeedatawork = DB::table('employee')
//            ->join('workexperience', 'employee.emp_id', '=', 'workexperience.emp_id')
//            ->where('workexperience.emp_id', $emp_id)
//            ->get();
//
//        $employeedataeduc = DB::table('employee')
//            ->join('educationalbackground', 'employee.emp_id', '=', 'educationalbackground.emp_id')
//            ->where('educationalbackground.emp_id', $emp_id)
//            ->get();
//
//        $employeedatacivil = DB::table('employee')
//            ->join('civilserviceeligibility', 'employee.emp_id', '=', 'civilserviceeligibility.emp_id')
//            ->where('civilserviceeligibility.emp_id', $emp_id)
//            ->get();
//
//        $employeedatavol = DB::table('employee')
//            ->join('voluntary_works', 'employee.emp_id', '=', 'voluntary_works.emp_id')
//            ->where('voluntary_works.emp_id', $emp_id)
//            ->get();
//
//        $employeedatatrain = DB::table('employee')
//            ->join('trainings', 'employee.emp_id', '=', 'trainings.emp_id')
//            ->where('trainings.emp_id', $emp_id)
//            ->get();
//
//        $employeedataotherinfo = DB::table('employee')
//            ->join('other_info', 'employee.emp_id', '=', 'other_info.emp_id')
//            ->where('other_info.emp_id', $emp_id)
//            ->get();
//
//        $employeedatareferences = DB::table('employee')
//            ->join('references', 'employee.emp_id', '=', 'references.emp_id')
//            ->where('references.emp_id', $emp_id)
//            ->get();
//
//
//        view ('pdfView1') ->with ("employeedatachild", $employeedatachild)->with ("employeedataf", $employeedataf)->with("employeedatawork", $employeedatawork)->with("employeedataeduc", $employeedataeduc)->with("employeedatacivil", $employeedatacivil)->with('employeedatavol', $employeedatavol)->with('employeedatatrain', $employeedatatrain)->with('employeedataotherinfo', $employeedataotherinfo)->with('employeedatareferences', $employeedatareferences);
//
////        return redirect ("/download-pdf1","Controller@downloadPDF1");
//
//        $pdf = PDF::loadView('pdfView1')->setPaper('legal', 'portrait');
//
//        return $pdf->download('pds1.pdf');
//
//
//
//    }


}
