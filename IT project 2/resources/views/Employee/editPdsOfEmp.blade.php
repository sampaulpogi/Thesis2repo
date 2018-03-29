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
                    <img src="../assets/img/find_user.png" class="user-image img-responsive"/>
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
                            <!-- Begin Personal Information -->
                            
                            <div class="col-md-12">
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
                                                                <input class="col-md-6 col-sm-12" type="text" name="givenname" value="{{$employeedataf->givenname}}"><br><br>
                                                            Middle name: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="middlename" value="{{$employeedataf->middlename}}"><br><br>
                                                            Last name: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="lastname" value="{{$employeedataf->lastname}}"><br><br>
                                                            Gender: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="sex" value="{{$employeedataf->sex}}"><br><br>
                                                            Mobile number: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="mobileNo" value="{{$employeedataf->mobileNo}}"><br><br>
                                                            Date of birth:  
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="dateofbirth" value="{{$employeedataf->dateOfBirth}}"><br><br>
                                                            Place of birth: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="placeofbirth" value="{{$employeedataf->placeOfBirth}}"><br><br>
                                                            Civil status: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="civilstatus" value="{{$employeedataf->civilStatus}}"></input><br><br>
                                                            Citizenship: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="citizenship" value="{{$employeedataf->citizenship}}"></input><br><br>
                                                            Height: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="height" value="{{$employeedataf->height}}"><br><br>
                                                            Weight: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="weight" value="{{$employeedataf->weight}}"><br><br>
                                                            Email address: 
                                                                <br> 
                                                                <input class="col-md-6 col-sm-12" type="text" name="emailaddress" value="{{$employeedataf->emailaddress}}"><br><br>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFamily" class="collapsed">Family Background</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseFamily" class="panel-collapse collapse" style="height: 0px;">
                                                            <div class="panel-body">
                                                                <table>
                                                                    <tr>
                                                                        <td class ="question">Spouse's Name:</td>
                                                                        <td>{{ $employeedataf->spouseName }}</td>
                                                                        <td class ="question">Occupation:</td>
                                                                        <td>{{ $employeedataf->spouseOccupation }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class ="question">Employer/BusinessName:</td>
                                                                        <td>{{$employeedataf->spouseEmployerBusiness}}</td>
                                                                        <td class ="question">Business Address:</td>
                                                                        <td>{{$employeedataf->spouseBusinessAddress}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class ="question">Telephone Number:</td>
                                                                        <td>{{$employeedataf->spouseTelephoneNo}}</td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td class ="question">Father's Name:</td>
                                                                        <td>{{$employeedataf->fatherName}}</td>
                                                                        <td class ="question">Mother's Name:</td>
                                                                        <td>{{$employeedataf->motherName}}</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th>Name of Children</th>
                                                                        <th>Birthdate</th>
                                                                    </tr>
                                                                    @foreach ($employeedatachild as $emp_id)
                                                                        <tr>
                                                                            <td>{{$emp_id->fullname}}</td>
                                                                            <td>{{$emp_id->dateOfBirth}}</td>
                                                                        </tr>
                                                                    @endforeach
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr />
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseEdu" class="collapsed">Educational Background</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseEdu" class="panel-collapse collapse" style="height: 0px;">
                                                            <div class="panel-body">
                                                                <table>
                                                                    <tr>
                                                                        <th>LEVEL</th>
                                                                        <th>NAME OF SCHOOL</th>
                                                                        <th>BASIC EDUCATION/DEGREE COURSE</th>
                                                                        <th>PERIOD OF ATTENDANCE</th>
                                                                    </tr>
                                                                    @foreach ($employeedataeduc as $emp_id)
                                                                        <tr>
                                                                            <td>{{$emp_id->level}}</td>
                                                                            <td>{{$emp_id->nameOfSchool}}</td>
                                                                            <td>{{$emp_id->basicEducationDegreeCourse}}</td>
                                                                            <td>{{$emp_id->periodOfAttendanceFrom}} - {{$emp_id->periodOfAttendanceTo}}</td>

                                                                        </tr>
                                                                    @endforeach
                                                                    <tr>
                                                                        <th>HIGHEST LEVEL/ UNITS EARNED</th>
                                                                        <th>YEAR GRADUATED</th>
                                                                        <th>SCHOLARSHIP/ACADEMIC HONORS RECEIVED</th>
                                                                    </tr>
                                                                    @foreach ($employeedataeduc as $emp_id)
                                                                        <tr>
                                                                            <td>{{$emp_id->highestLevelEarnedUnits}}</td>
                                                                            <td>{{$emp_id->yearGraduated}}</td>
                                                                            <td>{{$emp_id->scholarshipsAcademicHonorsReceived}}</td>
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
                                                </div>

                                                <!---End Of Page1 -->

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
                                                                            <td>{{$emp_id->civilServiceName}}</td>
                                                                            <td>{{$emp_id->rating}}</td>
                                                                            <td>{{$emp_id->dateOfExamination}}</td>
                                                                            <td>{{$emp_id->placeOfExamination}}</td>
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
                                                                            <td>{{$emp_id->licenseNumber}}</td>
                                                                            <td>{{$emp_id->licenseDateOfValidity}}</td>
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
                                                                        <th>INCLUSIVE DATES</th>
                                                                        <th>POSITION TITLE</th>
                                                                        <th>DEPARTMENT/AGENCIES/OFFICE/COMPANY</th>
                                                                        <th>MONTHLY SALARY</th>
                                                                    </tr>
                                                                    @foreach ($employeedatawork as $emp_id)
                                                                        <tr>
                                                                            <td>{{$emp_id->startJobDate}} to {{$emp_id->endJobDate}}</td>
                                                                            <td>{{$emp_id->positionTitle}}</td>
                                                                            <td>{{$emp_id->departmentAgencyOfficeCompany}}</td>
                                                                            <td>{{$emp_id->monthlySalary}}</td>
                                                                        </tr>
                                                                    @endforeach
                                                                    <tr>
                                                                        <th>SALARY JOB PAY GRADE</th>
                                                                        <th>STATUS OF APPOINTMENT</th>
                                                                        <th>GOVERNMENT SERVICE</th>
                                                                    </tr>
                                                                    @foreach ($employeedatawork as $emp_id)
                                                                        <tr>
                                                                            <td>{{$emp_id->salaryJobPayGradesStep}}</td>
                                                                            <td>{{$emp_id->statusOfAppointment}}</td>
                                                                            <td>{{$emp_id->GovernmentService}}</td>
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

                                                <!---End Of Page2 -->



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
                                                                        <th>Inclusive Dates</th>
                                                                        <th>Number of Hours</th>
                                                                        <th>Position</th>
                                                                    </tr>
                                                                    @foreach($employeedatavol as $emp_id)
                                                                        <tr>
                                                                            <td>{{$emp_id->nameAddressOfOrganization}}</td>
                                                                            <td>{{$emp_id->from}} to {{$emp_id->to}}</td>
                                                                            <td>{{$emp_id->numberOfHours}}</td>
                                                                            <td>{{$emp_id->position}}</td>
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
                                                                        <th>Inclusive Dates Of Attendance</th>
                                                                        <th>Number of Hours</th>
                                                                    </tr>
                                                                    @foreach ($employeedatatrain as $emp_id)
                                                                        <tr>
                                                                            <td>{{$emp_id->titleofTrainingLearning}}</td>
                                                                            <td>{{$emp_id->trainingStart}} to {{$emp_id->trainingEnd}}</td>
                                                                            <td>{{$emp_id->numberOfHours}}</td>
                                                                        </tr>
                                                                    @endforeach
                                                                    <tr>
                                                                        <th>Type of I.D</th>
                                                                        <th>Conducted/Sponsored by:</th>
                                                                    </tr>
                                                                    @foreach ($employeedatatrain as $emp_id)
                                                                        <tr>
                                                                            <td>{{$emp_id->typeOfLP}}</td>
                                                                            <td>{{$emp_id->conductedSponsoredBy}}</td>
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
                                                                            <td>{{$emp_id->skillsAndHobbies}}</td>
                                                                            <td>{{$emp_id->nonAcademicDistinction}}</td>
                                                                            <td>{{$emp_id->membership}}</td>
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

                                                <!---End Of Page3 -->

                                                <div class="tab-pane fade" id="page4">
                                                    <h4>PDS Questionaire</h4>
                                                    <table>
                                                        <td>1.) Are you related by consanguinity or affinity to the appointing or recommending authority, or the chief of bureau or office to the person who has immediate supervision over you in the office Bureau or Department where you will be appointed,</td>
                                                        <tr>
                                                            <td>a.Within the third degree</td>
                                                            <td><form action="Y/N">
                                                                    <input type="checkbox" name="check" value="Yes" >Yes<br>
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form action="Y/N">
                                                                    <input type="checkbox" name="check" value="No" <?php echo 'checked' ?> >No
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>b.Within the fourth degree(for local government unit-Career Employees?)</td>
                                                            <td><form action="Y/N">
                                                                    <input type="checkbox" name="check" value="Yes">Yes<br>
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form action="Y/N">
                                                                    <input type="checkbox" name="check" value="No" <?php echo 'checked' ?> >No
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2.)   a.Have you ever found guilty of any administrative offense?</td>
                                                            <td><form action="Y/N">
                                                                    <input type="checkbox" name="check" value="Yes">Yes<br>
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form action="Y/N">
                                                                    <input type="checkbox" name="check" value="No" <?php echo 'checked' ?> >No
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>b.Have you been criminally charged before any court?</td>
                                                            <td><form action="Y/N">
                                                                    <input type="checkbox" name="check" value="Yes">Yes<br>
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form action="Y/N">
                                                                    <input type="checkbox" name="check" value="No" <?php echo 'checked' ?> >No
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <td>3.) Have you ever been convicted of any crime or violation of any law,decree, ordinance or regulation by any court or tribunal?</td>
                                                        <tr>
                                                            <td>a.Within the third degree</td>
                                                            <td><form action="Y/N">
                                                                    <input type="checkbox" name="check" value="Yes">Yes<br>
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form action="Y/N">
                                                                    <input type="checkbox" name="check" value="No" <?php echo 'checked' ?> >No
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <td>4.) Have you ever been separated from the service in any of the following modes:resignation,retirement,dropped from the rolls, dismissal,termination,end of term,finished contract or phased out(abollition) in the public or private sector</td>
                                                        <tr>
                                                            <td></td>
                                                            <td><form action="Y/N">
                                                                    <input type="checkbox" name="check" value="Yes">Yes<br>
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form action="Y/N">
                                                                    <input type="checkbox" name="check" value="No" <?php echo 'checked' ?> >No
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5.)   a.Have you ever been a candidate in a national or local election hield within the last year(except barangay election)?</td>
                                                            <td><form action="Y/N">
                                                                    <input type="checkbox" name="check" value="Yes">Yes<br>
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form action="Y/N">
                                                                    <input type="checkbox" name="check" value="No" <?php echo 'checked' ?> >No
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>b.Have you resigned from the government service during the 3 month period before the last election to promote/actively campaign for a national or local candidate?</td>
                                                            <td><form action="Y/N">
                                                                    <input type="checkbox" name="check" value="Yes">Yes<br>
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form action="Y/N">
                                                                    <input type="checkbox" name="check" value="No" <?php echo 'checked' ?> >No
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <td>6.) Have you acquired the status of an immigrant or permanent resident of another country?</td>
                                                        <tr>
                                                            <td></td>
                                                            <td><form action="Y/N">
                                                                    <input type="checkbox" name="check" value="Yes">Yes<br>
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form action="Y/N">
                                                                    <input type="checkbox" name="check" value="No" <?php echo 'checked' ?> >No
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <td>7.) Pursuant to:(a) Indigenous People's Act(RA 8371); (b) Magna Carta for Disabled Persons(RA 7277); and (c)Solo Parents Welfare Act of 2000(RA 8972), please answer the following items;</td>
                                                        <tr>
                                                            <td>a. Are you a member of any indigenous group?</td>
                                                            <td><form action="Y/N">
                                                                    <input type="checkbox" name="check" value="Yes">Yes<br>
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form action="Y/N">
                                                                    <input type="checkbox" name="check" value="No" <?php echo 'checked' ?> >No
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>b. Are you a person with disability? </td>
                                                            <td><form action="Y/N">
                                                                    <input type="checkbox" name="check" value="Yes">Yes<br>
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form action="Y/N">
                                                                    <input type="checkbox" name="check" value="No" <?php echo 'checked' ?> >No
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>c. Are you a solo parent? </td>
                                                            <td><form action="Y/N">
                                                                    <input type="checkbox" name="check" value="Yes">Yes<br>
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form action="Y/N">
                                                                    <input type="checkbox" name="check" value="No" <?php echo 'checked' ?> >No
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <table>
                                                            <h4>References(Person not related by consanguinity or affinity to applicant/appointee</h4>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Address</th>
                                                                <th>Tel.No.</th>
                                                            </tr>
                                                            @foreach($employeedatareferences as $emp_id)
                                                                <tr>
                                                                    <td>{{$emp_id->name}}</td>
                                                                    <td>{{$emp_id->address}}</td>
                                                                    <td>{{$emp_id->telephoneNo}}</td>
                                                                </tr>
                                                            @endforeach

                                                        </table>
                                                    </table>
                                                    <div style="text-align: right">
                                                        <a href="#page1" data-toggle="tab" class="btn btn-default btn-sm">1</a>
                                                        <a href="#page2" data-toggle="tab" class="btn btn-default btn-sm">2</a>
                                                        <a href="#page3" data-toggle="tab" class="btn btn-default btn-sm">3</a>
                                                    </div>
                                    <!-- Action modal -->
                                    <div class="modal fade" id="myModalAction" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Actions</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="panel panel-default">

                                                        <div class="panel-body">
                                                            <ul class="nav nav-pills">
                                                                <li class="active"><a href="#home-pills" data-toggle="tab">Plantilla</a>
                                                                </li>
                                                                <li class=""><a href="#profile-pills" data-toggle="tab">Employee Status</a>
                                                                </li>

                                                            </ul>

                                                            <div class="tab-content">
                                                                <div class="tab-pane fade active in" id="home-pills">
                                                                    <h4>Home Tab</h4>
                                                                    <table>
                                                                        <tr>
                                                                            <td class ="question">Select a Division:</td>
                                                                            <td></td>
                                                                            <td class ="question">Select a Position:</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class ="question"></td>
                                                                            <td></td>
                                                                            <td class ="question"></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class ="question"></td>
                                                                            <td></td>
                                                                            <td class ="question"></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class ="question"></td>
                                                                            <td></td>
                                                                            <td class ="question"></td>
                                                                            <td></td>
                                                                        </tr>

                                                                    </table>
                                                                </div>
                                                                <div class="tab-pane fade" id="profile-pills">
                                                                    <h4>Profile Tab</h4>
                                                                    <table>
                                                                        <tr>
                                                                            <td class ="question">Select a Status:</td>
                                                                            <td></td>
                                                                            <td class ="question"></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class ="question"></td>
                                                                            <td></td>
                                                                            <td class ="question"></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class ="question"></td>
                                                                            <td></td>
                                                                            <td class ="question"></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class ="question"></td>
                                                                            <td></td>
                                                                            <td class ="question"></td>
                                                                            <td></td>
                                                                        </tr>

                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Personal Information -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
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
