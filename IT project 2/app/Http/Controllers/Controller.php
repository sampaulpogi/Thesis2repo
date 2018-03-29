<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use App\Users;
use DB;
use PDF;
session_start();

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getEmployeeID(){
        $employeesID = DB::table('employee')
            ->select('emp_id')
            ->get();
//        return $employeesID;

        return redirect ('/download-pdf2')->with("employeesID", $employeesID);
    }

    public function downloadPDF1()

    {

//        $user = $_SESSION['employeeID'];
//
//        $employeedataf = DB::table('employee')
//            ->join('familybackground','employee.emp_id', '=', 'familybackground.emp_id')
//            ->where('familybackground.emp_id', $user)
//            ->first();
//
//        $employeedatachild = DB::table('employee')
//            ->join('children', 'employee.emp_id', '=', 'children.emp_id')
//            ->where('children.emp_id', $user)
//            ->get();
//
//        $employeedatawork = DB::table('employee')
//            ->join('workexperience', 'employee.emp_id', '=', 'workexperience.emp_id')
//            ->where('workexperience.emp_id', $user)
//            ->get();
//
//        $employeedataeduc = DB::table('employee')
//            ->join('educationalbackground', 'employee.emp_id', '=', 'educationalbackground.emp_id')
//            ->where('educationalbackground.emp_id', $user)
//            ->get();
//
//        $employeedatacivil = DB::table('employee')
//            ->join('civilserviceeligibility', 'employee.emp_id', '=', 'civilserviceeligibility.emp_id')
//            ->where('civilserviceeligibility.emp_id', $user)
//            ->get();
//
//        $employeedatavol = DB::table('employee')
//            ->join('voluntary_works', 'employee.emp_id', '=', 'voluntary_works.emp_id')
//            ->where('voluntary_works.emp_id', $user)
//            ->get();
//
//        $employeedatatrain = DB::table('employee')
//            ->join('trainings', 'employee.emp_id', '=', 'trainings.emp_id')
//            ->where('trainings.emp_id', $user)
//            ->get();
//
//        $employeedataotherinfo = DB::table('employee')
//            ->join('other_info', 'employee.emp_id', '=', 'other_info.emp_id')
//            ->where('other_info.emp_id', $user)
//            ->get();
//
//        $employeedatareferences = DB::table('employee')
//            ->join('references', 'employee.emp_id', '=', 'references.emp_id')
//            ->where('references.emp_id', $user)
//            ->get();
//
//
//        view ('pdfView1') ->with ("employeedatachild", $employeedatachild)->with ("employeedataf", $employeedataf)->with("employeedatawork", $employeedatawork)->with("employeedataeduc", $employeedataeduc)->with("employeedatacivil", $employeedatacivil)->with('employeedatavol', $employeedatavol)->with('employeedatatrain', $employeedatatrain)->with('employeedataotherinfo', $employeedataotherinfo)->with('employeedatareferences', $employeedatareferences);
//
////        return redirect ("/download-pdf1","Controller@downloadPDF1");
//
        $pdf = PDF::loadView('pdfView1')->setPaper('legal', 'portrait');

        return $pdf->download('pds1.pdf');

    }

    public function downloadPDF2()

    {

//        $pdf = loadHTML('pdfView2');

        $pdf = PDF::loadView('../Generate/pdfView2')->setPaper('legal', 'portrait');

        return $pdf->download('pds2.pdf');

    }

    public function downloadServiceRecord1()

    {

//        $pdf = loadHTML('pdfView2');

        $pdf = PDF::loadView('../Generate/serviceRecord1')->setPaper('legal', 'portrait');

        return $pdf->download('serviceRecord1.pdf');

    }

    public function downloadServiceRecord2()

    {

//        $pdf = loadHTML('pdfView2');

        $pdf = PDF::loadView('../Generate/serviceRecord2')->setPaper('legal', 'portrait');

        return $pdf->download('serviceRecord2.pdf');

    }

    public function downloadLeaveApplication()

    {

//        $pdf = loadHTML('pdfView2');

        $pdf = PDF::loadView('../Generate/leaveApplication')->setPaper('legal', 'portrait');

        return $pdf->download('leaveApplication.pdf');

    }

}
