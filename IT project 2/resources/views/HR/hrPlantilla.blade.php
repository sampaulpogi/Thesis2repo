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
    <div id="page-wrapper2">
        <button onclick="goBack()" class="btn btn-default"><i class="fa fa-arrow-circle-left"></i> Go Back</button>
        <button class="btn btn-default" ><a href="/download-pdf1" ><i class="fa fa-file-text">  </i>Generate Form</a></button>
        <div id="page-inner2">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <b>PERSONAL SERVICES ITEMIZATION AND PLANTILLA OF PERSONNEL (PSIPOP)</b>
                        </div>
                        <div style="text-align: right">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <tr>
                                        <th colspan="9">Department: Department of Interior and Local Government</th>
                                        <th colspan="8">Bureau/Agency: Office of the Secretary</th>
                                    </tr>
                                    <tr>
                                        <th>ITEM NUMBER(1)</th>
                                        <th>POSITION TITLE and SALARY GRADE(2)</th>
                                        <th>ANNUAL SALARY (AUTHORIZED)(3)</th>
                                        <th>ANNUAL SALARY (ACTUAL)(4)</th>
                                        <th>STEP(5)</th>
                                        <th>AREA CODE(6)</th>
                                        <th>AREA TYPE(7)</th>
                                        <th>LEVEL(8)</th>
                                        <th>P/P/A ATTRIBUTION(9)</th>
                                        <th>NAME OF INCUMBENT(10)</th>
                                        <th>SEX(11)</th>
                                        <th>DATE OF BIRTH(12)</th>
                                        <th>TIN(13)</th>
                                        <th>DATE OF ORIGINAL APPOINTMENT(14)</th>
                                        <th>DATE OF LAST PROMOTION(15)</th>
                                        <th>STATUS(16)</th>
                                        <th>CIVIL SERVICE ELIGIBILITY(17)</th>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />

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
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>
<script>
    function goBack() {
    window.history.back();
}
</script>


</body>
</html>
