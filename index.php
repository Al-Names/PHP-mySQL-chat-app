<?php 
    include("./config.php");
?>

<html>
<head>
    <title>BunqChat</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scripts.js"></script>
</head>    
<body>
    <div class="container-fluid">
        <div class="topHalf">
            <h1 id="heading">BunqChat</h1>
                
            <h3 class="text-center" style="color: white;">Live Chat Room</h3>
                
            <div id="chatBox" class="well">
                <div id="display"></div>
            </div>
        </div>
        <hr/>
        <form id="chatFields">
            <input type="text" name="user" id="userName" placeholder="Enter Username" class="form-control"/>
            <br/>
            <textarea name="message" id="message" cols="30" rows="2" placeholder="Begin message..." class="form-control"></textarea>
            <br>
            <button type="button" id="submit" class="btn btn-primary">Send</button>
        </form>
        
    </div>

</body>
</html>