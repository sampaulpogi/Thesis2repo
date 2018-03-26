<?php

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
use App\Quotation;

//$lastname = DB::table('employee')->where('emp_id', Auth::user()->username)->value('lastname');
//$givenname = DB::table('employee')->where('emp_id', Auth::user()->username)->value('givenname');
//$middlename = DB::table('employee')->where('emp_id', Auth::user()->username)->value('middlename');


$user = $_SESSION['employeeID'];

$employeedataf = DB::table('employee')
    ->join('familybackground','employee.emp_id', '=', 'familybackground.emp_id')
    ->where('familybackground.emp_id', $user)
    ->first();

$employeedatachild = DB::table('employee')
    ->join('children', 'employee.emp_id', '=', 'children.emp_id')
    ->where('children.emp_id', $user)
    ->get();

$employeedatawork = DB::table('employee')
    ->join('workexperience', 'employee.emp_id', '=', 'workexperience.emp_id')
    ->where('workexperience.emp_id', $user)
    ->get();

$employeedataeduc = DB::table('employee')
    ->join('educationalbackground', 'employee.emp_id', '=', 'educationalbackground.emp_id')
    ->where('educationalbackground.emp_id', $user)
    ->get();

$employeedatacivil = DB::table('employee')
    ->join('civilserviceeligibility', 'employee.emp_id', '=', 'civilserviceeligibility.emp_id')
    ->where('civilserviceeligibility.emp_id', $user)
    ->get();

$employeedatavol = DB::table('employee')
    ->join('voluntary_works', 'employee.emp_id', '=', 'voluntary_works.emp_id')
    ->where('voluntary_works.emp_id', $user)
    ->get();

$employeedatatrain = DB::table('employee')
    ->join('trainings', 'employee.emp_id', '=', 'trainings.emp_id')
    ->where('trainings.emp_id', $user)
    ->get();

$employeedataotherinfo = DB::table('employee')
    ->join('other_info', 'employee.emp_id', '=', 'other_info.emp_id')
    ->where('other_info.emp_id', $user)
    ->get();

$employeedatareferences = DB::table('employee')
    ->join('references', 'employee.emp_id', '=', 'references.emp_id')
    ->where('references.emp_id', $user)
    ->get();




view ('pdfView1') ->with ("employeedatachild", $employeedatachild)->with ("employeedataf", $employeedataf)->with("employeedatawork", $employeedatawork)->with("employeedataeduc", $employeedataeduc)->with("employeedatacivil", $employeedatacivil)->with('employeedatavol', $employeedatavol)->with('employeedatatrain', $employeedatatrain)->with('employeedataotherinfo', $employeedataotherinfo)->with('employeedatareferences', $employeedatareferences);

//        return redirect ("/download-pdf1","Controller@downloadPDF1");


?>
<html xmlns:v="urn:schemas-microsoft-com:vml"
      xmlns:o="urn:schemas-microsoft-com:office:office"
      xmlns:x="urn:schemas-microsoft-com:office:excel"
      xmlns="http://www.w3.org/TR/REC-html40">

<head>
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
    <meta name=ProgId content=Excel.Sheet>
    <meta name=Generator content="Microsoft Excel 15">
    <link rel=File-List href="Template01_files/filelist.xml">
    <!--[if !mso]>
    <style>
        v\:* {behavior:url(#default#VML);}
        o\:* {behavior:url(#default#VML);}
        x\:* {behavior:url(#default#VML);}
        .shape {behavior:url(#default#VML);}
    </style>
    <![endif]-->
    <style id="Template_18037_Styles">
        <!--table
        {mso-displayed-decimal-separator:"\.";
            mso-displayed-thousand-separator:"\,";}
        .font518037
        {color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;}
        .font618037
        {color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;}
        .xl6418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl6518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl6618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl6718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl6818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl6918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl7018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl7118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl7218037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl7318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl7418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl7518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl7618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl7718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl7818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl7918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl8018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl8118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl8218037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:white;
            mso-pattern:black none;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl8318037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:white;
            mso-pattern:black none;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl8418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:middle;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl8518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl8618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl8718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:right;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl8818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Black", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:top;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl8918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Black", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:top;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl9018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl9118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            background:#757171;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl9218037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:#757171;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl9318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl9418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl9518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl9618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl9718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl9818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl9918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"Short Date";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            background:white;
            mso-pattern:black none;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl10018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"Short Date";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:white;
            mso-pattern:black none;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl10118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl10218037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl10318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl10418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:right;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl10518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:right;
            vertical-align:middle;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl10618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl10718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:right;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl10818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:right;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl10918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl11018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl11118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl11218037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl11318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl11418037
        {padding:0px;
            mso-ignore:padding;
            color:white;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl11518037
        {padding:0px;
            mso-ignore:padding;
            color:white;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl11618037
        {padding:0px;
            mso-ignore:padding;
            color:white;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl11718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:right;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl11818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl11918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl12018037
        {padding:0px;
            mso-ignore:padding;
            color:red;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl12118037
        {padding:0px;
            mso-ignore:padding;
            color:red;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl12218037
        {padding:0px;
            mso-ignore:padding;
            color:red;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl12318037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl12418037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl12518037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl12618037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl12718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl12818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl12918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl13018037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl13118037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl13218037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl13318037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl13418037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl13518037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl13618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\[ENG\]\[$-409\]mmmm\\ d\\\,\\ yyyy\;\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl13718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\[ENG\]\[$-409\]mmmm\\ d\\\,\\ yyyy\;\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl13818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\[ENG\]\[$-409\]mmmm\\ d\\\,\\ yyyy\;\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl13918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl14018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl14118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            background:white;
            mso-pattern:black none;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl14218037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl14318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl14418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"Short Date";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl14518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"Short Date";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl14618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl14718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl14818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl14918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            background:white;
            mso-pattern:black none;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl15018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl15118037
        {padding:0px;
            mso-ignore:padding;
            color:red;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl15218037
        {padding:0px;
            mso-ignore:padding;
            color:red;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl15318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl15418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            border:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl15518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl15618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl15718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl15818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl15918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl16018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl16118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl16218037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl16318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl16418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl16518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl16618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl16718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl16818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl16918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl17018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl17118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl17218037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl17318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl17418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl17518037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl17618037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl17718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl17818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl17918037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid #A6A6A6;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl18018037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:.5pt solid #A6A6A6;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl18118037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:.5pt solid #A6A6A6;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl18218037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl18318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl18418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl18518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl18618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl18718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl18818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl18918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl19018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl19118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid #A6A6A6;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl19218037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid #A6A6A6;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl19318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid #A6A6A6;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl19418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl19518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl19618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid #A6A6A6;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl19718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid #A6A6A6;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl19818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid #A6A6A6;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl19918037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl20018037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl20118037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl20218037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid #A6A6A6;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl20318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid #A6A6A6;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl20418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid #A6A6A6;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl20518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl20618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl20718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl20818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl20918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl21018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl21118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl21218037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl21318037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl21418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl21518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl21618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl21718037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl21818037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl21918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl22018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl22118037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl22218037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl22318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl22418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl22518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:white;
            mso-pattern:black none;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl22618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:white;
            mso-pattern:black none;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl22718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl22818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl22918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl23018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl23118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl23218037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl23318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl23418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl23518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl23618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl23718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl23818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl23918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            background:#EAEAEA;
            mso-pattern:black none;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl24018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:#EAEAEA;
            mso-pattern:black none;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl24118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:#EAEAEA;
            mso-pattern:black none;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl24218037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl24318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl24418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"Short Date";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:white;
            mso-pattern:black none;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl24518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"Short Date";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:white;
            mso-pattern:black none;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl24618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl24718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl24818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl24918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl25018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl25118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl25218037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:bottom;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl25318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:bottom;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl25418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:bottom;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl25518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:right;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl25618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:right;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl25718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:right;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl25818037
        {padding:0px;
            mso-ignore:padding;
            color:white;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:#969696;
            mso-pattern:black none;
            white-space:normal;}
        .xl25918037
        {padding:0px;
            mso-ignore:padding;
            color:white;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:normal;}
        .xl26018037
        {padding:0px;
            mso-ignore:padding;
            color:white;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:normal;}
        .xl26118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:20.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Black", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:top;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl26218037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl26318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl26418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl26518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl26618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl26718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl26818037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl26918037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl27018037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl27118037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl27218037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl27318037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl27418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl27518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl27618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl27718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl27818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl27918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl28018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl28118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl28218037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl28318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl28418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl28518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl28618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl28718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl28818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl28918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl29018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl29118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl29218037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl29318037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl29418037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl29518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl29618037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:#EAEAEA;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl29718037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:#EAEAEA;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl29818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl29918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl30018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl30118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl30218037
        {padding:0px;
            mso-ignore:padding;
            color:white;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl30318037
        {padding:0px;
            mso-ignore:padding;
            color:white;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl30418037
        {padding:0px;
            mso-ignore:padding;
            color:white;
            font-size:9.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl30518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl30618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl30718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl30818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl30918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl31018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl31118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl31218037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl31318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl31418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl31518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl31618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl31718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl31818037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl31918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl32018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl32118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl32218037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl32318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl32418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl32518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl32618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl32718037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl32818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl32918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl33018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl33118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl33218037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl33318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl33418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl33518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl33618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl33718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl33818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl33918037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl34018037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl34118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl34218037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl34318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl34418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl34518037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl34618037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl34718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl34818037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl34918037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl35018037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl35118037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl35218037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl35318037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl35418037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl35518037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl35618037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl35718037
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl35818037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl35918037
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        -->
    </style>
</head>

<body>
<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--The following information was generated by Microsoft Excel's Publish as Web
Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="Template_18037" align=center x:publishsource="Excel">

    <table border=0 cellpadding=0 cellspacing=0 width=783 class=xl8418037
           style='border-collapse:collapse;table-layout:fixed;width:589pt'>
        <col class=xl8418037 width=17 style='mso-width-source:userset;mso-width-alt:
 621;width:13pt'>
        <col class=xl8418037 width=76 style='mso-width-source:userset;mso-width-alt:
 2779;width:57pt'>
        <col class=xl8418037 width=78 style='mso-width-source:userset;mso-width-alt:
 2852;width:59pt'>
        <col class=xl8418037 width=62 style='mso-width-source:userset;mso-width-alt:
 2267;width:47pt'>
        <col class=xl8418037 width=35 style='mso-width-source:userset;mso-width-alt:
 1280;width:26pt'>
        <col class=xl8418037 width=37 style='mso-width-source:userset;mso-width-alt:
 1353;width:28pt'>
        <col class=xl8418037 width=51 style='mso-width-source:userset;mso-width-alt:
 1865;width:38pt'>
        <col class=xl8418037 width=58 style='mso-width-source:userset;mso-width-alt:
 2121;width:44pt'>
        <col class=xl8418037 width=22 style='mso-width-source:userset;mso-width-alt:
 804;width:17pt'>
        <col class=xl8418037 width=41 style='mso-width-source:userset;mso-width-alt:
 1499;width:31pt'>
        <col class=xl8418037 width=44 style='mso-width-source:userset;mso-width-alt:
 1609;width:33pt'>
        <col class=xl8418037 width=92 style='mso-width-source:userset;mso-width-alt:
 3364;width:69pt'>
        <col class=xl8418037 width=79 style='mso-width-source:userset;mso-width-alt:
 2889;width:59pt'>
        <col class=xl8418037 width=91 style='mso-width-source:userset;mso-width-alt:
 3328;width:68pt'>
        <tr height=7 style='mso-height-source:userset;height:5.25pt'>
            <td colspan=14 height=7 class=xl24618037 width=783 style='border-right:.5pt solid black;
  height:5.25pt;width:589pt'>&nbsp;</td>
        </tr>
        <tr height=15 style='mso-height-source:userset;height:11.25pt'>
            <td height=15 class=xl8518037 colspan=2 style='height:11.25pt'>CS Form No.
                212</td>
            <td class=xl8618037 style='border-top:none'>&nbsp;</td>
            <td class=xl8618037 style='border-top:none'>&nbsp;</td>
            <td class=xl8618037 style='border-top:none'>&nbsp;</td>
            <td class=xl8618037 style='border-top:none'>&nbsp;</td>
            <td class=xl8618037 style='border-top:none'>&nbsp;</td>
            <td class=xl8618037 style='border-top:none'>&nbsp;</td>
            <td class=xl8618037 style='border-top:none'>&nbsp;</td>
            <td class=xl8618037 style='border-top:none'>&nbsp;</td>
            <td class=xl8618037 style='border-top:none'>&nbsp;</td>
            <td class=xl8618037 style='border-top:none'><span
                        style='mso-spacerun:yes'>        </span></td>
            <td class=xl8618037 style='border-top:none'>&nbsp;</td>
            <td class=xl8718037 style='border-top:none'>&nbsp;</td>
        </tr>
        <tr height=40 style='mso-height-source:userset;height:30.0pt'>
            <td height=40 class=xl6418037 colspan=2 style='height:30.0pt'>Revised 2017</td>
            <td class=xl8818037></td>
            <td colspan=9 class=xl26118037>PERSONAL DATA SHEET</td>
            <td class=xl8818037></td>
            <td class=xl8918037>&nbsp;</td>
        </tr>
        <tr height=29 style='mso-height-source:userset;height:21.75pt'>
            <td colspan=14 height=29 class=xl24918037 width=783 style='border-right:.5pt solid black;
  height:21.75pt;width:589pt'>WARNING: Any misinterpretation made in the
                Personal Data Sheet and the Work Experience Sheet shall cause the filing of
                administrative/criminal case/s against the person concerned.</td>
        </tr>
        <tr height=15 style='mso-height-source:userset;height:11.25pt'>
            <td colspan=14 height=15 class=xl25218037 style='border-right:.5pt solid black;
  height:11.25pt'>READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA
                SHEET (PDS) BEFORE ACCOMPLISHING THE PDS FORM.</td>
        </tr>
        <tr class=xl9018037 height=18 style='height:13.5pt'>
            <td colspan=14 height=18 class=xl26518037 style='border-right:.5pt solid black;
  height:13.5pt'>Print legibly. Tick appropriate boxes (<img src="..\public\logssets\img\box.png" height="8"/>) and use
                separate sheet if necessary. Indicate N/A if not applicable.<span
                        style='mso-spacerun:yes'>  </span><font class="font618037">DO NOT ABBREVIATE.</font></td>
        </tr>
        <tr class=xl9018037 height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl6518037 style='height:12.0pt'>&nbsp;</td>
            <td class=xl6618037>&nbsp;</td>
            <td class=xl6618037>&nbsp;</td>
            <td class=xl6618037>&nbsp;</td>
            <td class=xl6618037>&nbsp;</td>
            <td class=xl6618037>&nbsp;</td>
            <td class=xl6618037>&nbsp;</td>
            <td class=xl6618037>&nbsp;</td>
            <td class=xl6618037>&nbsp;</td>
            <td class=xl9118037>1. CS ID<span style='display:none'> No.</span></td>
            <td class=xl9218037>&nbsp;</td>
            <td colspan=3 class=xl25518037 width=262 style='border-right:.5pt solid black;
  width:196pt'>&nbsp;</td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td colspan=14 height=19 class=xl25818037 width=783 style='border-right:1.0pt solid black;
  height:14.25pt;width:589pt'>I. PERSONAL INFORMATION</td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.0pt'>
            <td colspan=3 height=20 class=xl26218037 width=171 style='border-right:.5pt solid black;
  height:15.0pt;width:129pt'>2. SURNAME</td>
            <td colspan=11 class=xl23618037 style='border-right:1.0pt solid black;
  border-left:none'> {{ $employeedataf->lastname }}</td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.0pt'>
            <td colspan=3 height=20 class=xl27818037 style='border-right:.5pt solid black;
  height:15.0pt'><span style='mso-spacerun:yes'>   </span>FIRST NAME<span
                        style='mso-spacerun:yes'> </span></td>
            <td class=xl9318037 style='border-top:none;border-left:none'> {{ $employeedataf->givenname }}</td>
            <td class=xl9418037 style='border-top:none'>&nbsp;</td>
            <td class=xl9418037 style='border-top:none'>&nbsp;</td>
            <td class=xl9418037 style='border-top:none'>&nbsp;</td>
            <td class=xl9418037 style='border-top:none'>&nbsp;</td>
            <td class=xl9418037 style='border-top:none'>&nbsp;</td>
            <td class=xl9418037 style='border-top:none'>&nbsp;</td>
            <td class=xl9418037 style='border-top:none'>&nbsp;</td>
            <td colspan=3 class=xl23918037 style='border-right:1.0pt solid black'>NAME
                EXTENSION (JR., SR)<span style='mso-spacerun:yes'>             </span><font
                        class="font618037"><span style='mso-spacerun:yes'>    </span></font><font
                        class="font518037"><span style='mso-spacerun:yes'>          </span></font></td>
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.75pt'>
            <td colspan=3 height=21 class=xl28118037 style='border-right:.5pt solid black;
  height:15.75pt'><span style='mso-spacerun:yes'>   </span>MIDDLE NAME<span
                        style='mso-spacerun:yes'> </span></td>
            <td class=xl9518037 style='border-top:none;border-left:none'> {{ $employeedataf->middlename }}</td>
            <td class=xl9618037 style='border-top:none'>&nbsp;</td>
            <td class=xl9618037 style='border-top:none'>&nbsp;</td>
            <td class=xl9618037 style='border-top:none'>&nbsp;</td>
            <td class=xl9618037 style='border-top:none'>&nbsp;</td>
            <td class=xl9618037 style='border-top:none'>&nbsp;</td>
            <td class=xl9618037 style='border-top:none'>&nbsp;</td>
            <td class=xl9618037 style='border-top:none'>&nbsp;</td>
            <td class=xl9718037>&nbsp;</td>
            <td class=xl9718037>&nbsp;</td>
            <td class=xl9818037>&nbsp;</td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.0pt'>
            <td colspan=3 rowspan=2 height=36 class=xl26218037 width=171
                style='border-right:.5pt solid black;border-bottom:.5pt solid black;
  height:27.0pt;width:129pt'>3. DATE OF BIRTH <br>
            </td>
            <td colspan=3 class=xl24418037 width=134 style='border-right:1.0pt solid black;
  border-left:none;width:101pt'> {{ $employeedataf->dateOfBirth }}</td>
            <td colspan=3 rowspan=4 class=xl29518037 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black'>16. CITIZENSHIP</td>
            <td class=xl7318037 colspan=2>&#9744; Filipino</td>
            <td class=xl7418037 colspan=2>&#9744; Dual Citizenship</td>
            <td class=xl7518037 style='border-top:none'>&nbsp;</td>
        </tr>
        <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl9918037 width=62 style='height:12.0pt;border-left:none;
  width:47pt'>&nbsp;</td>
            <td class=xl10018037 width=35 style='width:26pt'>&nbsp;</td>
            <td class=xl10018037 width=37 style='width:28pt'>&nbsp;</td>
            <td class=xl7618037 style='border-left:none'>&nbsp;</td>
            <td class=xl7718037>&nbsp;</td>
            <td class=xl7818037>&#9744; by birth</td>
            <td class=xl7818037 colspan=2 style='border-right:1.0pt solid black'>&#9744;
                by naturalization</td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td colspan=3 height=18 class=xl22718037 style='border-right:.5pt solid black;
  height:13.5pt'>4. PLACE OF BIRTH</td>
            <td colspan=3 class=xl22518037 style='border-left:none'>&nbsp;</td>
            <td class=xl8018037 style='border-left:none'>&nbsp;</td>
            <td class=xl8118037>&nbsp;</td>
            <td class=xl8218037 colspan=2>Pls. indicate country:</td>
            <td class=xl8318037>&nbsp;</td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td colspan=3 height=18 class=xl22718037 style='border-right:.5pt solid black;
  height:13.5pt'>5. SEX</td>
            <td class=xl6718037 style='border-left:none'><?php if( $employeedataf->sex=="M"){echo '<img src="..\public\logssets\img\check.png" height="8"/>';}else{echo '<img src="..\public\logssets\img\box.png" height="8"/>';}?> Male</td>
            <td class=xl6818037 colspan=2 style='border-right:1.0pt solid black'><?php if( $employeedataf->sex=="F"){echo '<img src="..\public\logssets\img\check.png" height="8"/>';}else{echo '<img src="..\public\logssets\img\box.png" height="8"/>';}?> Female</td>
            <td class=xl8418037></td>
            <td class=xl8418037></td>
            <td class=xl8418037></td>
            <td class=xl8418037></td>
            <td class=xl10318037>&nbsp;</td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td colspan=3 rowspan=2 height=36 class=xl22818037 style='border-right:.5pt solid black;
  height:27.0pt'>6. CIVIL STATUS</td>
            <td class=xl7018037><?php if( $employeedataf->civilStatus=="Single"){echo '<img src="..\public\logssets\img\check.png" height="8"/>';}else{echo '<img src="..\public\logssets\img\box.png" height="8"/>';}?> Single</td>
            <td colspan=2 class=xl23318037 style='border-right:1.0pt solid black'><?php if( $employeedataf->civilStatus=="Married"){echo '<img src="..\public\logssets\img\check.png" height="8"/>';}else{echo '<img src="..\public\logssets\img\box.png" height="8"/>';}?>
                Married</td>
            <td colspan=2 rowspan=2 class=xl20718037 width=109 style='border-right:.5pt solid black;
  width:82pt'>17. RESIDENTIAL ADDRESS</td>
            <td colspan=3 class=xl19118037 style='border-left:none'>   {{       $employeedataf->residentialAddressHouseBlockLotNo }}</td>
            <td colspan=3 class=xl19218037 style='border-right:1.0pt solid black'>{{      $employeedataf->residentialAddressStreet }}</td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td height=18 class=xl7018037 style='height:13.5pt'><?php if( $employeedataf->civilStatus=="Windowed"){echo '<img src="..\public\logssets\img\check.png" height="8"/>';}else{echo '<img src="..\public\logssets\img\box.png" height="8"/>';}?> Widowed</td>
            <td colspan=2 class=xl7118037 style='border-right:1.0pt solid black'><?php if( $employeedataf->civilStatus=="Seperated"){echo '<img src="..\public\logssets\img\check.png" height="8"/>';}else{echo '<img src="..\public\logssets\img\box.png" height="8"/>';}?>Seperated</td>
            <td colspan=3 class=xl19918037 style='border-left:none'>House/Block/Lot No.</td>
            <td colspan=3 class=xl20018037 style='border-right:1.0pt solid black'>Street</td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td height=18 class=xl10418037 style='height:13.5pt'>&nbsp;</td>
            <td class=xl10518037>&nbsp;</td>
            <td class=xl10618037>&nbsp;</td>
            <td class=xl7118037>&#9744; Other/s:</td>
            <td class=xl7218037></td>
            <td class=xl7218037></td>
            <td colspan=2 rowspan=3 class=xl12818037 style='border-right:.5pt solid black'>&nbsp;</td>
            <td colspan=3 class=xl21418037 style='border-left:none'>{{ $employeedataf->residentialAddressSubdivisionVillage }}</td>
            <td colspan=3 class=xl21618037 style='border-right:1.0pt solid black'>{{ $employeedataf->residentialAddressBarangay }}</td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td height=18 class=xl10718037 style='height:13.5pt'>&nbsp;</td>
            <td class=xl10818037>&nbsp;</td>
            <td class=xl10918037>&nbsp;</td>
            <td class=xl11018037>&nbsp;</td>
            <td colspan=2 class=xl21918037>&nbsp;</td>
            <td colspan=3 class=xl22018037 style='border-left:none'>Subdivision/Village</td>
            <td colspan=3 class=xl22218037 style='border-right:1.0pt solid black'>Barangay</td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td colspan=3 rowspan=2 height=29 class=xl28418037 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;height:21.75pt'>7. HEIGHT<span
                        style='mso-spacerun:yes'> </span></td>
            <td colspan=3 rowspan=2 class=xl20618037 style='border-bottom:.5pt solid black'> {{ $employeedataf->height }}</td>
            <td colspan=3 class=xl19118037 style='border-left:none'>{{ $employeedataf->residentialAddressCityMunicipality }}</td>
            <td colspan=3 class=xl19218037 style='border-right:1.0pt solid black'>{{ $employeedataf->residentialAddressProvince }}</td>
        </tr>
        <tr height=11 style='mso-height-source:userset;height:8.25pt'>
            <td height=11 class=xl10118037 style='height:8.25pt'>&nbsp;</td>
            <td class=xl10218037>&nbsp;</td>
            <td colspan=3 class=xl21018037>City/Municipality</td>
            <td colspan=3 class=xl21218037 style='border-right:1.0pt solid black'>Province</td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td colspan=3 height=18 class=xl22718037 style='border-right:.5pt solid black;
  height:13.5pt'>8. WEIGHT<span style='mso-spacerun:yes'> </span></td>
            <td colspan=3 class=xl15818037>{{ $employeedataf->weight }}</td>
            <td colspan=2 class=xl17118037 width=109 style='border-right:.5pt solid black;
  width:82pt'>ZIP CODE<span style='mso-spacerun:yes'>    </span></td>
            <td class=xl11118037 width=22 style='border-left:none;width:17pt'>Missing</td>
            <td class=xl11218037 width=41 style='width:31pt'>&nbsp;</td>
            <td class=xl11218037 width=44 style='width:33pt'>&nbsp;</td>
            <td class=xl11218037 width=92 style='width:69pt'>&nbsp;</td>
            <td class=xl11218037 width=79 style='width:59pt'>&nbsp;</td>
            <td class=xl11318037 width=91 style='width:68pt'>&nbsp;</td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td colspan=3 rowspan=2 height=30 class=xl28418037 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;height:22.5pt'>9. BLOOD TYPE</td>
            <td colspan=3 rowspan=2 class=xl16218037 style='border-bottom:.5pt solid black'> {{ $employeedataf->bloodtype }}</td>
            <td colspan=2 rowspan=2 class=xl20718037 width=109 style='border-right:.5pt solid black;
  width:82pt'>18. PERMANENT ADDRESS</td>
            <td colspan=3 class=xl19618037 style='border-left:none'>{{ $employeedataf->permanentAddressHouseBlockLotNo }}</td>
            <td colspan=3 class=xl19718037 style='border-right:1.0pt solid black'>{{ $employeedataf->permanentAddressStreet }}</td>
        </tr>
        <tr height=12 style='mso-height-source:userset;height:9.0pt'>
            <td colspan=3 height=12 class=xl19918037 style='height:9.0pt;border-left:
  none'>House/Block/Lot No.</td>
            <td colspan=3 class=xl20018037 style='border-right:1.0pt solid black'>Street</td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td colspan=3 rowspan=2 height=30 class=xl30718037 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;height:22.5pt'>10. GSIS ID NO.</td>
            <td colspan=3 rowspan=2 class=xl18618037 style='border-right:1.0pt solid black;
  border-bottom:.5pt solid black'>{{ $employeedataf->gsis }}</td>
            <td colspan=2 rowspan=4 class=xl12818037 style='border-right:.5pt solid black'>&nbsp;</td>
            <td colspan=3 class=xl20218037 style='border-left:none'>{{ $employeedataf->permanentAddressSubdivisionVillage }}</td>
            <td colspan=3 class=xl19718037 style='border-right:1.0pt solid black'>{{ $employeedataf->permanentAddressBarangay }}</td>
        </tr>
        <tr height=12 style='mso-height-source:userset;height:9.0pt'>
            <td colspan=3 height=12 class=xl20418037 style='height:9.0pt;border-left:
  none'>Subdivision/Village</td>
            <td colspan=3 class=xl17918037 style='border-right:1.0pt solid black'>Barangay</td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td colspan=3 rowspan=2 height=31 class=xl30718037 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;height:23.25pt'>11. PAG-IBIG ID NO.</td>
            <td colspan=3 rowspan=2 class=xl18618037 style='border-right:1.0pt solid black;
  border-bottom:.5pt solid black'> {{ $employeedataf->pagibig }}</td>
            <td colspan=3 class=xl19118037 style='border-left:none'>{{ $employeedataf->permanentAddressCityMunicipality }}</td>
            <td colspan=3 class=xl19218037 style='border-right:1.0pt solid black'>{{ $employeedataf->permanentAddressProvince }}</td>
        </tr>
        <tr height=13 style='mso-height-source:userset;height:9.75pt'>
            <td colspan=3 height=13 class=xl19418037 style='height:9.75pt'>City/Municipality</td>
            <td colspan=3 class=xl19418037 style='border-right:1.0pt solid black'>Province</td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td colspan=3 height=18 class=xl22718037 style='border-right:.5pt solid black;
  height:13.5pt'>12. PHILHEALTH NO.</td>
            <td colspan=3 class=xl16218037>missing</td>
            <td colspan=2 class=xl17118037 width=109 style='border-right:.5pt solid black;
  width:82pt'>ZIP CODE<span style='mso-spacerun:yes'>    </span></td>
            <td colspan=3 class=xl17318037 style='border-left:none'>&nbsp;</td>
            <td colspan=3 class=xl17518037 style='border-right:1.0pt solid black'>&nbsp;</td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td colspan=3 height=18 class=xl22718037 style='border-right:.5pt solid black;
  height:13.5pt'>13. SSS NO.</td>
            <td colspan=3 class=xl15818037>   {{ $employeedataf->sss }}</td>
            <td colspan=2 class=xl17718037 style='border-right:.5pt solid black'>19. TELEPHONE NO.</td>
            <td colspan=6 class=xl15918037 width=369 style='border-right:1.0pt solid black;
  border-left:none;width:277pt'>{{ $employeedataf->telephoneNo }}</td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td colspan=3 height=18 class=xl15518037 style='height:13.5pt'>14. TIN NO.</td>
            <td colspan=3 class=xl15818037>    {{ $employeedataf->tin }}</td>
            <td colspan=2 class=xl29618037 style='border-right:.5pt solid black'>20. MOBILE NO.</td>
            <td colspan=6 class=xl15918037 width=369 style='border-right:1.0pt solid black;
  border-left:none;width:277pt'>{{ $employeedataf->mobileNo }}</td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td colspan=3 height=19 class=xl28618037 style='border-right:.5pt solid black;
  height:14.25pt'>15. AGENCY EMPLOYEE NO.</td>
            <td colspan=3 class=xl16218037>Missing</td>
            <td colspan=2 class=xl29818037 width=109 style='border-right:.5pt solid black;
  width:82pt'>21. E-MAIL ADDRESS</td>
            <td colspan=6 class=xl16318037 width=369 style='border-right:1.0pt solid black;
  border-left:none;width:277pt'>{{ $employeedataf->emailaddress }}</td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl11418037 colspan=3 style='height:14.25pt'>II.<span
                        style='mso-spacerun:yes'>  </span>FAMILY BACKGROUND</td>
            <td class=xl11518037>&nbsp;</td>
            <td class=xl11518037>&nbsp;</td>
            <td class=xl11518037>&nbsp;</td>
            <td class=xl11518037 style='border-top:none'>&nbsp;</td>
            <td class=xl11518037 style='border-top:none'>&nbsp;</td>
            <td class=xl11518037 style='border-top:none'>&nbsp;</td>
            <td class=xl11518037 style='border-top:none'>&nbsp;</td>
            <td class=xl11518037 style='border-top:none'>&nbsp;</td>
            <td class=xl11518037 style='border-top:none'>&nbsp;</td>
            <td class=xl11518037 style='border-top:none'>&nbsp;</td>
            <td class=xl11618037 style='border-top:none'>&nbsp;</td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.0pt'>
            <td colspan=3 height=20 class=xl26218037 width=171 style='border-right:.5pt solid black;
  height:15.0pt;width:129pt'>22. SPOUSE'S SURNAME <br>
            </td>
            <td colspan=5 class=xl16618037 width=243 style='border-left:none;width:183pt'>{{ $employeedataf->spouseName }}</td>
            <td colspan=4 class=xl16718037 width=199 style='border-right:.5pt solid black;
  width:150pt'>23. NAME of CHILDREN</td>
            <?php
            $childrenName = [];
            $childrenBirthday = [];
            foreach($employeedatachild as $emp_id) {
                $childrenName[] = $emp_id->fullname;
                $childrenBirthday[] = $emp_id->dateOfBirth;
//            if(empty($emp_id->fullname))
//            {
//                break;
//            };
            }?>
            <td colspan=2 class=xl16918037 width=170 style='border-right:1.0pt solid black;
  border-left:none;width:127pt'>DATE OF BIRTH</td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td colspan=3 height=18 class=xl27818037 style='border-right:.5pt solid black;
  height:13.5pt'><span style='mso-spacerun:yes'>      </span>FIRST NAME<span
                        style='mso-spacerun:yes'> </span></td>
            <td colspan=3 class=xl14618037 width=134 style='border-right:.5pt solid black;
  border-left:none;width:101pt'>&nbsp;</td>
            <td colspan=2 class=xl15418037 width=109 style='border-left:none;width:82pt'>NAME
                EXTENSION</td>
            <td colspan=4 class=xl14618037 width=199 style='border-right:.5pt solid black;
  border-left:none;width:150pt'><?php if(!empty($childrenName[0])){ echo $childrenName[0];} ?></td>
            <td colspan=2 class=xl14418037 width=170 style='border-right:1.0pt solid black;
  border-left:none;width:127pt'><?php if(!empty($childrenName[0])){ echo $childrenBirthday[0];} ?></td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td colspan=3 height=18 class=xl28918037 style='border-right:.5pt solid black;
  height:13.5pt'><span style='mso-spacerun:yes'>      </span>MIDDLE NAME<span
                        style='mso-spacerun:yes'> </span></td>
            <td colspan=5 class=xl14618037 width=243 style='border-right:.5pt solid black;
  border-left:none;width:183pt'>&nbsp;</td>
            <td colspan=4 class=xl14218037 width=199 style='border-right:.5pt solid black;
  width:150pt'><?php if(!empty($childrenName[1])){ echo $childrenName[1];} ?></td>
            <td colspan=2 class=xl14418037 width=170 style='border-right:1.0pt solid black;
  border-left:none;width:127pt'><?php if(!empty($childrenName[1])){ echo $childrenBirthday[1];} ?></td>
        </tr>
        <tr height=17 style='mso-height-source:userset;height:12.75pt'>
            <td colspan=3 height=17 class=xl22718037 style='border-right:.5pt solid black;
  height:12.75pt'><span style='mso-spacerun:yes'>      </span>OCCUPATION</td>
            <td colspan=5 class=xl14618037 width=243 style='border-right:.5pt solid black;
  border-left:none;width:183pt'>{{$employeedataf->spouseEmployerBusiness}}</td>
            <td colspan=4 class=xl14218037 width=199 style='border-right:.5pt solid black;
  width:150pt'><?php if(!empty($childrenName[2])){ echo $childrenName[2];} ?></td>
            <td colspan=2 class=xl14418037 width=170 style='border-right:1.0pt solid black;
  border-left:none;width:127pt'><?php if(!empty($childrenName[2])){ echo $childrenBirthday[2];} ?></td>
        </tr>
        <tr height=18 style='mso-height-source:userset;height:13.5pt'>
            <td colspan=3 height=18 class=xl13918037 width=171 style='border-right:.5pt solid black;
  height:13.5pt;width:129pt'><span style='mso-spacerun:yes'>     
  </span>EMPLOYER/BUSINESS NAME</td>
            <td colspan=5 class=xl14618037 width=243 style='border-right:.5pt solid black;
  border-left:none;width:183pt'>{{$employeedataf->spouseEmployerBusiness}}</td>
            <td colspan=4 class=xl14218037 width=199 style='border-right:.5pt solid black;
  width:150pt'>&nbsp;</td>
            <td colspan=2 class=xl14418037 width=170 style='border-right:1.0pt solid black;
  border-left:none;width:127pt'>&nbsp;</td>
        </tr>
        <tr height=22 style='mso-height-source:userset;height:16.5pt'>
            <td colspan=3 height=22 class=xl22718037 style='border-right:.5pt solid black;
  height:16.5pt'><span style='mso-spacerun:yes'>      </span>BUSINESS ADDRESS</td>
            <td colspan=5 class=xl14618037 width=243 style='border-right:.5pt solid black;
  border-left:none;width:183pt'>{{$employeedataf->spouseBusinessAddress}}</td>
            <td colspan=4 class=xl14218037 width=199 style='border-right:.5pt solid black;
  width:150pt'>&nbsp;</td>
            <td colspan=2 class=xl14418037 width=170 style='border-right:1.0pt solid black;
  border-left:none;width:127pt'>&nbsp;</td>
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.75pt'>
            <td colspan=3 height=21 class=xl22718037 style='border-right:.5pt solid black;
  height:15.75pt'><span style='mso-spacerun:yes'>      </span>TELEPHONE NO.</td>
            <td colspan=5 class=xl14618037 width=243 style='border-right:.5pt solid black;
  border-left:none;width:183pt'>{{$employeedataf->spouseTelephoneNo}}</td>
            <td colspan=4 class=xl14218037 width=199 style='border-right:.5pt solid black;
  width:150pt'>&nbsp;</td>
            <td colspan=2 class=xl14418037 width=170 style='border-right:1.0pt solid black;
  border-left:none;width:127pt'>&nbsp;</td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td colspan=3 rowspan=3 height=54 class=xl26818037 width=171
                style='border-right:.5pt solid black;border-bottom:.5pt solid black;
  height:40.5pt;width:129pt'>24. FATHER'S SURNAME <br>
                <span style='mso-spacerun:yes'>       </span>FIRST NAME <br>
                <span style='mso-spacerun:yes'>       </span>MIDDLE NAME <br>
            </td>
            <td colspan=5 class=xl15318037 width=243 style='border-left:none;width:183pt'>{{$employeedataf->fatherName}}</td>
            <td colspan=4 class=xl14218037 width=199 style='border-right:.5pt solid black;
  width:150pt'>&nbsp;</td>
            <td colspan=2 class=xl14418037 width=170 style='border-right:1.0pt solid black;
  border-left:none;width:127pt'>&nbsp;</td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td colspan=3 height=18 class=xl14618037 width=134 style='border-right:.5pt solid black;
  height:13.5pt;border-left:none;width:101pt'>&nbsp;</td>
            <td colspan=2 class=xl15418037 width=109 style='border-left:none;width:82pt'>NAME
                EXTENSION</td>
            <td colspan=4 class=xl14218037 width=199 style='border-right:.5pt solid black;
  width:150pt'>&nbsp;</td>
            <td colspan=2 class=xl14418037 width=170 style='border-right:1.0pt solid black;
  border-left:none;width:127pt'>&nbsp;</td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td colspan=5 height=18 class=xl14618037 width=243 style='border-right:.5pt solid black;
  height:13.5pt;border-left:none;width:183pt'>&nbsp;</td>
            <td colspan=4 class=xl14218037 width=199 style='border-right:.5pt solid black;
  width:150pt'>&nbsp;</td>
            <td colspan=2 class=xl14418037 width=170 style='border-right:1.0pt solid black;
  border-left:none;width:127pt'>&nbsp;</td>
        </tr>
        <tr height=17 style='mso-height-source:userset;height:12.75pt'>
            <td colspan=3 height=17 class=xl30018037 width=171 style='border-right:.5pt solid black;
  height:12.75pt;width:129pt'>25. MOTHER'S MAIDEN NAME<span
                        style='mso-spacerun:yes'> </span></td>
            <td colspan=5 class=xl14918037 style='border-left:none'>{{$employeedataf->motherName}}</td>
            <td colspan=4 class=xl14218037 width=199 style='border-right:.5pt solid black;
  width:150pt'>&nbsp;</td>
            <td colspan=2 class=xl14418037 width=170 style='border-right:1.0pt solid black;
  border-left:none;width:127pt'>&nbsp;</td>
        </tr>
        <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td colspan=3 height=16 class=xl10118037 style='border-right:.5pt solid black;
  height:12.0pt'><span style='mso-spacerun:yes'>       </span>SURNAME</td>
            <td colspan=5 class=xl14118037 style='border-left:none'>&nbsp;</td>
            <td colspan=4 class=xl14218037 width=199 style='border-right:.5pt solid black;
  width:150pt'>&nbsp;</td>
            <td colspan=2 class=xl14418037 width=170 style='border-right:1.0pt solid black;
  border-left:none;width:127pt'>&nbsp;</td>
        </tr>
        <tr height=14 style='mso-height-source:userset;height:10.5pt'>
            <td colspan=3 height=14 class=xl10118037 style='border-right:.5pt solid black;
  height:10.5pt'><span style='mso-spacerun:yes'>       </span>FIRST NAME</td>
            <td colspan=5 class=xl14118037 style='border-left:none'>&nbsp;</td>
            <td colspan=4 class=xl14218037 width=199 style='border-right:.5pt solid black;
  width:150pt'>&nbsp;</td>
            <td colspan=2 class=xl14418037 width=170 style='border-right:1.0pt solid black;
  border-left:none;width:127pt'>&nbsp;</td>
        </tr>
        <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td colspan=3 height=16 class=xl30118037 style='border-right:.5pt solid black;
  height:12.0pt'><span style='mso-spacerun:yes'>       </span>MIDDLE NAME</td>
            <td colspan=5 class=xl15018037 width=243 style='border-left:none;width:183pt'>&nbsp;</td>
            <td colspan=6 class=xl15118037 width=369 style='border-right:1.0pt solid black;
  width:277pt'>&nbsp;</td>
        </tr>
        <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td colspan=14 height=16 class=xl30218037 style='border-right:1.0pt solid black;
  height:12.0pt'>III.<span style='mso-spacerun:yes'>  </span>EDUCATIONAL BACKGROUND</td>
        </tr>
        <?php
        $educlevel = [];
        $educnameOfSchool = [];
        $educbasicEducationDegreeCourse = [];
        $educperiodOfAttendanceFrom = [];
        $educperiodOfAttendanceTo = [];
        $educhighestLevelEarnedUnits = [];
        $educyearGraduated = [];
        $educscholarshipsAcademicHonorsReceived = [];
        foreach($employeedataeduc as $emp_id) {
            $educlevel[] =$emp_id->level;
            $educnameOfSchool[] =$emp_id->nameOfSchool;
            $educbasicEducationDegreeCourse[] =$emp_id->basicEducationDegreeCourse;
            $educperiodOfAttendanceFrom[] =$emp_id->periodOfAttendanceFrom;
            $educperiodOfAttendanceTo[] =$emp_id->periodOfAttendanceTo;
            $educhighestLevelEarnedUnits[] =$emp_id->highestLevelEarnedUnits;
            $educyearGraduated[] =$emp_id->yearGraduated;
            $educscholarshipsAcademicHonorsReceived[] =$emp_id->scholarshipsAcademicHonorsReceived;
        }?>
        <tr height=16 style='height:12.0pt'>
            <td rowspan=2 height=32 class=xl12718037 style='height:24.0pt;border-top:
  none'>26.</td>
            <td colspan=2 rowspan=3 class=xl31318037 width=154 style='width:116pt'>LEVEL</td>
            <td colspan=3 rowspan=3 class=xl31518037 width=134 style='border-right:.5pt solid black;
  width:101pt'>NAME OF SCHOOL<span
                        style='mso-spacerun:yes'>                                                                                                                                        </span></td>
            <td colspan=3 rowspan=3 class=xl31518037 width=131 style='border-right:1.0pt solid black;
  border-bottom:.5pt solid black;width:99pt'>BASIC EDUCATION/ DEGREE/
                COURSE<span
                        style='mso-spacerun:yes'>                                                                   </span></td>
            <td colspan=2 rowspan=2 class=xl31418037 width=85 style='border-right:1.0pt solid black;
  border-bottom:.5pt solid black;width:64pt'>PERIOD OF ATTENDANCE</td>
            <td rowspan=3 class=xl35818037 width=92 style='border-top:none;width:69pt'>HIGHEST
                LEVEL/ UNITS EARNED</td>
            <td rowspan=3 class=xl31818037 width=79 style='border-top:none;width:59pt'>YEAR
                GRADUATED<span style='mso-spacerun:yes'>     </span></td>
            <td rowspan=3 class=xl31918037 width=91 style='border-top:none;width:68pt'>SCHOLARSHIP/
                ACADEMIC HONORS RECEIVED</td>
        </tr>
        <tr height=16 style='height:12.0pt'>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td height=18 class=xl11718037 style='height:13.5pt'>&nbsp;</td>
            <td class=xl33018037 width=41 style='border-top:none;width:31pt'>From</td>
            <td class=xl33118037 width=44 style='border-top:none;border-left:none;
  width:33pt'>To</td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td height=18 class=xl11818037 width=17 style='height:13.5pt;border-top:none;
  width:13pt'>&nbsp;</td>
            <td colspan=2 class=xl33218037 width=154 style='border-right:.5pt solid black;
  width:116pt'>{{$educlevel[0]}}</td>
            <td colspan=3 class=xl33418037 width=134 style='width:101pt'>{{$educnameOfSchool[0]}}</td>
            <td colspan=3 class=xl33618037 width=131 style='border-right:.5pt solid black;
  border-left:none;width:99pt'>{{$educbasicEducationDegreeCourse[0]}}</td>
            <td class=xl33918037 width=41 style='border-left:none;width:31pt'>{{$educperiodOfAttendanceFrom[0]}}</td>
            <td class=xl33918037 width=44 style='border-left:none;width:33pt'>{{$educperiodOfAttendanceTo[0]}}</td>
            <td class=xl34018037 width=92 style='border-left:none;width:69pt'>{{$educhighestLevelEarnedUnits[0]}}</td>
            <td class=xl34118037 width=79 style='border-left:none;width:59pt'>{{$educyearGraduated[0]}}</td>
            <td class=xl34218037 width=91 style='border-left:none;width:68pt'>{{$educscholarshipsAcademicHonorsReceived[0]}}</td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td height=18 class=xl11818037 width=17 style='height:13.5pt;border-top:none;
  width:13pt'>&nbsp;</td>
            <td colspan=2 class=xl33218037 width=154 style='border-right:.5pt solid black;
  width:116pt'>{{$educlevel[1]}}</td>
            <td colspan=3 class=xl33418037 width=134 style='width:101pt'>{{$educnameOfSchool[1]}}</td>
            <td colspan=3 class=xl33618037 width=131 style='border-right:.5pt solid black;
  border-left:none;width:99pt'>{{$educbasicEducationDegreeCourse[1]}}</td>
            <td class=xl33918037 width=41 style='border-top:none;border-left:none;
  width:31pt'>{{$educperiodOfAttendanceFrom[1]}}</td>
            <td class=xl33918037 width=44 style='border-top:none;border-left:none;
  width:33pt'>{{$educperiodOfAttendanceTo[1]}}</td>
            <td class=xl34018037 width=92 style='border-top:none;border-left:none;
  width:69pt'>{{$educhighestLevelEarnedUnits[1]}}</td>
            <td class=xl34018037 width=79 style='border-top:none;border-left:none;
  width:59pt'>{{$educyearGraduated[1]}}</td>
            <td class=xl34218037 width=91 style='border-top:none;border-left:none;
  width:68pt'>{{$educscholarshipsAcademicHonorsReceived[1]}}</td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.25pt'>
            <td height=19 class=xl11818037 width=17 style='height:14.25pt;border-top:
  none;width:13pt'>&nbsp;</td>
            <td colspan=2 class=xl33218037 width=154 style='border-right:.5pt solid black;
  width:116pt'>{{$educlevel[2]}}</td>
            <td colspan=3 class=xl34318037 width=134 style='width:101pt'>{{$educnameOfSchool[2]}}</td>
            <td colspan=3 class=xl34518037 width=131 style='border-right:.5pt solid black;
  border-left:none;width:99pt'>{{$educbasicEducationDegreeCourse[2]}}</td>
            <td class=xl33918037 width=41 style='border-top:none;border-left:none;
  width:31pt'>{{$educperiodOfAttendanceFrom[2]}}</td>
            <td class=xl33918037 width=44 style='border-top:none;border-left:none;
  width:33pt'>&{{$educperiodOfAttendanceTo[2]}}</td>
            <td class=xl34018037 width=92 style='border-top:none;border-left:none;
  width:69pt'>{{$educhighestLevelEarnedUnits[2]}}</td>
            <td class=xl34118037 width=79 style='border-top:none;border-left:none;
  width:59pt'>{{$educyearGraduated[2]}}</td>
            <td class=xl34218037 width=91 style='border-top:none;border-left:none;
  width:68pt'>{{$educscholarshipsAcademicHonorsReceived[2]}}</td>
        </tr>
        <tr height=18 style='height:13.5pt'>
            <td height=18 class=xl11818037 width=17 style='height:13.5pt;border-top:none;
  width:13pt'>&nbsp;</td>
            <td colspan=2 class=xl33218037 width=154 style='border-right:.5pt solid black;
  width:116pt'>COLLEGE</td>
            <td colspan=3 class=xl33418037 width=134 style='width:101pt'>&nbsp;</td>
            <td colspan=3 class=xl33618037 width=131 style='border-right:.5pt solid black;
  border-left:none;width:99pt'>&nbsp;</td>
            <td class=xl33918037 width=41 style='border-top:none;border-left:none;
  width:31pt'>&nbsp;</td>
            <td class=xl33918037 width=44 style='border-top:none;border-left:none;
  width:33pt'>&nbsp;</td>
            <td class=xl34018037 width=92 style='border-top:none;border-left:none;
  width:69pt'>&nbsp;</td>
            <td class=xl34018037 width=79 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
            <td class=xl34218037 width=91 style='border-top:none;border-left:none;
  width:68pt'>&nbsp;</td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl11918037 width=17 style='height:14.25pt;border-top:
  none;width:13pt'>&nbsp;</td>
            <td colspan=2 class=xl34818037 style='border-right:.5pt solid black'>GRADUATE
                STUDIES<span style='mso-spacerun:yes'> </span></td>
            <td colspan=3 class=xl35018037 width=134 style='width:101pt'>&nbsp;</td>
            <td colspan=3 class=xl35218037 width=131 style='border-right:.5pt solid black;
  border-left:none;width:99pt'>&nbsp;</td>
            <td class=xl35518037 width=41 style='border-top:none;border-left:none;
  width:31pt'>&nbsp;</td>
            <td class=xl35518037 width=44 style='border-top:none;border-left:none;
  width:33pt'>&nbsp;</td>
            <td class=xl35618037 width=92 style='border-top:none;border-left:none;
  width:69pt'>&nbsp;</td>
            <td class=xl35618037 width=79 style='border-top:none;border-left:none;
  width:59pt'>&nbsp;</td>
            <td class=xl35718037 width=91 style='border-top:none;border-left:none;
  width:68pt'>&nbsp;</td>
        </tr>
        <tr height=7 style='mso-height-source:userset;height:5.25pt'>
            <td height=7 class=xl12018037 style='height:5.25pt'>&nbsp;</td>
            <td class=xl12118037 style='border-top:none'>&nbsp;</td>
            <td class=xl12118037 style='border-top:none'>&nbsp;</td>
            <td class=xl12118037>&nbsp;</td>
            <td class=xl12118037>&nbsp;</td>
            <td class=xl12118037>&nbsp;</td>
            <td class=xl12118037>&nbsp;</td>
            <td class=xl12118037>&nbsp;</td>
            <td class=xl12118037>&nbsp;</td>
            <td class=xl12118037>&nbsp;</td>
            <td class=xl12118037>&nbsp;</td>
            <td class=xl12118037>&nbsp;</td>
            <td class=xl12118037>&nbsp;</td>
            <td class=xl12218037>&nbsp;</td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td colspan=3 height=19 class=xl13018037 width=171 style='border-right:1.0pt solid black;
  height:14.25pt;width:129pt'>SIGNATURE</td>
            <td class=xl12318037 width=62 style='border-left:none;width:47pt'>&nbsp;</td>
            <td class=xl12418037 width=35 style='width:26pt'>&nbsp;</td>
            <td class=xl12418037 width=37 style='width:28pt'>&nbsp;</td>
            <td class=xl12518037 width=51 style='width:38pt'>&nbsp;</td>
            <td class=xl12618037 style='border-left:none'>DATE</td>
            <td colspan=3 class=xl13318037 style='border-right:1.0pt solid black;
  border-left:none'>&nbsp;</td>
            <td colspan=3 class=xl13618037 style='border-right:1.0pt solid black;
  border-left:none'><span style='mso-spacerun:yes'>  </span>CS FORM 212
                (Revised 2017), Page 1 of 5</td>
        </tr>
        <![if supportMisalignedColumns]>
        <tr height=0 style='display:none'>
            <td width=17 style='width:13pt'></td>
            <td width=76 style='width:57pt'></td>
            <td width=78 style='width:59pt'></td>
            <td width=62 style='width:47pt'></td>
            <td width=35 style='width:26pt'></td>
            <td width=37 style='width:28pt'></td>
            <td width=51 style='width:38pt'></td>
            <td width=58 style='width:44pt'></td>
            <td width=22 style='width:17pt'></td>
            <td width=41 style='width:31pt'></td>
            <td width=44 style='width:33pt'></td>
            <td width=92 style='width:69pt'></td>
            <td width=79 style='width:59pt'></td>
            <td width=91 style='width:68pt'></td>
        </tr>
        <![endif]>
    </table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>





<head>
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
    <meta name=ProgId content=Excel.Sheet>
    <meta name=Generator content="Microsoft Excel 15">
    <link rel=File-List href="TemplateB_files/filelist.xml">
    <style id="Template_2608_Styles">
        <!--table
        {mso-displayed-decimal-separator:"\.";
            mso-displayed-thousand-separator:"\,";}
        .xl652608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl662608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl672608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:bottom;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl682608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl692608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:bottom;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl702608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:Percent;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl712608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl722608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:Percent;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl732608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl742608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"Short Date";
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl752608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:Standard;
            text-align:right;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl762608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl772608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl782608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl792608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl802608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:Standard;
            text-align:right;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl812608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl822608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"Short Date";
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl832608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl842608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl852608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl862608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl872608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:Standard;
            text-align:right;
            vertical-align:bottom;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl882608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl892608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl902608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl912608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:white;
            font-size:11.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl922608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:white;
            font-size:11.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl932608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:white;
            font-size:11.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl942608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl952608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl962608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl972608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl982608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl992608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1002608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl1012608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl1022608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1032608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1042608
        {color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;
            padding-left:9px;
            mso-char-indent-count:1;}
        .xl1052608
        {color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"mm\/dd\/yyyy";
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;
            padding-left:9px;
            mso-char-indent-count:1;}
        .xl1062608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:red;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1072608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:red;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1082608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:red;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1092608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:white;
            font-size:11.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1102608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:white;
            font-size:11.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1112608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:white;
            font-size:11.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1122608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl1132608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl1142608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl1152608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:7.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:Standard;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl1162608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:7.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:Standard;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl1172608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:6.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl1182608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:6.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl1192608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1202608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1212608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1222608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1232608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1242608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1252608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:7.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl1262608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:7.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl1272608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:7.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl1282608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:7.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl1292608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1302608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1312608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"Short Date";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl1322608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:7.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl1332608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:7.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl1342608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:7.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl1352608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl1362608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl1372608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl1382608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"Short Date";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl1392608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"Short Date";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl1402608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl1412608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl1422608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl1432608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:red;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1442608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:red;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1452608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:red;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1462608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:red;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1472608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:11.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl1482608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:11.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl1492608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:11.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl1502608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl1512608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl1522608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl1532608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl1542608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl1552608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:11.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl1562608
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:11.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        -->
    </style>
</head>

<body>
<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--The following information was generated by Microsoft Excel's Publish as Web
Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="Template_2608" align=center x:publishsource="Excel">

    <table border=0 cellpadding=0 cellspacing=0 width=713 class=xl655352608
           style='border-collapse:collapse;table-layout:fixed;width:536pt'>
        <col class=xl655352608 width=23 style='mso-width-source:userset;mso-width-alt:
 841;width:17pt'>
        <col class=xl655352608 width=44 style='mso-width-source:userset;mso-width-alt:
 1609;width:33pt'>
        <col class=xl655352608 width=68 style='mso-width-source:userset;mso-width-alt:
 2486;width:51pt'>
        <col class=xl655352608 width=74 style='mso-width-source:userset;mso-width-alt:
 2706;width:56pt'>
        <col class=xl655352608 width=49 style='mso-width-source:userset;mso-width-alt:
 1792;width:37pt'>
        <col class=xl655352608 width=45 style='mso-width-source:userset;mso-width-alt:
 1645;width:34pt'>
        <col class=xl655352608 width=48 style='mso-width-source:userset;mso-width-alt:
 1755;width:36pt'>
        <col class=xl655352608 width=30 style='mso-width-source:userset;mso-width-alt:
 1097;width:23pt'>
        <col class=xl655352608 width=88 style='mso-width-source:userset;mso-width-alt:
 3218;width:66pt'>
        <col class=xl872608 width=56 style='mso-width-source:userset;mso-width-alt:
 2048;width:42pt'>
        <col class=xl655352608 width=59 style='mso-width-source:userset;mso-width-alt:
 2157;width:44pt'>
        <col class=xl655352608 width=77 style='mso-width-source:userset;mso-width-alt:
 2816;width:58pt'>
        <col class=xl655352608 width=52 style='mso-width-source:userset;mso-width-alt:
 1901;width:39pt'>
        <tr height=4 style='mso-height-source:userset;height:3.0pt'>
            <td colspan=13 height=4 class=xl882608 width=713 style='border-right:1.0pt solid black;
  height:3.0pt;width:536pt'>&nbsp;</td>
        </tr>
        <tr height=24 style='mso-height-source:userset;height:18.0pt'>
            <td colspan=13 height=24 class=xl912608 style='border-right:1.0pt solid black;
  height:18.0pt'>IV.<span style='mso-spacerun:yes'>  </span>CIVIL SERVICE
                ELIGIBILITY</td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.0pt'>
            <td height=20 class=xl662608 style='height:15.0pt;border-top:none'>27.</td>
            <td colspan=4 rowspan=2 class=xl942608 width=235 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:177pt'>CAREER SERVICE/ RA 1080 (BOARD/
                BAR) UNDER SPECIAL LAWS/ CES/ CSEE<span
                        style='mso-spacerun:yes'>                                                   
  </span>BARANGAY ELIGIBILITY / DRIVER'S LICENSE</td>
            <td rowspan=2 class=xl982608 width=45 style='border-top:none;width:34pt'>RATING</td>
            <td colspan=2 rowspan=2 class=xl1002608 width=78 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:59pt'>DATE OF EXAMINATION / CONFERMENT</td>
            <td colspan=3 rowspan=2 class=xl1002608 width=203 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:152pt'>PLACE OF EXAMINATION / CONFERMENT</td>
            <td colspan=2 class=xl1022608 style='border-right:1.0pt solid black;
  border-left:none'>LICENSE</td>
        </tr>
        <tr height=34 style='mso-height-source:userset;height:25.5pt'>
            <td height=34 class=xl672608 style='height:25.5pt'>&nbsp;</td>
            <td class=xl682608 style='border-top:none;border-left:none'>NUMBER</td>
            <td class=xl692608 width=52 style='border-top:none;border-left:none;
  width:39pt'>Date of<br>
                Validity</td>
        </tr>
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=5 height=20 class=xl1042608 width=258 style='height:15.0pt;--}}
  {{--width:194pt'>&nbsp;</td>--}}
            {{--<td class=xl702608 style='border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=2 class=xl712608 style='border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1052608 width=203 style='border-left:none;width:152pt'>&nbsp;</td>--}}
            {{--<td class=xl712608 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl712608 style='border-left:none'>&nbsp;</td>--}}
        {{--</tr>--}}
        @foreach ($employeedatacivil as $emp_id)
            <tr height=20 style='height:15.0pt'>
                <td colspan=5 height=20 class=xl1042608 width=258 style='height:15.0pt;
  width:194pt'>&nbsp;{{$emp_id->civilServiceName}}</td>
                <td class=xl702608 style='border-top:none;border-left:none'>{{$emp_id->rating}}</td>
                <td colspan=2 class=xl712608 style='border-left:none'>{{$emp_id->dateOfExamination}}</td>
                <td colspan=3 class=xl1052608 width=203 style='border-left:none;width:152pt'>{{$emp_id->placeOfExamination}}</td>
                <td class=xl712608 style='border-top:none;border-left:none'>{{$emp_id->licenseNumber}}</td>
                <td class=xl712608 style='border-top:none;border-left:none'>{{$emp_id->licenseDateOfValidity}}</td>
            </tr>
        @endforeach
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=5 height=20 class=xl1042608 width=258 style='height:15.0pt;--}}
  {{--width:194pt'>&nbsp;</td>--}}
            {{--<td class=xl702608 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=2 class=xl712608 style='border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1052608 width=203 style='border-left:none;width:152pt'>&nbsp;</td>--}}
            {{--<td class=xl712608 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl712608 style='border-top:none;border-left:none'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=5 height=20 class=xl1042608 width=258 style='height:15.0pt;--}}
  {{--width:194pt'>&nbsp;</td>--}}
            {{--<td class=xl702608 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=2 class=xl712608 style='border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1052608 width=203 style='border-left:none;width:152pt'>&nbsp;</td>--}}
            {{--<td class=xl712608 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl712608 style='border-top:none;border-left:none'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=5 height=20 class=xl1042608 width=258 style='height:15.0pt;--}}
  {{--width:194pt'>&nbsp;</td>--}}
            {{--<td class=xl702608 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=2 class=xl712608 style='border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1052608 width=203 style='border-left:none;width:152pt'>&nbsp;</td>--}}
            {{--<td class=xl712608 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl712608 style='border-top:none;border-left:none'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=21 style='height:15.75pt'>--}}
            {{--<td colspan=5 height=21 class=xl1042608 width=258 style='height:15.75pt;--}}
  {{--width:194pt'>&nbsp;</td>--}}
            {{--<td class=xl722608 width=45 style='border-top:none;border-left:none;--}}
  {{--width:34pt'>&nbsp;</td>--}}
            {{--<td colspan=2 class=xl712608 style='border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1052608 width=203 style='border-left:none;width:152pt'>&nbsp;</td>--}}
            {{--<td class=xl712608 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl712608 style='border-top:none;border-left:none'>&nbsp;</td>--}}
        {{--</tr>--}}
        <tr class=xl655352608 height=9 style='mso-height-source:userset;height:6.75pt'>
            <td colspan=13 height=9 class=xl1062608 style='border-right:1.0pt solid black;
  height:6.75pt'>&nbsp;</td>
        </tr>
        <tr height=25 style='mso-height-source:userset;height:18.75pt'>
            <td colspan=13 height=25 class=xl1092608 style='border-right:1.0pt solid black;
  height:18.75pt'>V.<span style='mso-spacerun:yes'>  </span>WORK
                EXPERIENCE<span style='mso-spacerun:yes'> </span></td>
        </tr>
        <tr height=24 style='mso-height-source:userset;height:18.0pt'>
            <td colspan=3 rowspan=2 height=44 class=xl1192608 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;height:33.0pt'>28. INCLUSIVE DATES</td>
            <td colspan=3 rowspan=3 class=xl1122608 width=168 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:127pt'>POSITION TITLE<span
                        style='mso-spacerun:yes'>                                                                                                                        </span></td>
            <td colspan=3 rowspan=3 class=xl1122608 width=166 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:125pt'>DEPARTMENT / AGENCY / OFFICE /
                COMPANY<span
                        style='mso-spacerun:yes'>                                                                                            </span></td>
            <td rowspan=3 class=xl1152608 width=56 style='border-bottom:.5pt solid black;
  width:42pt'>MONTHLY SALARY</td>
            <td rowspan=3 class=xl1172608 width=59 style='border-bottom:.5pt solid black;
  width:44pt'>SALARY/ JOB/ PAY GRADE&amp; STEP/ INCREMENT</td>
            <td rowspan=3 class=xl1252608 width=77 style='border-bottom:.5pt solid black;
  width:58pt'>STATUS OF APPOINTMENT</td>
            <td rowspan=3 class=xl1272608 width=52 style='border-bottom:.5pt solid black;
  width:39pt'>GOV'T SERVICE<span
                        style='mso-spacerun:yes'>                                                                                                                                     </span></td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.0pt'>
        </tr>
        <tr height=25 style='mso-height-source:userset;height:18.75pt'>
            <td colspan=2 height=25 class=xl1292608 style='border-right:.5pt solid black;
  height:18.75pt'>From</td>
            <td class=xl732608 style='border-top:none;border-left:none'>To</td>
        </tr>
        @foreach ($employeedatawork as $emp_id)
            <tr class=xl792608 height=20 style='height:15.0pt'>
                <td colspan=2 height=20 class=xl1312608 width=67 style='height:15.0pt;
  width:50pt'>{{$emp_id->startJobDate}}</td>
                <td class=xl742608 width=68 style='border-top:none;border-left:none;
  width:51pt'>{{$emp_id->endJobDate}}</td>
                <td colspan=3 class=xl772608 width=168 style='border-left:none;width:127pt'>{{$emp_id->positionTitle}}</td>
                <td colspan=3 class=xl1322608 width=166 style='border-right:.5pt solid black;
  border-left:none;width:125pt'>{{$emp_id->departmentAgencyOfficeCompany}}</td>
                <td class=xl752608 width=56 style='border-top:none;border-left:none;
  width:42pt'>{{$emp_id->monthlySalary}}</td>
                <td class=xl762608 width=59 style='border-top:none;border-left:none;
  width:44pt'>{{$emp_id->salaryJobPayGradesStep}}</td>
                <td class=xl772608 width=77 style='border-top:none;border-left:none;
  width:58pt'>{{$emp_id->statusOfAppointment}}</td>
                <td class=xl782608 width=52 style='border-top:none;border-left:none;
  width:39pt'>{{$emp_id->GovernmentService}}</td>
            </tr>
        @endforeach
        {{--<tr class=xl792608 height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl1312608 width=67 style='height:15.0pt;--}}
  {{--width:50pt'>&nbsp;</td>--}}
            {{--<td class=xl742608 width=68 style='border-top:none;border-left:none;--}}
  {{--width:51pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl772608 width=168 style='border-left:none;width:127pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1322608 width=166 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:125pt'>&nbsp;</td>--}}
            {{--<td class=xl752608 width=56 style='border-top:none;border-left:none;--}}
  {{--width:42pt'>&nbsp;</td>--}}
            {{--<td class=xl762608 width=59 style='border-top:none;border-left:none;--}}
  {{--width:44pt'>&nbsp;</td>--}}
            {{--<td class=xl772608 width=77 style='border-top:none;border-left:none;--}}
  {{--width:58pt'>&nbsp;</td>--}}
            {{--<td class=xl782608 width=52 style='border-top:none;border-left:none;--}}
  {{--width:39pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr class=xl792608 height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl1312608 width=67 style='height:15.0pt;--}}
  {{--width:50pt'>&nbsp;</td>--}}
            {{--<td class=xl742608 width=68 style='border-top:none;border-left:none;--}}
  {{--width:51pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl772608 width=168 style='border-left:none;width:127pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1322608 width=166 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:125pt'>&nbsp;</td>--}}
            {{--<td class=xl752608 width=56 style='border-top:none;border-left:none;--}}
  {{--width:42pt'>&nbsp;</td>--}}
            {{--<td class=xl762608 width=59 style='border-top:none;border-left:none;--}}
  {{--width:44pt'>&nbsp;</td>--}}
            {{--<td class=xl772608 width=77 style='border-top:none;border-left:none;--}}
  {{--width:58pt'>&nbsp;</td>--}}
            {{--<td class=xl782608 width=52 style='border-top:none;border-left:none;--}}
  {{--width:39pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr class=xl792608 height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl1312608 width=67 style='height:15.0pt;--}}
  {{--width:50pt'>&nbsp;</td>--}}
            {{--<td class=xl742608 width=68 style='border-top:none;border-left:none;--}}
  {{--width:51pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl772608 width=168 style='border-left:none;width:127pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1322608 width=166 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:125pt'>&nbsp;</td>--}}
            {{--<td class=xl752608 width=56 style='border-top:none;border-left:none;--}}
  {{--width:42pt'>&nbsp;</td>--}}
            {{--<td class=xl762608 width=59 style='border-top:none;border-left:none;--}}
  {{--width:44pt'>&nbsp;</td>--}}
            {{--<td class=xl772608 width=77 style='border-top:none;border-left:none;--}}
  {{--width:58pt'>&nbsp;</td>--}}
            {{--<td class=xl782608 width=52 style='border-top:none;border-left:none;--}}
  {{--width:39pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr class=xl792608 height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl1312608 width=67 style='height:15.0pt;--}}
  {{--width:50pt'>&nbsp;</td>--}}
            {{--<td class=xl742608 width=68 style='border-top:none;border-left:none;--}}
  {{--width:51pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl772608 width=168 style='border-left:none;width:127pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1322608 width=166 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:125pt'>&nbsp;</td>--}}
            {{--<td class=xl752608 width=56 style='border-top:none;border-left:none;--}}
  {{--width:42pt'>&nbsp;</td>--}}
            {{--<td class=xl762608 width=59 style='border-top:none;border-left:none;--}}
  {{--width:44pt'>&nbsp;</td>--}}
            {{--<td class=xl772608 width=77 style='border-top:none;border-left:none;--}}
  {{--width:58pt'>&nbsp;</td>--}}
            {{--<td class=xl782608 width=52 style='border-top:none;border-left:none;--}}
  {{--width:39pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr class=xl792608 height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl1312608 width=67 style='height:15.0pt;--}}
  {{--width:50pt'>&nbsp;</td>--}}
            {{--<td class=xl742608 width=68 style='border-top:none;border-left:none;--}}
  {{--width:51pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl772608 width=168 style='border-left:none;width:127pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1322608 width=166 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:125pt'>&nbsp;</td>--}}
            {{--<td class=xl752608 width=56 style='border-top:none;border-left:none;--}}
  {{--width:42pt'>&nbsp;</td>--}}
            {{--<td class=xl762608 width=59 style='border-top:none;border-left:none;--}}
  {{--width:44pt'>&nbsp;</td>--}}
            {{--<td class=xl772608 width=77 style='border-top:none;border-left:none;--}}
  {{--width:58pt'>&nbsp;</td>--}}
            {{--<td class=xl782608 width=52 style='border-top:none;border-left:none;--}}
  {{--width:39pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr class=xl792608 height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl1312608 width=67 style='height:15.0pt;--}}
  {{--width:50pt'>&nbsp;</td>--}}
            {{--<td class=xl742608 width=68 style='border-top:none;border-left:none;--}}
  {{--width:51pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1352608 width=168 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:127pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1322608 width=166 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:125pt'>&nbsp;</td>--}}
            {{--<td class=xl802608 width=56 style='border-top:none;border-left:none;--}}
  {{--width:42pt'>&nbsp;</td>--}}
            {{--<td class=xl812608 width=59 style='border-top:none;border-left:none;--}}
  {{--width:44pt'>&nbsp;</td>--}}
            {{--<td class=xl772608 width=77 style='border-top:none;border-left:none;--}}
  {{--width:58pt'>&nbsp;</td>--}}
            {{--<td class=xl782608 width=52 style='border-top:none;border-left:none;--}}
  {{--width:39pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr class=xl792608 height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl1312608 width=67 style='height:15.0pt;--}}
  {{--width:50pt'>&nbsp;</td>--}}
            {{--<td class=xl742608 width=68 style='border-top:none;border-left:none;--}}
  {{--width:51pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1352608 width=168 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:127pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1322608 width=166 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:125pt'>&nbsp;</td>--}}
            {{--<td class=xl802608 width=56 style='border-top:none;border-left:none;--}}
  {{--width:42pt'>&nbsp;</td>--}}
            {{--<td class=xl812608 width=59 style='border-top:none;border-left:none;--}}
  {{--width:44pt'>&nbsp;</td>--}}
            {{--<td class=xl772608 width=77 style='border-top:none;border-left:none;--}}
  {{--width:58pt'>&nbsp;</td>--}}
            {{--<td class=xl782608 width=52 style='border-top:none;border-left:none;--}}
  {{--width:39pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr class=xl792608 height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl1312608 width=67 style='height:15.0pt;--}}
  {{--width:50pt'>&nbsp;</td>--}}
            {{--<td class=xl742608 width=68 style='border-top:none;border-left:none;--}}
  {{--width:51pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1352608 width=168 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:127pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1322608 width=166 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:125pt'>&nbsp;</td>--}}
            {{--<td class=xl802608 width=56 style='border-top:none;border-left:none;--}}
  {{--width:42pt'>&nbsp;</td>--}}
            {{--<td class=xl812608 width=59 style='border-top:none;border-left:none;--}}
  {{--width:44pt'>&nbsp;</td>--}}
            {{--<td class=xl772608 width=77 style='border-top:none;border-left:none;--}}
  {{--width:58pt'>&nbsp;</td>--}}
            {{--<td class=xl782608 width=52 style='border-top:none;border-left:none;--}}
  {{--width:39pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr class=xl792608 height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl1312608 width=67 style='height:15.0pt;--}}
  {{--width:50pt'>&nbsp;</td>--}}
            {{--<td class=xl742608 width=68 style='border-top:none;border-left:none;--}}
  {{--width:51pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1352608 width=168 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:127pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1322608 width=166 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:125pt'>&nbsp;</td>--}}
            {{--<td class=xl802608 width=56 style='border-top:none;border-left:none;--}}
  {{--width:42pt'>&nbsp;</td>--}}
            {{--<td class=xl812608 width=59 style='border-top:none;border-left:none;--}}
  {{--width:44pt'>&nbsp;</td>--}}
            {{--<td class=xl772608 width=77 style='border-top:none;border-left:none;--}}
  {{--width:58pt'>&nbsp;</td>--}}
            {{--<td class=xl782608 width=52 style='border-top:none;border-left:none;--}}
  {{--width:39pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr class=xl792608 height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl1312608 width=67 style='height:15.0pt;--}}
  {{--width:50pt'>&nbsp;</td>--}}
            {{--<td class=xl742608 width=68 style='border-top:none;border-left:none;--}}
  {{--width:51pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1352608 width=168 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:127pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1322608 width=166 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:125pt'>&nbsp;</td>--}}
            {{--<td class=xl802608 width=56 style='border-top:none;border-left:none;--}}
  {{--width:42pt'>&nbsp;</td>--}}
            {{--<td class=xl812608 width=59 style='border-top:none;border-left:none;--}}
  {{--width:44pt'>&nbsp;</td>--}}
            {{--<td class=xl772608 width=77 style='border-top:none;border-left:none;--}}
  {{--width:58pt'>&nbsp;</td>--}}
            {{--<td class=xl782608 width=52 style='border-top:none;border-left:none;--}}
  {{--width:39pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr class=xl792608 height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl1312608 width=67 style='height:15.0pt;--}}
  {{--width:50pt'>&nbsp;</td>--}}
            {{--<td class=xl742608 width=68 style='border-top:none;border-left:none;--}}
  {{--width:51pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1352608 width=168 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:127pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1322608 width=166 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:125pt'>&nbsp;</td>--}}
            {{--<td class=xl802608 width=56 style='border-top:none;border-left:none;--}}
  {{--width:42pt'>&nbsp;</td>--}}
            {{--<td class=xl812608 width=59 style='border-top:none;border-left:none;--}}
  {{--width:44pt'>&nbsp;</td>--}}
            {{--<td class=xl772608 width=77 style='border-top:none;border-left:none;--}}
  {{--width:58pt'>&nbsp;</td>--}}
            {{--<td class=xl782608 width=52 style='border-top:none;border-left:none;--}}
  {{--width:39pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr class=xl792608 height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl1312608 width=67 style='height:15.0pt;--}}
  {{--width:50pt'>&nbsp;</td>--}}
            {{--<td class=xl742608 width=68 style='border-top:none;border-left:none;--}}
  {{--width:51pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1352608 width=168 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:127pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1322608 width=166 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:125pt'>&nbsp;</td>--}}
            {{--<td class=xl802608 width=56 style='border-top:none;border-left:none;--}}
  {{--width:42pt'>&nbsp;</td>--}}
            {{--<td class=xl812608 width=59 style='border-top:none;border-left:none;--}}
  {{--width:44pt'>&nbsp;</td>--}}
            {{--<td class=xl772608 width=77 style='border-top:none;border-left:none;--}}
  {{--width:58pt'>&nbsp;</td>--}}
            {{--<td class=xl782608 width=52 style='border-top:none;border-left:none;--}}
  {{--width:39pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr class=xl792608 height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl1312608 width=67 style='height:15.0pt;--}}
  {{--width:50pt'>&nbsp;</td>--}}
            {{--<td class=xl742608 width=68 style='border-top:none;border-left:none;--}}
  {{--width:51pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1352608 width=168 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:127pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1322608 width=166 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:125pt'>&nbsp;</td>--}}
            {{--<td class=xl802608 width=56 style='border-top:none;border-left:none;--}}
  {{--width:42pt'>&nbsp;</td>--}}
            {{--<td class=xl812608 width=59 style='border-top:none;border-left:none;--}}
  {{--width:44pt'>&nbsp;</td>--}}
            {{--<td class=xl772608 width=77 style='border-top:none;border-left:none;--}}
  {{--width:58pt'>&nbsp;</td>--}}
            {{--<td class=xl782608 width=52 style='border-top:none;border-left:none;--}}
  {{--width:39pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr class=xl792608 height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl1312608 width=67 style='height:15.0pt;--}}
  {{--width:50pt'>&nbsp;</td>--}}
            {{--<td class=xl742608 width=68 style='border-top:none;border-left:none;--}}
  {{--width:51pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1352608 width=168 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:127pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1322608 width=166 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:125pt'>&nbsp;</td>--}}
            {{--<td class=xl802608 width=56 style='border-top:none;border-left:none;--}}
  {{--width:42pt'>&nbsp;</td>--}}
            {{--<td class=xl812608 width=59 style='border-top:none;border-left:none;--}}
  {{--width:44pt'>&nbsp;</td>--}}
            {{--<td class=xl772608 width=77 style='border-top:none;border-left:none;--}}
  {{--width:58pt'>&nbsp;</td>--}}
            {{--<td class=xl782608 width=52 style='border-top:none;border-left:none;--}}
  {{--width:39pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr class=xl792608 height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl1312608 width=67 style='height:15.0pt;--}}
  {{--width:50pt'>&nbsp;</td>--}}
            {{--<td class=xl742608 width=68 style='border-top:none;border-left:none;--}}
  {{--width:51pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1352608 width=168 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:127pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1322608 width=166 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:125pt'>&nbsp;</td>--}}
            {{--<td class=xl802608 width=56 style='border-top:none;border-left:none;--}}
  {{--width:42pt'>&nbsp;</td>--}}
            {{--<td class=xl812608 width=59 style='border-top:none;border-left:none;--}}
  {{--width:44pt'>&nbsp;</td>--}}
            {{--<td class=xl772608 width=77 style='border-top:none;border-left:none;--}}
  {{--width:58pt'>&nbsp;</td>--}}
            {{--<td class=xl782608 width=52 style='border-top:none;border-left:none;--}}
  {{--width:39pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr class=xl792608 height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl1382608 style='border-right:.5pt solid black;--}}
  {{--height:15.0pt'>&nbsp;</td>--}}
            {{--<td class=xl822608 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1402608 width=168 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:127pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1322608 width=166 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:125pt'>&nbsp;</td>--}}
            {{--<td class=xl832608 width=56 style='border-left:none;width:42pt'>&nbsp;</td>--}}
            {{--<td class=xl832608 width=59 style='border-left:none;width:44pt'>&nbsp;</td>--}}
            {{--<td class=xl842608 width=77 style='border-left:none;width:58pt'>&nbsp;</td>--}}
            {{--<td class=xl852608 width=52 style='border-left:none;width:39pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr class=xl792608 height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl1382608 style='border-right:.5pt solid black;--}}
  {{--height:15.0pt'>&nbsp;</td>--}}
            {{--<td class=xl822608 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1402608 width=168 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:127pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1322608 width=166 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:125pt'>&nbsp;</td>--}}
            {{--<td class=xl832608 width=56 style='border-left:none;width:42pt'>&nbsp;</td>--}}
            {{--<td class=xl832608 width=59 style='border-left:none;width:44pt'>&nbsp;</td>--}}
            {{--<td class=xl842608 width=77 style='border-left:none;width:58pt'>&nbsp;</td>--}}
            {{--<td class=xl852608 width=52 style='border-left:none;width:39pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr class=xl792608 height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl1382608 style='border-right:.5pt solid black;--}}
  {{--height:15.0pt'>&nbsp;</td>--}}
            {{--<td class=xl822608 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1402608 width=168 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:127pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1322608 width=166 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:125pt'>&nbsp;</td>--}}
            {{--<td class=xl832608 width=56 style='border-left:none;width:42pt'>&nbsp;</td>--}}
            {{--<td class=xl832608 width=59 style='border-left:none;width:44pt'>&nbsp;</td>--}}
            {{--<td class=xl842608 width=77 style='border-left:none;width:58pt'>&nbsp;</td>--}}
            {{--<td class=xl852608 width=52 style='border-left:none;width:39pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr class=xl792608 height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl1382608 style='border-right:.5pt solid black;--}}
  {{--height:15.0pt'>&nbsp;</td>--}}
            {{--<td class=xl822608 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1402608 width=168 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:127pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1322608 width=166 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:125pt'>&nbsp;</td>--}}
            {{--<td class=xl832608 width=56 style='border-left:none;width:42pt'>&nbsp;</td>--}}
            {{--<td class=xl832608 width=59 style='border-left:none;width:44pt'>&nbsp;</td>--}}
            {{--<td class=xl842608 width=77 style='border-left:none;width:58pt'>&nbsp;</td>--}}
            {{--<td class=xl852608 width=52 style='border-left:none;width:39pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr class=xl792608 height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl1312608 width=67 style='height:15.0pt;--}}
  {{--width:50pt'>&nbsp;</td>--}}
            {{--<td class=xl742608 width=68 style='border-top:none;border-left:none;--}}
  {{--width:51pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl812608 width=168 style='border-left:none;width:127pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl1352608 width=166 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:125pt'>&nbsp;</td>--}}
            {{--<td class=xl802608 width=56 style='border-top:none;border-left:none;--}}
  {{--width:42pt'>&nbsp;</td>--}}
            {{--<td class=xl812608 width=59 style='border-top:none;border-left:none;--}}
  {{--width:44pt'>&nbsp;</td>--}}
            {{--<td class=xl812608 width=77 style='border-top:none;border-left:none;--}}
  {{--width:58pt'>&nbsp;</td>--}}
            {{--<td class=xl862608 width=52 style='border-top:none;border-left:none;--}}
  {{--width:39pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        <tr height=11 style='mso-height-source:userset;height:8.25pt'>
            <td colspan=13 height=11 class=xl1432608 style='border-right:1.0pt solid black;
  height:8.25pt'>&nbsp;</td>
        </tr>
        <tr height=38 style='mso-height-source:userset;height:28.5pt'>
            <td colspan=3 height=38 class=xl1472608 width=135 style='border-right:1.0pt solid black;
  height:28.5pt;width:101pt'>SIGNATURE</td>
            <td class=xl652608 width=74 style='width:56pt'>&nbsp;</td>
            <td class=xl652608 width=49 style='width:37pt'>&nbsp;</td>
            <td class=xl652608 width=45 style='width:34pt'>&nbsp;</td>
            <td colspan=2 class=xl1552608 style='border-right:1.0pt solid black'>DATE</td>
            <td colspan=2 class=xl1502608 style='border-right:1.0pt solid black;
  border-left:none'>&nbsp;</td>
            <td colspan=3 class=xl1522608 width=188 style='border-right:1.0pt solid black;
  border-left:none;width:141pt'><span style='mso-spacerun:yes'>  </span>CS FORM
                212 (Revised 2017), Page 2 of 5</td>
        </tr>
        <![if supportMisalignedColumns]>
        <tr height=0 style='display:none'>
            <td width=23 style='width:17pt'></td>
            <td width=44 style='width:33pt'></td>
            <td width=68 style='width:51pt'></td>
            <td width=74 style='width:56pt'></td>
            <td width=49 style='width:37pt'></td>
            <td width=45 style='width:34pt'></td>
            <td width=48 style='width:36pt'></td>
            <td width=30 style='width:23pt'></td>
            <td width=88 style='width:66pt'></td>
            <td width=56 style='width:42pt'></td>
            <td width=59 style='width:44pt'></td>
            <td width=77 style='width:58pt'></td>
            <td width=52 style='width:39pt'></td>
        </tr>
        <![endif]>
    </table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>



<head>
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
    <meta name=ProgId content=Excel.Sheet>
    <meta name=Generator content="Microsoft Excel 15">
    <link rel=File-List href="TemplateC_files/filelist.xml">
    <style id="Template_10068_Styles">
        <!--table
        {mso-displayed-decimal-separator:"\.";
            mso-displayed-thousand-separator:"\,";}
        .xl6510068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:11.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl6610068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl6710068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl6810068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl6910068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:12.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"mm\/dd\/yyyy";
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl7010068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:12.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"0\.0_\)\;\\\(0\.0\\\)";
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl7110068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"Short Date";
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl7210068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"0\.0_\)\;\\\(0\.0\\\)";
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl7310068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"mm\/dd\/yyyy";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl7410068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:0;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl7510068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl7610068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"mm\/dd\/yyyy";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl7710068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:0;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl7810068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:right;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl7910068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl8010068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:right;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl8110068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:11.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl8210068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:7.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl8310068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl8410068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl8510068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl8610068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl8710068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl8810068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:red;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl8910068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:red;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl9010068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:red;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl9110068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl9210068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl9310068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl9410068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:6.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl9510068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:6.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl9610068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl9710068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:red;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl9810068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:red;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl9910068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:red;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl10010068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:11.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl10110068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:11.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl10210068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl10310068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl10410068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl10510068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:white;
            font-size:10.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl10610068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:white;
            font-size:10.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl10710068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:white;
            font-size:10.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl10810068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl10910068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl11010068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl11110068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl11210068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:bottom;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl11310068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:bottom;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl11410068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:6.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl11510068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl11610068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl11710068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl11810068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl11910068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl12010068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl12110068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl12210068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl12310068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl12410068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:12.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl12510068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:12.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl12610068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:12.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl12710068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:12.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl12810068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:12.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl12910068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:12.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl13010068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl13110068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl13210068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl13310068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl13410068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl13510068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl13610068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:white;
            font-size:10.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:#969696;
            mso-pattern:black none;
            white-space:normal;}
        .xl13710068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:white;
            font-size:10.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:normal;}
        .xl13810068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:white;
            font-size:10.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:normal;}
        .xl13910068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:white;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:#969696;
            mso-pattern:black none;
            white-space:normal;}
        .xl14010068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:white;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:normal;}
        .xl14110068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:white;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:normal;}
        .xl14210068
        {color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;
            padding-left:9px;
            mso-char-indent-count:1;}
        .xl14310068
        {color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;
            padding-left:9px;
            mso-char-indent-count:1;}
        .xl14410068
        {color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;
            padding-left:9px;
            mso-char-indent-count:1;}
        .xl14510068
        {color:black;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;
            padding-left:9px;
            mso-char-indent-count:1;}
        .xl14610068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl14710068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl14810068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:7.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl14910068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:7.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl15010068
        {color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;
            padding-left:9px;
            mso-char-indent-count:1;}
        .xl15110068
        {color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;
            padding-left:9px;
            mso-char-indent-count:1;}
        .xl15210068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:red;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl15310068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:red;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl15410068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:red;
            font-size:8.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl15510068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl15610068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl15710068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl15810068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl15910068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl16010068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl16110068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl16210068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl16310068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl16410068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl16510068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:11.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl16610068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:11.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl16710068
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:11.0pt;
            font-weight:700;
            font-style:italic;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        -->
    </style>
</head>

<body>
<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--The following information was generated by Microsoft Excel's Publish as Web
Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="Template_10068" align=center x:publishsource="Excel">

    <table border=0 cellpadding=0 cellspacing=0 width=645 class=xl6553510068
           style='border-collapse:collapse;table-layout:fixed;width:485pt'>
        <col class=xl6553510068 width=26 style='mso-width-source:userset;mso-width-alt:
 950;width:20pt'>
        <col class=xl6553510068 width=151 style='mso-width-source:userset;mso-width-alt:
 5522;width:113pt'>
        <col class=xl6553510068 width=22 style='mso-width-source:userset;mso-width-alt:
 804;width:17pt'>
        <col class=xl6553510068 width=56 style='mso-width-source:userset;mso-width-alt:
 2048;width:42pt'>
        <col class=xl6553510068 width=60 style='mso-width-source:userset;mso-width-alt:
 2194;width:45pt'>
        <col class=xl6553510068 width=55 style='mso-width-source:userset;mso-width-alt:
 2011;width:41pt'>
        <col class=xl6553510068 width=58 style='mso-width-source:userset;mso-width-alt:
 2121;width:44pt'>
        <col class=xl6553510068 width=55 style='mso-width-source:userset;mso-width-alt:
 2011;width:41pt'>
        <col class=xl6553510068 width=18 style='mso-width-source:userset;mso-width-alt:
 658;width:14pt'>
        <col class=xl6553510068 width=32 style='mso-width-source:userset;mso-width-alt:
 1170;width:24pt'>
        <col class=xl6553510068 width=112 style='mso-width-source:userset;mso-width-alt:
 4096;width:84pt'>
        <tr height=4 style='mso-height-source:userset;height:3.0pt'>
            <td colspan=11 height=4 class=xl10210068 width=645 style='border-right:1.0pt solid black;
  height:3.0pt;width:485pt'>&nbsp;</td>
        </tr>
        <tr height=21 style='height:15.75pt'>
            <td colspan=11 height=21 class=xl10510068 style='border-right:1.0pt solid black;
  height:15.75pt'>VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT /
                PEOPLE / VOLUNTARY ORGANIZATION/S</td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.0pt'>
            <td rowspan=2 height=40 class=xl10810068 style='height:30.0pt;border-top:
  none'>29.</td>
            <td colspan=3 rowspan=2 class=xl11010068 width=229 style='border-right:.5pt solid black;
  width:172pt'>NAME &amp; ADDRESS OF ORGANIZATION<span
                        style='mso-spacerun:yes'>                                                                                        </span></td>
            <td colspan=2 rowspan=2 class=xl8310068 width=115 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:86pt'>INCLUSIVE DATES<span
                        style='mso-spacerun:yes'>                                                                                                                          </span></td>
            <td rowspan=3 class=xl11410068 width=58 style='border-bottom:.5pt solid black;
  border-top:none;width:44pt'>NUMBER OF HOURS</td>
            <td colspan=4 rowspan=3 class=xl8710068 width=217 style='border-right:1.0pt solid black;
  border-bottom:.5pt solid black;width:163pt'>POSITION / NATURE OF WORK</td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.0pt'>
        </tr>
        <tr height=18 style='mso-height-source:userset;height:13.5pt'>
            <td height=18 class=xl6710068 style='height:13.5pt'>&nbsp;</td>
            <td colspan=3 class=xl12210068 width=229 style='border-right:.5pt solid black;
  width:172pt'>&nbsp;</td>
            <td class=xl6810068 style='border-top:none'>From</td>
            <td class=xl6610068 style='border-top:none;border-left:none'>To</td>
        </tr>
        @foreach($employeedatavol as $emp_id)
            <tr height=21 style='height:15.75pt'>
                <td colspan=4 height=21 class=xl12410068 width=255 style='border-right:.5pt solid black;
  height:15.75pt;width:192pt'>{{$emp_id->nameAddressOfOrganization}}</td>
                <td class=xl6910068 style='border-top:none;border-left:none'>{{$emp_id->from}} </td>
                <td class=xl6910068 style='border-top:none;border-left:none'>{{$emp_id->to}}</td>
                <td class=xl7010068 style='border-top:none;border-left:none'>{{$emp_id->numberOfHours}}</td>
                <td colspan=4 class=xl12710068 style='border-right:1.0pt solid black;
  border-left:none'>{{$emp_id->position}}</td>
            </tr>
        @endforeach
        {{--<tr height=21 style='height:15.75pt'>--}}
            {{--<td colspan=4 height=21 class=xl12410068 width=255 style='border-right:.5pt solid black;--}}
  {{--height:15.75pt;width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl6910068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl6910068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7010068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=4 class=xl12710068 style='border-right:1.0pt solid black;--}}
  {{--border-left:none'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=4 height=20 class=xl13010068 width=255 style='border-right:.5pt solid black;--}}
  {{--height:15.0pt;width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7110068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7110068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7210068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=4 class=xl13310068 style='border-right:1.0pt solid black;--}}
  {{--border-left:none'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=21 style='height:15.75pt'>--}}
            {{--<td colspan=4 height=21 class=xl13010068 width=255 style='border-right:.5pt solid black;--}}
  {{--height:15.75pt;width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7110068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7110068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7210068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=4 class=xl13310068 style='border-right:1.0pt solid black;--}}
  {{--border-left:none'>&nbsp;</td>--}}
        {{--</tr>--}}
        <tr height=13 style='mso-height-source:userset;height:9.75pt'>
            <td colspan=11 height=13 class=xl8810068 style='border-right:1.0pt solid black;
  height:9.75pt'>&nbsp;</td>
        </tr>
        <tr height=27 style='mso-height-source:userset;height:20.25pt'>
            <td colspan=11 height=27 class=xl13610068 width=645 style='border-right:1.0pt solid black;
  height:20.25pt;width:485pt'>VII.<span style='mso-spacerun:yes'> 
  </span>LEARNING AND DEVELOPMENT (L&amp;D) INTERVENTIONS/TRAINING PROGRAMS
                ATTENDED</td>
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.75pt'>
            <td colspan=11 height=21 class=xl13910068 width=645 style='border-right:1.0pt solid black;
  height:15.75pt;width:485pt'>&nbsp;</td>
        </tr>
        <tr height=24 style='mso-height-source:userset;height:18.0pt'>
            <td rowspan=2 height=58 class=xl10910068 style='height:43.5pt'>30.</td>
            <td colspan=3 rowspan=3 class=xl9210068 width=229 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:172pt'>TITLE OF LEARNING AND DEVELOPMENT
                INTERVENTIONS/TRAINING PROGRAMS<span
                        style='mso-spacerun:yes'>                               </span></td>
            <td colspan=2 rowspan=2 class=xl9210068 width=115 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:86pt'>INCLUSIVE DATES OF ATTENDANCE<span
                        style='mso-spacerun:yes'>                                                                                                 </span></td>
            <td rowspan=3 class=xl9410068 width=58 style='border-bottom:.5pt solid black;
  width:44pt'>NUMBER OF HOURS</td>
            <td rowspan=3 class=xl14810068 width=55 style='border-bottom:.5pt solid black;
  width:41pt'>Type of LD<br>
                <span style='mso-spacerun:yes'>  </span></td>
            <td colspan=3 rowspan=3 class=xl9110068 width=162 style='border-right:1.0pt solid black;
  border-bottom:.5pt solid black;width:122pt'><span
                        style='mso-spacerun:yes'> </span>CONDUCTED/ SPONSORED BY<span
                        style='mso-spacerun:yes'>                                                           </span></td>
        </tr>
        <tr height=34 style='mso-height-source:userset;height:25.5pt'>
        </tr>
        <tr height=18 style='mso-height-source:userset;height:13.5pt'>
            <td height=18 class=xl6710068 style='height:13.5pt'>&nbsp;</td>
            <td class=xl6810068 style='border-top:none'>From</td>
            <td class=xl6610068 style='border-top:none;border-left:none'>To</td>
        </tr>
        @foreach ($employeedatatrain as $emp_id)
            <tr height=20 style='height:15.0pt'>
                <td colspan=4 height=20 class=xl14410068 width=255 style='height:15.0pt;
  width:192pt'>{{$emp_id->titleofTrainingLearning}}</td>
                <td class=xl7310068 style='border-left:none'>{{$emp_id->trainingStart}}</td>
                <td class=xl7310068 style='border-left:none'>{{$emp_id->trainingEnd}}</td>
                <td class=xl7410068 style='border-left:none'>{{$emp_id->numberOfHours}}</td>
                <td class=xl7510068 style='border-top:none;border-left:none'>{{$emp_id->typeOfLP}}</td>
                <td colspan=3 class=xl14210068 width=162 style='border-right:1.0pt solid black;
  border-left:none;width:122pt'>{{$emp_id->conductedSponsoredBy}}</td>
            </tr>
        @endforeach
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=4 height=20 class=xl14410068 width=255 style='height:15.0pt;--}}
  {{--width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7310068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7310068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7410068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7510068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl14210068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=4 height=20 class=xl14410068 width=255 style='height:15.0pt;--}}
  {{--width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7310068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7310068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7410068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7510068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl14210068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=4 height=20 class=xl14410068 width=255 style='height:15.0pt;--}}
  {{--width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7310068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7310068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7410068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7510068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl14210068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=4 height=20 class=xl14410068 width=255 style='height:15.0pt;--}}
  {{--width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7310068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7310068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7410068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7510068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl14210068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=4 height=20 class=xl14410068 width=255 style='height:15.0pt;--}}
  {{--width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7310068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7310068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7410068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7510068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl14210068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=4 height=20 class=xl14410068 width=255 style='height:15.0pt;--}}
  {{--width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7310068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7310068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7410068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7510068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl14210068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=4 height=20 class=xl14410068 width=255 style='height:15.0pt;--}}
  {{--width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7310068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7310068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7410068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7510068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl14210068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=4 height=20 class=xl14410068 width=255 style='height:15.0pt;--}}
  {{--width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7710068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7510068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl15010068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=4 height=20 class=xl14410068 width=255 style='height:15.0pt;--}}
  {{--width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7710068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7510068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl15010068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=4 height=20 class=xl14410068 width=255 style='height:15.0pt;--}}
  {{--width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7710068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7510068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl15010068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=4 height=20 class=xl14410068 width=255 style='height:15.0pt;--}}
  {{--width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7710068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7510068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl15010068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=4 height=20 class=xl14410068 width=255 style='height:15.0pt;--}}
  {{--width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7710068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7510068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl15010068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=4 height=20 class=xl14410068 width=255 style='height:15.0pt;--}}
  {{--width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7710068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7510068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl15010068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=4 height=20 class=xl14410068 width=255 style='height:15.0pt;--}}
  {{--width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7710068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7510068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl15010068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=4 height=20 class=xl14410068 width=255 style='height:15.0pt;--}}
  {{--width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7710068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7510068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl15010068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=4 height=20 class=xl14410068 width=255 style='height:15.0pt;--}}
  {{--width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7710068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7510068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl15010068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=4 height=20 class=xl14410068 width=255 style='height:15.0pt;--}}
  {{--width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7710068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7510068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl15010068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=4 height=20 class=xl14410068 width=255 style='height:15.0pt;--}}
  {{--width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7710068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7510068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl15010068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=4 height=20 class=xl14410068 width=255 style='height:15.0pt;--}}
  {{--width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7710068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7510068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl15010068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=21 style='height:15.75pt'>--}}
            {{--<td colspan=4 height=21 class=xl14410068 width=255 style='height:15.75pt;--}}
  {{--width:192pt'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7610068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7710068 style='border-left:none'>&nbsp;</td>--}}
            {{--<td class=xl7510068 style='border-top:none;border-left:none'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl15010068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        <tr height=21 style='height:15.75pt'>
            <td colspan=11 height=21 class=xl15210068 style='border-right:1.0pt solid black;
  height:15.75pt'>&nbsp;</td>
        </tr>
        <tr height=33 style='mso-height-source:userset;height:24.75pt'>
            <td colspan=11 height=33 class=xl13610068 width=645 style='border-right:1.0pt solid black;
  height:24.75pt;width:485pt'>VIII.<span style='mso-spacerun:yes'> 
  </span>OTHER INFORMATION</td>
        </tr>
        <tr height=51 style='mso-height-source:userset;height:38.25pt'>
            <td height=51 class=xl7810068 style='height:38.25pt'>31.</td>
            <td class=xl7910068 width=151 style='width:113pt'>SPECIAL SKILLS and HOBBIES</td>
            <td class=xl8010068 width=22 style='border-left:none;width:17pt'>32.</td>
            <td colspan=5 class=xl15510068 width=284 style='border-right:.5pt solid black;
  width:213pt'>NON-ACADEMIC DISTINCTIONS / RECOGNITION<span
                        style='mso-spacerun:yes'>                                                                                                                                             </span></td>
            <td class=xl8010068 width=18 style='border-left:none;width:14pt'>33.</td>
            <td colspan=2 class=xl15510068 width=144 style='border-right:1.0pt solid black;
  width:108pt'>MEMBERSHIP IN ASSOCIATION/ORGANIZATION<span
                        style='mso-spacerun:yes'>                                                                                        </span></td>
        </tr>
        @foreach($employeedataotherinfo as $emp_id)
            <tr height=20 style='height:15.0pt'>
                <td colspan=2 height=20 class=xl15710068 width=177 style='height:15.0pt;
  width:133pt'>{{$emp_id->skillsAndHobbies}}</td>
                <td colspan=6 class=xl15910068 width=306 style='border-right:.5pt solid black;
  border-left:none;width:230pt'>{{$emp_id->nonAcademicDistinction}}</td>
                <td colspan=3 class=xl15910068 width=162 style='border-right:1.0pt solid black;
  border-left:none;width:122pt'>{{$emp_id->membership}}</td>
            </tr>
        @endforeach
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl15710068 width=177 style='height:15.0pt;--}}
  {{--width:133pt'>&nbsp;</td>--}}
            {{--<td colspan=6 class=xl15910068 width=306 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:230pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl15910068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl15710068 width=177 style='height:15.0pt;--}}
  {{--width:133pt'>&nbsp;</td>--}}
            {{--<td colspan=6 class=xl15910068 width=306 style='border-right:.5pt solid black;--}}
  {{--border-left:none;width:230pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl9610068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl16410068 width=177 style='border-right:.5pt solid black;--}}
  {{--height:15.0pt;width:133pt'>&nbsp;</td>--}}
            {{--<td colspan=6 class=xl9610068 width=306 style='border-left:none;width:230pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl9610068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl15710068 width=177 style='height:15.0pt;--}}
  {{--width:133pt'>&nbsp;</td>--}}
            {{--<td colspan=6 class=xl9610068 width=306 style='border-left:none;width:230pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl9610068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        {{--<tr height=20 style='height:15.0pt'>--}}
            {{--<td colspan=2 height=20 class=xl15710068 width=177 style='height:15.0pt;--}}
  {{--width:133pt'>&nbsp;</td>--}}
            {{--<td colspan=6 class=xl9610068 width=306 style='border-left:none;width:230pt'>&nbsp;</td>--}}
            {{--<td colspan=3 class=xl9610068 width=162 style='border-right:1.0pt solid black;--}}
  {{--border-left:none;width:122pt'>&nbsp;</td>--}}
        {{--</tr>--}}
        <tr height=11 style='mso-height-source:userset;height:8.25pt'>
            <td colspan=11 height=11 class=xl9710068 style='border-right:1.0pt solid black;
  height:8.25pt'>&nbsp;</td>
        </tr>
        <tr height=37 style='height:27.75pt'>
            <td colspan=2 height=37 class=xl10010068 width=177 style='border-right:1.0pt solid black;
  height:27.75pt;width:133pt'>SIGNATURE</td>
            <td class=xl8110068 width=22 style='width:17pt'>&nbsp;</td>
            <td class=xl8110068 width=56 style='width:42pt'>&nbsp;</td>
            <td class=xl8110068 width=60 style='width:45pt'>&nbsp;</td>
            <td class=xl6510068>DATE</td>
            <td colspan=4 class=xl16510068 style='border-right:1.0pt solid black;
  border-left:none'>&nbsp;</td>
            <td class=xl8210068 width=112 style='border-left:none;width:84pt'><span
                        style='mso-spacerun:yes'>  </span>CS FORM 212 (Revised 2017), Page 3 of 5</td>
        </tr>
        <![if supportMisalignedColumns]>
        <tr height=0 style='display:none'>
            <td width=26 style='width:20pt'></td>
            <td width=151 style='width:113pt'></td>
            <td width=22 style='width:17pt'></td>
            <td width=56 style='width:42pt'></td>
            <td width=60 style='width:45pt'></td>
            <td width=55 style='width:41pt'></td>
            <td width=58 style='width:44pt'></td>
            <td width=55 style='width:41pt'></td>
            <td width=18 style='width:14pt'></td>
            <td width=32 style='width:24pt'></td>
            <td width=112 style='width:84pt'></td>
        </tr>
        <![endif]>
    </table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>



<head>
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
    <meta name=ProgId content=Excel.Sheet>
    <meta name=Generator content="Microsoft Excel 15">
    <link rel=File-List href="TemplateD_files/filelist.xml">
    <!--[if !mso]>
    <style>
        v\:* {behavior:url(#default#VML);}
        o\:* {behavior:url(#default#VML);}
        x\:* {behavior:url(#default#VML);}
        .shape {behavior:url(#default#VML);}
    </style>
    <![endif]-->
    <style id="Template_10327_Styles">
        <!--table
        {mso-displayed-decimal-separator:"\.";
            mso-displayed-thousand-separator:"\,";}
        .font510327
        {color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;}
        .font610327
        {color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:underline;
            text-underline-style:single;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;}
        .font710327
        {color:black;
            font-size:12.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Times New Roman", serif;
            mso-font-charset:0;}
        .xl6510327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl6610327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:6.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl6710327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl6810327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl6910327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl7010327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl7110327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl7210327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl7310327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl7410327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl7510327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:top;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl7610327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:top;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl7710327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl7810327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl7910327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl8010327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl8110327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl8210327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:top;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl8310327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl8410327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl8510327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:top;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl8610327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:top;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl8710327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl8810327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl8910327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:top;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl9010327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl9110327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl9210327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl9310327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:white;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl9410327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl9510327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl9610327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl9710327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:6.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl9810327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl9910327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl10010327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl10110327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl10210327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:#969696;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl10310327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl10410327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl10510327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl10610327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl10710327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl10810327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl10910327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl11010327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl11110327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl11210327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl11310327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl11410327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl11510327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl11610327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl11710327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl11810327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl11910327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl12010327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl12110327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl12210327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl12310327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl12410327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl12510327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl12610327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl12710327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl12810327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl12910327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl13010327
        {padding:0px;
            mso-ignore:padding;
            color:gray;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:top;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl13110327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl13210327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl13310327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:bottom;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl13410327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:bottom;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl13510327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:bottom;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl13610327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:bottom;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl13710327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl13810327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl13910327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl14010327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl14110327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl14210327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl14310327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl14410327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl14510327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl14610327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl14710327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl14810327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl14910327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl15010327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl15110327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl15210327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl15310327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl15410327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl15510327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl15610327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl15710327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl15810327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl15910327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl16010327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl16110327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl16210327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl16310327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:right;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl16410327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:right;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl16510327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:right;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl16610327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl16710327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl16810327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl16910327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl17010327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl17110327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:nowrap;}
        .xl17210327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl17310327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl17410327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:10.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:bottom;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl17510327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl17610327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl17710327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl17810327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl17910327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl18010327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl18110327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl18210327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl18310327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl18410327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl18510327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl18610327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl18710327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:1.0pt solid windowtext;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl18810327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            background:silver;
            mso-pattern:black none;
            white-space:normal;}
        .xl18910327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:1.0pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl19010327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl19110327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl19210327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl19310327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid windowtext;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl19410327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl19510327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl19610327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:bottom;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl19710327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:bottom;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl19810327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:bottom;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl19910327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:bottom;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl20010327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl20110327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:bottom;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl20210327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:bottom;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl20310327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl20410327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl20510327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl20610327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl20710327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:nowrap;}
        .xl20810327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl20910327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl21010327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:bottom;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl21110327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:bottom;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl21210327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:left;
            vertical-align:bottom;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl21310327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:right;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl21410327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl21510327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl21610327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:top;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .xl21710327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:bottom;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl21810327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:bottom;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl21910327
        {padding:0px;
            mso-ignore:padding;
            color:black;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:bottom;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl22010327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl22110327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl22210327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl22310327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:general;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl22410327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl22510327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:general;
            vertical-align:middle;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl22610327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:bottom;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl22710327
        {color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;
            padding-left:9px;
            mso-char-indent-count:1;}
        .xl22810327
        {padding:0px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:"Arial Narrow", sans-serif;
            mso-font-charset:0;
            mso-number-format:"\@";
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:1.0pt solid windowtext;
            border-bottom:1.0pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        -->
    </style>
</head>

<body>
<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--The following information was generated by Microsoft Excel's Publish as Web
Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="Template_10327" align=center x:publishsource="Excel">

    <table border=0 cellpadding=0 cellspacing=0 width=764 class=xl6553510327
           style='border-collapse:collapse;table-layout:fixed;width:574pt'>
        <col class=xl6553510327 width=18 style='mso-width-source:userset;mso-width-alt:
 658;width:14pt'>
        <col class=xl6553510327 width=91 style='mso-width-source:userset;mso-width-alt:
 3328;width:68pt'>
        <col class=xl6553510327 width=129 style='mso-width-source:userset;mso-width-alt:
 4717;width:97pt'>
        <col class=xl6553510327 width=21 style='mso-width-source:userset;mso-width-alt:
 768;width:16pt'>
        <col class=xl6553510327 width=247 style='mso-width-source:userset;mso-width-alt:
 9033;width:185pt'>
        <col class=xl6553510327 width=133 style='mso-width-source:userset;mso-width-alt:
 4864;width:100pt'>
        <col class=xl6553510327 width=15 style='mso-width-source:userset;mso-width-alt:
 548;width:11pt'>
        <col class=xl6553510327 width=33 style='mso-width-source:userset;mso-width-alt:
 1206;width:25pt'>
        <col class=xl6553510327 width=66 style='mso-width-source:userset;mso-width-alt:
 2413;width:50pt'>
        <col class=xl6553510327 width=11 style='mso-width-source:userset;mso-width-alt:
 402;width:8pt'>
        <tr height=4 style='mso-height-source:userset;height:3.0pt'>
            <td colspan=10 height=4 class=xl10010327 width=764 style='border-right:1.0pt solid black;
  height:3.0pt;width:574pt'>&nbsp;</td>
        </tr>
        <tr height=18 style='mso-height-source:userset;height:13.5pt'>
            <td colspan=5 rowspan=4 height=55 class=xl10310327 width=506
                style='border-right:.5pt solid black;height:41.25pt;width:380pt'>34. Are you
                related by consanguinity or affinity to the appointing or recommending
                authority, or to the chief of bureau or office or to the person who has
                immediate supervision over you in the Office, Bureau or Department where you
                will be apppointed,</td>
            <td class=xl19210327>&nbsp;</td>
            <td class=xl19210327>&nbsp;</td>
            <td class=xl19210327>&nbsp;</td>
            <td class=xl19210327>&nbsp;</td>
            <td class=xl19310327>&nbsp;</td>
        </tr>
        <tr height=17 style='mso-height-source:userset;height:12.75pt'>
            <td height=17 class=xl19410327 style='height:12.75pt'></td>
            <td class=xl19410327></td>
            <td class=xl19410327></td>
            <td class=xl19410327></td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl19410327 style='height:12.0pt'></td>
            <td class=xl19410327></td>
            <td class=xl19410327></td>
            <td class=xl19410327></td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=4 style='mso-height-source:userset;height:3.0pt'>
            <td height=4 class=xl19410327 style='height:3.0pt'></td>
            <td class=xl19410327></td>
            <td class=xl19410327></td>
            <td class=xl19410327></td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.25pt'>
            <td colspan=5 height=19 class=xl10910327 width=506 style='border-right:.5pt solid black;
  height:14.25pt;width:380pt'>a. within the third degree?</td>
            <td class=xl19610327></td>
            <td class=xl19710327 colspan=2><img src="..\public\logssets\img\box.png" height="8"/> Yes</td>
            <td class=xl19910327><img src="..\public\logssets\img\check.png" height="8"/> No</td>
            <td class=xl19910327></td>
        </tr>
        <tr height=2 style='mso-height-source:userset;height:1.5pt'>
            <td height=2 class=xl7710327 width=18 style='height:1.5pt;width:14pt'>&nbsp;</td>
            <td class=xl7510327 width=91 style='width:68pt'>&nbsp;</td>
            <td class=xl7510327 width=129 style='width:97pt'>&nbsp;</td>
            <td class=xl7510327 width=21 style='width:16pt'>&nbsp;</td>
            <td class=xl7610327 width=247 style='width:185pt'>&nbsp;</td>
            <td class=xl20010327></td>
            <td class=xl20010327></td>
            <td class=xl20110327></td>
            <td class=xl20110327></td>
            <td class=xl20110327></td>
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.75pt'>
            <td colspan=5 height=21 class=xl10910327 width=506 style='border-right:.5pt solid black;
  height:15.75pt;width:380pt'>b. within the fourth degree (for Local Government
                Unit - Career Employees)?</td>
            <td class=xl20010327></td>
            <td class=xl19710327 colspan=2><img src="..\public\logssets\img\box.png" height="8"/> Yes</td>
            <td class=xl19910327><img src="..\public\logssets\img\check.png" height="8"/> No</td>
            <td class=xl19910327></td>
        </tr>
        <tr height=0 style='display:none;mso-height-source:userset;mso-height-alt:
  75'>
            <td class=xl7710327 width=18 style='width:14pt'>&nbsp;</td>
            <td class=xl7510327 width=91 style='width:68pt'>&nbsp;</td>
            <td class=xl7510327 width=129 style='width:97pt'>&nbsp;</td>
            <td class=xl7510327 width=21 style='width:16pt'>&nbsp;</td>
            <td class=xl7610327 width=247 style='width:185pt'>&nbsp;</td>
            <td class=xl20010327></td>
            <td class=xl20010327></td>
            <td class=xl20010327></td>
            <td class=xl20210327></td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.0pt'>
            <td height=20 class=xl7710327 width=18 style='height:15.0pt;width:14pt'>&nbsp;</td>
            <td class=xl8510327 width=91 style='width:68pt'>&nbsp;</td>
            <td class=xl8510327 width=129 style='width:97pt'>&nbsp;</td>
            <td class=xl8510327 width=21 style='width:16pt'>&nbsp;</td>
            <td class=xl8610327 width=247 style='width:185pt'>&nbsp;</td>
            <td colspan=4 class=xl20310327 width=247 style='border-left:none;width:186pt'><span
                        style='mso-spacerun:yes'>     </span>If YES, give details:</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=14 style='mso-height-source:userset;height:10.5pt'>
            <td height=14 class=xl7710327 width=18 style='height:10.5pt;width:14pt'>&nbsp;</td>
            <td class=xl8510327 width=91 style='width:68pt'>&nbsp;</td>
            <td class=xl8510327 width=129 style='width:97pt'>&nbsp;</td>
            <td class=xl8510327 width=21 style='width:16pt'>&nbsp;</td>
            <td class=xl8610327 width=247 style='width:185pt'>&nbsp;</td>
            <td class=xl20510327 width=133 style='width:100pt'>&nbsp;</td>
            <td class=xl20510327 width=15 style='width:11pt'>&nbsp;</td>
            <td class=xl20510327 width=33 style='width:25pt'>&nbsp;</td>
            <td class=xl20510327 width=66 style='width:50pt'>&nbsp;</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=7 style='mso-height-source:userset;height:5.25pt'>
            <td height=7 class=xl8710327 width=18 style='height:5.25pt;width:14pt'>&nbsp;</td>
            <td class=xl8810327 width=91 style='width:68pt'>&nbsp;</td>
            <td class=xl8810327 width=129 style='width:97pt'>&nbsp;</td>
            <td class=xl8810327 width=21 style='width:16pt'>&nbsp;</td>
            <td class=xl8910327 width=247 style='width:185pt'>&nbsp;</td>
            <td class=xl20610327 width=133 style='border-top:none;width:100pt'>&nbsp;</td>
            <td class=xl20610327 width=15 style='border-top:none;width:11pt'>&nbsp;</td>
            <td class=xl20610327 width=33 style='border-top:none;width:25pt'>&nbsp;</td>
            <td class=xl20610327 width=66 style='border-top:none;width:50pt'>&nbsp;</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.0pt'>
            <td colspan=5 rowspan=4 height=65 class=xl11210327 style='border-right:.5pt solid black;
  height:48.75pt'>35. a. Have you ever been found guilty of any administrative
                offense?</td>
            <td class=xl20010327></td>
            <td class=xl19710327 colspan=2><img src="..\public\logssets\img\box.png" height="8"/> Yes</td>
            <td class=xl19910327><img src="..\public\logssets\img\check.png" height="8"/> No</td>
            <td class=xl19910327></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.25pt'>
            <td colspan=4 height=19 class=xl20310327 width=247 style='height:14.25pt;
  border-left:none;width:186pt'><span style='mso-spacerun:yes'>     </span>If
                YES, give details:<span style='mso-spacerun:yes'> </span></td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.25pt'>
            <td height=19 class=xl20710327 style='height:14.25pt'>&nbsp;</td>
            <td class=xl20710327>&nbsp;</td>
            <td class=xl20710327>&nbsp;</td>
            <td class=xl20710327>&nbsp;</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=7 style='mso-height-source:userset;height:5.25pt'>
            <td height=7 class=xl20810327 width=133 style='height:5.25pt;border-top:none;
  width:100pt'>&nbsp;</td>
            <td class=xl20810327 width=15 style='border-top:none;width:11pt'>&nbsp;</td>
            <td class=xl20810327 width=33 style='border-top:none;width:25pt'>&nbsp;</td>
            <td class=xl20810327 width=66 style='border-top:none;width:50pt'>&nbsp;</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=17 style='mso-height-source:userset;height:12.75pt'>
            <td colspan=5 rowspan=5 height=81 class=xl10910327 width=506
                style='border-right:.5pt solid black;border-bottom:.5pt solid black;
  height:60.75pt;width:380pt'>b. Have you been criminally charged before any
                court?<br>
                <span style='mso-spacerun:yes'>    </span></td>
            <td class=xl20910327 style='border-top:none'>&nbsp;</td>
            <td class=xl19710327 colspan=2><img src="..\public\logssets\img\box.png" height="8"/> Yes</td>
            <td class=xl19910327><img src="..\public\logssets\img\check.png" height="8"/> No</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.25pt'>
            <td colspan=4 height=19 class=xl20310327 width=247 style='height:14.25pt;
  border-left:none;width:186pt'><span style='mso-spacerun:yes'>     </span>If
                YES, give details: ________________________________<span
                        style='mso-spacerun:yes'>  </span>________________________________</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.25pt'>
            <td colspan=3 height=19 class=xl21010327 width=181 style='height:14.25pt;
  border-left:none;width:136pt'>Date Filed:<span
                        style='mso-spacerun:yes'> </span></td>
            <td class=xl21210327 width=66 style='width:50pt'>&nbsp;</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.25pt'>
            <td colspan=3 height=19 class=xl21010327 width=181 style='height:14.25pt;
  border-left:none;width:136pt'>Status of Case/s:</td>
            <td class=xl21210327 width=66 style='width:50pt'>&nbsp;</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=7 style='mso-height-source:userset;height:5.25pt'>
            <td height=7 class=xl21310327 width=133 style='height:5.25pt;width:100pt'>&nbsp;</td>
            <td class=xl21310327 width=15 style='width:11pt'>&nbsp;</td>
            <td class=xl21310327 width=33 style='width:25pt'>&nbsp;</td>
            <td class=xl21410327 width=66 style='border-top:none;width:50pt'>&nbsp;</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=17 style='mso-height-source:userset;height:12.75pt'>
            <td colspan=5 rowspan=4 height=56 class=xl12110327 width=506
                style='border-right:.5pt solid black;border-bottom:.5pt solid black;
  height:42.0pt;width:380pt'>36. Have you ever been convicted of any crime or
                violation of any law, decree, ordinance or regulation by any court or
                tribunal?</td>
            <td class=xl20010327></td>
            <td class=xl19710327 colspan=2><img src="..\public\logssets\img\box.png" height="8"/> Yes</td>
            <td class=xl19910327><img src="..\public\logssets\img\check.png" height="8"/> No</td>
            <td class=xl19910327></td>
        </tr>
        <tr height=15 style='mso-height-source:userset;height:11.25pt'>
            <td colspan=4 height=15 class=xl20310327 width=247 style='height:11.25pt;
  border-left:none;width:186pt'>If YES, give details:
                ________________________________<span style='mso-spacerun:yes'> 
  </span>________________________________</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.0pt'>
            <td height=20 class=xl21510327 width=133 style='height:15.0pt;width:100pt'>&nbsp;</td>
            <td class=xl21510327 width=15 style='width:11pt'>&nbsp;</td>
            <td colspan=2 class=xl21510327 width=99 style='width:75pt'>&nbsp;</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=4 style='mso-height-source:userset;height:3.0pt'>
            <td height=4 class=xl20810327 width=133 style='height:3.0pt;border-top:none;
  width:100pt'>&nbsp;</td>
            <td class=xl21610327 width=15 style='border-top:none;width:11pt'>&nbsp;</td>
            <td class=xl20810327 width=33 style='border-top:none;width:25pt'>&nbsp;</td>
            <td class=xl20810327 width=66 style='border-top:none;width:50pt'>&nbsp;</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.25pt'>
            <td colspan=5 rowspan=4 height=58 class=xl12110327 width=506
                style='border-right:.5pt solid black;border-bottom:.5pt solid black;
  height:43.5pt;width:380pt'>37. Have you ever been separated from the service
                in any of the following modes: resignation, retirement, dropped from the
                rolls, dismissal, termination, end of term, finished contract or phased out
                (abolition) in the public or private sector?</td>
            <td class=xl20010327></td>
            <td class=xl21710327>&#9744; <span style='display:none'>Yes</span></td>
            <td class=xl19810327></td>
            <td class=xl19910327>&#9744; No</td>
            <td class=xl19910327></td>
        </tr>
        <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td colspan=4 height=16 class=xl20310327 width=247 style='height:12.0pt;
  border-left:none;width:186pt'>If YES, give details:</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=15 style='mso-height-source:userset;height:11.25pt'>
            <td height=15 class=xl21510327 width=133 style='height:11.25pt;width:100pt'>&nbsp;</td>
            <td class=xl21510327 width=15 style='width:11pt'>&nbsp;</td>
            <td class=xl21510327 width=33 style='width:25pt'>&nbsp;</td>
            <td class=xl21510327 width=66 style='width:50pt'>&nbsp;</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=8 style='mso-height-source:userset;height:6.0pt'>
            <td height=8 class=xl21810327 style='height:6.0pt;border-top:none'>&nbsp;</td>
            <td class=xl21910327 style='border-top:none'>&nbsp;</td>
            <td class=xl21810327 style='border-top:none'>&nbsp;</td>
            <td class=xl21810327 style='border-top:none'>&nbsp;</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.0pt'>
            <td colspan=5 rowspan=3 height=45 class=xl12110327 width=506
                style='border-right:.5pt solid black;height:33.75pt;width:380pt'>38. a. Have
                you ever been a candidate in a national or local election held within the
                last year (except Barangay election)?</td>
            <td class=xl20010327></td>
            <td class=xl21710327>&#9744; <span style='display:none'>Yes</span></td>
            <td class=xl19810327></td>
            <td class=xl19910327>&#9744; No</td>
            <td class=xl19910327></td>
        </tr>
        <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td colspan=4 height=16 class=xl22010327 style='height:12.0pt;border-left:
  none'>If YES, give details:</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=9 style='mso-height-source:userset;height:6.75pt'>
            <td height=9 class=xl22210327 style='height:6.75pt'></td>
            <td class=xl22210327></td>
            <td class=xl19610327></td>
            <td class=xl19610327></td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.25pt'>
            <td colspan=5 rowspan=3 height=44 class=xl10610327 width=506
                style='border-right:.5pt solid black;border-bottom:.5pt solid black;
  height:33.0pt;width:380pt'>b. Have you resigned from the government service
                during the three (3)-month period before the last election to
                promote/actively campaign for a national or local candidate?</td>
            <td class=xl20010327></td>
            <td class=xl19810327 colspan=2><img src="..\public\logssets\img\box.png" height="8"/> Yes</td>
            <td class=xl19910327><img src="..\public\logssets\img\check.png" height="8"/> No</td>
            <td class=xl19910327></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.25pt'>
            <td colspan=4 height=19 class=xl22010327 style='height:14.25pt;border-left:
  none'>If YES, give details:</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=6 style='mso-height-source:userset;height:4.5pt'>
            <td height=6 class=xl22210327 style='height:4.5pt'></td>
            <td class=xl22210327></td>
            <td class=xl20010327></td>
            <td class=xl22310327>&nbsp;</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td colspan=5 rowspan=4 height=63 class=xl12110327 width=506
                style='border-right:.5pt solid black;border-bottom:.5pt solid black;
  height:47.25pt;width:380pt'>39. Have you acquired the status of an immigrant
                or permanent resident of another country?</td>
            <td class=xl20010327></td>
            <td class=xl19810327 colspan=2><img src="..\public\logssets\img\box.png" height="8"/> Yes</td>
            <td class=xl19910327><img src="..\public\logssets\img\check.png" height="8"/> No</td>
            <td class=xl19910327></td>
        </tr>
        <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td colspan=4 height=16 class=xl20310327 width=247 style='height:12.0pt;
  border-left:none;width:186pt'>If YES, give details (country):<span
                        style='mso-spacerun:yes'> </span></td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.25pt'>
            <td height=19 class=xl21510327 width=133 style='height:14.25pt;width:100pt'>&nbsp;</td>
            <td class=xl21510327 width=15 style='width:11pt'>&nbsp;</td>
            <td class=xl21510327 width=33 style='width:25pt'>&nbsp;</td>
            <td class=xl21510327 width=66 style='width:50pt'>&nbsp;</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=8 style='mso-height-source:userset;height:6.0pt'>
            <td height=8 class=xl20810327 width=133 style='height:6.0pt;border-top:none;
  width:100pt'>&nbsp;</td>
            <td class=xl20810327 width=15 style='border-top:none;width:11pt'>&nbsp;</td>
            <td class=xl20810327 width=33 style='border-top:none;width:25pt'>&nbsp;</td>
            <td class=xl20810327 width=66 style='border-top:none;width:50pt'>&nbsp;</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=36 style='mso-height-source:userset;height:27.0pt'>
            <td colspan=5 rowspan=2 height=37 class=xl12110327 width=506
                style='border-right:.5pt solid black;height:27.75pt;width:380pt'>40. Pursuant
                to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled
                Persons (RA 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please
                answer the following items:</td>
            <td class=xl22410327 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl22510327 style='border-top:none'>&nbsp;</td>
            <td class=xl22510327 style='border-top:none'>&nbsp;</td>
            <td class=xl22510327 style='border-top:none'>&nbsp;</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=1 style='mso-height-source:userset;height:.75pt'>
            <td height=1 class=xl22610327 style='height:.75pt'></td>
            <td class=xl22610327></td>
            <td class=xl22610327></td>
            <td class=xl22610327></td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=15 style='mso-height-source:userset;height:11.25pt'>
            <td colspan=5 rowspan=2 height=31 class=xl10610327 width=506
                style='border-right:.5pt solid black;height:23.25pt;width:380pt'>a. Are you a
                member of any indigenous group?</td>
            <td class=xl20010327></td>
            <td class=xl19710327 colspan=2><img src="..\public\logssets\img\box.png" height="8"/> Yes</td>
            <td class=xl19910327><img src="..\public\logssets\img\check.png" height="8"/> No</td>
            <td class=xl19910327></td>
        </tr>
        <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td colspan=4 height=16 class=xl22010327 style='height:12.0pt;border-left:
  none'>If YES, please specify:</td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=18 style='mso-height-source:userset;height:13.5pt'>
            <td colspan=5 rowspan=2 height=33 class=xl10610327 width=506
                style='border-right:.5pt solid black;height:24.75pt;width:380pt'>b. Are you a
                person with disability?<span style='mso-spacerun:yes'> </span></td>
            <td class=xl20010327></td>
            <td class=xl19710327 colspan=2><img src="..\public\logssets\img\box.png" height="8"/> Yes</td>
            <td class=xl19910327><img src="..\public\logssets\img\check.png" height="8"/> No</td>
            <td class=xl19910327></td>
        </tr>
        <tr height=15 style='mso-height-source:userset;height:11.25pt'>
            <td colspan=4 height=15 class=xl22010327 style='height:11.25pt;border-left:
  none'>If YES, please specify ID No:<span style='mso-spacerun:yes'> </span></td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=18 style='mso-height-source:userset;height:13.5pt'>
            <td colspan=5 rowspan=3 height=43 class=xl10610327 width=506
                style='border-right:.5pt solid black;border-bottom:1.0pt solid black;
  height:32.25pt;width:380pt'>c. Are you a solo parent?<span
                        style='mso-spacerun:yes'> </span></td>
            <td class=xl20010327></td>
            <td class=xl19710327 colspan=2><img src="..\public\logssets\img\box.png" height="8"/> Yes</td>
            <td class=xl19910327><img src="..\public\logssets\img\check.png" height="8"/> No</td>
            <td class=xl19910327></td>
        </tr>
        <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td colspan=4 height=16 class=xl22010327 style='height:12.0pt;border-left:
  none'>If YES, please specify ID No:<span style='mso-spacerun:yes'> </span></td>
            <td class=xl19510327>&nbsp;</td>
        </tr>
        <tr height=9 style='mso-height-source:userset;height:6.75pt'>
            <td height=9 class=xl22710327 style='height:6.75pt'>&nbsp;</td>
            <td class=xl22710327>&nbsp;</td>
            <td class=xl22710327>&nbsp;</td>
            <td class=xl22710327>&nbsp;</td>
            <td class=xl22810327>&nbsp;</td>
        </tr>
        <tr height=18 style='mso-height-source:userset;height:13.5pt'>
            <td colspan=6 height=18 class=xl14010327 width=639 style='border-right:1.0pt solid black;
  height:13.5pt;width:480pt'><!--[if gte vml 1]><v:rect id="Rectangle_x0020_115"
                                                        o:spid="_x0000_s2073" style='position:absolute;margin-left:404.25pt;
   margin-top:7.5pt;width:0;height:15.75pt;z-index:1;visibility:visible;
   mso-wrap-style:none;v-text-anchor:top' o:gfxdata="UEsDBBQABgAIAAAAIQDw94q7/QAAAOIBAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRzUrEMBDH
74LvEOYqbaoHEWm6B6tHFV0fYEimbdg2CZlYd9/edD8u4goeZ+b/8SOpV9tpFDNFtt4puC4rEOS0
N9b1Cj7WT8UdCE7oDI7ekYIdMayay4t6vQvEIrsdKxhSCvdSsh5oQi59IJcvnY8TpjzGXgbUG+xJ
3lTVrdTeJXKpSEsGNHVLHX6OSTxu8/pAEmlkEA8H4dKlAEMYrcaUSeXszI+W4thQZudew4MNfJUx
QP7asFzOFxx9L/lpojUkXjGmZ5wyhjSRJQ8YKGvKv1MWzIkL33VWU9lGfl98J6hz4cZ/uUjzf7Pb
bHuj+ZQu9z/UfAMAAP//AwBQSwMEFAAGAAgAAAAhADHdX2HSAAAAjwEAAAsAAABfcmVscy8ucmVs
c6SQwWrDMAyG74O9g9G9cdpDGaNOb4VeSwe7CltJTGPLWCZt376mMFhGbzvqF/o+8e/2tzCpmbJ4
jgbWTQuKomXn42Dg63xYfYCSgtHhxJEM3Elg372/7U40YalHMvokqlKiGBhLSZ9aix0poDScKNZN
zzlgqWMedEJ7wYH0pm23Ov9mQLdgqqMzkI9uA+p8T9X8hx28zSzcl8Zy0Nz33r6iasfXeKK5UjAP
VAy4LM8w09zU50C/9q7/6ZURE31X/kL8TKv1x6wXNXYPAAAA//8DAFBLAwQUAAYACAAAACEAvTvN
sEIDAADjBwAAEAAAAGRycy9zaGFwZXhtbC54bWykVdlu2zAQfC/QfyD47kiyJTs2IhdJGrUFegRJ
+wG0RNlEKFIgGR8t+u8dklZ6ogVqP1Dr5Wq5OzNcXbzYd5JsubFCq5JmZyklXNW6EWpd0k8fq9E5
JdYx1TCpFS/pgVv6Yvn82cW+MQum6o02BCmUXcBR0o1z/SJJbL3hHbNnuucKu602HXP4a9ZJY9gO
yTuZjNN0mtjecNbYDefuZdyhy5Abp11zKS/DEdHVGt1Fq9ZyObtIfA3eDC/A+NC2y3E6L4r0ac+7
wrbRu2VeRL+3B6cPOIbDHcJD3u+H8b0j9b6kgKY+AKN5MU0zmsQMticdq40uKSUOkVKoB9hxU23v
+1sT7fr99tYQ0ZQ0p0SxDlje8RrIriUnWVbgFbZAgrfWHQFl/wFnx4QaMpFHI0r6parGV8VNlY8q
WKM8vcpHVzf5fFSNJ+c341l1PZ5Mv/p3sumiBhkOSnjTDDVk09+q6AT6tbp1Z7XuEt22ouYDrSA1
y5NQRej1S3r8jfA890s6Sid+8b88rOlXD2YSuh+eQAFm4Nfj9gRhxJMtbP9W1w92qPK3Gv8tvFij
0tcbUMAvDcjfeCWC4FDO8ex4YKjkRzYteCWr3TvdgEf26HQAfd+a7tSSvAyAKYHgimwymc8KSqC6
6SyfzNLUlxaA+rMiAaKvwcf0xrpXXJ9cD/GJSmqg1dAj24KbyNdwhD9O6UpIeWrzoTupTk1DdiWd
F+N4p2JlIXMnHDdEiq6k50F6EU7P+41qQohjQkYbWEp1FKGnO2rQ7a90c/Adr/CECOLw+++7SnaG
9SVVGHeUyDcK+sOccYNhBmM1GHHmltRR8tgbsd6AnCwwY/tLCLESR3Zifb5Sad29O2DMnFhrAKg/
NUsQJ4Bjco0vjqTEOOmb9v6Gt3fYsp/REwg6zoUAPluAASzYlrixJeVqdPsaHycfi08JJasAHUYe
7McBUuuMeMAdVfo+WAhjlmNKwxfPtFqKxovXp7dmvbqWhmyZr+lJI9DCT2ESU1IRd+h5y2pk+ig6
bsl7viN3umMqyqq2f49AUnTjT3VL4uefH3mhTaz9UXmD3sIEsvCGuSQFV+4lcwyUhJ1fvpbBF5Wy
/AYAAP//AwBQSwMEFAAGAAgAAAAhACk4DV0dAQAAnwEAAA8AAABkcnMvZG93bnJldi54bWx0kM1O
wzAQhO9IvIO1SNyom7ZBodSpAhIqqKJSC0gcTWInUfwT2aZNeXo2QFUOcPPuzje749m804pshfO1
NQyiwRCIMLktalMyeH66u0iA+MBNwZU1gsFeeJinpyczPi3szqzFdhNKgibGTzmDKoR2SqnPK6G5
H9hWGJxJ6zQPWLqSFo7v0FwrOhoOL6nmtcENFW/FbSXyZvOuce9NqT8WjateX1bNQj9QlfgyYuz8
rMuugQTRhaNYLpOVzNZZ86gOgi+7+4LBBIhc7N9cXay5D8IxwHyYFpNCihE6lZm8sq5/S2c1cXaH
FGbOrWIQQ99YSelFYHAVj2LEcXLojKPJeBQD7fFgv+EfyV/wPyz9fQcWx39NPwEAAP//AwBQSwEC
LQAUAAYACAAAACEA8PeKu/0AAADiAQAAEwAAAAAAAAAAAAAAAAAAAAAAW0NvbnRlbnRfVHlwZXNd
LnhtbFBLAQItABQABgAIAAAAIQAx3V9h0gAAAI8BAAALAAAAAAAAAAAAAAAAAC4BAABfcmVscy8u
cmVsc1BLAQItABQABgAIAAAAIQC9O82wQgMAAOMHAAAQAAAAAAAAAAAAAAAAACkCAABkcnMvc2hh
cGV4bWwueG1sUEsBAi0AFAAGAAgAAAAhACk4DV0dAQAAnwEAAA8AAAAAAAAAAAAAAAAAmQUAAGRy
cy9kb3ducmV2LnhtbFBLBQYAAAAABAAEAPUAAADjBgAAAAA=
" filled="f" stroked="f">
                    <v:textbox style='mso-direction-alt:auto;mso-fit-shape-to-text:t' inset="0,0,0,0">
                        <div style='text-align:left'><font class="font710327"><span
                                style='mso-spacerun:yes'> </span></font></div>
                    </v:textbox>
                    <x:ClientData ObjectType="Rect">
                        <x:SizeWithCells/>
                    </x:ClientData>
                </v:rect><v:rect id="Rectangle_x0020_119" o:spid="_x0000_s2075" style='position:absolute;
   margin-left:433.5pt;margin-top:7.5pt;width:0;height:15.75pt;z-index:3;
   visibility:visible;mso-wrap-style:none;v-text-anchor:top' o:gfxdata="UEsDBBQABgAIAAAAIQDw94q7/QAAAOIBAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRzUrEMBDH
74LvEOYqbaoHEWm6B6tHFV0fYEimbdg2CZlYd9/edD8u4goeZ+b/8SOpV9tpFDNFtt4puC4rEOS0
N9b1Cj7WT8UdCE7oDI7ekYIdMayay4t6vQvEIrsdKxhSCvdSsh5oQi59IJcvnY8TpjzGXgbUG+xJ
3lTVrdTeJXKpSEsGNHVLHX6OSTxu8/pAEmlkEA8H4dKlAEMYrcaUSeXszI+W4thQZudew4MNfJUx
QP7asFzOFxx9L/lpojUkXjGmZ5wyhjSRJQ8YKGvKv1MWzIkL33VWU9lGfl98J6hz4cZ/uUjzf7Pb
bHuj+ZQu9z/UfAMAAP//AwBQSwMEFAAGAAgAAAAhADHdX2HSAAAAjwEAAAsAAABfcmVscy8ucmVs
c6SQwWrDMAyG74O9g9G9cdpDGaNOb4VeSwe7CltJTGPLWCZt376mMFhGbzvqF/o+8e/2tzCpmbJ4
jgbWTQuKomXn42Dg63xYfYCSgtHhxJEM3Elg372/7U40YalHMvokqlKiGBhLSZ9aix0poDScKNZN
zzlgqWMedEJ7wYH0pm23Ov9mQLdgqqMzkI9uA+p8T9X8hx28zSzcl8Zy0Nz33r6iasfXeKK5UjAP
VAy4LM8w09zU50C/9q7/6ZURE31X/kL8TKv1x6wXNXYPAAAA//8DAFBLAwQUAAYACAAAACEAnicW
BD0DAADeBwAAEAAAAGRycy9zaGFwZXhtbC54bWykVV1P2zAUfZ+0/2D5vSQtTWkrUsRXtkmMIWA/
wE2c1sKxI9v0Y4j/vmO7YWxMm0T7kNxeO9fnnnNyc3yyaSRZcWOFVjntH6SUcFXqSqhFTr/fF70x
JdYxVTGpFc/pllt6Mvv44XhTmSlT5VIbghLKTpHI6dK5dpoktlzyhtkD3XKF1Vqbhjn8NYukMmyN
4o1MBmk6SmxrOKvsknN3EVfoLNTGaedcytNwREzVRjcxKrWcjY8Tj8GH4QEE3+p6lr6k/b+wYvR6
Nsxi3sdd8tV2pMP2UPLXOXzjSLnJKVgpt6Bnko3SPk1iBduShpVG55QSh51SqAfEcVGt7tobE+Py
enVjiKhyOqJEsQY03vISpC4kJ/3+BI+wKQpcWbfjkr2DyYYJ1VUij0bk9KkoBmfZZTHsFYh6w/Rs
2Du7HE56xeBwfDk4Ks4Hh6Nn/0x/NC2hg4MJvlQdhv7oDYpGoF+ra3dQ6ibRdS1K3ikKPfvDJKAI
vT6lu18P97G/pL300F/8bxSu6bMnMwndd3ewgDBI63l7oTDyyaa2vdLlg+1QvsH4f89FjEqfLyEB
PzUQf+lNCIEDnN3Z8cCA5LWaFrqS+fqrrqAje3Q6kL6pTbMvJG8DcEpguCxLs2EG28F1o6Ph4VGa
emiBqL87EiR6DH5Pa6z7xPXeeIgvlFMDr4Ye2QraRL26I/xxShdCyn2bD91JtW8Zss7pJBtkAXBE
Fio3wnFDpGhyOg7Wi3R63S9VFbY4JmSMwaVUOxN6uaMH3eZMV1vf8Rx3mCDOvXe/q2RtWJtThUlH
ifyi4D8I7rrAdMG8C+K4zamj5LE1YrGEOP3QqG1PYcRC7NSJ+DxSad2d22LM7Ik1ENTuWyWYE8Qx
ucDHRlJinPRN+3zF61ss2R/oCQLt5kIgn02hAC5Ylnhjc8pV7+Yzvkt+L74ilMwDdRh5iB87Sq0z
4gHvqNJ3IcI2ZjmmNHLxTKulqLx5fXlrFvNzaciKeUwvHoEXftsmMSUVcduW16xEpXvRcEuu+Zrc
6oapaKvS/nsHiqIbf6qbET///MgLbeLa7pzX+S1MIItsmEtScOUumGOQJKz88aEMueiU2U8AAAD/
/wMAUEsDBBQABgAIAAAAIQDhkg8THQEAAJ8BAAAPAAAAZHJzL2Rvd25yZXYueG1sdJBPS8NAEMXv
gt9hGcGb3bSYEGO3JQoSRRpoVfC4JrtJyP4pu2ub+umdqqUe9LYz896b+e10PmhFNsL5zhoG41EE
RJjK1p1pGDw/3V2kQHzgpubKGsFgJzzMZ6cnU57VdmuWYrMKDcEQ4zPOoA1hnVHqq1Zo7kd2LQzO
pHWaByxdQ2vHtxiuFZ1EUUI17wxuaPla3Lai6lfvGvfeNPqj6F37+lL2hX6gKvXNmLHzsyG/BhLE
EI5i+ZiWMl/m/UIdBF9x9zWDBIgsdm+uq5fcB+EYIB/SIinMEGFQuala6/Zv6awmzm4ZXCJzZRWD
GPaNUkovAoOreBKjHSeHTpLGaRQB3duD/Tb/SP4y/+Olv+/A4vivs08AAAD//wMAUEsBAi0AFAAG
AAgAAAAhAPD3irv9AAAA4gEAABMAAAAAAAAAAAAAAAAAAAAAAFtDb250ZW50X1R5cGVzXS54bWxQ
SwECLQAUAAYACAAAACEAMd1fYdIAAACPAQAACwAAAAAAAAAAAAAAAAAuAQAAX3JlbHMvLnJlbHNQ
SwECLQAUAAYACAAAACEAnicWBD0DAADeBwAAEAAAAAAAAAAAAAAAAAApAgAAZHJzL3NoYXBleG1s
LnhtbFBLAQItABQABgAIAAAAIQDhkg8THQEAAJ8BAAAPAAAAAAAAAAAAAAAAAJQFAABkcnMvZG93
bnJldi54bWxQSwUGAAAAAAQABAD1AAAA3gYAAAAA
" filled="f" stroked="f">
                    <v:textbox style='mso-direction-alt:auto;mso-fit-shape-to-text:t' inset="0,0,0,0">
                        <div style='text-align:left'><font class="font710327"><span
                                style='mso-spacerun:yes'> </span></font></div>
                    </v:textbox>
                    <x:ClientData ObjectType="Rect">
                        <x:SizeWithCells/>
                    </x:ClientData>
                </v:rect><v:rect id="Rectangle_x0020_117" o:spid="_x0000_s2074" style='position:absolute;
   margin-left:434.25pt;margin-top:7.5pt;width:0;height:15.75pt;z-index:2;
   visibility:visible;mso-wrap-style:none;v-text-anchor:top' o:gfxdata="UEsDBBQABgAIAAAAIQDw94q7/QAAAOIBAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRzUrEMBDH
74LvEOYqbaoHEWm6B6tHFV0fYEimbdg2CZlYd9/edD8u4goeZ+b/8SOpV9tpFDNFtt4puC4rEOS0
N9b1Cj7WT8UdCE7oDI7ekYIdMayay4t6vQvEIrsdKxhSCvdSsh5oQi59IJcvnY8TpjzGXgbUG+xJ
3lTVrdTeJXKpSEsGNHVLHX6OSTxu8/pAEmlkEA8H4dKlAEMYrcaUSeXszI+W4thQZudew4MNfJUx
QP7asFzOFxx9L/lpojUkXjGmZ5wyhjSRJQ8YKGvKv1MWzIkL33VWU9lGfl98J6hz4cZ/uUjzf7Pb
bHuj+ZQu9z/UfAMAAP//AwBQSwMEFAAGAAgAAAAhADHdX2HSAAAAjwEAAAsAAABfcmVscy8ucmVs
c6SQwWrDMAyG74O9g9G9cdpDGaNOb4VeSwe7CltJTGPLWCZt376mMFhGbzvqF/o+8e/2tzCpmbJ4
jgbWTQuKomXn42Dg63xYfYCSgtHhxJEM3Elg372/7U40YalHMvokqlKiGBhLSZ9aix0poDScKNZN
zzlgqWMedEJ7wYH0pm23Ov9mQLdgqqMzkI9uA+p8T9X8hx28zSzcl8Zy0Nz33r6iasfXeKK5UjAP
VAy4LM8w09zU50C/9q7/6ZURE31X/kL8TKv1x6wXNXYPAAAA//8DAFBLAwQUAAYACAAAACEAMOlI
1z8DAADhBwAAEAAAAGRycy9zaGFwZXhtbC54bWykVdlu2zAQfC/QfyD47khyfMWIHORSGyBNgyT9
AFqibCIUKZCMjwb59w5JKz1StEDsB2q9XC13Z0bL45NNI8mKGyu0yml2kFLCVakroRY5/fZQ9CaU
WMdUxaRWPKdbbunJ7OOH401lpkyVS20IUig7hSOnS+faaZLYcskbZg90yxV2a20a5vDXLJLKsDWS
NzLpp+kosa3hrLJLzt1F3KGzkBunnXMpT8MR0VUb3USr1HI2OU58Dd4ML8D4Wtezo2F/+LrjHWHT
6PVssPN7u3P6gDSGwx3CQ9afR/GNI+UmpwCm3AKho+EozWgSM9iWNKw0OqeUOERKoR5hx021um9v
TbTLm9WtIaLK6ZASxRogecdL4LqQnGTZGK+wKRJcW7eDk70DzIYJ1WUiT0bk9Lko+mfDy2LQK2D1
BunZoHd2OTjqFf3DyWV/XJz3D0cv/p1sNC1BhYMOrqquhmz0popGoF+ra3dQ6ibRdS1K3pEKSrNB
EqoIvT6nu18Pz4lf0l566Bf/G4Y1ffFgJqH77gkUYAZ2PW6vEEY82dS217p8tF2Vb2r8v+xijUqf
L0EBPzUgf+l1CIJDObuz44Ghkl/ZtOCVzNdfdAUe2ZPTAfRNbZp9S/IyAKYEghsOs8HRGHKB6kbj
weE4TX1pAai/KxIg+hp8TGus+8T13vUQnyinBloNPbIVuIl8dUf445QuhJT7Nh+6k2rfNGSdUz8F
QsGxspC5EY4bIkWT00mQXoTT836pqhDimJDRBpZS7UTo6Y4adJszXW19x3M8IYI4+t79rZK1YW1O
FYYdJfJKQX+YM64zTGfMOyNO3Jw6Sp5aIxZLkJOFRm17CiEWYsdOrM9XKq27d1uMmT1rDQC1+2YJ
4gRwTC5w30hKjJO+ae+veH2HLfsdPYGg3VwI4LMpGMCCbYkvNqdc9W4/42rysbhIKJkH6DDyYD91
kFpnxCO+UaXvg4UwZjmmNHzxTKulqLx4fXprFvNzaciK+ZpeNQIt/BYmMSUVcduW16xEpgfRcEtu
+Jrc6YapKKvS/jsCSdGNP9XNiJ9/fuSFNrG2O+V1egsTyMIb5pIUXLkL5hgoCTt/3JXBF5Uy+wEA
AP//AwBQSwMEFAAGAAgAAAAhAAMVDQUcAQAAnwEAAA8AAABkcnMvZG93bnJldi54bWx0kM1OwzAQ
hO9IvIO1SNyo00KqNNStAhIqCBGpBSSOJrGTKP6JbNOmPD3bQlUOcPPuzje74+m814qshfONNQyG
gwiIMIUtG1MxeHm+u0iA+MBNyZU1gsFWeJjPTk+mPC3txizFehUqgibGp5xBHUKXUuqLWmjuB7YT
BmfSOs0Dlq6ipeMbNNeKjqJoTDVvDG6oeSdua1G0qw+Ne28q/bloXf32mrcL/UBV4qshY+dnfXYN
JIg+HMXyMclltszaJ3UQ7O3uSwYxELnYvrumXHIfhGOA+TAtJoUZRuhVZoraut1bOquJsxsGV5i5
sGqPYyOX0ovAYBKPYsRxcuiMJ/HlKAa6w4P9hn8kf8H/sPT3HVgc/3X2BQAA//8DAFBLAQItABQA
BgAIAAAAIQDw94q7/QAAAOIBAAATAAAAAAAAAAAAAAAAAAAAAABbQ29udGVudF9UeXBlc10ueG1s
UEsBAi0AFAAGAAgAAAAhADHdX2HSAAAAjwEAAAsAAAAAAAAAAAAAAAAALgEAAF9yZWxzLy5yZWxz
UEsBAi0AFAAGAAgAAAAhADDpSNc/AwAA4QcAABAAAAAAAAAAAAAAAAAAKQIAAGRycy9zaGFwZXht
bC54bWxQSwECLQAUAAYACAAAACEAAxUNBRwBAACfAQAADwAAAAAAAAAAAAAAAACWBQAAZHJzL2Rv
d25yZXYueG1sUEsFBgAAAAAEAAQA9QAAAN8GAAAAAA==
" filled="f" stroked="f">
                    <v:textbox style='mso-direction-alt:auto;mso-fit-shape-to-text:t' inset="0,0,0,0">
                        <div style='text-align:left'><font class="font710327"><span
                                style='mso-spacerun:yes'> </span></font></div>
                    </v:textbox>
                    <x:ClientData ObjectType="Rect">
                        <x:SizeWithCells/>
                    </x:ClientData>
                </v:rect><![endif]-->41. REFERENCES</td>
            <td class=xl7110327 style='border-top:none'>&nbsp;</td>
            <td class=xl7110327 style='border-top:none'>&nbsp;</td>
            <td class=xl7110327 style='border-top:none'>&nbsp;</td>
            <td class=xl7210327 style='border-top:none'>&nbsp;</td>
        </tr>
        <tr height=12 style='mso-height-source:userset;height:9.0pt'>
            <td colspan=4 height=12 class=xl15210327 style='border-right:.5pt solid black;
  height:9.0pt'>NAME</td>
            <td class=xl6710327 style='border-top:none;border-left:none'>ADDRESS</td>
            <td class=xl6810327 width=133 style='border-top:none;width:100pt'>TEL. NO.</td>
            <td class=xl9510327></td>
            <td colspan=2 rowspan=5 class=xl17910327 width=99 style='border-right:1.0pt solid black;
  border-bottom:1.0pt solid black;width:75pt'>ID picture taken within the
                last<span style='mso-spacerun:yes'>  </span>6 months 3.5 cm. X 4.5 cm. With
                full and handwritten name tag and signature over printed name. Computer
                generated or photocopied picture is not acceptable.</td>
            <td class=xl7310327>&nbsp;</td>
        </tr>
        <?php
        $refname = [];
        $refaddress = [];
        $reftelephoneNo = [];
        foreach($employeedatareferences as $emp_id) {
            $refname[] = $emp_id->name;
            $refaddress[] = $emp_id->address;
            $reftelephoneNo[] = $emp_id->telephoneNo;
//            if(empty($emp_id->fullname))
//            {
//                break;
//            };
        }?>
        <tr height=15 style='mso-height-source:userset;height:11.25pt'>
            <td colspan=4 height=15 class=xl15510327 width=259 style='border-right:.5pt solid black;
  height:11.25pt;width:195pt'><?php if(!empty($refname[0])){ echo $refname[0];} ?></td>
            <td class=xl7810327 width=247 style='border-top:none;border-left:none;
  width:185pt'><?php if(!empty($refaddress[0])){ echo $refaddress[0];} ?></td>
            <td class=xl6910327 style='border-top:none'><?php if(!empty($reftelephoneNo[0])){ echo $reftelephoneNo[0];} ?></td>
            <td class=xl9510327></td>
            <td class=xl7310327>&nbsp;</td>
        </tr>
        <tr height=13 style='mso-height-source:userset;height:9.75pt'>
            <td colspan=4 height=13 class=xl15510327 width=259 style='border-right:.5pt solid black;
  height:9.75pt;width:195pt'><?php if(!empty($refname[1])){ echo $refname[1];} ?></td>
            <td class=xl7810327 width=247 style='border-top:none;border-left:none;
  width:185pt'><?php if(!empty($refaddress[1])){ echo $refaddress[1];} ?></td>
            <td class=xl6910327 style='border-top:none'><?php if(!empty($reftelephoneNo[1])){ echo $reftelephoneNo[1];} ?></td>
            <td class=xl9510327></td>
            <td class=xl7310327>&nbsp;</td>
        </tr>
        <tr height=15 style='mso-height-source:userset;height:11.25pt'>
            <td colspan=4 height=15 class=xl12710327 width=259 style='border-right:.5pt solid black;
  height:11.25pt;width:195pt'><?php if(!empty($refname[2])){ echo $refname[2];} ?></td>
            <td class=xl7810327 width=247 style='border-top:none;border-left:none;
  width:185pt'><?php if(!empty($refaddress[2])){ echo $refaddress[2];} ?></td>
            <td class=xl6910327 style='border-top:none'><?php if(!empty($reftelephoneNo[2])){ echo $reftelephoneNo[2];} ?></td>
            <td class=xl9510327></td>
            <td class=xl7310327>&nbsp;</td>
        </tr>
        <tr height=53 style='mso-height-source:userset;height:39.75pt'>
            <td colspan=6 rowspan=3 height=81 class=xl14310327 width=639
                style='border-right:1.0pt solid black;border-bottom:1.0pt solid black;
  height:60.75pt;width:480pt'>42. I declare under oath that I have personally
                accomplished this Personal Data Sheet which is a true, correct and complete
                statement pursuant to the provisions of pertinent laws, rules and regulations
                of the Republic of the Philippines. I authorize the agency head / authorized
                representative to verify/validate the contents stated herein. I<span
                        style='mso-spacerun:yes'>  </span>agree that any misrepresentation made in
                this document and its attachments shall cause the filing of
                administrative/criminal case/s against me.</td>
            <td class=xl9510327></td>
            <td class=xl7310327>&nbsp;</td>
        </tr>
        <tr height=18 style='mso-height-source:userset;height:13.5pt'>
            <td height=18 class=xl9510327 style='height:13.5pt'></td>
            <td colspan=2 class=xl13010327>PHOTO</td>
            <td class=xl7310327>&nbsp;</td>
        </tr>
        <tr height=10 style='mso-height-source:userset;height:7.5pt'>
            <td height=10 class=xl9510327 style='height:7.5pt'></td>
            <td colspan=2 rowspan=6 class=xl13110327 style='border-right:1.0pt solid black;
  border-bottom:.5pt solid black'>&nbsp;</td>
            <td class=xl7310327>&nbsp;</td>
        </tr>
        <tr height=8 style='mso-height-source:userset;height:6.0pt'>
            <td height=8 class=xl9810327 style='height:6.0pt;border-top:none'>&nbsp;</td>
            <td class=xl9910327 style='border-top:none'>&nbsp;</td>
            <td class=xl9910327 style='border-top:none'>&nbsp;</td>
            <td class=xl9910327 style='border-top:none'>&nbsp;</td>
            <td class=xl9910327 style='border-top:none'>&nbsp;</td>
            <td class=xl9910327 style='border-top:none'>&nbsp;</td>
            <td class=xl9510327></td>
            <td class=xl7310327>&nbsp;</td>
        </tr>
        <tr height=17 style='mso-height-source:userset;height:12.75pt'>
            <td rowspan=5 height=74 class=xl17710327 style='height:55.5pt'>&nbsp;</td>
            <td colspan=2 class=xl18710327 width=220 style='border-right:1.0pt solid black;
  width:165pt'>Government Issued ID</td>
            <td class=xl7010327 width=21 style='width:16pt'>&nbsp;</td>
            <td class=xl7910327>&nbsp;</td>
            <td class=xl8010327>&nbsp;</td>
            <td class=xl9510327></td>
            <td class=xl7310327>&nbsp;</td>
        </tr>
        <tr height=14 style='mso-height-source:userset;height:10.5pt'>
            <td colspan=2 height=14 class=xl18310327 style='border-right:1.0pt solid black;
  height:10.5pt'>Government Issued ID:<span style='mso-spacerun:yes'> </span></td>
            <td class=xl8410327></td>
            <td class=xl8110327>&nbsp;</td>
            <td class=xl8210327>&nbsp;</td>
            <td class=xl9510327></td>
            <td class=xl7310327>&nbsp;</td>
        </tr>
        <tr height=14 style='mso-height-source:userset;height:10.5pt'>
            <td colspan=2 height=14 class=xl17510327 style='border-right:1.0pt solid black;
  height:10.5pt'>ID/License/Passport No.:<span
                        style='mso-spacerun:yes'> </span></td>
            <td class=xl8410327></td>
            <td colspan=2 class=xl18510327 width=380 style='border-right:1.0pt solid black;
  width:285pt'>Signature</td>
            <td class=xl9510327></td>
            <td class=xl7310327>&nbsp;</td>
        </tr>
        <tr height=17 style='mso-height-source:userset;height:12.75pt'>
            <td colspan=2 height=17 class=xl17510327 style='border-right:1.0pt solid black;
  height:12.75pt'>Date/Place of Issuance:</td>
            <td class=xl8410327></td>
            <td colspan=2 class=xl16610327 style='border-right:1.0pt solid black'>&nbsp;</td>
            <td class=xl9510327></td>
            <td class=xl7310327>&nbsp;</td>
        </tr>
        <tr height=12 style='mso-height-source:userset;height:9.0pt'>
            <td height=12 class=xl8310327 style='height:9.0pt'>&nbsp;</td>
            <td class=xl7410327>&nbsp;</td>
            <td class=xl8410327></td>
            <td colspan=2 class=xl16810327 width=380 style='border-right:1.0pt solid black;
  width:285pt'>Date Accomplished</td>
            <td class=xl9510327></td>
            <td colspan=2 class=xl17010327 style='border-right:1.0pt solid black'>Right
                Thumbmark</td>
            <td class=xl7310327>&nbsp;</td>
        </tr>
        <tr height=11 style='mso-height-source:userset;height:8.25pt'>
            <td colspan=6 height=11 class=xl17810327 style='height:8.25pt'>&nbsp;</td>
            <td class=xl9610327>&nbsp;</td>
            <td class=xl6510327>&nbsp;</td>
            <td class=xl6510327>&nbsp;</td>
            <td class=xl7410327>&nbsp;</td>
        </tr>
        <tr height=15 style='mso-height-source:userset;height:11.25pt'>
            <td colspan=10 height=15 class=xl18910327 width=764 style='border-right:1.0pt solid black;
  height:11.25pt;width:574pt'>SUBSCRIBED AND SWORN to before me this<span
                        style='mso-spacerun:yes'>  </span>____<font class="font610327"> </font><font
                        class="font510327">day of ______</font><font class="font610327">,</font><font
                        class="font510327"> affiant exhibiting his/her validly issued government ID
                    as indicated above.</font></td>
        </tr>
        <tr height=43 style='mso-height-source:userset;height:32.25pt'>
            <td height=43 class=xl9410327 style='height:32.25pt'>&nbsp;</td>
            <td class=xl9510327></td>
            <td class=xl9510327></td>
            <td colspan=3 class=xl17210327 style='border-right:1.0pt solid black'>&nbsp;</td>
            <td class=xl9010327>&nbsp;</td>
            <td class=xl9010327>&nbsp;</td>
            <td class=xl9010327>&nbsp;</td>
            <td class=xl9110327>&nbsp;</td>
        </tr>
        <tr height=18 style='mso-height-source:userset;height:13.5pt'>
            <td height=18 class=xl9410327 style='height:13.5pt'>&nbsp;</td>
            <td class=xl9510327></td>
            <td class=xl9510327></td>
            <td colspan=3 class=xl16010327 width=401 style='border-right:1.0pt solid black;
  width:301pt'>Person Administering Oath</td>
            <td class=xl9010327>&nbsp;</td>
            <td class=xl9010327>&nbsp;</td>
            <td class=xl9010327>&nbsp;</td>
            <td class=xl9110327>&nbsp;</td>
        </tr>
        <tr class=xl6610327 height=8 style='mso-height-source:userset;height:6.0pt'>
            <td height=8 class=xl8310327 style='height:6.0pt'>&nbsp;</td>
            <td class=xl9610327>&nbsp;</td>
            <td class=xl9610327>&nbsp;</td>
            <td class=xl9710327 style='border-top:none'>&nbsp;</td>
            <td class=xl9710327 style='border-top:none'>&nbsp;</td>
            <td class=xl9710327 style='border-top:none'>&nbsp;</td>
            <td class=xl9210327>&nbsp;</td>
            <td class=xl9210327>&nbsp;</td>
            <td class=xl9210327>&nbsp;</td>
            <td class=xl9310327>&nbsp;</td>
        </tr>
        <tr height=14 style='mso-height-source:userset;height:10.5pt'>
            <td colspan=10 height=14 class=xl16310327 style='border-right:1.0pt solid black;
  height:10.5pt'>CS FORM 212 (Revised 2017),<span style='mso-spacerun:yes'> 
  </span>Page 5 of 5</td>
        </tr>
        <![if supportMisalignedColumns]>
        <tr height=0 style='display:none'>
            <td width=18 style='width:14pt'></td>
            <td width=91 style='width:68pt'></td>
            <td width=129 style='width:97pt'></td>
            <td width=21 style='width:16pt'></td>
            <td width=247 style='width:185pt'></td>
            <td width=133 style='width:100pt'></td>
            <td width=15 style='width:11pt'></td>
            <td width=33 style='width:25pt'></td>
            <td width=66 style='width:50pt'></td>
            <td width=11 style='width:8pt'></td>
        </tr>
        <![endif]>
    </table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>
