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
        echo '<a href="/logout" class="btn btn-danger square-btn-adjust">PLease Login</a>';
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
        echo '<a href="/logout" class="btn btn-danger square-btn-adjust">PLease Login</a>';
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
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
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
            <a class="navbar-brand" href="index.html">Human Resource</a>
        </div>
        <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Today: <?php echo date("M d, Y")?> <a href="/logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
    </nav>
<?php
print_r($_SESSION);
?>
<?php //$_SESSION['appleaveID'] = $employeependingleave->app_id;?>
<!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="../assets/img/find_user.png" class="user-image img-responsive"/>
                </li>


                <li>
                    <a   href="indexHR"><?php $_SESSION['time'] = time();?><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                </li>
                <li>
                    <a  href="PendingLeaves"><?php $_SESSION['time'] = time();?><i class="fa fa-file-text fa-3x"></i> Pending Leaves</a>
                </li>
                <li>
                    <a  href="Plantilla"><?php $_SESSION['time'] = time();?><i class="fa fa-qrcode fa-3x"></i> Plantilla</a>
                </li>
                <li  >
                    <a  href="Employees"><?php $_SESSION['time'] = time();?><i class="fa  fa-users fa-3x"></i> Employees</a>
                </li>
                <li  >
                    <a href="blank"><?php $_SESSION['time'] = time();?><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                </li>
            </ul>
        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Determining Leaves Page</h2>
                    <h5>{{$employeedataf->lastname .', '. $employeedataf->givenname .' '. $employeedataf->middlename}}</h5>

                </div>
            </div>
            <!-- /. ROW  -->
            <table>
                <thead>
                <tr>
                    <th>Inclusive dates</th>
                    <td>{{$employeependingleave->inclusiveDates}}</td>
                </tr>
                <tr>
                    <th>Type of Leave</th>
                    <td>{{$employeependingleave->typeOfLeave}}</td>
                </tr>
                <tr>
                    <th>Location</th>
                    <td class="center">{{$employeependingleave->location}}</td>
                </tr>
                <tr>
                    <th>Sick Information</th>
                    <td>{{$employeependingleave->sickInfo}}</td>
                </tr>
                <tr>
                    <th>No of Working Days</th>
                    <td>{{$employeependingleave->noOfWorkingDays}}</td>
                </tr>
                <tr>
                    <th>Inclusive Dates</th>
                    <td class="center">{{$employeependingleave->inclusiveDates}}</td>
                </tr>
                <tr>
                    <th>Date of Application</th>
                    <td class="center">{{$employeependingleave->dateOfapplication}}</td>
                </tr>
                </thead>
            </table>
            <?php $_SESSION['appleaveID'] = $employeependingleave->app_id ?>
            <br>
            <h3>Insert Points</h3>
            <form name="acceptleave" action="/AcceptLeaves" method="post">
                {{ csrf_field() }}
                <?php if($employeependingleave->typeOfLeave == 'Vacation') :?>
                <table>
                    <thead>
                    <tr>
                        <th>No of Absence</th>
                        <td><label>
                                <input type="text" name="vacationNoOfAbsence"/>
                            </label></td>
                    </tr>
                    <tr>
                        <th>Tardiness</th>
                        <td><label>
                                <input type="text" name="tardiness"/>
                            </label></td>
                    </tr>
                    <tr>
                        <th>Balance</th>
                        <td><label>
                                <input type="text" name="vacationBalance"/>
                            </label></td>
                    </tr>
                    <tr>
                        <th>Absence with Pay</th>
                        <td><label>
                                <input type="text" name="vacationAbsencesWithPay"/>
                            </label></td>
                    </tr>
                    <tr>
                        <th>Absence without Pay</th>
                        <td><label>
                                <input type="text" name="vacationAbsencesWithoutPay"/>
                            </label></td>
                    </tr>
                    </thead>
                </table>
                <?php elseif($employeependingleave->typeOfLeave == 'Sick') : ?>
                    <table>
                        <thead>
                        <tr>
                            <th>No of Absence</th>
                            <td><label>
                                    <input type="text" name="sickNoOfAbsenceTardiness"/>
                                </label></td>
                        </tr>
                        <tr>
                            <th>Balance</th>
                            <td><label>
                                    <input type="text" name="sickBalance"/>
                                </label></td>
                        </tr>
                        <tr>
                            <th>Absence with Pay</th>
                            <td><label>
                                    <input type="text" name="sickAbsencesWithPay"/>
                                </label></td>
                        </tr>
                        <tr>
                            <th>Absence without Pay</th>
                            <td><label>
                                    <input type="text" name="sickAbsencesWithoutPay"/>
                                </label></td>
                        </tr>
                        </thead>
                    </table>
                    <?php endif; ?>
            <br>
            <div class="modal-footer">
                <button value="submit" type="submit" class="btn btn-success" >Accept</button>
                <a href="/DeleteLeave" class="btn btn-danger">Reject</a>
            </div>
            </form>
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
