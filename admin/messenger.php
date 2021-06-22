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
    <title>messenger</title>
</head>
<body class="bg-dark text-white">
    <?php include 'sidebar.html'; ?>
    <main class="mt-3 pt-3">
    <h3 class="text-center mt-3">Messages</h3>
    <table id='example' class="table data-table container-lg container-fluid-sm"><thead style="background: white"><tr><th>User</th><th>Messages</th></tr></thead>
    <tbody class="thead-light">
    <?php
    include '../connection.php';
        $messagesQuery= "SELECT DISTINCT senderId FROM messages WHERE recieverId='admin'";
        $messagesQueryResult= mysqli_query($con,$messagesQuery);
        if(mysqli_num_rows($messagesQueryResult)>0){
            while($messages= mysqli_fetch_assoc($messagesQueryResult)){
                $userId = $messages['senderId'];
                $userDetailsQuery = "SELECT name FROM users WHERE id='$userId'";
                $userDetailsQueryResult = mysqli_query($con,$userDetailsQuery);
                $userDetails = mysqli_fetch_assoc($userDetailsQueryResult);
                $selectMessageQuery = "SELECT message,date,status FROM messages ORDER BY date DESC LIMIT 1";
                $selectMessageQueryResult = mysqli_query($con,$selectMessageQuery);
                $selectMessage = mysqli_fetch_assoc($selectMessageQueryResult);  
                if($selectMessage['status']=='unseen'){
                    echo "<tr style='background-color: lightgreen; cursor: pointer' class='message'><td><p class='userName'>".$userDetails['name']."</p><p class='userId' style='display: none'>".$userId."</p></td><td>".$selectMessage['message']."<p></p>".$selectMessage['date']."</td></tr>";
                }
                else{
                    echo "<tr style='background-color: white; cursor: pointer' class='message'><td><p class='userName'>".$userDetails['name']."</p><p class='userId' style='display: none'>".$userId."</p></td><td>".$selectMessage['message']."<p>".$selectMessage['date']."</p></td></tr>";
                }
            }
        }
    ?>
    </tbody>
        </table>
    </main>
    <script>
    $(".message").click(function(){
       var userId= $(this).closest('tr').find('.userId').text();
       var userName = $(this).closest('tr').find('.userName').text();
       window.open('chat.php?userName='+userName+'&userId='+userId, '_blank');
    });
    </script>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
<script src="js/jquery-3.5.1.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap5.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>