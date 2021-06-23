<?php
session_start();
include 'connection.php';
if(isset($_SESSION['userType'])){
    if($_SESSION['userType'] == 'admin'){
        header('location: admin/admin-dashboard.php');
    }
    else if($_SESSION['userType'] == 'shop'){
        header('location: shop/shop-dashboard.php');
    }
    else if($_SESSION['userType'] == 'user'){
        header('location: user/user-dashboard.php');
    }
}
else{
    if(isset($_POST['login'])){
        $phoneNumber = $_POST['phoneNumber'];
        $password = $_POST['password'];
        $password = md5($password);
        $userValidationQuery = "SELECT * FROM users WHERE phoneNumber='$phoneNumber' AND password='$password'";
        $userValidationQueryResult = mysqli_query($con,$userValidationQuery);
        if(mysqli_num_rows($userValidationQueryResult)>0){
            $userDetails = mysqli_fetch_assoc($userValidationQueryResult);
            if($userDetails['userType'] == 'admin'){
                $_SESSION['name'] = $userDetails['name'];
                $_SESSION['phoneNumber'] = $phoneNumber;
                $_SESSION['userType'] = 'admin';
                $_SESSION['userId'] = $userDetails['id'];
                echo "<script>alert('Login Successfull');</script>";
                echo "<script>window.location.href='admin/admin-dashboard.php';</script>";
            }
            else if($userDetails['userType'] == 'user'){
                $_SESSION['name'] = $userDetails['name'];
                $_SESSION['phoneNumber'] = $phoneNumber;
                $_SESSION['userType'] = 'user';
                $_SESSION['userId'] = $userDetails['id'];
                echo "<script>alert('Login Successfull');</script>";
                echo "<script>window.location.href='user/user-dashboard.php';</script>";
            }
            else if($userDetails['userType'] == 'shop'){
                $_SESSION['name'] = $userDetails['name'];
                $_SESSION['phoneNumber'] = $phoneNumber;
                $_SESSION['userType'] = 'shop';
                $_SESSION['userId'] = $userDetails['id'];
                echo "<script>alert('Login Successfull');</script>";
                echo "<script>window.location.href='shop/shop-dashboard.php';</script>";
            } 
        }
        else{
            echo "<script>alert('Wrong Phone Number or Password');</script>";
            echo "<script>window.location.href='login.php';</script>";
        }
    }
}
?>