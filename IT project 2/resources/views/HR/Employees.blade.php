<?php
// Start the session
//session_start();
if(isset($_SESSION['name'])){
    print $_SESSION['time'] - time();
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
font-size: 16px;"> Today: <?php $ldate = date ('Y-m-d'); echo date("M d, Y")?> <a href="/logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                        <a  href="RandF"><?php $_SESSION['time'] = time();?><i class="fa fa-qrcode fa-3x"></i> Reports and Forms</a>
                    </li>
                      <li  >
                        <a class="active-menu" href="Employees"><?php $_SESSION['time'] = time();?><i class="fa  fa-users fa-3x"></i> Employees</a>
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
                     <div class="form-group input-group">
                                            <input type="text" class="form-control" value="Manilyn Monroe">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <!-- Search Res  -->
                        <div class="panel-body">
                            <ul class="chat-box">
                                <li class="left clearfix">
                                    <a href="EmpProf.html">
                                        <?php foreach ($employees as $employee): ?>
                                    <span class="chat-img pull-left">
                                        <img src="assets/img/1.png" alt="User" class="img-circle" />
                                        </span></a>
                                    <div class="chat-body">                                      
                                            <a href="/EmpProf/{{$employee->emp_id}}"><strong>
                                                {{$employee->lastname}},
                                                {{$employee->givenname}}
                                                {{$employee->middlename}}
                                            </strong></a>                                    
                                        <p>
                                            ID: {{$employee->emp_id}} Status: {{$employee->status}} Position: {{$employee->position}} Gender: {{$employee->sex}}
                                            <hr>
                                        </p>
                                    </div>
                                    <?php endforeach; ?>
                                </li>                
                                
                            </ul>
                        </div>

            <!-- End of Search Res  -->

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseEmployee" class="collapsed">Employees</a>
                        </h4>
                    </div>
                    <div id="collapseEmployee" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <!--    Striped Rows Table  -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Sort By:
                                            <!-- status -->
                                            <div class="btn-group">
                                                <button class="btn btn-default">Status</button>
                                                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle"><span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Deceased</a></li>
                                                    <li><a href="#">Terminated</a></li>
                                                    <li><a href="#">Resigned</a></li>
                                                    <li><a href="#">Retired</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                            <!--division -->
                                            <div class="btn-group">
                                                <button class="btn btn-default">Division</button>
                                                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle"><span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Office of the Regional Director</a></li>
                                                    <li><a href="#">Finance and Administrative Division</a></li>
                                                    <li><a href="#">Local Government Capacity Development Division</a></li>
                                                    <li><a href="#">Local Government Monitoring and Evaluation Division</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>


                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Status</th>
                                                        <th>Position</th>
                                                        <th>Division</th>
                                                        <th>Action</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Mark Benitez</td>
                                                        <td>Resigned</td>
                                                        <td>@mdo</td>
                                                        <td>@mdo</td>
                                                        <td><a href="#" class="btn btn-info btn-xs">View Profile</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Jacob Black</td>
                                                        <td>Terminated</td>
                                                        <td>retro</td>
                                                        <td>retro</td>
                                                        <td><a href="#" class="btn btn-info btn-xs">View Profile</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Larry Barry</td>
                                                        <td>Barry</td>
                                                        <td>Pix</td>
                                                        <td>Pix</td>
                                                        <td><a href="#" class="btn btn-info btn-xs">View Profile</a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  End  Striped Rows Table  -->
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

