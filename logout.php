<?php
    session_start();
    session_destroy();
    unset($_SESSION['name']);
    unset($_SESSION['phoneNumber']);
    unset($_SESSION['userType']);
    echo "<script>window.location.href='index.html';</script>";
?>