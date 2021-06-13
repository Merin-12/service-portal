<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>registration page</title>
</head>
<body class="bg-dark text-white">
<?php include 'registration-server.php'; ?>
<nav class="navbar navbar-light bg-white">
  <a class="navbar-brand" href="#">
    <img src="images/logo.png" width="150" height="40" alt="">
  </a>
</nav>
<div class="container">
    <h3 class="text-center mt-4">REGISTRATION</h3>
    <form action="" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="phoneNumebr">Phone Number</label>
        <input type="text" name="phoneNumber" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="confirmPassword">Name</label>
        <input type="password" name="confirmPassword" class="form-control">
    </div>
    <button class="btn btn-primary" name="register">Register</button>
    </form>
    <p>Already a user? <a href="login.php">Login</a> Here</p>
</div> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>  
</body>
</html>