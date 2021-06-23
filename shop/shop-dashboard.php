<?php include 'shopValidator.php'; ?>
<?php
    include '../connection.php';
    //all orders section
    $shop = $_SESSION['name'];
    $totalOrdersQuery = "SELECT COUNT(*) AS orders FROM orders WHERE area='$shop'";
    $totalOrdersQueryResult = mysqli_query($con,$totalOrdersQuery);
    $totalOrders = mysqli_fetch_assoc($totalOrdersQueryResult);
    //delivered orders section
    $deliveredOrdersQuery = "SELECT COUNT(*) AS orders FROM orders WHERE area='$shop' AND status='Delivered'";
    $deliveredOrdersQueryResult = mysqli_query($con,$deliveredOrdersQuery);
    $deliveredOrders = mysqli_fetch_assoc($deliveredOrdersQueryResult);
    //undelivered orders section
    $undeliveredOrdersQuery = "SELECT COUNT(*) AS orders FROM orders WHERE area='$shop' AND status!='Delivered'";
    $undeliveredOrdersQueryResult = mysqli_query($con,$undeliveredOrdersQuery);
    $undeliveredOrders = mysqli_fetch_assoc($undeliveredOrdersQueryResult);
?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>shop-dashboard</title>
</head>
<body>
<?php include 'sidebar.html'; ?>
    <main class="pt-3 mt-5">
    <div class="container">
        <h3 class="text-center">Shop Dashboard</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-warning text-center">
                        Total Orders
                    </div>
                    <div class="card-body">
                        <img src="images/cart-fill.svg" class="card-img-top" alt="..." style="height: 100px; margin:0; padding: 0">
                        <a href="#" class="btn btn-primary m-2 align-content-center"><?php echo $totalOrders['orders']; ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-warning text-center">
                        Delivered
                    </div>
                    <div class="card-body">
                        <img src="images/cart-check-fill.svg" class="card-img-top" alt="..." style="height: 100px; margin:0; padding: 0">
                        <a href="#" class="btn btn-primary m-2 align-content-center"><?php echo $deliveredOrders['orders']; ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-warning text-center">
                        Undelivered Orders
                    </div>
                    <div class="card-body">
                        <img src="images/cart-x-fill.svg" class="card-img-top" alt="..." style="height: 100px; margin:0; padding: 0">
                        <a href="#" class="btn btn-primary m-2 align-content-center"><?php echo $undeliveredOrders['orders']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>