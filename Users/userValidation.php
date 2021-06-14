<?php
    session_start();
    if($_SESSION['userType'] != 'user'){
        echo "<script>alert('You must log in as an user to view this page');</script>";
        echo "<script>window.location.href='login.php';</script>";
    }
    else if(!isset($_SESSION['userType'])){
        echo "<script>alert('You must log in as an user to view this page');</script>";
        echo "<script>window.location.href='login.php';</script>";    
    }
?>