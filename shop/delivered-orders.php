<?php include 'shopValidator.php'; ?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>delivered-orders</title>
</head>
<body class="bg-dark text-white">
<?php include 'sidebar.html'; ?>
    <main class="mt-5 pt-3">
      <h3 class="text-center">DELIVERED-ORDERS</h3>
      <table id='example' class="table table-bordered data-table table-dark container-lg container-md">
      <thead>
        <tr><th>ID</th><th>Name</th><th>Contact</th><th>Shop</th><th>Date</th><th>Status</th><th>Action</th></tr>
      </thead>
      <tbody>
            <?php
            include '../connection.php';
            $area = $_SESSION['name'];
            $viewOrdersQuery= "SELECT * FROM orders WHERE area='$area' AND status='Delivered' ORDER BY orderid DESC";
            $viewOrdersQueryResult = mysqli_query($con,$viewOrdersQuery);
            if(mysqli_num_rows($viewOrdersQueryResult)>0){
                while($orders = mysqli_fetch_assoc($viewOrdersQueryResult)){
                        echo "<tr><td class='id'>".$orders['orderid']."</td><td>".$orders['name']."</td><td>".$orders['contact']."</td><td>".$orders['area']."</td><td>".$orders['date']."</td><td>".$orders['status']."</td><td><button class='viewInvoie btn btn-light'>Invoice</button></td></tr>";
                }
            }
            else{
                echo "<tr><td><h3 class='text-danger'>There are no orders yet</h3></td></tr>";
            }
            ?>
        </tbody>
        </table>
    </main>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
<script src="js/jquery-3.5.1.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap5.min.js"></script>
<script src="js/script.js"></script>
<script>
    $(".viewInvoice").click(function(){
        var id= $(this).closest('tr').find('.id').text();
        window.open('../viewInvoice.php?id='+id,'_blank');
    });
</script>
</body>
</html>