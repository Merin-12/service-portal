<?php include 'adminValidator.php'; ?>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>add shop</title>
</head>
<body class="bg-dark text-white">
<?php include 'sidebar.html'; ?>  
    <main class="mt-5 pt-3">
        <div class="container">
            <h3 class="text-center">Add Shop</h3>
        <form action="" method="POST">
        <div class="form-group m-2">
            <label for="area">Area:</label>
            <select name="area" class="form-control">
                    <option selected>THIRUVANANTHAPURAM</option>
                    <option>KOLLAM</option>
                    <option>PATHANAMTHITTA</option>
                    <option>ALAPUZHA</option>
                    <option>KOTTAYAM</option>
                    <option>IDUKKI</option>
                    <option>ERNAKULAM</option>
                    <option>THRISSUR</option>
                    <option>PALAKKAD</option>
                    <option>MALAPURAM</option>
                    <option>WAYANAD</option>
                    <option>KOZHIKODE</option>
                    <option>KANNUR</option>
                    <option>KASARGOD</option>
            </select>
            </div>
            <div class="form-group m-2">
            <label for="phonenumber">Phone:</label>
                <input type="text" name="phoneNumber" class="form-control" required  pattern="[0-9]{10,10}" title="A phone number contains 10 digits"/>
            </div>
            <div class="form-group m-2">
            <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" required />
            </div>
            <div class="form-group m-2">
            <label for="password1">Confirm Password:</label>
                <input type="password" name="confirmPassword" class="form-control" required />
                <input type="submit" name="submit" class="btn btn-primary container-fluid mt-2"/>
            </div>            
        </form>
    </div>
    </main>
    <?php include 'addShopServer.php'; ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>