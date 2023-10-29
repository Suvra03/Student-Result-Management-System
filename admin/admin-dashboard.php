<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="../css/bootstrap.css" media="screen" >
        <link rel="stylesheet" href="../css/font-awsome.css">
        <link rel="stylesheet" href="../css/dashboard.css">
        <link rel = "icon" href =  "../logos/lcb_college_logo_2.png" type = "image/x-icon"> 
        <script src="../js new/modern.min.js"></script>
    </head>
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
                                <li class="hidden-sm hidden-xs"><a href="#" class="user-info-handle"><i class="fa fa-user"></i></a></li>
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
                <div class="content-container" style="background-color: grey;">
                    <!-- ----Side Bar---- -->
                    <div class="left-sidebar bg-black-300 box-shadow" style="background-color: black;">
                        <div class="sidebar-content">
                            <div class="user-info closed">
                                <img src="../logos/user.png" alt="John Doe" class="img-circle profile-img">
                                <h6 class="title">Admin</h6>
                                <small class="info">SuperUser</small>
                            </div>
                                                     
                            <div class="sidebar-nav">
                                <ul class="side-nav color-white">
                                    <li class="nav-header">
                                        <span class="">Main Category</span>
                                    </li>
                                    <li>
                                        <a href="admin-dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>
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
                                            <li><a href="create_subject.php"><i class="fa fa-bars"></i> <span>Add Subject</span></a></li>
                                            <li><a href="manage_subjects.php"><i class="fa fa fa-server"></i> <span>Manage Subjects</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-info-circle"></i> <span>Result</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="add_result.php"><i class="fa fa-bars"></i> <span>Add Result</span></a></li>
                                            <li><a href="manage_results.php"><i class="fa fa fa-server"></i> <span>Manage Result</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> <span>Notices</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="add_notice.php"><i class="fa fa-bars"></i> <span>Add Notice</span></a></li>
                                            <li><a href="manage_notice.php"><i class="fa fa fa-server"></i> <span>Manage Notice</span></a></li>
                                        </ul>
                                        <li><a href="admin_change_password.php"><i class="fa fa fa-server"></i> <span> Admin Change Password</span></a></li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ----Side Bar Ends Here---- -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div" style="background-color: green; padding-top: 10px; padding-bottom: 10px;">
                                <div>
                                    <h2 class="title" style="color: white; font-size: 20px;"><b>Dashboard</b></h2>
                                </div>
                                <!-- /.col-sm-6 -->
                            </div>
                            <!-- /.row -->

                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding-left: 50px;">
                                        <div class="card-body" style="font-size: 15px;">
                                            <div class="mb-4" style="font-size: 15px;">
                                                <div style="background-color: white; height: 130px; width: 250px; border-top-right-radius: 12px; border-top-left-radius: 12px; padding-top: 20px; padding-left: 75px;">
                                                    <img src="../logos/aboutus.png" class="img-fluid h-20" alt="Uni Logo" style="height: 100px; width: 100px;">
                                                </div>
                                                <div class="pt-2 btn" style="font-size: 15px; color: white;border-radius: 0%; width: 250px; background-color: green; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px;">
                                                    <!-- <span class="number counter"><?php echo htmlentities($totalstudents);?></span> -->
                                                    <a class="cool-link" href="#" style="color: #fff; text-decoration: dotted;">Registered Students</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding-left: 40px;">
                                        <div class="card-body" style="font-size: 15px;">
                                            <div class="mb-4" style="font-size: 15px;">
                                                <div style="background-color: white; height: 130px; width: 250px; border-top-right-radius: 12px; border-top-left-radius: 12px; padding-top: 20px; padding-left: 75px;">
                                                    <img src="../logos/books.png" class="img-fluid h-20" alt="Uni Logo" style="height: 100px; width: 100px;">
                                                </div>
                                                <div class="pt-2 btn" style="font-size: 15px; color: white;border-radius: 0%; width: 250px; background-color: green; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px;">
                                                    <!-- <span class="number counter"><?php echo htmlentities($totalsubjects);?></span> -->
                                                    <a class="cool-link" href="#" style="color: #fff; text-decoration: dotted;">Subjects Listed</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding-left: 30px;">
                                        <div class="card-body" style="font-size: 15px;">
                                            <div class="mb-4" style="font-size: 15px;">
                                                <div style="background-color: white; height: 130px; width: 250px; border-top-right-radius: 12px; border-top-left-radius: 12px; padding-top: 20px; padding-left: 75px;">
                                                    <img src="../logos/class.png" class="img-fluid h-20" alt="Uni Logo" style="height: 100px; width: 100px;">
                                                </div>
                                                <div class="pt-2 btn" style="font-size: 15px; color: white;border-radius: 0%; width: 250px; background-color: green; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px;">
                                                    <!-- <span class="number counter"><?php echo htmlentities($totalclasses);?></span> -->
                                                    <a class="cool-link" href="#" style="color: #fff; text-decoration: dotted;">Total Class Listed</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding-left: 20px;">
                                        <div class="card-body" style="font-size: 15px;">
                                            <div class="mb-4" style="font-size: 15px;">
                                                <div style="background-color: white; height: 130px; width: 250px; border-top-right-radius: 12px; border-top-left-radius: 12px; padding-top: 20px; padding-left: 75px;">
                                                    <img src="../logos/results.png" class="img-fluid h-20" alt="Uni Logo" style="height: 100px; width: 100px;">
                                                </div>
                                                <div class="pt-2 btn" style="font-size: 15px; color: white;border-radius: 0%; width: 250px; background-color: green; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px;">
                                                    <!-- <span class="number counter"><?php echo htmlentities($totalresults);?></span> -->
                                                    <a class="cool-link" href="#" style="color: #fff; text-decoration: dotted;">Result Declared</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

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

