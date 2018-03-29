<?php
// Start the session
//session_start();
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
    <!-- MORRIS CHART STYLES-->

    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                    <a class="active-menu" href="PendingLeaves.html"><?php $_SESSION['time'] = time();?><i class="fa fa-file-text fa-3x"></i> Pending Leaves</a>
                </li>
                <li>
                    <a  href="RandF"><?php $_SESSION['time'] = time();?><i class="fa fa-qrcode fa-3x"></i> Reports and Forms</a>
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
                    <!-- Pending Leaves -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pending Leaves
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Inclusive dates</th>
                                        <th>Type of Leave</th>
                                        <th>Date of Application</th>
                                        <th>Details</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{--<a href="DetermineLeaves.html">--}}
                                        <?php foreach ($employees as $employee): ?>
                                            <tr class="odd gradeX">
                                                <td> {{$employee->lastname}}, {{$employee->givenname}} {{$employee->middlename}}</td>
                                                <td>{{$employee->inclusiveDates}}</td>
                                                <td>{{$employee->typeOfLeave}}</td>
                                                <td class="center">{{$employee->dateOfApplication}}</td>
                                                <td class="center"><a href="/DetermineLeaves/{{$employee->emp_id.'+'.$employee->app_id}}" data-toggle="modal" class="btn btn-warning btn-xs">Click here!</a>
                                                </td>
                                            </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--Modal Content -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Modal title Here</h4>
                                </div>
                                <div class="modal-body">
                                    {{$employee->lastname}},
                                    {{$employee->givenname}}
                                    {{$employee->middlename}}
                                </div>
                                <div class="modal-footer">
                                    <a href="/" class="btn btn-success">Accept</a>
                                    <a href="#" class="btn btn-danger">Reject</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Modal -->


                    <!--End Pending Leaves -->
                </div>
            </div>
            <!-- /. ROW  -->

            <!--Leave Status -->

            <div class="panel-body">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="btn btn-default">Leave Status</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel panel-default">

                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Date of Action</th>
                                                <th>Type of Leave</th>
                                                <th>Status</th>
                                                <th>Details</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Accepted</td>
                                                <td class="center"><a href="#myDet" data-toggle="modal" class="btn btn-warning btn-xs">Click here!</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                                <td>Accepted</td>
                                                <td class="center"><a href="#myDet" data-toggle="modal" class="btn btn-warning btn-xs">Click here!</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                                <td>Rejected</td>
                                                <td class="center"><a href="#myDet" data-toggle="modal" class="btn btn-warning btn-xs">Click here!</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>



                                <!--Modal Content -->
                                <div class="modal fade" id="myDet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Modal title Here</h4>
                                            </div>
                                            <div class="modal-body">
                                                {{$employee->lastname}},
                                                {{$employee->givenname}}
                                                {{$employee->middlename}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End of Modal -->
                            </div>
                        </div>
                    </div>
                    <!--End Leave Status -->
                </div>

            </div>
            <!-- /. PAGE INNER  -->
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
        <!-- DATA TABLE SCRIPTS -->
        <script src="assets/js/dataTables/jquery.dataTables.js"></script>
        <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
        </script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>


</body>
</html>

