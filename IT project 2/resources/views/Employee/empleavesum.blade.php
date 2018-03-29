<?php
// Start the session
if(!isset($_SESSION))
{
    session_start();
    if(isset($_SESSION['name'])){
        print $_SESSION['time'] - time();
        if ((time() - $_SESSION['time']) > 900){


// session timed out
//        session_unset();     // unset $_SESSION variable for the run-time
//        session_destroy();   // destroy session data in storage
            echo '<a href="/logout" class="btn btn-danger square-btn-adjust">Please Login</a>';
            return redirect()->route('logout');

        }
    }else{
        echo '<a href="/logout" class="btn btn-danger square-btn-adjust">Please Login</a>';
        return redirect()->route('logout');
    }
}else{
    if(isset($_SESSION['name'])){
        print $_SESSION['time'] - time();
        if ((time() - $_SESSION['time']) > 900){


// session timed out
//        session_unset();     // unset $_SESSION variable for the run-time
//        session_destroy();   // destroy session data in storage
            echo '<a href="/logout" class="btn btn-danger square-btn-adjust">Please Login</a>';
            return redirect()->route('logout');

        }
    }else{
        echo '<a href="/logout" class="btn btn-danger square-btn-adjust">Please Login</a>';
        return redirect()->route('logout');
    }}
?>
        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Human Resource Information System</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Employee</a>
        </div>
        <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Today: <?php echo date("M d, Y")?> <a href="/logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
    </nav>
<?php
print_r($_SESSION);
?>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                </li>


                <li>
                    <a href="indexEmp"><?php $_SESSION['time'] = time();?><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                </li>
                <li>
                    <a href="PdsOfEmp"><?php $_SESSION['time'] = time();?><i class="fa fa-file-text fa-3x"></i> Personal Data Sheet</a>
                </li>
                <li>
                    <a href="empleaveform"><?php $_SESSION['time'] = time();?><i class="fa fa-qrcode fa-3x"></i> Leave Form</a>
                </li>
                <li>
                    <a class="active-menu" href="empleavesum.html"><?php $_SESSION['time'] = time();?><i class="fa  fa-users fa-3x"></i> Leave Summary</a>
                </li>
                <li  >
                    <a  href="empservrec"><?php $_SESSION['time'] = time();?><i class="fa fa-square-o fa-3x"></i> Service Record</a>
                </li>
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Leave Summary
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>Vacation Leave</h2>

                                    </div>
                                </div>
                                <!-- /. ROW  -->
                                <hr />
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <tr>
                                        <th colspan="1">Year</th>
                                        <th colspan="6">Vacation Leave</th>
                                    </tr>
                                    <?php
                                    $i = 0;
                                    $months = array();

                                    $vacationAvailedLeaves1 = array();
                                    $vacationNoOfAbsences1 = array();
                                    $tardiness1 = array();
                                    $vacationEarned1 = array();
                                    $vacationBalance1 = array();
                                    $vacationAbsencesWithPay1 = array();
                                    $vacationAbsencesWithoutPay1 = array();
                                    $sickAvailedLeaves1 = array();
                                    $sickNoOfAbsences1 = array();
                                    $sickEarned1 = array();
                                    $sickBalance1 = array();
                                    $sickAbsencesWithPay1 = array();
                                    $sickAbsencesWithoutPay1 = array();

                                    $vacationAvailedLeaves2 = array();
                                    $vacationNoOfAbsences2 = array();
                                    $tardiness2 = array();
                                    $vacationEarned2 = array();
                                    $vacationBalance2 = array();
                                    $vacationAbsencesWithPay2 = array();
                                    $vacationAbsencesWithoutPay2 = array();
                                    $sickAvailedLeaves2 = array();
                                    $sickNoOfAbsences2 = array();
                                    $sickEarned2 = array();
                                    $sickBalance2 = array();
                                    $sickAbsencesWithPay2 = array();
                                    $sickAbsencesWithoutPay2 = array();

                                    $vacationAvailedLeaves3 = array();
                                    $vacationNoOfAbsences3 = array();
                                    $tardiness3 = array();
                                    $vacationEarned3 = array();
                                    $vacationBalance3 = array();
                                    $vacationAbsencesWithPay3 = array();
                                    $vacationAbsencesWithoutPay3 = array();
                                    $sickAvailedLeaves3 = array();
                                    $sickNoOfAbsences3 = array();
                                    $sickEarned3 = array();
                                    $sickBalance3 = array();
                                    $sickAbsencesWithPay3 = array();
                                    $sickAbsencesWithoutPay3 = array();

                                    $vacationAvailedLeaves4 = array();
                                    $vacationNoOfAbsences4 = array();
                                    $tardiness4 = array();
                                    $vacationEarned4 = array();
                                    $vacationBalance4 = array();
                                    $vacationAbsencesWithPay4 = array();
                                    $vacationAbsencesWithoutPay4 = array();
                                    $sickAvailedLeaves4 = array();
                                    $sickNoOfAbsences4 = array();
                                    $sickEarned4 = array();
                                    $sickBalance4 = array();
                                    $sickAbsencesWithPay4 = array();
                                    $sickAbsencesWithoutPay4 = array();

                                    $vacationAvailedLeaves5 = array();
                                    $vacationNoOfAbsences5 = array();
                                    $tardiness5 = array();
                                    $vacationEarned5 = array();
                                    $vacationBalance5 = array();
                                    $vacationAbsencesWithPay5 = array();
                                    $vacationAbsencesWithoutPay5 = array();
                                    $sickAvailedLeaves5 = array();
                                    $sickNoOfAbsences5 = array();
                                    $sickEarned5 = array();
                                    $sickBalance5 = array();
                                    $sickAbsencesWithPay5 = array();
                                    $sickAbsencesWithoutPay5 = array();

                                    $vacationAvailedLeaves6 = array();
                                    $vacationNoOfAbsences6 = array();
                                    $tardiness6 = array();
                                    $vacationEarned6 = array();
                                    $vacationBalance6 = array();
                                    $vacationAbsencesWithPay6 = array();
                                    $vacationAbsencesWithoutPay6 = array();
                                    $sickAvailedLeaves6 = array();
                                    $sickNoOfAbsences6 = array();
                                    $sickEarned6 = array();
                                    $sickBalance6 = array();
                                    $sickAbsencesWithPay6 = array();
                                    $sickAbsencesWithoutPay6 = array();

                                    $vacationAvailedLeaves7 = array();
                                    $vacationNoOfAbsences7 = array();
                                    $tardiness7 = array();
                                    $vacationEarned7 = array();
                                    $vacationBalance7 = array();
                                    $vacationAbsencesWithPay7 = array();
                                    $vacationAbsencesWithoutPay7 = array();
                                    $sickAvailedLeaves7 = array();
                                    $sickNoOfAbsences7 = array();
                                    $sickEarned7 = array();
                                    $sickBalance7 = array();
                                    $sickAbsencesWithPay7 = array();
                                    $sickAbsencesWithoutPay7 = array();

                                    $vacationAvailedLeaves8 = array();
                                    $vacationNoOfAbsences8 = array();
                                    $tardiness8 = array();
                                    $vacationEarned8 = array();
                                    $vacationBalance8 = array();
                                    $vacationAbsencesWithPay8 = array();
                                    $vacationAbsencesWithoutPay8 = array();
                                    $sickAvailedLeaves8 = array();
                                    $sickNoOfAbsences8 = array();
                                    $sickEarned8 = array();
                                    $sickBalance8 = array();
                                    $sickAbsencesWithPay8 = array();
                                    $sickAbsencesWithoutPay8 = array();

                                    $vacationAvailedLeaves9 = array();
                                    $vacationNoOfAbsences9 = array();
                                    $tardiness9 = array();
                                    $vacationEarned9 = array();
                                    $vacationBalance9 = array();
                                    $vacationAbsencesWithPay9 = array();
                                    $vacationAbsencesWithoutPay9 = array();
                                    $sickAvailedLeaves9 = array();
                                    $sickNoOfAbsences9 = array();
                                    $sickEarned9 = array();
                                    $sickBalance9 = array();
                                    $sickAbsencesWithPay9 = array();
                                    $sickAbsencesWithoutPay9 = array();

                                    $vacationAvailedLeaves10 = array();
                                    $vacationNoOfAbsences10 = array();
                                    $tardiness10 = array();
                                    $vacationEarned10 = array();
                                    $vacationBalance10 = array();
                                    $vacationAbsencesWithPay10 = array();
                                    $vacationAbsencesWithoutPay10 = array();
                                    $sickAvailedLeaves10 = array();
                                    $sickNoOfAbsences10 = array();
                                    $sickEarned10 = array();
                                    $sickBalance10 = array();
                                    $sickAbsencesWithPay10 = array();
                                    $sickAbsencesWithoutPay10 = array();

                                    $vacationAvailedLeaves11 = array();
                                    $vacationNoOfAbsences11 = array();
                                    $tardiness11 = array();
                                    $vacationEarned11 = array();
                                    $vacationBalance11 = array();
                                    $vacationAbsencesWithPay11 = array();
                                    $vacationAbsencesWithoutPay11 = array();
                                    $sickAvailedLeaves11 = array();
                                    $sickNoOfAbsences11 = array();
                                    $sickEarned11 = array();
                                    $sickBalance11 = array();
                                    $sickAbsencesWithPay11 = array();
                                    $sickAbsencesWithoutPay11 = array();

                                    $vacationAvailedLeaves12 = array();
                                    $vacationNoOfAbsences12 = array();
                                    $tardiness12 = array();
                                    $vacationEarned12 = array();
                                    $vacationBalance12 = array();
                                    $vacationAbsencesWithPay12 = array();
                                    $vacationAbsencesWithoutPay12 = array();
                                    $sickAvailedLeaves12 = array();
                                    $sickNoOfAbsences12 = array();
                                    $sickEarned12 = array();
                                    $sickBalance12 = array();
                                    $sickAbsencesWithPay12 = array();
                                    $sickAbsencesWithoutPay12 = array();

                                    $total1 = 0;
                                    $total2 = 0;
                                    $total3 = 0;
                                    $total4 = 0;
                                    $total5 = 0;
                                    $total6 = 0;
                                    $total7 = 0;
                                    $total8 = 0;
                                    $total9 = 0;
                                    $total10 = 0;
                                    $total11 = 0;
                                    $total12 = 0;

                                    $total1vacation = 0;
                                    $total1sick = 0;

                                    $year = array();

                                    foreach($employeeleaveledger as $emp_id) {
                                        if ($emp_id->month == 'January'){
                                            $vacationAvailedLeaves1 [] = $emp_id->vacationAvailedLeaves;
                                            $vacationNoOfAbsences1 [] = $emp_id->vacationNoOfAbsence;
                                            $vacationEarned1[] = $emp_id->vacationEarned;
                                            $vacationBalance1[] = $emp_id->vacationBalance;
                                            $vacationAbsencesWithPay1[] = $emp_id->vacationAbsencesWithPay;
                                            $vacationAbsencesWithoutPay1[] = $emp_id->vacationAbsencesWithoutPay;
                                            $sickAvailedLeaves1[] = $emp_id->sickAvailedLeaves;
                                            $sickNoOfAbsences1[] = $emp_id->sickNoOfAbsenceTardiness;
                                            $sickEarned1[] = $emp_id->sickEarned;
                                            $sickBalance1[] = $emp_id->sickBalance;
                                            $sickAbsencesWithPay1[] = $emp_id->sickAbsenceWithPay;
                                            $sickAbsencesWithoutPay1[] = $emp_id->sickAbsenceWithoutPay;
                                        };

                                        if ($emp_id->month == 'February'){
                                            $vacationAvailedLeaves2 [] = $emp_id->vacationAvailedLeaves;
                                            $vacationNoOfAbsences2 [] = $emp_id->vacationNoOfAbsence;
                                            $vacationEarned2[] = $emp_id->vacationEarned;
                                            $vacationBalance2[] = $emp_id->vacationBalance;
                                            $vacationAbsencesWithPay2[] = $emp_id->vacationAbsencesWithPay;
                                            $vacationAbsencesWithoutPay2[] = $emp_id->vacationAbsencesWithoutPay;
                                            $sickAvailedLeaves2[] = $emp_id->sickAvailedLeaves;
                                            $sickNoOfAbsences2[] = $emp_id->sickNoOfAbsenceTardiness;
                                            $sickEarned2[] = $emp_id->sickEarned;
                                            $sickBalance2[] = $emp_id->sickBalance;
                                            $sickAbsencesWithPay2[] = $emp_id->sickAbsenceWithPay;
                                            $sickAbsencesWithoutPay2[] = $emp_id->sickAbsenceWithoutPay;
                                        };



//                                        $month[] = $emp_id->month;
//
//                                        $vacationAvailedLeaves[] = $emp_id->vacationAvailedLeaves;
//                                        $vacationNoOfAbsence[] = $emp_id->vacationNoOfAbsence;
//                                        $tardiness[] = $emp_id->tardiness;
//                                        $vacationEarned[] = $emp_id->vacationEarned;
//                                        $vacationBalance[] = $emp_id->vacationBalance;
//                                        $vacationAbsencesWithPay[] = $emp_id->vacationAbsencesWithPay;
//                                        $vacationAbsencesWithoutPay[] = $emp_id->vacationAbsencesWithoutPay;
//
//                                        $sickAvailedLeaves[] = $emp_id->sickAvailedLeaves;
//                                        $sickNoOfAbsenceTardiness[] = $emp_id->sickNoOfAbsenceTardiness;
//                                        $sickEarned[] = $emp_id->sickEarned;
//                                        $sickBalance[] = $emp_id->sickBalance;
//                                        $sickAbsenceWithPay[] = $emp_id->sickAbsenceWithPay;
//                                        $sickAbsenceWithoutPay[] = $emp_id->sickAbsenceWithoutPay;
//
//                                        $year[] = $emp_id->year;

//                                        if($month[$i] == "JAN"){
//
//                                            array_push($vacationAvailedLeaves[], $emp_id->vacationAvailedLeaves);
//                                            array_push($vacationNoOfAbsence[], $emp_id->vacationNoOfAbsence);
//                                            array_push($vacationEarned[], $emp_id->vacationEarned);
//                                            array_push($vacationBalance[], $emp_id->vacationBalance);
//                                            array_push($vacationAbsencesWithPay[], $emp_id->vacationAbsencesWithPay);
//                                            array_push($vacationAbsencesWithoutPay[], $emp_id->vacationAbsencesWithoutPay);
//                                        };
//                                        $i++;
                                    }?>
                                    <tr>
                                        <th>month</th>
                                        <th>Enjoyed Leaves</th>
                                        <th>Absences/Tardiness/Undertime</th>
                                        <th>Earned</th>
                                        <th>Absences/Tardiness/UT with pay</th>
                                        <th>Balance</th>
                                        <th>Absences/Tardiness W/O pay</th>
                                    </tr>

                                    <tr>
                                        <td>JAN</td>
                                        <td><?php $arrlength = count($vacationAvailedLeaves1);
                                            if ($arrlength == 1){
                                                echo trim($vacationAvailedLeaves1[0]);
                                            }else{

                                            for($x = 0; $x < $arrlength; $x++) {
                                                echo trim($vacationAvailedLeaves1[$x]);
                                                echo ", ";
                                            }
                                            }
                                            ?>
                                             </td>
                                        <td><?php $arrlength = count($vacationNoOfAbsences1);
                                            if ($arrlength == 1){
                                                echo trim($vacationNoOfAbsences1[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationNoOfAbsences1[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                            </td>
                                        <td><?php $arrlength = count($vacationEarned1);
                                            if ($arrlength == 1){
                                                echo trim($vacationEarned1[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationEarned1[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                            </td>
                                        <td><?php $arrlength = count($vacationBalance1);
                                            if ($arrlength == 1){
                                                echo trim($vacationBalance1[0]);
                                                $total1 += $vacationBalance1[0];
                                                $total1vacation += $vacationBalance1[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationBalance1[$x]);
                                                    echo ", ";
                                                    $total1 += $vacationBalance1[$x];
                                                    $total1vacation += $vacationBalance1[$x];
                                                }
                                            }
                                            ?>
                                            </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithPay1);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithPay1[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithPay1[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                            </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithoutPay1);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithoutPay1[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithoutPay1[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                            </td>
                                    </tr>
                                    <tr>
                                        <td>FEB</td>
                                        <td><?php $arrlength = count($vacationAvailedLeaves2);
                                            if ($arrlength == 1){
                                                echo trim($vacationAvailedLeaves2[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAvailedLeaves2[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationNoOfAbsences2);
                                            if ($arrlength == 1){
                                                echo trim($vacationNoOfAbsences2[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationNoOfAbsences2[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationEarned2);
                                            if ($arrlength == 1){
                                                echo trim($vacationEarned2[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationEarned2[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationBalance2);
                                            if ($arrlength == 1){
                                                echo trim($vacationBalance2[0]);
                                                $total2 += $vacationBalance2[0];
                                                $total1vacation += $vacationBalance2[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationBalance2[$x]);
                                                    echo ", ";
                                                    $total2 += $vacationBalance2[$x];
                                                    $total1vacation += $vacationBalance2[$x];
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithPay2);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithPay2[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithPay2[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithoutPay2);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithoutPay2[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithoutPay2[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>MAR</td>
                                        <td><?php $arrlength = count($vacationAvailedLeaves3);
                                            if ($arrlength == 1){
                                                echo trim($vacationAvailedLeaves3[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAvailedLeaves3[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationNoOfAbsences3);
                                            if ($arrlength == 1){
                                                echo trim($vacationNoOfAbsences3[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationNoOfAbsences3[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationEarned3);
                                            if ($arrlength == 1){
                                                echo trim($vacationEarned3[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationEarned3[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationBalance3);
                                            if ($arrlength == 1){
                                                echo trim($vacationBalance3[0]);
                                                $total3 += $vacationBalance3[0];
                                                $total1vacation += $vacationBalance3[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationBalance3[$x]);
                                                    echo ", ";
                                                    $total3 += $vacationBalance3[$x];
                                                    $total1vacation += $vacationBalance3[$x];
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithPay3);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithPay3[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithPay3[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithoutPay3);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithoutPay3[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithoutPay3[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>APR</td>
                                        <td><?php $arrlength = count($vacationAvailedLeaves4);
                                            if ($arrlength == 1){
                                                echo trim($vacationAvailedLeaves4[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAvailedLeaves4[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationNoOfAbsences4);
                                            if ($arrlength == 1){
                                                echo trim($vacationNoOfAbsences4[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationNoOfAbsences4[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationEarned4);
                                            if ($arrlength == 1){
                                                echo trim($vacationEarned4[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationEarned4[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationBalance4);
                                            if ($arrlength == 1){
                                                echo trim($vacationBalance4[0]);
                                                $total4 += $vacationBalance4[0];
                                                $total1vacation += $vacationBalance4[0];

                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationBalance4[$x]);
                                                    echo ", ";
                                                    $total4 += $vacationBalance4[$x];
                                                    $total1vacation += $vacationBalance4[$x];
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithPay4);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithPay4[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithPay4[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithoutPay4);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithoutPay4[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithoutPay4[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>MAY</td>
                                        <td><?php $arrlength = count($vacationAvailedLeaves5);
                                            if ($arrlength == 1){
                                                echo trim($vacationAvailedLeaves5[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAvailedLeaves5[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationNoOfAbsences5);
                                            if ($arrlength == 1){
                                                echo trim($vacationNoOfAbsences5[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationNoOfAbsences5[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationEarned5);
                                            if ($arrlength == 1){
                                                echo trim($vacationEarned5[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationEarned5[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationBalance5);
                                            if ($arrlength == 1){
                                                echo trim($vacationBalance5[0]);
                                                $total5 += $vacationBalance5[0];
                                                $total1vacation += $vacationBalance5[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationBalance5[$x]);
                                                    echo ", ";
                                                    $total5 += $vacationBalance5[$x];
                                                    $total1vacation += $vacationBalance5[$x];
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithPay5);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithPay5[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithPay5[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithoutPay5);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithoutPay5[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithoutPay5[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>JUN</td>
                                        <td><?php $arrlength = count($vacationAvailedLeaves6);
                                            if ($arrlength == 1){
                                                echo trim($vacationAvailedLeaves6[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAvailedLeaves6[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationNoOfAbsences6);
                                            if ($arrlength == 1){
                                                echo trim($vacationNoOfAbsences6[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationNoOfAbsences6[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationEarned6);
                                            if ($arrlength == 1){
                                                echo trim($vacationEarned6[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationEarned6[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationBalance6);
                                            if ($arrlength == 1){
                                                echo trim($vacationBalance6[0]);
                                                $total6 += $vacationBalance6[0];
                                                $total1vacation += $vacationBalance6[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationBalance6[$x]);
                                                    echo ", ";
                                                    $total6 += $vacationBalance6[$x];
                                                    $total1vacation += $vacationBalance6[$x];
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithPay6);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithPay6[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithPay6[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithoutPay6);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithoutPay6[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithoutPay6[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>JUL</td>
                                        <td><?php $arrlength = count($vacationAvailedLeaves7);
                                            if ($arrlength == 1){
                                                echo trim($vacationAvailedLeaves7[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAvailedLeaves7[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationNoOfAbsences7);
                                            if ($arrlength == 1){
                                                echo trim($vacationNoOfAbsences7[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationNoOfAbsences7[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationEarned7);
                                            if ($arrlength == 1){
                                                echo trim($vacationEarned7[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationEarned7[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationBalance7);
                                            if ($arrlength == 1){
                                                echo trim($vacationBalance7[0]);
                                                $total7 += $vacationBalance7[0];
                                                $total1vacation += $vacationBalance7[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationBalance7[$x]);
                                                    echo ", ";
                                                    $total7 += $vacationBalance7[$x];
                                                    $total1vacation += $vacationBalance7[$x];
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithPay7);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithPay7[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithPay7[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithoutPay7);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithoutPay7[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithoutPay7[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AUG</td>
                                        <td><?php $arrlength = count($vacationAvailedLeaves8);
                                            if ($arrlength == 1){
                                                echo trim($vacationAvailedLeaves8[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAvailedLeaves8[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationNoOfAbsences8);
                                            if ($arrlength == 1){
                                                echo trim($vacationNoOfAbsences8[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationNoOfAbsences8[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationEarned8);
                                            if ($arrlength == 1){
                                                echo trim($vacationEarned8[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationEarned8[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationBalance8);
                                            if ($arrlength == 1){
                                                echo trim($vacationBalance8[0]);
                                                $total8 += $vacationBalance8[0];
                                                $total1vacation += $vacationBalance8[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationBalance8[$x]);
                                                    echo ", ";
                                                    $total8 += $vacationBalance8[$x];
                                                    $total1vacation += $vacationBalance8[$x];
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithPay8);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithPay8[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithPay8[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithoutPay8);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithoutPay8[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithoutPay8[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>SEP</td>
                                        <td><?php $arrlength = count($vacationAvailedLeaves9);
                                            if ($arrlength == 1){
                                                echo trim($vacationAvailedLeaves9[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAvailedLeaves9[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationNoOfAbsences9);
                                            if ($arrlength == 1){
                                                echo trim($vacationNoOfAbsences9[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationNoOfAbsences9[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationEarned9);
                                            if ($arrlength == 1){
                                                echo trim($vacationEarned9[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationEarned9[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationBalance9);
                                            if ($arrlength == 1){
                                                echo trim($vacationBalance9[0]);
                                                $total9 += $vacationBalance9[0];
                                                $total1vacation += $vacationBalance9[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationBalance9[$x]);
                                                    echo ", ";
                                                    $total9 += $vacationBalance9[$x];
                                                    $total1vacation += $vacationBalance9[$x];
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithPay9);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithPay9[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithPay9[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithoutPay9);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithoutPay9[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithoutPay9[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OCT</td>
                                        <td><?php $arrlength = count($vacationAvailedLeaves10);
                                            if ($arrlength == 1){
                                                echo trim($vacationAvailedLeaves10[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAvailedLeaves10[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationNoOfAbsences10);
                                            if ($arrlength == 1){
                                                echo trim($vacationNoOfAbsences10[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationNoOfAbsences10[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationEarned10);
                                            if ($arrlength == 1){
                                                echo trim($vacationEarned10[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationEarned10[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationBalance10);
                                            if ($arrlength == 1){
                                                echo trim($vacationBalance10[0]);
                                                $total10 += $vacationBalance10[0];
                                                $total1vacation += $vacationBalance10[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationBalance10[$x]);
                                                    echo ", ";
                                                    $total10 += $vacationBalance10[$x];
                                                    $total1vacation += $vacationBalance10[$x];
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithPay10);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithPay10[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithPay10[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithoutPay10);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithoutPay10[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithoutPay10[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>NOV</td>
                                        <td><?php $arrlength = count($vacationAvailedLeaves11);
                                            if ($arrlength == 1){
                                                echo trim($vacationAvailedLeaves11[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAvailedLeaves11[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationNoOfAbsences11);
                                            if ($arrlength == 1){
                                                echo trim($vacationNoOfAbsences11[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationNoOfAbsences11[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationEarned11);
                                            if ($arrlength == 1){
                                                echo trim($vacationEarned11[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationEarned11[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationBalance11);
                                            if ($arrlength == 1){
                                                echo trim($vacationBalance11[0]);
                                                $total11 += $vacationBalance11[0];
                                                $total1vacation += $vacationBalance11[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationBalance11[$x]);
                                                    echo ", ";
                                                    $total11 += $vacationBalance11[$x];
                                                    $total1vacation += $vacationBalance11[$x];
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithPay11);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithPay11[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithPay11[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithoutPay11);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithoutPay11[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithoutPay11[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>DEC</td>
                                        <td><?php $arrlength = count($vacationAvailedLeaves12);
                                            if ($arrlength == 1){
                                                echo trim($vacationAvailedLeaves12[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAvailedLeaves12[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationNoOfAbsences12);
                                            if ($arrlength == 1){
                                                echo trim($vacationNoOfAbsences12[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationNoOfAbsences12[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationEarned12);
                                            if ($arrlength == 1){
                                                echo trim($vacationEarned12[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationEarned12[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationBalance12);
                                            if ($arrlength == 1){
                                                echo trim($vacationBalance12[0]);
                                                $total12 += $vacationBalance12[0];
                                                $total1vacation += $vacationBalance12[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationBalance12[$x]);
                                                    echo ", ";
                                                    $total12 += $vacationBalance12[$x];
                                                    $total1vacation += $vacationBalance12[$x];
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithPay12);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithPay12[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithPay12[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($vacationAbsencesWithoutPay12);
                                            if ($arrlength == 1){
                                                echo trim($vacationAbsencesWithoutPay12[0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($vacationAbsencesWithoutPay12[$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>

                                    <tfoot>
                                    <tr>
                                        <th colspan="3">LESS: Unused Mandatory Leave</th>
                                        <th colspan="2">No. of days</th>
                                        <th colspan="2">Balance</th>
                                    </tr>

                                    <tr>
                                        <th colspan="3"></th>
                                        <th colspan="2"></th>
                                        <th colspan="2">14.44</th>
                                    </tr>
                                    </tfoot>
                                </table>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>Sick Leave</h2>

                                    </div>
                                </div>
                                <!-- /. ROW  -->
                                <hr />
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <tr>
                                        <th colspan="1">Year</th>
                                        <th colspan="6">Sick Leave</th>
                                    </tr>
                                    <tr>
                                        <th>Month</th>
                                        <th>Enjoyed Leaves</th>
                                        <th>Earned</th>
                                        <th>Absences with pay</th>
                                        <th>Balance</th>
                                        <th>Absences w/o pay</th>
                                        <th>Total</th>
                                    </tr>
                                    <tr>
                                        <td>JAN</td>
                                        <td><?php $arrlength = count($sickAvailedLeaves1 );
                                            if ($arrlength == 1){
                                                echo trim($sickAvailedLeaves1 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAvailedLeaves1 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickEarned1 );
                                            if ($arrlength == 1){
                                                echo trim($sickEarned1 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickEarned1 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithPay1 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithPay1 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithPay1 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickBalance1 );
                                            if ($arrlength == 1){
                                                echo trim($sickBalance1 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickBalance1 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithoutPay1 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithoutPay1 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithoutPay1 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php
                                            $arrlength = count($sickBalance1 );
                                            if ($arrlength == 1){
                                                $total1 += $sickBalance1[0];
                                                $total1sick += $sickBalance1[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    $total1 += $sickBalance1[$x];
                                                    $total1sick += $sickBalance1[$x];
                                                }
                                            }
                                                echo trim($total1);
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>FEB</td>
                                        <td><?php $arrlength = count($sickAvailedLeaves2 );
                                            if ($arrlength == 1){
                                                echo trim($sickAvailedLeaves2 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAvailedLeaves2 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickEarned2 );
                                            if ($arrlength == 1){
                                                echo trim($sickEarned2 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickEarned2 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithPay2 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithPay2 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithPay2 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickBalance2 );
                                            if ($arrlength == 1){
                                                echo trim($sickBalance2 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickBalance2 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithoutPay2 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithoutPay2 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithoutPay2 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php
                                            $arrlength = count($sickBalance2 );
                                            if ($arrlength == 1){
                                                $total2 += $sickBalance2[0];
                                                $total1sick += $sickBalance1[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    $total2 += $sickBalance2[$x];
                                                    $total1sick += $sickBalance2[$x];
                                                }
                                            }
                                            echo trim($total2);
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>MAR</td>
                                        <td><?php $arrlength = count($sickAvailedLeaves3 );
                                            if ($arrlength == 1){
                                                echo trim($sickAvailedLeaves3 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAvailedLeaves3 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickEarned3 );
                                            if ($arrlength == 1){
                                                echo trim($sickEarned3 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickEarned3 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithPay3 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithPay3 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithPay3 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickBalance3 );
                                            if ($arrlength == 1){
                                                echo trim($sickBalance3 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickBalance3 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithoutPay3 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithoutPay3 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithoutPay3 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php
                                            $arrlength = count($sickBalance3 );
                                            if ($arrlength == 1){
                                                $total3 += $sickBalance3[0];
                                                $total1sick += $sickBalance3[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    $total3 += $sickBalance3[$x];
                                                    $total1sick += $sickBalance3[$x];
                                                }
                                            }
                                            echo trim($total3);
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>APR</td>
                                        <td><?php $arrlength = count($sickAvailedLeaves4 );
                                            if ($arrlength == 1){
                                                echo trim($sickAvailedLeaves4 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAvailedLeaves4 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickEarned4 );
                                            if ($arrlength == 1){
                                                echo trim($sickEarned4 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickEarned4 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithPay4 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithPay4 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithPay4 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickBalance4 );
                                            if ($arrlength == 1){
                                                echo trim($sickBalance4 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickBalance4 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithoutPay4 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithoutPay4 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithoutPay4 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php
                                            $arrlength = count($sickBalance4 );
                                            if ($arrlength == 1){
                                                $total4 += $sickBalance4[0];
                                                $total1sick += $sickBalance4[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    $total4 += $sickBalance4[$x];
                                                    $total1sick += $sickBalance4[$x];
                                                }
                                            }
                                            echo trim($total4);
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>MAY</td>
                                        <td><?php $arrlength = count($sickAvailedLeaves5 );
                                            if ($arrlength == 1){
                                                echo trim($sickAvailedLeaves5 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAvailedLeaves5 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickEarned5 );
                                            if ($arrlength == 1){
                                                echo trim($sickEarned5 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickEarned5 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithPay5 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithPay5 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithPay5 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickBalance5 );
                                            if ($arrlength == 1){
                                                echo trim($sickBalance5 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickBalance5 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithoutPay5 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithoutPay5 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithoutPay5 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php
                                            $arrlength = count($sickBalance5 );
                                            if ($arrlength == 1){
                                                $total5 += $sickBalance5[0];
                                                $total1sick += $sickBalance5[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    $total5 += $sickBalance5[$x];
                                                    $total1sick += $sickBalance5[$x];
                                                }
                                            }
                                            echo trim($total5);
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>JUN</td>
                                        <td><?php $arrlength = count($sickAvailedLeaves6 );
                                            if ($arrlength == 1){
                                                echo trim($sickAvailedLeaves6 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAvailedLeaves6 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickEarned6 );
                                            if ($arrlength == 1){
                                                echo trim($sickEarned6 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickEarned6 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithPay6 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithPay6 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithPay6 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickBalance6 );
                                            if ($arrlength == 1){
                                                echo trim($sickBalance6 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickBalance6 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithoutPay6 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithoutPay6 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithoutPay6 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php
                                            $arrlength = count($sickBalance6 );
                                            if ($arrlength == 1){
                                                $total6 += $sickBalance6[0];
                                                $total1sick += $sickBalance6[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    $total6 += $sickBalance6[$x];
                                                    $total1sick += $sickBalance6[$x];
                                                }
                                            }
                                            echo trim($total6);
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>JUL</td>
                                        <td><?php $arrlength = count($sickAvailedLeaves7 );
                                            if ($arrlength == 1){
                                                echo trim($sickAvailedLeaves7 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAvailedLeaves7 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickEarned7 );
                                            if ($arrlength == 1){
                                                echo trim($sickEarned7 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickEarned7 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithPay7 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithPay7 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithPay7 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickBalance7 );
                                            if ($arrlength == 1){
                                                echo trim($sickBalance7 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickBalance7 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithoutPay7 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithoutPay7 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithoutPay7 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php
                                            $arrlength = count($sickBalance7 );
                                            if ($arrlength == 1){
                                                $total7 += $sickBalance7[0];
                                                $total1sick += $sickBalance7[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    $total7 += $sickBalance7[$x];
                                                    $total1sick += $sickBalance7[$x];
                                                }
                                            }
                                            echo trim($total7);
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AUG</td>
                                        <td><?php $arrlength = count($sickAvailedLeaves8 );
                                            if ($arrlength == 1){
                                                echo trim($sickAvailedLeaves8 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAvailedLeaves8 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickEarned8 );
                                            if ($arrlength == 1){
                                                echo trim($sickEarned8 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickEarned8 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithPay8 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithPay8 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithPay8 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickBalance8 );
                                            if ($arrlength == 1){
                                                echo trim($sickBalance8 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickBalance8 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithoutPay8 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithoutPay8 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithoutPay8 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php
                                            $arrlength = count($sickBalance8 );
                                            if ($arrlength == 1){
                                                $total8 += $sickBalance8[0];
                                                $total1sick += $sickBalance8[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    $total8 += $sickBalance8[$x];
                                                    $total1sick += $sickBalance8[$x];
                                                }
                                            }
                                            echo trim($total8);
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>SEP</td>
                                        <td><?php $arrlength = count($sickAvailedLeaves9 );
                                            if ($arrlength == 1){
                                                echo trim($sickAvailedLeaves9 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAvailedLeaves9 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickEarned9 );
                                            if ($arrlength == 1){
                                                echo trim($sickEarned9 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickEarned9 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithPay9 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithPay9 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithPay9 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickBalance9 );
                                            if ($arrlength == 1){
                                                echo trim($sickBalance9 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickBalance9 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithoutPay9 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithoutPay9 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithoutPay9 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php
                                            $arrlength = count($sickBalance9 );
                                            if ($arrlength == 1){
                                                $total9 += $sickBalance9[0];
                                                $total1sick += $sickBalance9[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    $total9 += $sickBalance9[$x];
                                                    $total1sick += $sickBalance9[$x];
                                                }
                                            }
                                            echo trim($total9);
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OCT</td>
                                        <td><?php $arrlength = count($sickAvailedLeaves10 );
                                            if ($arrlength == 1){
                                                echo trim($sickAvailedLeaves10 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAvailedLeaves10 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickEarned10 );
                                            if ($arrlength == 1){
                                                echo trim($sickEarned10 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickEarned10 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithPay10 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithPay10 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithPay10 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickBalance10 );
                                            if ($arrlength == 1){
                                                echo trim($sickBalance10 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickBalance10 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithoutPay10 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithoutPay10 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithoutPay10 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php
                                            $arrlength = count($sickBalance10 );
                                            if ($arrlength == 1){
                                                $total10 += $sickBalance10[0];
                                                $total1sick += $sickBalance10[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    $total10 += $sickBalance10[$x];
                                                    $total1sick += $sickBalance10[$x];
                                                }
                                            }
                                            echo trim($total10);
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>NOV</td>
                                        <td><?php $arrlength = count($sickAvailedLeaves11 );
                                            if ($arrlength == 1){
                                                echo trim($sickAvailedLeaves11 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAvailedLeaves11 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickEarned11 );
                                            if ($arrlength == 1){
                                                echo trim($sickEarned11 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickEarned11 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithPay11 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithPay11 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithPay11 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickBalance11 );
                                            if ($arrlength == 1){
                                                echo trim($sickBalance11 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickBalance11 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithoutPay11 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithoutPay11 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithoutPay11 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php
                                            $arrlength = count($sickBalance11 );
                                            if ($arrlength == 1){
                                                $total11 += $sickBalance11[0];
                                                $total1sick += $sickBalance11[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    $total11 += $sickBalance11[$x];
                                                    $total1sick += $sickBalance11[$x];
                                                }
                                            }
                                            echo trim($total11);
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>DEC</td>
                                        <td><?php $arrlength = count($sickAvailedLeaves12 );
                                            if ($arrlength == 1){
                                                echo trim($sickAvailedLeaves12 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAvailedLeaves12 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickEarned12 );
                                            if ($arrlength == 1){
                                                echo trim($sickEarned12 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickEarned12 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithPay12 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithPay12 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithPay12 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickBalance12 );
                                            if ($arrlength == 1){
                                                echo trim($sickBalance12 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickBalance12 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php $arrlength = count($sickAbsencesWithoutPay12 );
                                            if ($arrlength == 1){
                                                echo trim($sickAbsencesWithoutPay12 [0]);
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    echo trim($sickAbsencesWithoutPay12 [$x]);
                                                    echo ", ";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php
                                            $arrlength = count($sickBalance12 );
                                            if ($arrlength == 1){
                                                $total12 += $sickBalance12[0];
                                                $total1sick += $sickBalance12[0];
                                            }else{

                                                for($x = 0; $x < $arrlength; $x++) {
                                                    $total12 += $sickBalance12[$x];
                                                    $total1sick += $sickBalance12[$x];
                                                }
                                            }
                                            echo trim($total12);
                                            ?>
                                        </td>
                                    </tr>

                                    <tfoot>
                                    <tr>
                                        <th colspan="7"><center>Total Credits as of: March 10, 2018</center></th>
                                    </tr>
                                    <tr>
                                        <th colspan="2">Vacation Leave</th>
                                        <th colspan="2">Sick Leave</th>
                                        <th colspan="3">Total</th>
                                    </tr>
                                    <tr>
                                        <th colspan="2"><?php echo trim($total1vacation) ?></th>
                                        <th colspan="2"><?php echo trim($total1sick) ?></th>
                                        <th colspan="3"><?php echo trim($total1vacation + $total1sick) ?></th>
                                    </tr>

                                    <tr>
                                    </tr>
                                    </tfoot>
                                </table>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />

        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>


</body>
</html>

