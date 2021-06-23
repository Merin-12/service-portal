<?php
session_start();
if(!isset($_SESSION['userId'])){
    echo "<script>alert('You must log in as a shop to view this page');</script>";
    echo "<script>window.location.href='../login.php';</script>";
}
else if($_SESSION['userType'] != 'shop'){
    echo "<script>alert('You must log in as a shop to view this page');</script>";
    echo "<script>window.location.href='../login.php';</script>";
}
?>