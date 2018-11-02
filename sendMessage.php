<?php
    include("./config.php");
    
    $username = $_POST['username'];
    $usermessage = $_POST['usermessage'];
    
    $query = "INSERT INTO chat (name, message) VALUES ('$username', '$usermessage')";
    
    $run = mysqli_query($connection, $query);




?>