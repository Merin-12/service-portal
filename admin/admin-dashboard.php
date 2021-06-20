<?php include 'adminValidator.php'; ?>
<?php
    include '../connection.php';
    $shopCountQuery = "SELECT COUNT(*) AS shops FROM users WHERE userType='shop'";
    $shopCountQueryResult = mysqli_query($con,$shopCountQuery);
    $shopCount = mysqli_fetch_assoc($shopCountQueryResult);
    $userCountQuery = "SELECT COUNT(*) AS users FROM users WHERE userType='user'";
    $userCountQueryResult = mysqli_query($con,$userCountQuery);
    $userCount = mysqli_fetch_assoc($userCountQueryResult);
    $orderCountQuery = "SELECT COUNT(*) AS orders FROM orders";
    $orderCountQueryResult = mysqli_query($con,$orderCountQuery);
    $orderCount = mysqli_fetch_assoc($orderCountQueryResult);
    $deliveredOrderCountQuery = "SELECT COUNT(*) AS deliveredOrders FROM orders WHERE status='Delivered'";
    $deliveredOrderCountQueryResult = mysqli_query($con,$deliveredOrderCountQuery);
    $deliveredOrderCount = mysqli_fetch_assoc($deliveredOrderCountQueryResult);
    $unDeliveredOrderCountQuery = "SELECT COUNT(*) AS orders FROM orders WHERE status!='Delivered'";
    $unDeliveredOrderCountQueryResult = mysqli_query($con,$unDeliveredOrderCountQuery);
    $unDeliveredOrderCount = mysqli_fetch_assoc($unDeliveredOrderCountQueryResult);
?>
<html>
<head>  
    <title>admin-homepage</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body class="bg-dark text-white mb-4">
    <?php include 'sidebar.html'; ?>
    
    <main class="mt-5 pt-3">
        <div class="container">
            <h3 class="text-center">Dashboard</h3>
            <div class="row mt-4">
                <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-warning text-center">
                        Shops
                    </div>
                    <div class="card-body">
                        <img src="images/shop.svg" class="card-img-top" alt="..." style="height: 100px; margin:0; padding: 0">
                        <a href="#" class="btn btn-primary m-2"><?php echo $shopCount['shops']; ?></a>
                    </div>
                    </div>
                </div>    
                <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-warning text-center">
                        Users
                    </div>
                    <div class="card-body">
                        <img src="images/people-fill.svg" class="card-img-top" alt="..." style="height: 100px; margin:0; padding: 0">
                        <a href="#" class="btn btn-primary m-2 align-content-center"><?php echo $userCount['users']; ?></a>
                    </div>
                    </div>
                </div>    
                <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-warning text-center">
                        Total Orders
                    </div>
                    <div class="card-body">
                        <img src="images/cart-fill.svg" class="card-img-top" alt="..." style="height: 100px; margin:0; padding: 0">
                        <a href="#" class="btn btn-primary m-2 align-content-center"><?php echo $orderCount['orders']; ?></a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">    
                <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-warning text-center">
                        Total Orders
                    </div>
                    <div class="card-body">
                        <img src="images/cart-fill.svg" class="card-img-top" alt="..." style="height: 100px; margin:0; padding: 0">
                        <a href="#" class="btn btn-primary m-2 align-content-center"><?php echo $orderCount['orders']; ?></a>
                    </div>
                    </div>
                </div>    
                <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-warning text-center">
                        Total Orders
                    </div>
                    <div class="card-body">
                        <img src="images/cart-fill.svg" class="card-img-top" alt="..." style="height: 100px; margin:0; padding: 0">
                        <a href="#" class="btn btn-primary m-2 align-content-center"><?php echo $orderCount['orders']; ?></a>
                    </div>
                    </div>
                </div>    
            </div>
        </div>
    </main>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>