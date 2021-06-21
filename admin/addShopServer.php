<?php
include '../connection.php';
if(isset($_POST['submit'])){
    $name = $_POST['area'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $shopSearchQuery = "SELECT * FROM users WHERE name='$name' OR phoneNumber='$phoneNumber'";
    $shopSearchQueryResult = mysqli_query($con,$shopSearchQuery);
    if(mysqli_num_rows($shopSearchQueryResult)>0){
        $shopResults = mysqli_fetch_assoc($shopSearchQueryResult);
        if($shopResults['name'] == $name){
            echo "<script>alert('This shop already exists');</script>";
            echo "<script>window.location.href='addshop.php';</script>";
        }
        else{
            echo "<script>alert('This phone number is already used');</script>";
            echo "<script>window.location.href='addshop.php';</script>";
        }
    }
    else{
        if($password != $confirmPassword){
            echo "<script>alert('Password's mismatch');</script>";
            echo "<script>window.location.href='addshop.php';</script>";
        }
        else{
            $password = md5($password);
            echo "<script>alert($name);</script>";
            $shopAddQuery = "INSERT INTO users(name,phoneNumber,userType,password) VALUES ('$name','$phoneNumber','shop','$password')";
            $shopAddQueryResults = mysqli_query($con,$shopAddQuery);
            if($shopAddQuery){
                echo "<script>alert('The shop added successfully');</script>";
                echo "<script>window.location.href='addshop.php';</script>";
            }
            else{
                echo "<script>alert('Could not add the shop');</script>";
                echo "<script>window.location.href='addshop.php';</script>";
            }
        }
    }
}
?>