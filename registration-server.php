<?php
session_start();
include 'connection.php';
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    if($password != $confirmPassword){
        echo "<script>alert('Password mismatch');</script>";
        echo "<script>window.location.href='registration.php';</script>";
    }
    else{
        $userExistanceValidationQuery = "SELECT * FROM users WHERE phoneNumber='$phoneNumber'";
        $userExistanceValidationQueryResult = mysqli_query($con, $userExistanceValidationQuery);
        if(mysqli_num_rows($userExistanceValidationQueryResult)>0){
            echo "<script>alert('The phone number already exist');</script>";
            echo "<script>window.location.href='registration.php';</script>";
        }
        else{
            $userType = 'user';
            $password = md5($password);
            $userRegistrationQuery = "INSERT INTO users(name,phoneNumber,userType,password) VALUES ('$name','$phoneNumber','$userType','$password')";
            $userRegistrationQueryResult = mysqli_query($con,$userRegistrationQuery);
            if($userRegistrationQueryResult){
                $_SESSION['name'] = $name;
                $_SESSION['phoneNumber'] = $phoneNumber;
                $_SESSION['userType'] = $userType;
                echo "<script>alert('Registration successful');</script>";
                echo "<script>window.location.href='user/user-homepage.php';</script>";
            }
            else{
                echo "<script>alert('Could not register user');</script>";
                echo "<script>window.location.href='registration.php';</script>";
            }
        }    
    }
}
?>