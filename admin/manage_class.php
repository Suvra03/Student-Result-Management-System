<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Manage-Class</title>
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
                                <!-- <li class="hidden-sm hidden-xs"><a href="#" class="user-info-handle"><i class="fa fa-user"></i></a></li> -->
                                <!-- <li class="hidden-sm hidden-xs"><a href="#" class="full-screen-handle"><i class="fa fa-arrows-alt"></i></a></li> -->
                				<li class="hidden-xs hidden-xs"></li>
                               
                			</ul>
                			<ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                				<li><a href="home.php" class="text-center" style="color: white;"><i class="fa fa-sign-out"></i> Logout</a></li>
                			</ul>
                		</div>
                    </div>
            	</div>
            </nav>
            <div class="content-wrapper">
                <div class="content-container"  style="background-color: grey;">
                <div class="left-sidebar bg-black-300 box-shadow" style="background-color: black;">
                        <div class="sidebar-content">
                            <div class="user-info closed">
                                <img src="http://placehold.it/90/c2c2c2?text=User" alt="John Doe" class="img-circle profile-img">
                                <h6 class="title">John Doe</h6>
                                <small class="info">PHP Developer</small>
                            </div>

                            <div class="sidebar-nav" >
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
                                        <a href="#"><i class="fa fa-file-text"></i> <span>Student Classes</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="create-class.php"><i class="fa fa-bars"></i> <span>Create Class</span></a></li>
                                            <li><a href="manage-classes.php"><i class="fa fa fa-server"></i> <span>Manage Classes</span></a></li>
                                           
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-file-text"></i> <span>Subjects</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="create-subject.php"><i class="fa fa-bars"></i> <span>Create Subject</span></a></li>
                                            <li><a href="manage-subjects.php"><i class="fa fa fa-server"></i> <span>Manage Subjects</span></a></li>
                                           <li><a href="add-subjectcombination.php"><i class="fa fa-newspaper-o"></i> <span>Add Subject Combination </span></a></li>
                                           <a href="manage-subjectcombination.php"><i class="fa fa-newspaper-o"></i> <span>Manage Subject Combination </span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-info-circle"></i> <span>Result</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="add-result.html"><i class="fa fa-bars"></i> <span>Add Result</span></a></li>
                                            <li><a href="manage-results.html"><i class="fa fa fa-server"></i> <span>Manage Result</span></a></li>
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
                    <div class="main-page" style="background-color: white;">
                        <div class="container-fluid">
                            <div class="row page-title-div" style="background-color: green; padding-top: 10px; padding-bottom: 10px;">
                                <div>
                                    <h2 class="title" style="color: white; font-size: 20px;"><b>Manage Students' Class</b></h2>
                                </div>
                            </div>
                        </div>
                        <section class="section">
                            <h4 style="padding-top: 30px; padding-bottom: 20px; padding-left: 10%; color: black;">Manage Students' Class -</h4><br>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-title">
                                                <h5 style="padding-left: 15px; padding-top: 10px;">View Classes Information -</h5>
                                            </div>

                                            <div class="panel-body p-20">
                                                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial No.</th>
                                                            <th>Course</th>
                                                            <th>Semester</th>
                                                            <th>Creation Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                    </tbody>
                                                </table>
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
    </body>
</html>

