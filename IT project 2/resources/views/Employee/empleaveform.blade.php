<?php
// Start the session
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
//    print_r($_SESSION);
//?>
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
                    <a class="active-menu" href="empleaveform.html"><?php $_SESSION['time'] = time();?><i class="fa fa-qrcode fa-3x"></i> Leave Form</a>
                </li>
                <li>
                    <a href="empleavesum"><?php $_SESSION['time'] = time();?><i class="fa  fa-users fa-3x"></i> Leave Summary</a>
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
                    <h2>Leave Form and Status</h2>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseLeaveF">Leave Form</a>
                                        </h4>
                                    </div>
                                    <div id="collapseLeaveF" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                            <form role="form" action="empleavesum.blade.php.php" method="post">
                                                {{ csrf_field() }}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Type of Leave</label>
                                                        <select class="form-control" id = "opts" onchange = "showForm()" name="typeOfLeave">
                                                            <option  disabled selected>Select leave:</option>
                                                            <option value="1">Sick Leave</option>
                                                            <option value="2">Vacation Leave</option>

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Number of Working Days</label>
                                                        <input class="form-control" type="text" name="numberOfWorkingDays" placeholder="Applied For.."/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Reason/s</label>
                                                        <input class="form-control" type="text" name="reasons" placeholder=""/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Inclusive Dates</label>
                                                        <input class="form-control" type="text" name="inclusiveDates" placeholder="ex: 2017/02/22 or 2017/02/21 - 2017/02/22"/>
                                                    </div>
                                                </div>

                                                <div id = "f1" style="display:none">
                                                    <form name= "form1">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>If Sick</label>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked />In Hospital
                                                                    </label><input class="form-control" type="text" name="inHospital" placeholder="Please Specify"/>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"/>Out Patient
                                                                    </label><input class="form-control" type="text" name="outPatient" placeholder="Please Specify"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div id = "f2" style="display:none">
                                                    <form name= "form2">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>If Vacation</label>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked />With In Philippines
                                                                    </label><input class="form-control" type="text" name="inHospital" placeholder="Please Specify"/>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"/>Abroad
                                                                    </label><input class="form-control" type="text" name="inHospital" placeholder="Please Specify"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Commutation</label>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" />Requested
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"/>Not Requested
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </form>
                                        </div>
                                        <div style="text-align: center"><button value="submit" type="submit" class="btn btn-primary">Submit Button</button></div>
                                        <br>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
//            $selectOption = $_POST['typeOfLeave'];
            //            $_POST["numberOfWorkingDays"];
            //            $_POST["reasons"];
            //            $_POST["inclusiveDates"];
            //            $_POST["inHospital"];
            //            $_POST["outPatient"];
            //            $_POST["inclusiveDates"];
            //            $_POST["inclusiveDates"];
            ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseLeaveS">Leave Status</a>
                                        </h4>
                                    </div>
                                    <div id="collapseLeaveS" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
<script type="text/javascript">
    function showForm(){
        var selopt = document.getElementById("opts").value;
        if (selopt == 1) {
            document.getElementById("f1").style.display="block";
            document.getElementById("f2").style.display="none";
        }
        if (selopt == 2) {
            document.getElementById("f2").style.display="block";
            document.getElementById("f1").style.display="none";
        }
        if (selopt == 3) {
            document.getElementById("f2").style.display="none";
            document.getElementById("f1").style.display="none";
        }
    }
</script>


</body>
</html>
