<?php
session_start();
include 'connection.php';
if(isset($_SESSION['userType'])){
    if($_SESSION['userType'] == 'admin'){
        header('location: Admin/admin-homepage.php');
    }
    else if($_SESSION['userType'] == 'shop'){
        header('location: Shop/shop-homepage.php');
    }
    else if($_SESSION['userType'] == 'user'){
        header('location: User/user-homepage.php');
    }
}
else{
    if(isset($_POST['login'])){
        $phoneNumber = $_POST['phoneNumber'];
        $password = $_POST['password'];
        $password = md5($password);
        $userValidationQuery = "SELECT * FROM users WHERE phoneNumber='$phoneNumber' AND password='$password'";
        $userValidationQueryResult = mysqli_query($con,$userValidationQuery);
        if($userValidationQueryResult){
            $userDetails = mysqli_fetch_assoc($userValidationQueryResult);
            if($userDetails['userType'] == 'admin'){
                $_SESSION['name'] = $name;
                $_SESSION['phoneNumber'] = $phoneNumber;
                $_SESSION['userType'] = 'admin';
                echo "<script>alert('Login Successfull');</script>";
                echo "<script>window.location.href='Admin/admin-homepage.php';</script>";
            }
            else if($userDetails['userType'] == 'user'){
                $_SESSION['name'] = $name;
                $_SESSION['phoneNumber'] = $phoneNumber;
                $_SESSION['userType'] = 'user';
                echo "<script>alert('Login Successfull');</script>";
                echo "<script>window.location.href='Users/user-homepage.php';</script>";
            }
            else if($userDetails['userType'] == 'shop'){
                $_SESSION['name'] = $name;
                $_SESSION['phoneNumber'] = $phoneNumber;
                $_SESSION['userType'] = 'shop';
                echo "<script>alert('Login Successfull');</script>";
                echo "<script>window.location.href='Shops/shop-homepage.php';</script>";
            } 
        }
        else{
            echo "<script>alert('Wrong Phone Number or Password');</script>";
            echo "<script>window.location.href='login.php';</script>";
        }
    }
}
?>