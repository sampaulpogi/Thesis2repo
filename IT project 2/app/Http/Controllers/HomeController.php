<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Users;
use App\applicationforleave;
use App\children;
use App\civilserviceeligibility;
use App\employee;
use App\empvolu;
use App\empwork;
use App\familybackground;
//use DB;
use App\Quotation;

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
            ->select('b.position', 'a.emp_id','a.givenname', 'a.middlename', 'a.lastname', 'a.status', 'a.sex')
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

        $employeedataposition = DB::table ('employee')
            ->join('position', 'employee.position_id', '=', 'position.position_id')
            ->where('employee.emp_id', $emp_id)
            ->first();


        return view ('HR.EmpProf') ->with ("employeedatachild", $employeedatachild)->with ("employeedataf", $employeedataf)->with("employeedatawork", $employeedatawork)->with("employeedataeduc", $employeedataeduc)->with("employeedatacivil", $employeedatacivil)->with('employeedatavol', $employeedatavol)->with('employeedatatrain', $employeedatatrain)->with('employeedataotherinfo', $employeedataotherinfo);
    }

    public function getPendingLeaves(){
        /*$emp_id="E-1873"*/
        /*$leaves = DB::table('employee')
        ->join('applicationforleave', 'employee.emp_id', '=', 'applicationforleave.emp_id')
        ->where('employee.emp_id', $emp_id)->get();
        return view ('HR.PendingLeaves')->with("leaves", $leaves);*/
        return view ('HR.PendingLeaves');
    }


}
