<?php
    session_start();
    if(!isset($_SESSION['userType'])){
        echo "<script>alert('You must be logged in as an admin to view this page');</script>";
        echo "<script>window.location.href='../login.php';</script>";
    }
    else if($_SESSION['userType'] != 'admin'){
        echo "<script>alert('You must be logged in as an admin to view this page');</script>";
        echo "<script>window.location.href='../login.php';</script>";
    }
?>