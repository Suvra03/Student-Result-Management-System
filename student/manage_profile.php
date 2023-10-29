<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Manage Profile</title>
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
                			<a class="navbar-brand" href="#" style="color: white; padding-top: 15px; pointer-events: none;"> SRM | Student</a>
                            <button type="button" class="navbar-toggle mobile-nav-toggle" >
                				<i class="fa fa-bars"></i>
                			</button>
                		</div>
                		<div class="collapse navbar-collapse" id="navbar-collapse-1">
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
                            <div class="sidebar-nav">
                                <ul class="side-nav color-white">
                                    <li class="nav-header" style="padding-top: 20px;"><span class="">Main Category</span></li>
                                    <li><a href="student_dashboard.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                                    <li class="nav-header"><span class="">Appearance</span></li>
                                    <li><a href="manage_profile.php"><i class="fa fa-user"></i> <span>Manage Profile</span></a></li>
                                    <li><a href="view_results.php"><i class="fa fa-file-text"></i> <span>View Results</span></a></li>
                                    <li><a href="view_notice.php"><i class="fa fa-bars"></i> <span>View Updates</span></a></li>
                                    <li><a href="change_password.php"><i class="fa fa-info-circle"></i> <span>Change Passwords</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ----Side Bar Ends Here---- -->

                    <div class="main-page" style="background-color: white;">
                        <div class="container-fluid">
                            <div class="row page-title-div" style="background-color: green; padding-top: 10px; padding-bottom: 10px;">
                                <div>
                                    <h2 class="title" style="color: white; font-size: 20px;"><b>Manage Profile </b></h2>
                                </div>
                            </div>
                        </div>
                        <!-- --Personal details form starts here-- -->
                        
                        <form class="row g-3" action="register_functions.php" method="post">
                            <div class="container">
                                <div class="custom-container">
                                    <div class="row">
                                        <div class="col-9">
                                        <h4><b>Personal Details- </b></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <label for="name" class="form-label">Name of the Student:</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="Enter your full name." name="name"
                                        required>
                                </div>
                                <div class="col-10">
                                    <label for="dob">Date of birth:</label>
                                    <input type="date" class="form-control" id="inputDOB" name="dob" required>
                                </div>
                                <div class="col-10">
                                    <label for="dob">Gender:</label>
                                    <input type="text" class="form-control" id="inputGender" name="gender" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <label for="email" class="form-label">Email ID:</label>
                                        <input type="email" class="form-control" id="inputName" placeholder="Enter your email id." name="email" required>
                                    </div>
                                    <div class="col-md-2 d-flex" style="padding-top: 25px;">
                                        <button type="button" class="btn btn-secondary" style="width: 160px; border: solid black 2px; background-color: green; color: white;">Edit</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <label for="email" class="form-label">Phone Number:</label>
                                        <input type="email" class="form-control" id="inputName" placeholder="Enter your email id." name="email" required>
                                    </div>
                                    <div class="col-md-2 d-flex" style="padding-top: 25px;">
                                        <button type="button" class="btn btn-secondary" style="width: 160px; border: solid black 2px; background-color: green; color: white;">Edit</button>
                                    </div>
                                </div>
                            </div>
                            <!-- --Personal details form ends here-- -->


                            <!-- --Address form starts here-- -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-9">
                                        <h4><b>Address- </b></h4>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <label for="inputAddress" class="form-label">Address Line 1:</label>
                                    <input type="text" class="form-control" id="inputAddress"
                                        placeholder="Enter your permanent address. required" name="address_1" required>
                                </div>
                                <div class="col-10">
                                    <label for="inputAddress" class="form-label">Address Line 2:</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Enter your correspondence address." name="address_2">
                                </div>
                                <div class="col-5">
                                    <label for="inputState">State</label>
                                    <input type="text" class="form-control" id="inputtext" name="state" required>
                                </div>

                                <div class="col-5">
                                    <label for="inputDistrict">District</label>
                                    <input type="text" class="form-control" id="inputtext" name="District" required>
                                </div>

                                <div class="col-5">
                                    <label for="inputZip" class="form-label">Pincode:</label>
                                    <input type="text" class="form-control" id="inputZip" placeholder="Enter your Pincode" name="pincode" required>
                                </div>
                            </div><br><br>
                            <!-- --Address form ends here-- -->
                        </form>
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

