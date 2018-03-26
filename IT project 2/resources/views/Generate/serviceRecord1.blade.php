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


?>
<html>

<head>
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
    <meta name=Generator content="Microsoft Word 15 (filtered)">
    <style>
        <!--
        /* Font Definitions */
        @font-face
        {font-family:Wingdings;
            panose-1:5 0 0 0 0 0 0 0 0 0;}
        @font-face
        {font-family:"Cambria Math";
            panose-1:2 4 5 3 5 4 6 3 2 4;}
        @font-face
        {font-family:Calibri;
            panose-1:2 15 5 2 2 2 4 3 2 4;}
        @font-face
        {font-family:Tahoma;
            panose-1:2 11 6 4 3 5 4 4 2 4;}
        @font-face
        {font-family:Cambria;
            panose-1:2 4 5 3 5 4 6 3 2 4;}
        @font-face
        {font-family:"Century Gothic";
            panose-1:2 11 5 2 2 2 2 2 2 4;}
        @font-face
        {font-family:"Berlin Sans FB Demi";
            panose-1:2 14 8 2 2 5 2 2 3 6;}
        @font-face
        {font-family:Forte;
            panose-1:3 6 9 2 4 5 2 7 2 3;}
        @font-face
        {font-family:"Berlin Sans FB";
            panose-1:2 14 6 2 2 5 2 2 3 6;}
        /* Style Definitions */
        p.MsoNormal, li.MsoNormal, div.MsoNormal
        {margin-top:0in;
            margin-right:0in;
            margin-bottom:10.0pt;
            margin-left:0in;
            line-height:115%;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;}
        p.MsoHeader, li.MsoHeader, div.MsoHeader
        {mso-style-link:"Header Char";
            margin:0in;
            margin-bottom:.0001pt;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;}
        p.MsoFooter, li.MsoFooter, div.MsoFooter
        {mso-style-link:"Footer Char";
            margin:0in;
            margin-bottom:.0001pt;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;}
        a:link, span.MsoHyperlink
        {color:blue;
            text-decoration:underline;}
        a:visited, span.MsoHyperlinkFollowed
        {color:purple;
            text-decoration:underline;}
        p
        {margin-right:0in;
            margin-left:0in;
            font-size:12.0pt;
            font-family:"Times New Roman",serif;}
        p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
        {mso-style-link:"Balloon Text Char";
            margin:0in;
            margin-bottom:.0001pt;
            font-size:8.0pt;
            font-family:"Tahoma",sans-serif;}
        p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
        {margin-top:0in;
            margin-right:0in;
            margin-bottom:10.0pt;
            margin-left:.5in;
            line-height:115%;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;}
        p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
        {margin-top:0in;
            margin-right:0in;
            margin-bottom:0in;
            margin-left:.5in;
            margin-bottom:.0001pt;
            line-height:115%;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;}
        p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
        {margin-top:0in;
            margin-right:0in;
            margin-bottom:0in;
            margin-left:.5in;
            margin-bottom:.0001pt;
            line-height:115%;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;}
        p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
        {margin-top:0in;
            margin-right:0in;
            margin-bottom:10.0pt;
            margin-left:.5in;
            line-height:115%;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;}
        span.HeaderChar
        {mso-style-name:"Header Char";
            mso-style-link:Header;}
        span.FooterChar
        {mso-style-name:"Footer Char";
            mso-style-link:Footer;}
        span.BalloonTextChar
        {mso-style-name:"Balloon Text Char";
            mso-style-link:"Balloon Text";
            font-family:"Tahoma",sans-serif;}
        .MsoChpDefault
        {font-family:"Calibri",sans-serif;}
        .MsoPapDefault
        {margin-bottom:10.0pt;
            line-height:115%;}
        /* Page Definitions */
        @page WordSection1
        {size:8.5in 14.0in;
            margin:45.0pt 1.0in 15.1pt 1.0in;}
        div.WordSection1
        {page:WordSection1;}
        /* List Definitions */
        ol
        {margin-bottom:0in;}
        ul
        {margin-bottom:0in;}
        -->
    </style>

</head>

<body lang=EN-PH link=blue vlink=purple>

<div class=WordSection1>

    <p class=MsoHeader><span lang=EN-US>&nbsp;</span></p>

    <p class=MsoHeader><span lang=EN-US>&nbsp;</span></p>

    <p class=MsoHeader><span style='position:relative;z-index:251661312'><span
                    style='position:absolute;left:320px;top:-35px;width:61px;height:61px'><img
                        width=80 height=80 src="..\public\logssets\img\download.png"
                        alt="Description: Description: Description: dilg-new logo"></span></span><span
                lang=EN-US>&nbsp;</span></p>

    <p class=MsoHeader align=center style='text-align:center'><span lang=EN-US
                                                                    style='font-size:9.0pt;font-family:"Tahoma",sans-serif'>&nbsp;</span></p>

    <br clear=ALL>

    <p class=MsoHeader align=center style='text-align:center'><span lang=EN-US
                                                                    style='font-size:9.0pt;font-family:"Tahoma",sans-serif'>Republic of the
Philippines</span></p>

    <p class=MsoHeader align=center style='text-align:center'><b><span lang=EN-US
                                                                       style='font-family:"Tahoma",sans-serif;color:#002060'>DEPARTMENT OF THE
INTERIOR AND LOCAL GOVERNMENT</span></b></p>

    <p class=MsoHeader align=center style='text-align:center'><b><span lang=EN-US
                                                                       style='font-size:10.0pt;font-family:"Tahoma",sans-serif'>CORDILLERA
ADMINISTRATIVE REGION</span></b></p>

    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal;page-break-after:avoid'><b><span
                    lang=EN-US style='font-size:17.0pt;font-family:"Cambria",serif;color:#0F243E'>&nbsp;</span></b></p>

    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal;page-break-after:avoid'><b><span
                    lang=EN-US style='font-size:17.0pt;font-family:"Cambria",serif;color:#0F243E'>S
E R V I C E  R E C O R D</span></b></p>

    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span lang=EN-US style='font-size:6.0pt;font-family:"Century Gothic",sans-serif'>&nbsp;</span></p>

    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span lang=EN-US style='font-size:6.0pt;font-family:"Century Gothic",sans-serif'>&nbsp;</span></p>

    <div align=center>

        <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=624
               style='width:6.5in;border-collapse:collapse;border:none'>
            <tr style='height:2.75pt'>
                <td width=46 colspan=2 valign=bottom style='width:34.85pt;border:none;
  padding:0in 0in 0in 0in;height:2.75pt'>
                    <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><i><span lang=EN-US style='font-size:
  6.0pt;font-family:"Century Gothic",sans-serif'>NAME</span></i><span
                                lang=EN-US style='font-size:6.0pt;font-family:"Century Gothic",sans-serif'>:</span></p>
                </td>
                <td width=117 valign=bottom style='width:87.7pt;border:none;border-bottom:
  solid windowtext 1.0pt;padding:0in 0in 0in 0in;height:2.75pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='font-size:
  12.0pt'>{{ $employeedataf->lastname}}</span></b></p>
                </td>
                <td width=120 colspan=3 valign=bottom style='width:90.2pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0in 0in 0in 0in;height:2.75pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='font-size:
  12.0pt'>{{ $employeedataf->givenname}}</span></b></p>
                </td>
                <td width=126 colspan=2 valign=bottom style='width:94.6pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0in 0in 0in 0in;height:2.75pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='font-size:
  12.0pt'>{{ $employeedataf->middlename}}</span></b></p>
                </td>
                <td width=24 valign=bottom style='width:.25in;border:none;padding:0in 0in 0in 0in;
  height:2.75pt'>
                    <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><i><span lang=EN-US style='font-size:
  6.0pt;font-family:"Century Gothic",sans-serif'>Sex</span></i><span
                                lang=EN-US style='font-size:6.0pt;font-family:"Century Gothic",sans-serif'>:</span></p>
                </td>
                <td width=58 valign=bottom style='width:43.65pt;border:none;border-bottom:
  solid windowtext 1.0pt;padding:0in 0in 0in 0in;height:2.75pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US>{{ $employeedataf->sex}}</span></b></p>
                </td>
                <td width=60 valign=bottom style='width:45.0pt;border:none;padding:0in 0in 0in 0in;
  height:2.75pt'>
                    <p class=MsoNormal align=right style='margin-top:0in;margin-right:9.0pt;
  margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:right;
  line-height:normal'><i><span lang=EN-US style='font-size:6.0pt;font-family:
  "Century Gothic",sans-serif'>Civil Status</span></i><span lang=EN-US
                                                            style='font-size:6.0pt;font-family:"Century Gothic",sans-serif'>:</span></p>
                </td>
                <td width=72 valign=bottom style='width:.75in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 0in 0in 0in;height:2.75pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US>{{ $employeedataf->civilStatus}}</span></b></p>
                </td>
            </tr>
            <tr style='height:8.95pt'>
                <td width=46 colspan=2 valign=top style='width:34.85pt;border:none;
  padding:0in 0in 0in 0in;height:8.95pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><sup><span lang=EN-US
                                                      style='font-family:"Century Gothic",sans-serif'>&nbsp;</span></sup></b></p>
                </td>
                <td width=117 valign=top style='width:87.7pt;border:none;padding:0in 0in 0in 0in;
  height:8.95pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><i><sup><span lang=EN-US
                                                      style='font-size:6.0pt;font-family:"Century Gothic",sans-serif'>(Surname)</span></sup></i></p>
                </td>
                <td width=120 colspan=3 valign=top style='width:90.2pt;border:none;
  padding:0in 0in 0in 0in;height:8.95pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><i><sup><span lang=EN-US
                                                      style='font-size:6.0pt;font-family:"Century Gothic",sans-serif'>(Given Name)</span></sup></i></p>
                </td>
                <td width=126 colspan=2 valign=top style='width:94.6pt;border:none;
  padding:0in 0in 0in 0in;height:8.95pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><i><sup><span lang=EN-US
                                                      style='font-size:6.0pt;font-family:"Century Gothic",sans-serif'>(Middle Name)</span></sup></i></p>
                </td>
                <td width=214 colspan=4 valign=top style='width:160.65pt;border:none;
  padding:0in 0in 0in 0in;height:8.95pt'>
                    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='font-family:"Century Gothic",sans-serif'>&nbsp;</span></b></p>
                </td>
            </tr>
            <tr>
                <td width=7 valign=top style='width:5.2pt;border:none;padding:0in 0in 0in 0in'>
                    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='font-family:"Century Gothic",sans-serif'>&nbsp;</span></b></p>
                </td>
                <td width=40 valign=bottom style='width:29.65pt;border:none;padding:0in 0in 0in 0in'>
                    <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><i><span lang=EN-US style='font-size:
  6.0pt;font-family:"Century Gothic",sans-serif'>BIRTH</span></i><span
                                lang=EN-US style='font-size:6.0pt;font-family:"Century Gothic",sans-serif'>:</span></p>
                </td>
                <td width=156 colspan=2 valign=top style='width:116.65pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0in 0in 0in 0in'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US>{{ $employeedataf->dateOfBirth}}</span></b></p>
                </td>
                <td width=34 valign=top style='width:25.15pt;border:none;padding:0in 0in 0in 0in'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US>&nbsp;</span></b></p>
                </td>
                <td width=124 colspan=2 valign=top style='width:92.9pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0in 0in 0in 0in'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US>{{ $employeedataf->placeOfBirth}}</span></b></p>
                </td>
                <td width=265 colspan=5 valign=top style='width:198.45pt;border:none;
  padding:0in 0in 0in 0in'>
                    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-US style='font-family:"Century Gothic",sans-serif'>&nbsp;</span></b></p>
                </td>
            </tr>
            <tr style='height:7.15pt'>
                <td width=7 valign=top style='width:5.2pt;border:none;padding:0in 0in 0in 0in;
  height:7.15pt'>
                    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><sup><span lang=EN-US style='font-size:5.0pt;font-family:"Century Gothic",sans-serif'>&nbsp;</span></sup></b></p>
                </td>
                <td width=40 valign=top style='width:29.65pt;border:none;padding:0in 0in 0in 0in;
  height:7.15pt'>
                    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><sup><span lang=EN-US style='font-size:5.0pt;font-family:"Century Gothic",sans-serif'>&nbsp;</span></sup></b></p>
                </td>
                <td width=156 colspan=2 valign=top style='width:116.65pt;border:none;
  padding:0in 0in 0in 0in;height:7.15pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><i><sup><span lang=EN-US
                                                      style='font-size:6.0pt;font-family:"Century Gothic",sans-serif'>(Date)</span></sup></i></p>
                </td>
                <td width=34 valign=top style='width:25.15pt;border:none;padding:0in 0in 0in 0in;
  height:7.15pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><sup><span lang=EN-US
                                                      style='font-size:6.0pt;font-family:"Century Gothic",sans-serif'>&nbsp;</span></sup></b></p>
                </td>
                <td width=124 colspan=2 valign=top style='width:92.9pt;border:none;
  padding:0in 0in 0in 0in;height:7.15pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><i><sup><span lang=EN-US
                                                      style='font-size:6.0pt;font-family:"Century Gothic",sans-serif'>(Place)</span></sup></i></p>
                </td>
                <td width=265 colspan=5 valign=top style='width:198.45pt;border:none;
  padding:0in 0in 0in 0in;height:7.15pt'>
                    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><sup><span lang=EN-US style='font-size:6.0pt;font-family:"Century Gothic",sans-serif'>&nbsp;</span></sup></b></p>
                </td>
            </tr>
            <tr height=0>
                <td width=104 style='border:none'></td>
                <td width=593 style='border:none'></td>
                <td width=1754 style='border:none'></td>
                <td width=579 style='border:none'></td>
                <td width=503 style='border:none'></td>
                <td width=722 style='border:none'></td>
                <td width=1136 style='border:none'></td>
                <td width=756 style='border:none'></td>
                <td width=360 style='border:none'></td>
                <td width=873 style='border:none'></td>
                <td width=900 style='border:none'></td>
                <td width=1080 style='border:none'></td>
            </tr>
        </table>

    </div>

    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span lang=EN-US style='font-size:4.0pt;font-family:"Tahoma",sans-serif'>&nbsp;</span></p>

    <div align=center>

        <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=616
               style='width:461.7pt;border-collapse:collapse;border:none'>
            <tr style='page-break-inside:avoid;height:22.0pt'>
                <td width=119 colspan=2 style='width:88.95pt;border:solid windowtext 1.0pt;
  background:#548DD4;padding:0in 0in 0in 0in;height:22.0pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='color:yellow'>INCLUSIVE
  DATES</span></b></p>
                </td>
                <td width=252 colspan=4 style='width:189.15pt;border:solid windowtext 1.0pt;
  border-left:none;background:#548DD4;padding:0in 0in 0in 0in;height:22.0pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='color:yellow'>RECORD
  OF EMPLOYMENT</span></b></p>
                </td>
                <td width=84 rowspan=2 style='width:62.95pt;border:solid windowtext 1.0pt;
  border-left:none;background:#548DD4;padding:0in 0in 0in 0in;height:22.0pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='color:yellow'>OFFICE/</span></b></p>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='color:yellow'>DIVISION</span></b></p>
                </td>
                <td width=64 rowspan=2 style='width:47.7pt;border:solid windowtext 1.0pt;
  border-left:none;background:#548DD4;padding:0in 0in 0in 0in;height:22.0pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='color:yellow'>BRANCH</span></b></p>
                </td>
                <td width=97 rowspan=2 style='width:72.95pt;border:solid windowtext 1.0pt;
  border-left:none;background:#548DD4;padding:0in 0in 0in 0in;height:22.0pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='color:yellow'>REMARKS</span></b></p>
                </td>
            </tr>
            <tr style='page-break-inside:avoid;height:13.0pt'>
                <td width=64 style='width:47.7pt;border:solid windowtext 1.0pt;border-top:
  none;background:#548DD4;padding:0in 0in 0in 0in;height:13.0pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='font-size:
  10.0pt;color:yellow'>FROM</span></b></p>
                </td>
                <td width=55 style='width:41.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#548DD4;padding:0in 0in 0in 0in;height:13.0pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='font-size:
  10.0pt;color:yellow'>TO</span></b></p>
                </td>
                <td width=95 style='width:71.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#548DD4;
  padding:0in 0in 0in 0in;height:13.0pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='font-size:
  10.0pt;color:yellow'>Designation</span></b></p>
                </td>
                <td width=61 colspan=2 style='width:46.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#548DD4;padding:0in 0in 0in 0in;height:13.0pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;page-break-after:avoid'><b><span
                                    lang=EN-US style='font-size:10.0pt;color:yellow'>Status</span></b></p>
                </td>
                <td width=96 style='width:71.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#548DD4;padding:0in 0in 0in 0in;height:13.0pt'>
                    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span lang=EN-US style='font-size:
  10.0pt;color:yellow'>Salary</span></b></p>
                </td>
            </tr>
            @foreach ($employeeservrec as $emp_id)
                <tr style='height:18.2pt'>
                    <td width=64 style='width:47.7pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in .05in 0in .05in;
  height:18.2pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=EN-US style='font-size:10.0pt;
  color:black'>{{$emp_id->startJobDate}}</span></p>
                    </td>
                    <td width=55 style='width:41.25pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in;height:18.2pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=EN-US style='font-size:10.0pt;
  color:black'>{{$emp_id->endJobDate}}</span></p>
                    </td>
                    <td width=96 colspan=2 style='width:71.95pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in;height:18.2pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=EN-US style='font-size:10.0pt;
  color:black'>{{$emp_id->designation}}</span></p>
                    </td>
                    <td width=60 style='width:45.25pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in;height:18.2pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=EN-US style='font-size:10.0pt;
  color:black'>{{$emp_id->status}}</span></p>
                    </td>
                    <td width=96 style='width:71.95pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in;height:18.2pt'>
                        <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span lang=EN-US style='font-size:10.0pt;
  color:black'>{{$emp_id->annualSalary}}</span></p>
                    </td>
                    <td width=84 style='width:62.95pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in;height:18.2pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=EN-US style='font-size:10.0pt;
  color:black'>{{$emp_id->division}}</span></p>
                    </td>
                    <td width=64 style='width:47.7pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in;height:18.2pt'>
                        <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=EN-US style='font-size:10.0pt;
  color:black'>{{$emp_id->branch}}</span></p>
                    </td>
                    <td width=97 style='width:72.95pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in .05in 0in .05in;height:18.2pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:10.0pt;color:black'>{{$emp_id->remarks}}</span></p>
                    </td>
                </tr>
            @endforeach

        </table>

    </div>

    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span lang=EN-US style='font-size:6.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>

    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span lang=EN-US style='font-size:6.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>

    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;text-indent:
.5in;line-height:normal'><span lang=EN-US style='color:#1D1B11'>This Service
Record is issued for </span><span lang=EN-US style='color:#1D1B11'> <b><i>Salary
Adjustment </i></b></span><span lang=EN-US style='color:#1D1B11'>purposes.</span></p>

    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;text-indent:
.5in;line-height:normal'><span lang=EN-US style='color:#1D1B11'>&nbsp;</span></p>

    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;text-indent:
.5in;line-height:normal'><span lang=EN-US style='color:white'>Issued this 20<sup>th</sup>
day of October 2016 at Baguio City,
Philippines.                                              </span></p>

    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span lang=EN-US style='font-size:8.0pt;color:#1D1B11'>&nbsp;</span></p>

    <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:274.5pt;margin-bottom:.0001pt;text-align:center;
line-height:normal'><b><span lang=EN-US style='color:#1D1B11'>                                </span></b></p>

    <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:274.5pt;margin-bottom:.0001pt;text-align:center;
line-height:normal'><b><span lang=EN-US style='font-family:"Berlin Sans FB Demi",sans-serif;
color:black'>NORMAN I. BARNACHEA</span></b></p>

    <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:274.5pt;margin-bottom:.0001pt;text-align:center;
line-height:normal'><span lang=EN-US style='font-size:8.0pt;font-family:Forte;
color:#002060'>Administrative Officer V (HRMO)</span></p>

    <p class=MsoNormal><span lang=EN-US style='line-height:115%'>&nbsp;</span></p>

    <p class=MsoNormal><span lang=EN-US style='line-height:115%'>&nbsp;</span></p>

    <p class=MsoNormal><span lang=EN-US style='line-height:115%'>&nbsp;</span></p>

    <p class=MsoHeader align=center style='text-align:center'>

    <table cellpadding=0 cellspacing=0 align=left>
        <tr>
            <td width=0 height=6></td>
        </tr>
        <tr>
            <td></td>
            <td><img width=625 height=1 src="..\public\logssets\img\line.png"></td>
        </tr>
    </table>

    <span lang=EN-US style='font-size:8.0pt;font-family:"Berlin Sans FB",sans-serif'>&nbsp;</span></p>

    <br clear=ALL>

    <p class=MsoHeader align=center style='text-align:center'><span lang=EN-US
                                                                    style='font-size:8.0pt;font-family:"Berlin Sans FB",sans-serif'>Barangay
Center, Upper Session Rd. cor. North Drive, Baguio City</span></p>

    <p class=MsoHeader align=center style='text-align:center'><span lang=EN-US
                                                                    style='font-size:8.0pt;font-family:"Berlin Sans FB",sans-serif'>Telefax Nos.
(074) 442-5372 / 443-9840 / 442-9030  Tel Nos. (074) 442-3515 / 442-0085</span></p>

    <p class=MsoHeader align=center style='text-align:center'><span lang=EN-US
                                                                    style='font-size:8.0pt;font-family:"Berlin Sans FB",sans-serif'>E-mail
Addresses: car_dilg@yahoo.com.ph  /  dilg_car_pdmd@yahoo.com</span></p>

</div>

</body>

</html>
