<html>
<?php
session_start();
if(isset($_GET['logout'])){
session_destroy();
header("Location: login.php"); //Redirect the user
}

if(!isset($_SESSION['user'])){
    header("location:login.php");
}
?>
<head>
</head>
<body>
<div id="page-wrap">

    <h2>jQuery/PHP Chat</h2>
    <p id="name-area"></p>
    <div id="chat-wrap">
    <div class="chat_head">
    <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
    </div>
    <div id="chatbox">
<?php
     /*
     if(!file_exists("log.html")){
echo("nonono");
}
if(file_exists("log.html") && filesize("log.html") > 0){
    $handle = fopen("log.html", "r");
    $contents = fread($handle, filesize("log.html"));
    fclose($handle);
    echo $contents;
    }*/
?>
     </div>


<div class="user_input">
    <form id="send-message-area" action="">
     <textarea id="message" placeholder="Type your message here..."></textarea>
     <input  type="button" id="submit" value="Send" />
    </form>
    </div>
    </div>
</div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script type="text/javascript" src ="chat_room.js"></script>
    </body>
    </html>