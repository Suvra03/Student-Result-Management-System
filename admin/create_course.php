<?php
include '../db/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Create-Class</title>
        <link rel="stylesheet" href="../css/bootstrap.css" media="screen" >
        <link rel="stylesheet" href="../css/font-awsome.css">
        <link rel="stylesheet" href="../css/dashboard.css">
        <link rel = "icon" href =  "../logos/lcb_college_logo_2.png" type = "image/x-icon"> 
        <script src="../js new/modern.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
    <body class="top-navbar-fixed">
        <div class="main-wrapper">
        <nav class="navbar top-navbar bg-black">
            	<div class="container-fluid">
                    <div class="row">
                        <div class="navbar-header no-padding">
                			<a class="navbar-brand" href="#" style="color: white; padding-top: 15px; pointer-events: none;"> SRM | Admin</a>
                            <button type="button" class="navbar-toggle mobile-nav-toggle" >
                				<i class="fa fa-bars"></i>
                			</button>
                		</div>
                		<div class="collapse navbar-collapse" id="navbar-collapse-1">
                			<ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                				<li class="hidden-xs hidden-xs"></li>
                			</ul>
                			<ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                				<li><a href="../home.php" class="text-center" style="color: white;"><i class="fa fa-sign-out"></i> Logout</a></li>
                			</ul>
                		</div>
                    </div>
            	</div>
            </nav>
            <div class="content-wrapper">
                <div class="content-container"  style="background-color: grey;">
                <div class="left-sidebar bg-black-300 box-shadow" style="background-color: black;">
                        <div class="sidebar-content">
                            <div class="sidebar-nav" >
                                <ul class="side-nav color-white">
                                    <li class="nav-header">
                                        <span class="">Main Category</span>
                                    </li>
                                    <li>
                                        <a href="admin-dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                                    </li>

                                    <li class="nav-header">
                                        <span class="">Appearance</span>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-file-text"></i> <span>Student</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="manage_student.php"><i class="fa fa fa-server"></i> <span>Manage Student</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-file-text"></i> <span>Course</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="create_course.php"><i class="fa fa-bars"></i> <span>Add Course</span></a></li>
                                            <li><a href="manage_course.php"><i class="fa fa fa-server"></i> <span>Manage Course</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-file-text"></i> <span>Subjects</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="create_subject.php"><i class="fa fa-bars"></i> <span>Create Subject</span></a></li>
                                            <li><a href="manage_subjects.php"><i class="fa fa fa-server"></i> <span>Manage Subjects</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-info-circle"></i> <span>Result</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="add_result.html"><i class="fa fa-bars"></i> <span>Add Result</span></a></li>
                                            <li><a href="manage_results.html"><i class="fa fa fa-server"></i> <span>Manage Result</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> <span>Notices</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="#"><i class="fa fa-bars"></i> <span>Add Notice</span></a></li>
                                            <li><a href="#"><i class="fa fa fa-server"></i> <span>Manage Notice</span></a></li>
                                        </ul>
                                        <li><a href="change_password.php"><i class="fa fa fa-server"></i> <span> Admin Change Password</span></a></li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="main-page" style="background-color: white;">
                        <div class="container-fluid">
                            <div class="row page-title-div" style="background-color: green; padding-top: 10px; padding-bottom: 10px;">
                                <div>
                                    <h2 class="title" style="color: white; font-size: 20px;"><b>Add New Course</b></h2>
                                </div>
                            </div>
                        </div>
                        <section class="section">
                            <h4 style="padding-top: 30px; padding-bottom: 20px; padding-left: 10%; color: black;"><b>Create Course -</b></h4><br>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-body"  style="border-radius: 5px;">
                                                <form method="post">
                                                    <div class="col-10">
                                                        <label for="course">Course Name:</label>
                                                        <input type="text" class="form-control" id="inputName" name="name" required>
                                                    </div> 
                                                    <div class="col-10">
                                                        <label for="courseid">Course Code:</label>
                                                        <input type="text" class="form-control" id="inputName" name="code" required>
                                                    </div><br>

                                                    <div style="text-align: center;">
                                                        <button type="submit" class="btn btn-primary" style="width: 400px; border-radius: 5px; border-width: 1px; background-color: green;" name="addCourse">Add Course</button>
                                                    </div><br>
                                                </form>
                                                <?php
                                                if(isset($_POST['addCourse'])){
                                                    $course = $_POST['name'];
                                                    $code = $_POST['code'];
                                                    $sql = "INSERT INTO `Course` (`course_name`, `course_code`) VALUES (?, ?);";
                                                    $stmt = mysqli_prepare($conn, $sql);
                                                    mysqli_stmt_bind_param($stmt, "ss", $course, $code);
                                                    if (!mysqli_stmt_execute($stmt)) { ?>
                                                        <div class="alert alert-danger left-icon-alert" role="alert">
                                                            <strong>Failed! Try Again</strong> 
                                                        </div>
                                                        <?php
                                                    } else { ?>
                                                        <div class="alert alert-success left-icon-alert" role="alert">
                                                            <strong>Course Added Successfully!</strong>
                                                        </div>
                                                        <?php                                                        
                                                    }
                                                    mysqli_stmt_close($stmt);
                                                    mysqli_close($conn);
                                                    exit();
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <!-- Common JavaScript file -->
        <script src="../js/jquery/jquery.min.js"></script>
        <script src="../js/jquery/jquery.ui.js"></script>
        <script src="../js/bootstrap/bootstrap.min.js"></script>
        <script src="../js/pace/pace.min.js"></script>
        <script src="../js/lobipanel/lobipanel.min.js"></script>
        <script src="../js/iscroll/iscroll.js"></script>

        <!-- page javascript file -->
        <script src="../js/prism/prism.js"></script>
        <script src="../js/waypoint/waypoints.min.js"></script>
        <script src="../js/counterUp/counterup.min.js"></script>
        <script src="../js/amcharts/amcharts.js"></script>
        <script src="../js/amcharts/serial.js"></script>
        <script src="../js/amcharts/plugins/export/export.min.js"></script>
        <script src="../js/amcharts/themes/light.js"></script>
        <script src="../js/toastr/toastr.min.js"></script>
        <script src="../js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="../js/main.js"></script>
        <script src="../js/production-chart.min.js"></script>
        <script src="../js/traffic-chart.js"></script>
        <script src="../js/task-list.js"></script>
        <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
            });
        </script>
        <div class="foot"><footer></footer>
        <style> .foot{text-align: center;}</style>
    </body>
</html>

