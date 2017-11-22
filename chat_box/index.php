<?php 
    include_once('chat_db.php');
?>
        
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Basic Chat box</title>
            <script>
            function ajax(){

            var req=new XMLHttpRequest();
            req.onreadystatechange=function(){
                if(req.readyState==4 && req.status==200){
                    document.getElementById('chat').innerHTML=req.responseText;
                }
            }
            req.open('GET','chat_data.php','true');
            req.send();
            }
            setInterval(function(){
                ajax();
            
            },500);
            </script>
        </head>
        <body onload="ajax();">
        <div id="container">
        <div id="chat">
        </div>
        <form action="<?$_SERVER['PHP_SELF'];?>" method="post">
                <input type="text" name="user_name" placeholder="Enter Your Name">
                <textarea name="message" id="msg" cols="30" rows="10" placeholder="Enter your message"></textarea>
                <input type="submit" value="Send" name="send">
                </form>
                </div>

<?php 
if(isset($_POST['send'])) {
        
    $name=$_POST['user_name'];
    $msg=$_POST['message'];
    //echo $name," ",$msg,"<br>";

    $query="INSERT INTO chat (name,message) VALUES ('$name','$msg') ";

    $insert=$connection->query($query);

    if($insert){
        echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'/>";
    }
}    
?>
</body>
</html>