<?php
    session_start();
    require '../_database/database.php';
    $sql1 = mysqli_query($database, "UPDATE user SET online_status='0' WHERE user_id =".$_SESSION['user_id']);
    //print_r($_SESSION);exit;
    session_destroy();
    header('location:../login.php?logout=success');
?>