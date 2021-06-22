<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <title>chat</title>
</head>
<body class="bg-primary text-white p-lg-4 p-sm-0">
<main class="container-lg container-fluid-sm">
    <?php
        $userName = $_GET['userName'];
        $userId = $_GET['userId'];
    ?>
    <h3 class="text-center">Chat</h3>
    <div class="container-fluid">
        <div class="chatBoxHeader" style="padding: 4px; margin:0; background-color: #00c6ff; border-top-radius: 4px;"><h2> <?php echo $userName; ?></h2></div>
        <div class="box text-dark" style="background-color: white; height: 400px; overflow: scroll">
        <div class="chatBox"> 
            <?php 
                include '../connection.php';
                $allSeenQuery = "UPDATE messages SET status='seen' WHERE senderId='$userId'";
                $allSeenQueryResult = mysqli_query($con,$allSeenQuery);
                $messageSelectQuery = "SELECT * FROM messages WHERE ((senderId='$userId' AND recieverId='admin') OR (recieverId='$userId' AND senderId='admin')) ORDER BY date DESC";
                $messageSelectQueryResult = mysqli_query($con,$messageSelectQuery);
                if(mysqli_num_rows($messageSelectQueryResult)>0){
                    while($messages = mysqli_fetch_assoc($messageSelectQueryResult)){
                        if($messages['senderId'] == 'admin'){
                            echo "<p class='m-2 p-3' style='background:#0084ff; border-radius: 4px; text-align: right'>".$messages['message']."</p>";
                        }
                        else{
                            echo "<p class='text-left m-2 p-3' style='background: #00c6ff; border-radius: 4px'>".$messages['message']."</p>";
                        }
                    }
                }
            ?>
            </div>
        </div>
        
        <form action="" method="POST" class="m-0">
        <div class="row mt-1">
            <div class="col-md-8 col-sm-12"><input type="text" name="message" class="form-control"></div>
            <div class="col-md-4 ml-0"><button class="btn btn-warning container-fluid" name="send">Send</button></div>
        </div>
        </form>
        
    </div>
</main>
<?php
    if(isset($_POST['send'])){
        $senderId= 'admin';
        $recieverId = $userId;
        $message = $_POST['message'];
        $messageSendQuery = "INSERT INTO messages(senderId,recieverId,message) VALUES ('$senderId','$recieverId','$message')";
        $messageSendQueryResult = mysqli_query($con,$messageSendQuery); 
    }
?>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        $(document).ready(function(){
        setInterval(function(){
        $(".box").load(" .chatBox")}, 2000);
        });
    </script>
</body>
</html>