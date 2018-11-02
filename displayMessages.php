<?php 

    include("./config.php");
    
    $query = "SELECT * FROM chat";
    $run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_array($run)){
?>  
    <p>
        <span class="sender"><?php echo $row['name'];?></span>
        <span><?php echo $row['message'];?> </span>
        <span style="float: right;"><?php echo date('h:i A', strtotime($row['timestamp']));?></span>
    </p>
    <hr/>
<?php
    }
?>