<?php
include 'login-server.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>login</title>
</head>
<body class="bg-dark">
<nav class="navbar navbar-light bg-white">
  <a class="navbar-brand" href="#">
    <img src="images/logo.png" width="150" height="40" alt="">
  </a>
</nav>
<h1 class="text-center m-sm-0 m-md-4 m-lg-4 text-white">LOGIN</h1>
<form action="" method="POST" class="container">
    <div class="form-group">
        <label for="phoneNumber" class="text-white">Phone Number:</label>
        <input type="number" name="phoneNumebr" class="form-control">
    </div>
    <div class="form-group">
        <label for="password" class="text-white">Password:</label>
        <input type="password" name="password" class="form-control">
    </div>
    <button class="btn btn-primary container-fluid mt-2" name="login">LOGIN</button>
</form>
<p class="text-white container mt-4">Not a member? <a href="registration.php">Register</a> Here.</p>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>