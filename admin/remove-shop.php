<?php
include '../connection.php';
$id= $_GET['id'];
$removeShopQuery= "DELETE FROM users WHERE id='$id'";
$removeShopQueryResult= mysqli_query($con,$removeShopQuery);
if($removeShopQueryResult){
    echo "<script>alert('The shop has been deleted successfully);</script>";
    echo "<script>window.location.href='shops.php';</script>";
}
?>