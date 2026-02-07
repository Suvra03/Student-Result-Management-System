<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/head.php';
    ?>
    <title>Notice</title>
</head>

<style>
    .container {
    background-color: #fff;
    height: 800px;
    width: 800px;
    max-height: 100%;
    padding: 20px;
    margin-top: 5%;
    margin-bottom: 5%;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h3{
        text-align: center;
        padding-bottom: 50px;
    }

</style>

<body class="top-navbar-fixed" style="background-color: grey;">
    <div class="container" style="padding-top: 30px; position: relative;">
        <!-- Close button -->
        <a href="view_notice.php"><button type="button" class="close-button" style="position: absolute; top: 30px; right: 5px; background: none; border: none; font-size: 28px; cursor: pointer;">&times;</button></a>

        <div class="notice" >
            <!-- Notice content -->
            <h3><u><b>Important Notice</b></u></h3>
            <p class="notice-title" style="padding-left: 50px; font-size: 15px;"><b>Title: </b><span>Notice Regarding Online From Fillup.</span></p>
            <p class="notice-date" style="padding-left: 50px; font-size: 15px;"><b>Date: </b><span>February 5, 2024</span></p>
            <p style="padding-left: 50px; font-size: 15px; padding-right: 50px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget feugiat ex. Vestibulum nec ex a libero ultrices consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin id lorem id nulla facilisis mattis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget feugiat ex. Vestibulum nec ex a libero ultrices consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin id lorem id nulla facilisis mattis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget feugiat ex. Vestibulum nec ex a libero ultrices consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin id lorem id nulla facilisis mattis.</p>
        </div>
    </div>
</body>


</html>