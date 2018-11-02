$(document).ready(function(e){
    
    function displayMessages(){
        $.ajax({
            url: 'displayMessages.php',
            type: 'POST',
            success: function(data){
                $("#display").html(data);
            }
            
        });
        
    }
    
    setInterval(function() {displayMessages()}, 1000);
    
    $('#submit').click(function(e){
       var name = $('#userName').val();
       var message = $('#message').val();
       
       $('#chatFields')[0].reset();
       
       console.log(name +" " + message);
       
       
       $.ajax({
           url: 'sendMessage.php',
           type: 'POST',
           data:{
               username: name,
               usermessage: message
               
               
           }
           
           
           
       });
    });
});