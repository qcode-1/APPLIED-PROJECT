<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">

    <title>Admin - ASCVigil&trade;</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <?php

    require_once("../database/process.php");


    if (isset($_POST['addCommittee'])) {
        addCommittee();
    }

    ?>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">ADMIN</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
             
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="adminNote.php">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> Add a New Note
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../index.php?logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>

                        <?php

                        if (isset($_GET['logout'])) {
                            session_destroy();
                        }
                        
                        ?>

                    </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="admin.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Poll Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="prespollAdmin.php">ASC Presidency Assessment</a>
                                </li>
                                <li>
                                    <a href="incPollAdmin.php">Inclusion Poll</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="commFeedback.php"><i class="fa fa-table fa-fw"></i>Feedback</a>
                        </li>
                        <li>
                        <a href="reviewComments.php"><i class="fa fa-comments fa-fw"></i>Comments</a>
                    </li>
                        <li>
                            <a href="mgPolls.php"><i class="fa fa-wrench fa-fw"></i> Manage Polls</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i>Manage Committees<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="addCommittee.php">Add Committee</a>
                                </li>
                                <li>
                                    <a href="editCommittee.php">Edit Committee</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Manage Existing Polls</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add, Edit, Delete &amp; End Polls
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10">

                                    <h3>Vist <a href="https://surveyjs.io/" target="_blank">SurveyJS site</a> to directly manage existing polls. </h3>
                                    <h3>Use the login details given below</h3>                                    

                                    <div class="form-group">
                                        <label class="col-form-label">Login Email</label>

                                        <input type="text" class="form-control"  name="lgEmail" id="inputCommname" value="nii.quartey@ashesi.edu.gh">

                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Login Password</label>
                                        <input type="password" class="form-control"  name="lgPassword" id="lgPassword" value="Marktwain1">
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" onclick="togglePassword()" type="checkbox" value="" id="defaultCheck1">
                                      <label class="form-check-label" for="defaultCheck1">
                                        Show/Hide Password
                                    </label>
                                </div>

                            </div>
                            <!-- /.col-lg-6 (nested) -->

                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<div class="footer bg-dark text-white">
    <p class="">&copy; AshVigil. All rights reserved.</p>
    <p>31st Beach Drive, Labadi; PMB CT 48, Cantomnets, Accra, Ghana.</p>
    <p>Phone: <span><b><i>+233.50.729.4075</i></b>  <i>OR</i>  <b><i>+233.302.679.043</i> </b></span></p>
    <p>Email: <b><i>ascvigil@ashesi.edu.gh</i></b></p>
    <p><b>2018</b></p>
</div>

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../vendor/raphael/raphael.min.js"></script>
<script src="../vendor/morrisjs/morris.min.js"></script>
<script src="../data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

<script type="text/javascript">
    
    function togglePassword() {

        var input = document.getElementById("lgPassword");

        if (input.type == "password") {
            input.type = "text";
        }

        else {
            input.type = "password";
        }
    }

</script>

</body>

</html>
