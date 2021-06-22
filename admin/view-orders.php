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
    <title>view-orders</title>
</head>
<body class="bg-dark text-white">
<?php include 'sidebar.html'; ?>
    <main class="mt-3 pt-3">
    <h3 class="text-center mt-4">ORDERS</h3>
        <table class="table table-bordered table-dark" id="example">
        <tr><th>ID</th><th>Name</th><th>Contact</th><th>Shop</th><th>Date</th><th>Status</th><th>Action</th></tr>
            <?php
            include '../connection.php';
            $viewOrdersQuery= "SELECT * FROM orders ORDER BY orderid DESC";
            $viewOrdersQueryResult = mysqli_query($con,$viewOrdersQuery);
            if(mysqli_num_rows($viewOrdersQueryResult)>0){
                while($orders = mysqli_fetch_assoc($viewOrdersQueryResult)){
                    if(($orders['status']=='Device returned')||($orders['status']=='Device in return')){
                        echo "<tr><td class='id'>".$orders['orderid']."</td><td>".$orders['name']."</td><td>".$orders['contact']."</td><td>".$orders['area']."</td><td>".$orders['date']."</td><td>".$orders['status']."</td><td><button class='viewInvoie btn btn-light'>Invoice</button></td></tr>";
                    }
                    else{
                        echo "<tr><td class='id'>".$orders['orderid']."</td><td>".$orders['name']."</td><td>".$orders['contact']."</td><td>".$orders['area']."</td><td>".$orders['date']."</td><td>".$orders['status']."</td><td><button class='viewDetails btn btn-warning'>View</button></td></tr>";
                    }
                }
            }
            else{
                echo "<h3 class='text-danger'>There are no orders yet</h3>";
            }
            ?>
        </table>
    </main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script>
    $(".viewInvoice").click(function(){
        var id= $(this).closest('tr').find('.id').text();
        window.open('../viewInvoice.php?id='+id,'_blank');
    });
</script>
<script>
    $(".viewDetails").click(function(){
        var id= $(this).closest('tr').find('.id').text();
        window.open('../viewDetails.php?id='+id,'_blank');
    });
</script>
</body>
</html>