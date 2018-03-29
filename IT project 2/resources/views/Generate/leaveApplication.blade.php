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


$user = Auth::user()->username;

$employeedataf = DB::table('employee')
    ->join('familybackground','employee.emp_id', '=', 'familybackground.emp_id')
    ->where('familybackground.emp_id', Auth::user()->username)
    ->first();

$employeeservrec = DB::table('employee')
    ->join('service_record','employee.emp_id', '=', 'service_record.emp_id')
    ->where('service_record.emp_id', Auth::user()->username)
    ->get();




view ('../Generate/serviceRecord1') ->with ("employeedataf", $employeedataf) ->with ("employeeservrec", $employeeservrec);

//        return redirect ("/download-pdf1","Controller@downloadPDF1");


?><html xmlns:o="urn:schemas-microsoft-com:office:office"
        xmlns:x="urn:schemas-microsoft-com:office:excel"
        xmlns="http://www.w3.org/TR/REC-html40">

<head>
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
    <meta name=ProgId content=Excel.Sheet>
    <meta name=Generator content="Microsoft Excel 15">
    <link rel=File-List href="APPLICATION%20FOR%20LEAVE_files/filelist.xml">
    <style id="APPLICATION FOR LEAVE_673_Styles">
        <!--table
        {mso-displayed-decimal-separator:"\.";
            mso-displayed-thousand-separator:"\,";}
        .xl15673
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
            white-space:nowrap;}
        .xl63673
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:15.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl64673
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:10.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl65673
        {color:black;
            font-size:16.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;
            padding-left:135px;
            mso-char-indent-count:15;}
        .xl66673
        {color:black;
            font-size:10.0pt;
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
            white-space:nowrap;
            padding-left:135px;
            mso-char-indent-count:15;}
        .xl67673
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:15.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl68673
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:10.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl69673
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
            text-align:center;
            vertical-align:bottom;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl70673
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
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl71673
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
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl72673
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
        .xl73673
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
        .xl74673
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
        .xl75673
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
        .xl76673
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:700;
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
        .xl77673
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
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl78673
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
            text-align:center;
            vertical-align:bottom;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl79673
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
            text-align:left;
            vertical-align:bottom;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl80673
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
            text-align:left;
            vertical-align:bottom;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl81673
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
            text-align:left;
            vertical-align:bottom;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl82673
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:12.0pt;
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
        .xl83673
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:700;
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
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl84673
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
            text-align:right;
            vertical-align:bottom;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl85673
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
            text-align:center;
            vertical-align:bottom;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl86673
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
            text-align:center;
            vertical-align:bottom;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:none;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl87673
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:10.0pt;
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
        .xl88673
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:12.0pt;
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
        .xl89673
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:12.0pt;
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
        .xl90673
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
            text-align:center;
            vertical-align:bottom;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl91673
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
            text-align:center;
            vertical-align:bottom;
            border-top:.5pt solid windowtext;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl92673
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
            text-align:center;
            vertical-align:bottom;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl93673
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
            text-align:center;
            vertical-align:bottom;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .xl94673
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:12.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Calibri, sans-serif;
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
        .xl95673
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:12.0pt;
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
        .xl96673
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:12.0pt;
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
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl97673
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:12.0pt;
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
        .xl98673
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
            text-align:center;
            vertical-align:bottom;
            border-top:.5pt solid windowtext;
            border-right:.5pt solid windowtext;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .xl99673
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
            text-align:center;
            vertical-align:bottom;
            border-top:none;
            border-right:.5pt solid windowtext;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
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

<div id="APPLICATION FOR LEAVE_673" align=center x:publishsource="Excel">

    <table border=0 cellpadding=0 cellspacing=0 width=710 style='border-collapse:
 collapse;table-layout:fixed;width:533pt'>
        <col class=xl72673 width=4 style='mso-width-source:userset;mso-width-alt:146;
 width:3pt'>
        <col width=71 style='mso-width-source:userset;mso-width-alt:2596;width:53pt'>
        <col width=43 style='mso-width-source:userset;mso-width-alt:1572;width:32pt'>
        <col width=56 style='mso-width-source:userset;mso-width-alt:2048;width:42pt'>
        <col width=4 style='mso-width-source:userset;mso-width-alt:146;width:3pt'>
        <col width=64 style='width:48pt'>
        <col width=4 style='mso-width-source:userset;mso-width-alt:146;width:3pt'>
        <col width=64 style='width:48pt'>
        <col width=4 style='mso-width-source:userset;mso-width-alt:146;width:3pt'>
        <col width=64 style='width:48pt'>
        <col width=12 span=2 style='mso-width-source:userset;mso-width-alt:438;
 width:9pt'>
        <col width=64 style='mso-width-source:userset;mso-width-alt:2340;width:48pt'>
        <col width=58 style='mso-width-source:userset;mso-width-alt:2121;width:44pt'>
        <col width=36 style='mso-width-source:userset;mso-width-alt:1316;width:27pt'>
        <col width=12 style='mso-width-source:userset;mso-width-alt:438;width:9pt'>
        <col width=62 style='mso-width-source:userset;mso-width-alt:2267;width:47pt'>
        <col width=64 style='width:48pt'>
        <col width=12 style='mso-width-source:userset;mso-width-alt:438;width:9pt'>
        <tr height=14 style='mso-height-source:userset;height:10.5pt'>
            <td height=14 class=xl72673 width=4 style='height:10.5pt;width:3pt'>&nbsp;</td>
            <td class=xl63673 width=71 style='width:53pt'></td>
            <td class=xl15673 width=43 style='width:32pt'></td>
            <td class=xl15673 width=56 style='width:42pt'></td>
            <td class=xl15673 width=4 style='width:3pt'></td>
            <td class=xl15673 width=64 style='width:48pt'></td>
            <td class=xl15673 width=4 style='width:3pt'></td>
            <td class=xl15673 width=64 style='width:48pt'></td>
            <td class=xl15673 width=4 style='width:3pt'></td>
            <td class=xl15673 width=64 style='width:48pt'></td>
            <td class=xl15673 width=12 style='width:9pt'></td>
            <td class=xl15673 width=12 style='width:9pt'></td>
            <td class=xl15673 width=64 style='width:48pt'></td>
            <td class=xl15673 width=58 style='width:44pt'></td>
            <td class=xl15673 width=36 style='width:27pt'></td>
            <td class=xl15673 width=12 style='width:9pt'></td>
            <td class=xl15673 width=62 style='width:47pt'></td>
            <td class=xl15673 width=64 style='width:48pt'></td>
            <td class=xl15673 width=12 style='width:9pt'></td>
        </tr>
        <tr height=29 style='mso-height-source:userset;height:21.75pt'>
            <td height=29 class=xl72673 style='height:21.75pt'>&nbsp;</td>
            <td colspan=17 rowspan=2 class=xl67673 width=694 style='width:521pt'><span
                        lang=EN-US style='line-height:115%'>DEPARTMENT OF THE INTERIOR AND LOCAL
  GOVERNMENT<br>
    CORDILLERA ADMINISTRATIVE REGION</span></td>
            <td class=xl15673></td>
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.75pt'>
            <td height=21 class=xl72673 style='height:15.75pt'>&nbsp;</td>
            <td class=xl15673></td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td colspan=17 rowspan=3 class=xl68673 width=694 style='width:521pt'>Barangay
                Center, Upper Session Rd Cor, North Drive, Baguio City<br>
                Telefax Nos. (074) 442-5372 • 443-9840 •442-9030 Tel Nos. (074) 442-3515 •
                442-0085<br>
                E-mail Addresses: car_dilg@yahoo.com.ph •dilg_car_pdmd@yahoo.com</td>
            <td class=xl15673></td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl15673></td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl15673></td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl64673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl64673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
        </tr>
        <tr height=19 style='mso-height-source:userset;height:14.25pt'>
            <td height=19 class=xl72673 style='height:14.25pt'>&nbsp;</td>
            <td class=xl65673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl66673></td>
            <td class=xl66673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl76673></td>
            <td class=xl76673></td>
            <td class=xl76673></td>
            <td class=xl76673></td>
            <td colspan=6 class=xl83673>APPLICATION FOR LEAVE</td>
            <td class=xl15673></td>
            <td colspan=4 class=xl69673>CSC Form No. (Revised 1985)</td>
            <td class=xl15673></td>
        </tr>
        <tr height=6 style='mso-height-source:userset;height:5.1pt'>
            <td height=6 class=xl72673 style='height:5.1pt'>&nbsp;</td>
            <td class=xl70673><span lang=EN-US style='line-height:115%'><span lang=EN-US
                                                                              style='line-height:115%'>&nbsp;</span></td>
            <td class=xl70673>&nbsp;</td>
            <td class=xl70673>&nbsp;</td>
            <td class=xl70673>&nbsp;</td>
            <td class=xl70673>&nbsp;</td>
            <td class=xl70673>&nbsp;</td>
            <td class=xl70673 style='border-top:none'>&nbsp;</td>
            <td class=xl70673 style='border-top:none'>&nbsp;</td>
            <td class=xl70673 style='border-top:none'>&nbsp;</td>
            <td class=xl71673 style='border-top:none'>&nbsp;</td>
            <td class=xl70673 style='border-top:none'>&nbsp;</td>
            <td class=xl70673 style='border-top:none'>&nbsp;</td>
            <td class=xl70673>&nbsp;</td>
            <td class=xl70673>&nbsp;</td>
            <td class=xl70673>&nbsp;</td>
            <td class=xl70673>&nbsp;</td>
            <td class=xl70673>&nbsp;</td>
            <td class=xl71673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=10 class=xl72673 style='height:5.0pt'>&nbsp;</td>
            <td class=xl15673><span lang=EN-US style='line-height:115%'>Name</span></td>
            <td class=xl15673></td>
            <td colspan=7 class=xl90673 style='border-right:.5pt solid black'>{{ $employeedataf->givenname.' '.substr($employeedataf->middlename,1). ' '.$employeedataf->lastname}}</td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td colspan=2 class=xl81673>TYPE OF LEAVE</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=6 style='mso-height-source:userset;height:5.1pt'>
            <td height=6 class=xl72673 style='height:5.1pt'>&nbsp;</td>
            <td class=xl15673></span><span lang=EN-US style='line-height:115%'></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl15673><span lang=EN-US style='line-height:115%'>Signature</span></td>
            <td class=xl15673></td>
            <td colspan=7 class=xl90673 style='border-right:.5pt solid black'>&nbsp;</span></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl77673>&nbsp;</td>
            <td class=xl81673 colspan=2>VACATION</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=6 style='mso-height-source:userset;height:5.1pt'>
            <td height=6 class=xl72673 style='height:5.1pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=21 style='height:15.75pt'>
            <td height=21 class=xl72673 style='height:15.75pt'>&nbsp;</td>
            <td class=xl82673><span lang=EN-US>Position</span></td>
            <td class=xl15673></td>
            <td colspan=7 class=xl90673 style='border-right:.5pt solid black'>&nbsp;</td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl77673>&nbsp;</td>
            <td colspan=2 class=xl81673>within the PHL<span
                        style='mso-spacerun:yes'> </span></td>
            <td class=xl15673></td>
            <td class=xl77673>&nbsp;</td>
            <td class=xl15673>Abroad</td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=6 style='mso-height-source:userset;height:5.1pt'>
            <td height=6 class=xl72673 style='height:5.1pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl15673></span><span lang=EN-US style='line-height:115%'>Mo. Salary</span></td>
            <td class=xl15673></td>
            <td colspan=7 class=xl90673 style='border-right:.5pt solid black'>&nbsp;</td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td colspan=2 class=xl90673 style='border-right:.5pt solid black'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td colspan=2 class=xl90673 style='border-right:.5pt solid black'>&nbsp;</td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=6 style='mso-height-source:userset;height:5.1pt'>
            <td height=6 class=xl72673 style='height:5.1pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673><span lang=EN-US style='line-height:115%'></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td colspan=2 class=xl81673>Office/Division</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td colspan=5 class=xl90673 style='border-right:.5pt solid black'>&nbsp;</td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=6 style='mso-height-source:userset;height:5.1pt'>
            <td height=6 class=xl72673 style='height:5.1pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td colspan=2 class=xl81673>Date of Filling</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td colspan=5 class=xl90673 style='border-right:.5pt solid black'><span
                        lang=EN-US style='line-height:115%'>&nbsp;</span></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl77673>&nbsp;</td>
            <td class=xl15673>SICK</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=6 style='mso-height-source:userset;height:5.1pt'>
            <td height=6 class=xl72673 style='height:5.1pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td colspan=5 class=xl81673>No. of working days applied for</td>
            <td class=xl15673></td>
            <td colspan=3 class=xl90673 style='border-right:.5pt solid black'>&nbsp;</td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl77673>&nbsp;</td>
            <td colspan=2 class=xl79673 style='border-left:none'>Out Patient<span
                        style='mso-spacerun:yes'> </span></td>
            <td class=xl15673></td>
            <td class=xl77673>&nbsp;</td>
            <td colspan=2 class=xl79673 style='border-right:.5pt solid black;border-left:
  none'>In Hospital<span style='mso-spacerun:yes'> </span></td>
        </tr>
        <tr height=6 style='mso-height-source:userset;height:5.1pt'>
            <td height=6 class=xl72673 style='height:5.1pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=21 style='height:15.75pt'>
            <td height=21 class=xl72673 style='height:15.75pt'>&nbsp;</td>
            <td colspan=2 class=xl88673><span lang=EN-US>Inclusive Dates</span></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td colspan=5 class=xl90673 style='border-right:.5pt solid black'>&nbsp;</td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td colspan=2 class=xl90673 style='border-right:.5pt solid black'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td colspan=2 class=xl90673 style='border-right:.5pt solid black'>&nbsp;</td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=6 style='mso-height-source:userset;height:5.1pt'>
            <td height=6 class=xl72673 style='height:5.1pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td colspan=2 class=xl81673><span lang=EN-US style='line-height:115%'>COMMUTATION</span></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td rowspan=2 class=xl98673 style='border-bottom:.5pt solid black'><span
                        lang=EN-US style='line-height:115%'>&nbsp;</span></td>
            <td class=xl72673 style='border-left:none'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td rowspan=2 class=xl98673 style='border-bottom:.5pt solid black'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td colspan=2 class=xl81673>Requested</td>
            <td class=xl80673>&nbsp;</td>
            <td class=xl72673 style='border-left:none'>&nbsp;</td>
            <td colspan=3 class=xl81673>Not Requested</td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl15673><span lang=EN-US style='line-height:115%'></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td colspan=3 class=xl81673>FOR PERSONNEL USE ONLY:<span
                        style='mso-spacerun:yes'> </span></td>
            <td class=xl81673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=21 style='height:15.75pt'>
            <td height=21 class=xl72673 style='height:15.75pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl81673>VL</td>
            <td class=xl81673></td>
            <td class=xl81673>SL</td>
            <td class=xl81673></td>
            <td class=xl84673>TOTAL</td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td colspan=4 class=xl88673><span lang=EN-US>ACTION ON APPLICATION</span></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td colspan=2 class=xl69673><span lang=EN-US style='line-height:115%'><span
                            lang=EN-US style='line-height:115%'><span lang=EN-US style='line-height:115%'><span
                                    lang=EN-US>Leave credits as of</span></span></span></span></span></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td colspan=2 class=xl87673><span lang=EN-US>Recommending:</span></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl77673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl77673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl77673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl77673>&nbsp;</td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl77673>&nbsp;</td>
            <td class=xl15673 colspan=2>Approval</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=6 style='mso-height-source:userset;height:5.1pt'>
            <td height=6 class=xl72673 style='height:5.1pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=21 style='height:15.75pt'>
            <td height=21 class=xl72673 style='height:15.75pt'>&nbsp;</td>
            <td class=xl15673><span lang=EN-US style='line-height:115%'></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl77673>&nbsp;</td>
            <td colspan=4 class=xl89673 style='border-left:none'><span lang=EN-US>Disapproval
  due to</span></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=6 style='mso-height-source:userset;height:5.1pt'>
            <td height=6 class=xl72673 style='height:5.1pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl88673></td>
            <td class=xl88673></td>
            <td class=xl88673></td>
            <td class=xl88673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl15673></span></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td colspan=6 class=xl90673 style='border-right:.5pt solid black'>&nbsp;</td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td colspan=2 class=xl81673>CERTIFIED BY:</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td colspan=6 class=xl90673 style='border-right:.5pt solid black'>&nbsp;</td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td colspan=4 class=xl85673>Authorized Official</td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl75673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td colspan=6 rowspan=3 class=xl86673 width=235 style='width:176pt'>NORMAN I.
                BARNACHEA<br>
                Personnel Section</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl77673>&nbsp;</td>
            <td colspan=3 class=xl78673 style='border-left:none'>APPROVED FOR</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=6 style='mso-height-source:userset;height:5.1pt'>
            <td height=6 class=xl72673 style='height:5.1pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl69673></td>
            <td class=xl69673></td>
            <td class=xl69673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=21 style='height:15.75pt'>
            <td height=21 class=xl72673 style='height:15.75pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td colspan=3 class=xl90673 style='border-right:.5pt solid black'>&nbsp;</td>
            <td colspan=2 class=xl79673 style='border-left:none'>Days w/ Pay</td>
            <td class=xl95673>&nbsp;</td>
        </tr>
        <tr height=6 style='mso-height-source:userset;height:5.1pt'>
            <td height=6 class=xl72673 style='height:5.1pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl69673></td>
            <td class=xl69673></td>
            <td class=xl69673></td>
            <td class=xl69673></td>
            <td class=xl69673></td>
            <td class=xl69673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl88673></td>
            <td class=xl94673>&nbsp;</td>
        </tr>
        <tr height=21 style='height:15.75pt'>
            <td height=21 class=xl72673 style='height:15.75pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td colspan=3 class=xl90673 style='border-right:.5pt solid black'>&nbsp;</td>
            <td colspan=2 class=xl81673>Days w/o Pay</td>
            <td class=xl95673>&nbsp;</td>
        </tr>
        <tr height=6 style='mso-height-source:userset;height:5.1pt'>
            <td height=6 class=xl72673 style='height:5.1pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl81673></td>
            <td class=xl81673></td>
            <td class=xl95673>&nbsp;</td>
        </tr>
        <tr height=21 style='height:15.75pt'>
            <td height=21 class=xl72673 style='height:15.75pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl77673>&nbsp;</td>
            <td colspan=4 class=xl96673 style='border-left:none'><span lang=EN-US
                                                                       style='line-height:115%'>DISAPPROVED DUE TO</span></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=6 style='mso-height-source:userset;height:5.1pt'>
            <td height=6 class=xl72673 style='height:5.1pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl97673></td>
            <td class=xl97673></td>
            <td class=xl97673></td>
            <td class=xl97673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td colspan=7 class=xl90673 style='border-right:.5pt solid black'>&nbsp;</td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td colspan=5 class=xl90673 style='border-right:.5pt solid black'>&nbsp;</td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td colspan=2 class=xl81673>Carded by:<span style='mso-spacerun:yes'> </span></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td colspan=7 class=xl90673 style='border-right:.5pt solid black'>&nbsp;</td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td colspan=6 class=xl90673 style='border-right:.5pt solid black'>&nbsp;</td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl15673>Date:</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td colspan=4 class=xl85673>Authorized Official</td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl15673></td>
            <td class=xl73673>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl72673 style='height:15.0pt'>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl75673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl74673>&nbsp;</td>
            <td class=xl75673>&nbsp;</td>
        </tr>
        <![if supportMisalignedColumns]>
        <tr height=0 style='display:none'>
            <td width=4 style='width:3pt'></td>
            <td width=71 style='width:53pt'></td>
            <td width=43 style='width:32pt'></td>
            <td width=56 style='width:42pt'></td>
            <td width=4 style='width:3pt'></td>
            <td width=64 style='width:48pt'></td>
            <td width=4 style='width:3pt'></td>
            <td width=64 style='width:48pt'></td>
            <td width=4 style='width:3pt'></td>
            <td width=64 style='width:48pt'></td>
            <td width=12 style='width:9pt'></td>
            <td width=12 style='width:9pt'></td>
            <td width=64 style='width:48pt'></td>
            <td width=58 style='width:44pt'></td>
            <td width=36 style='width:27pt'></td>
            <td width=12 style='width:9pt'></td>
            <td width=62 style='width:47pt'></td>
            <td width=64 style='width:48pt'></td>
            <td width=12 style='width:9pt'></td>
        </tr>
        <![endif]>
    </table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>
