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
            <a class="navbar-brand" href="indexHR">Human Resource</a>
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
                    <img src="../assets/img/find_user.png" class="user-image img-responsive"/>
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
                <div class="container">
                    <form name="leave" action="/pendingLeaves" method="post" role="form">
                        {{ csrf_field() }}
                        <div class="col-md-10">
                            <label>Type of Leave</label>
                            <select class="form-control" id = "opts" onchange = "showForm()" name="typeOfLeave">
                                <option selected >Select type of leave:</option>
                                <option value="Sick">Sick Leave</option>
                                <option value="Vacation">Vacation Leave</option>
                                <option disabled >Forced Leave</option>
                                <option disabled >Terminal Leave</option>
                                <option disabled >Rehabilitation Leave</option>
                                <option disabled >CSC-SPL</option>
                            </select><br>
                        </div>

                        <div id = "f1" style="display:none">

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>Specify</label>
                                        <div class="radio">
<!--                                            --><?php
//                                                if ('optionsRadiosHospital' == true){
//                                                    'optionsRadiosOutPatient' == false;
//                                                }
//                                                if ('optionsRadiosOutPatient' == true){
//                                                    'optionsRadiosHospital' == false;
//                                                }
//                                            ?>
                                            <label>
                                                <input type="radio" name="options" id="inhospital" value="option1" />In Hospital</label>
                                                <input class="form-control" placeholder="ex. Baguio General Hospital, etc." name="inhospital" />
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="options" id="outpatient" value="option2"/>Out Patient</label><input class="form-control" placeholder="ex. Mother's place, etc." name="outPatient"/>
                                        </div>
                                        <label>Sick info</label>
                                        <input class="form-control" placeholder="ex. Fever, Headache, etc." name="sickinfo" type="text"/>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label>Leave Sick Start:</label>
                                    <input type="date" class="form-control" name="fromsick" id="sickstart">
                                    <label>Leave Sick End:</label>
                                    <input type="date" class="form-control" name="tosick" id="sickend"><br>
                                    <div style="text-align: center"><button value="submit" type="submit" class="btn btn-primary" onclick="Success">Submit Button</button><br>
                                    </div><br>
                                </div>

                        </div>

                        <div id = "f2" style="display:none">

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>Specify</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="withinph" value="option1" checked />Within the Philippines (Province)</label><input class="form-control" placeholder="ex. Pampanga, Bulacan, etc." name="province"/>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="abroad" value="option2"/>Abroad</label><input class="form-control" placeholder="ex. Singapore, etc." name="abroad"/>
                                        </div>
                                        <label>Complete Address</label>
                                        <input class="form-control" placeholder="ex. San Vicente Norte, Agoo, La Union, etc." id="sickinfoaddress"/>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label>Vacation Leave Start:</label>
                                    <input type="date" class="form-control" name="fromvacation" id="vacationstart">
                                    <label>Vacation Leave End:</label>
                                    <input type="date" class="form-control" name="tovacation" id="vacationend">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" />With Pay</label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"/>Without Pay</label>
                                    </div>
                                    <br>
                                    <div style="text-align: center"><button value="submit" type="submit" class="btn btn-primary" onclick="Success">Submit Button</button><br>
                                    </div><br>
                                </div>

                        </div>
                    </form>
                    <br>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseLeaveS">Leave Status</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </nav>
</div>

<!-- /. PAGE WRAPPER  -->
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
        if (selopt == 'Sick') {
            document.getElementById("f1").style.display="block";
            document.getElementById("f2").style.display="none";
        }
        if (selopt == 'Vacation') {
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
