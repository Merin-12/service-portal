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
    <title>shops list</title>
</head>
<body class="bg-dark text-white">
<?php include 'sidebar.html'; ?>
    <main class="mt-5 pt-3">
       <h3 class="text-center">ALL-SHOPS</h3>
        <table id="table" class="table table-bordered table-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Area</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Action</th>
        </tr>
            <?php
            include '../connection.php';
            $shopViewQuery = "SELECT * FROM users WHERE userType='shop'";
            $shopViewQueryResult = mysqli_query($con,$shopViewQuery);
            if(mysqli_num_rows($shopViewQueryResult)>0){
                while($shop= mysqli_fetch_assoc($shopViewQueryResult)){
                    echo "<tr><td class='id'>".$shop['id']."</td><td>".$shop['name']."</td><td>".$shop['phoneNumber']."</td><td><button class='remove btn btn-danger'>Remove</button></td></tr>";
                }
            }
            ?>
        </table>
    </main>
    <script>
    $(".remove").click(function(){
       var id= $(this).closest('tr').find('.id').text();
        var action=confirm("Do you want to delete this shop?");
        if(action==true){
            window.location.replace("remove-shop.php?id="+id);
        }
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>