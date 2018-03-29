<?php
// Start the session
session_start();
if(isset($_SESSION['name'])){
    if ((time() - $_SESSION['time']) > 900){

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
            <a class="navbar-brand" href="index.html">Human Resource</a>
        </div>
        <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Today : <?php echo date("M d, Y")?>&nbsp; <a href="/logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                    <a   href="indexHR"><?php $_SESSION['time'] = time();?><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                </li>
                <li>
                    <a  href="PendingLeaves"><?php $_SESSION['time'] = time();?><i class="fa fa-file-text fa-3x"></i> Pending Leaves</a>
                </li>
                <li>
                    <a class="active-menu" href="RandF.html"><?php $_SESSION['time'] = time();?><i class="fa fa-qrcode fa-3x"></i> Reports and Forms</a>
                </li>
                <li  >
                    <a  href="Employees"><?php $_SESSION['time'] = time();?><i class="fa  fa-users fa-3x"></i> Employees</a>
                </li>
                <li  >
                    <a  href="blank"><?php $_SESSION['time'] = time();?><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                </li>
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <h2>Reports</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Plantilla
                        </div>
                        <div class="panel-footer">
                            <a href="/hrPlantilla" class="btn btn-info btn-sm">Generate</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Notice of Salary Adjustment (NOSA)
                        </div>
                        <form>
                            Salary Adjustment: <input type="number" name="nosa"><br>
                        </form>
                        <div class="panel-footer">
                            <a href="#" class="btn btn-info btn-sm">Generate</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <h2>Forms</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Employee
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            <a href="#" class="btn btn-info btn-sm">Create New!</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Division
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            <a href="#" class="btn btn-info btn-sm">Create New!</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Salary Grade
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            <a href="#" class="btn btn-info btn-sm">Create New!</a>
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


</body>
</html>
