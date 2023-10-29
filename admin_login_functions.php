<?php
include 'db/db_connect.php';
if (isset($_POST['submit'])) {
    $username = $_POST['roll'];
    $password = $_POST['password'];
    $sql = "SELECT `id` FROM `Admin` WHERE `username` = ? AND `password` = ?;";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    if (!mysqli_stmt_execute($stmt)) {
        mysqli_stmt_error($stmt);
    } else {
        $result = mysqli_stmt_get_result($stmt);
        if(mysqli_num_rows($result) == 0) {
            header ("Location: invalid-credentials.php");
        } else {
            header ("Location: admin/admin-dashboard.php");
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    exit;
}
?>