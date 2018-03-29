<?php
// Start the session
session_start();
if(isset($_SESSION['name'])){
    print $_SESSION['time'] - time();
    if ((time() - $_SESSION['time']) > 30){


        // session timed out
//        session_unset();     // unset $_SESSION variable for the run-time
//        session_destroy();   // destroy session data in storage
        echo '<a href="/logout" class="btn btn-danger square-btn-adjust">PLease Login</a>';
        return redirect()->route('logout');

    }
}else{
    echo '<a href="/logout" class="btn btn-danger square-btn-adjust">PLease Login</a>';
    return redirect()->route('logout');
}
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
                                        <td>None</td>
                                        <td></td>
                                        <td>1.25</td>
                                        <td></td>
                                        <td>4.22</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>FEB</td>
                                        <td>15 SPL</td>
                                        <td></td>
                                        <td>1.25</td>
                                        <td></td>
                                        <td>5.55</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>MAR</td>
                                        <td>None</td>
                                        <td></td>
                                        <td>1.25</td>
                                        <td></td>
                                        <td>12.2</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>APR</td>
                                        <td>10-12 FL</td>
                                        <td>3</td>
                                        <td>1.25</td>
                                        <td>3</td>
                                        <td>9.22</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>MAY</td>
                                        <td>None</td>
                                        <td></td>
                                        <td>1.25</td>
                                        <td></td>
                                        <td>2.1</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>JUN</td>
                                        <td>None</td>
                                        <td></td>
                                        <td>1.25</td>
                                        <td></td>
                                        <td>2.33</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>JUL</td>
                                        <td>None</td>
                                        <td></td>
                                        <td>1.25</td>
                                        <td></td>
                                        <td>12.2</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>AUG</td>
                                        <td>None</td>
                                        <td></td>
                                        <td>1.25</td>
                                        <td></td>
                                        <td>11.2</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>SEP</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>1.2</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>OCT</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>13.2</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>NOV</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>1.22</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>DEC</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>7.44</td>
                                        <td></td>
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
                                        <td>None</td>
                                        <td>1.25</td>
                                        <td></td>
                                        <td>2</td>
                                        <td></td>
                                        <td>44</td>
                                    </tr>
                                    <tr>
                                        <td>FEB</td>
                                        <td>None</td>
                                        <td>1.25</td>
                                        <td></td>
                                        <td>2</td>
                                        <td></td>
                                        <td>44</td>
                                    </tr>
                                    <tr>
                                        <td>MAR</td>
                                        <td>None</td>
                                        <td>1.25</td>
                                        <td></td>
                                        <td>2</td>
                                        <td></td>
                                        <td>44</td>
                                    </tr>
                                    <tr>
                                        <td>APR</td>
                                        <td>20-21</td>
                                        <td>1.25</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td></td>
                                        <td>44</td>
                                    </tr>
                                    <tr>
                                        <td>MAY</td>
                                        <td>None</td>
                                        <td>1.25</td>
                                        <td></td>
                                        <td>2</td>
                                        <td></td>
                                        <td>44</td>
                                    </tr>
                                    <tr>
                                        <td>JUN</td>
                                        <td>None</td>
                                        <td>1.25</td>
                                        <td></td>
                                        <td>2</td>
                                        <td></td>
                                        <td>44</td>
                                    </tr>
                                    <tr>
                                        <td>JUL</td>
                                        <td>None</td>
                                        <td>1.25</td>
                                        <td></td>
                                        <td>2</td>
                                        <td></td>
                                        <td>44</td>
                                    </tr>
                                    <tr>
                                        <td>AUG</td>
                                        <td>None</td>
                                        <td>1.25</td>
                                        <td></td>
                                        <td>2</td>
                                        <td></td>
                                        <td>44</td>
                                    </tr>
                                    <tr>
                                        <td>SEP</td>
                                        <td>None</td>
                                        <td></td>
                                        <td></td>
                                        <td>2</td>
                                        <td></td>
                                        <td>44</td>
                                    </tr>
                                    <tr>
                                        <td>OCT</td>
                                        <td>None</td>
                                        <td></td>
                                        <td></td>
                                        <td>2</td>
                                        <td></td>
                                        <td>44</td>
                                    </tr>
                                    <tr>
                                        <td>NOV</td>
                                        <td>None</td>
                                        <td></td>
                                        <td></td>
                                        <td>2</td>
                                        <td></td>
                                        <td>44</td>
                                    </tr>
                                    <tr>
                                        <td>DEC</td>
                                        <td>None</td>
                                        <td></td>
                                        <td></td>
                                        <td>2</td>
                                        <td></td>
                                        <td>44</td>
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
                                        <th colspan="2">19.299</th>
                                        <th colspan="2">21.22</th>
                                        <th colspan="3">99.22</th>
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

