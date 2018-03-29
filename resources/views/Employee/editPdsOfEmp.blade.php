<?php
// Start the session
session_start();
if(isset($_SESSION['name'])){
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
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->

    <!-- CUSTOM STYLES-->
    <link href="../../assets/css/custom.css" rel="stylesheet" />
    <!-- TABLE STYLES-->
    <link href="../../assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                    <img src="/assets/img/find_user.png" class="user-image img-responsive"/>
                </li>


                <li>
                    <a   href="indexEmp"><?php $_SESSION['time'] = time();?><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                </li>
                <li>
                    <a class="active-menu" href="PdsOfEmp.html"><?php $_SESSION['time'] = time();?><i class="fa fa-file-text fa-3x"></i> Personal Data Sheet</a>
                </li>
                <li>
                    <a  href="empleaveform"><?php $_SESSION['time'] = time();?><i class="fa fa-qrcode fa-3x"></i> Leave Form</a>
                </li>
                <li  >
                    <a  href="empleavesum"><?php $_SESSION['time'] = time();?><i class="fa  fa-users fa-3x"></i> Leave Summary</a>
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
                <div id="paper">
                    <div class="paper-top"></div>
                    <div id="paper-mid">
                        <div class="entry">
                            <div class="col-md-12">
                                <br>
                                <div style="text-align: left">
                                    <div class="tab-content px-1 pt-1">
                                      <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
                                        <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Personal Data Sheet
                                        </div>
                                        <div class="panel-body">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#page1" data-toggle="tab">page1</a>
                                                </li>
                                                <li class=""><a href="#page2" data-toggle="tab">page2</a>
                                                </li>
                                                <li class=""><a href="#page3" data-toggle="tab">page3</a>
                                                </li>
                                                <li class=""><a href="#page4" data-toggle="tab">page4</a>
                                                </li>
                                            </ul>

                                            <div class="tab-content">
                                                <form action="/submit_pds" method="GET">
                                                <div class="tab-pane fade active in" id="page1">
                                                    <br>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsePersonal" class="collapsed">Personal Information</a>
                                                            </h4>
                                                        </div>
                                                            <div class="panel-body">
                                                                <h3>Details</h3>
                                                            First name: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="givenname" value="{{$employeedataf->givenname}}"></input><br><br>
                                                            Middle name: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="middlename" value="{{$employeedataf->middlename}}"></input><br><br>
                                                            Last name: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="lastname" value="{{$employeedataf->lastname}}"></input><br><br>
                                                            Gender: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="sex" value="{{$employeedataf->sex}}"></input><br><br>
                                                            Mobile number: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="mobileNo" value="{{$employeedataf->mobileNo}}"></input><br><br>
                                                            Date of birth:  
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="dateofbirth" value="{{$employeedataf->dateOfBirth}}"></input><br><br>
                                                            Place of birth: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="placeofbirth" value="{{$employeedataf->placeOfBirth}}"></input><br><br>
                                                            Civil status: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="civilstatus" value="{{$employeedataf->civilStatus}}"></input><br><br>
                                                            Citizenship: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="citizenship" value="{{$employeedataf->citizenship}}"></input><br><br>
                                                            Height: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="height" value="{{$employeedataf->height}}"></input><br><br>
                                                            Weight: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="weight" value="{{$employeedataf->weight}}"></input><br><br>
                                                            Email address: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="emailaddress" value="{{$employeedataf->emailaddress}}"></input><br><br>
                        
                                                            <h3>Family background</h3>
                                                            Spouse's name: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="spousename" value="{{$employeedataf->spouseName}}"></input><br><br>
                                                            Spouse's occupation: <br> <input class="col-md-6 col-sm-12" type="text" name="spousedateofbirth" value="{{$employeedataf->spouseOccupation}}"></input><br><br>
                                                            Spouse's date of birth: <br> <input class="col-md-6 col-sm-12" type="text" name="spouseoccupation" value="{{$employeedataf->spouseDateOfBirth}}"></input><br><br>
                                                            Spouse's employer/business name: <br> <input class="col-md-6 col-sm-12" type="text" name="spouseemployerbusiness" value="{{$employeedataf->spouseEmployerBusiness}}"></input><br><br>
                                                            Business address: <br> <input class="col-md-6 col-sm-12" type="text" name="spousebusinessaddress" value="{{$employeedataf->spouseBusinessAddress}}"></input><br><br>
                                                            Telephone number: <br> <input class="col-md-6 col-sm-12" type="text" name="spousetelephoneno" value="{{$employeedataf->spouseTelephoneNo}}"></input><br><br>
                                                            Father's name: <br> <input class="col-md-6 col-sm-12" type="text" name="fathername" value="{{$employeedataf->fatherName}}"></input><br><br>
                                                            Mother's name: <br> <input class="col-md-6 col-sm-12" type="text" name="mothername" value="{{$employeedataf->motherName}}"></input><br><br>
                                                            
                                                            <h3>Educational background</h3>
                                                            <table>
                                                                <tr>
                                                                    <th>LEVEL</th>
                                                                    <th>NAME OF SCHOOL</th>
                                                                    <th>BASIC EDUCATION/DEGREE COURSE</th>
                                                                    <th>PERIOD OF ATTENDANCE FROM</th>
                                                                </tr>
                                                                    @foreach ($employeedataeduc as $emp_id)
                                                                <tr>
                                                                    <td><input type="text" name="lEvel" value="{{$emp_id->level}}"></td></input>
                                                                    <td><input type="text" name="nameofschool" value="{{$emp_id->nameOfSchool}}"></td></input>
                                                                    <td><input type="text" name="basicdegree" value="{{$emp_id->basicEducationDegreeCourse}}"></td></input>
                                                                    <td><input type="text" name="periodofattendancefrom" value="{{$emp_id->periodOfAttendanceFrom}}"></td></input>
                                                                    @endforeach
                                                                </tr>
                                                                <tr>
                                                                    <th>PERIOD OF ATTENDANCE TO</th>
                                                                    <th>HIGHEST LEVEL/UNITS EARNED</th>
                                                                    <th>YEAR GRADUATED</th>
                                                                    <th>SCHOLARSHIP/ACADEMIC HONORS RECEIEVED</th> 
                                                                </tr>            
                                                                    @foreach ($employeedataeduc as $emp_id)
                                                                <tr>
                                                                    <td><input type="text" name="periodofattendanceto" value="{{$emp_id->periodOfAttendanceTo}}"></td></input>
                                                                    <td><input type="text" name="highestlevelearned" value="{{$emp_id->highestLevelEarnedUnits}}"></td></input>
                                                                    <td><input type="text" name="yeargraduated" value="{{$emp_id->yearGraduated}}"></td></input>
                                                                    <td><input type="text" name="honorsReceieved" value="{{$emp_id->scholarshipsAcademicHonorsReceived}}"></td></input>
                                                                </tr>
                                                                    @endforeach

                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="text-align: right">
                                                        <a href="#page2" data-toggle="tab" class="btn btn-default btn-sm">2</a>
                                                        <a href="#page3" data-toggle="tab" class="btn btn-default btn-sm">3</a>
                                                        <a href="#page4" data-toggle="tab" class="btn btn-default btn-sm">4</a>
                                                    </div>

                                                <div class="tab-pane fade" id="page2">
                                                    <br>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseCS" class="collapsed">Civil Service Eligibility</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseCS" class="panel-collapse collapse" style="height: 0px;">
                                                            <div class="panel-body">
                                                                <table>
                                                                    <tr>
                                                                        <th>CAREER SERVICE</th>
                                                                        <th>RATING</th>
                                                                        <th>DATE OF EXAMINATION</th>
                                                                        <th>PLACE OF EXAMINATION</th>
                                                                    </tr>
                                                                    @foreach ($employeedatacivil as $emp_id)
                                                                        <tr>
                                                                            <td><input type="text" name="periodofattendanceto" value="{{$emp_id->civilServiceName}}"></td></input>
                                                                            <td><input type="text" name="periodofattendanceto" value="{{$emp_id->rating}}"></td></input>
                                                                            <td><input type="text" name="periodofattendanceto" value="{{$emp_id->dateOfExamination}}"></td></input>
                                                                            <td><input type="text" name="periodofattendanceto" value="{{$emp_id->placeOfExamination}}"></td></input>
                                                                        </tr>
                                                                    @endforeach
                                                                    <tr>
                                                                        <th>LICENSE IF APPLICABLE</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Number</td>
                                                                        <td>Date of Validity</td>
                                                                    </tr>
                                                                    @foreach ($employeedatacivil as $emp_id)
                                                                        <tr>
                                                                            <td><input type="text" name="periodofattendanceto" value="{{$emp_id->licenseNumber}}"></td></input>
                                                                            <td><input type="text" name="periodofattendanceto" value="{{$emp_id->licenseDateOfValidity}}"></td></input>
                                                                        </tr>
                                                                    @endforeach
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr>

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseWE" class="collapsed">Work Experience</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseWE" class="panel-collapse collapse" style="height: 0px;">
                                                            <div class="panel-body">
                                                                <table>
                                                                    <tr>
                                                                        <th>INCLUSIVE DATES:FROM</th>
                                                                        <th>INCLUSIVE DATES:TO</th>
                                                                        <th>POSITION TITLE</th>
                                                                        <th>DEPARTMENT/AGENCIES/OFFICE/COMPANY</th>
                                                                        <th>MONTHLY SALARY</th>
                                                                    </tr>
                                                                    @foreach ($employeedatawork as $emp_id)
                                                                        <tr>
                                                                            <td><input type="text" name="startdate" value="{{$emp_id->startJobDate}}"></input></td>
                                                                            <td><input type="text" name="enddate" value="{{$emp_id->endJobDate}}"></input></td>
                                                                            <td><input type="text" name="ptitle" value="{{$emp_id->positionTitle}}"></input></td>
                                                                            <td><input type="text" name="depagency" value="{{$emp_id->departmentAgencyOfficeCompany}}"></input></td>
                                                                            <td><input type="text" name="msalary" value="{{$emp_id->monthlySalary}}"></input></td>
                                                                        </tr>
                                                                    @endforeach
                                                                    <tr>
                                                                        <th>SALARY JOB PAY GRADE</th>
                                                                        <th>STATUS OF APPOINTMENT</th>
                                                                        <th>GOVERNMENT SERVICE</th>
                                                                    </tr>
                                                                    @foreach ($employeedatawork as $emp_id)
                                                                        <tr>
                                                                            <td><input type="text" name="jobsalary" value="{{$emp_id->salaryJobPayGradesStep}}"></input></td>
                                                                            <td><input type="text" name="appStatus" value="{{$emp_id->statusOfAppointment}}"></input></td>
                                                                            <td><input type="text" name="gove" value="{{$emp_id->GovernmentService}}"></input></td>
                                                                        </tr>
                                                                    @endforeach
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div style="text-align: right">
                                                        <a href="#page1" data-toggle="tab" class="btn btn-default btn-sm">1</a>
                                                        <a href="#page3" data-toggle="tab" class="btn btn-default btn-sm">3</a>
                                                        <a href="#page4" data-toggle="tab" class="btn btn-default btn-sm">4</a>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="page3">
                                                    <br>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseVW" class="collapsed">Voluntary Work Or Involvement In Civic/ Non Government/People/Voluntary ORGANIZATION</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseVW" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <table>
                                                                    <tr>
                                                                        <th>Name & Address of Organization</th>
                                                                        <th>Inclusive Dates: From</th>
                                                                        <th>Inclusive Dates: To</th>
                                                                        <th>Number of Hours</th>
                                                                        <th>Position</th>
                                                                    </tr>
                                                                    @foreach($employeedatavol as $emp_id)
                                                                        <tr>
                                                                            <td><input type="text" name="orgadd" value="{{$emp_id->nameAddressOfOrganization}}"></input></td>
                                                                            <td><input type="text" name="fromdate" value="{{$emp_id->from}}"></input></td>
                                                                            <td><input type="text" name="todate" value="{{$emp_id->to}}"></input></td>
                                                                            <td><input type="text" name="numbh" value="{{$emp_id->numberOfHours}}"></input></td>
                                                                            <td><input type="text" name="pos" value="{{$emp_id->position}}"></input></td>
                                                                        </tr>
                                                                    @endforeach
                                                                </table>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <hr>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseLD" class="collapsed">Learning And Development(L&O) Interventions/Training Programs Attended</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseLD" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <table>
                                                                    <tr>
                                                                        <th>Title Of Learning and Development Interventions/Training Programs</th>
                                                                        <th>Inclusive Dates Of Attendance: From</th>
                                                                        <th>Inclusive Dates Of Attendance: To</th>
                                                                        <th>Number of Hours</th>
                                                                    </tr>
                                                                    @foreach ($employeedatatrain as $emp_id)
                                                                        <tr>
                                                                            <td><input type="text" name="ttraining" value="{{$emp_id->titleofTrainingLearning}}"></input></td>
                                                                            <td><input type="text" name="tstart" value="{{$emp_id->trainingStart}}"></input></td>
                                                                            <td><input type="text" name="tend" value="{{$emp_id->trainingEnd}}"></input></td>
                                                                            <td><input type="text" name="tnumb" value="{{$emp_id->numberOfHours}}"></input></td>
                                                                        </tr>
                                                                    @endforeach
                                                                    <tr>
                                                                        <th>Type of I.D</th>
                                                                        <th>Conducted/Sponsored by:</th>
                                                                    </tr>
                                                                    @foreach ($employeedatatrain as $emp_id)
                                                                        <tr>
                                                                            <td><input type="text" name="ttype" value="{{$emp_id->typeOfLP}}"></input></td>
                                                                            <td><input type="text" name="tsponsor" value="{{$emp_id->conductedSponsoredBy}}"></input></td>
                                                                        </tr>
                                                                    @endforeach
                                                                </table>
                                                                <hr>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOI" class="collapsed">Other Information</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseOI" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <table>
                                                                    <tr>
                                                                        <th>Special Skills and Hobbies</th>
                                                                        <th>Non-Academic Distinctions/Recognition</th>
                                                                        <th>Membership in association/organization</th>
                                                                    </tr>
                                                                    @foreach($employeedataotherinfo as $emp_id)
                                                                        <tr>
                                                                            <td><input type="text" name="hobb" value="{{$emp_id->skillsAndHobbies}}"></input></td>
                                                                            <td><input type="text" name="distinc" value="{{$emp_id->nonAcademicDistinction}}"></input></td>
                                                                            <td><input type="text" name="mem" value="{{$emp_id->membership}}"></input></td>
                                                                        </tr>
                                                                    @endforeach
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div style="text-align: right">
                                                        <a href="#page1" data-toggle="tab" class="btn btn-default btn-sm">1</a>
                                                        <a href="#page2" data-toggle="tab" class="btn btn-default btn-sm">2</a>
                                                        <a href="#page4" data-toggle="tab" class="btn btn-default btn-sm">4</a>
                                                    </div>
                                                </div>
                                        

                        
        
                         
                                 </form>
                            <button type="submit" role="button" class="btn btn-default">Submit</button>
                      

                                    <a href="/pds_add_child"><i class="fa fa-edit "></i> Add child</a>
                                <br>

                            </div>
                            <!-- End Personal Information -->
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
    <script src="../assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="../assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>


</body>
</html>
