***REMOVED***
***REMOVED***
***REMOVED***
if(isset($_GET['logout'])){
session_destroy();
header("Location: login.php"); //Redirect the user
***REMOVED***

if(!isset($_SESSION['user'])){
    header("location:login.php");
***REMOVED***
***REMOVED***
***REMOVED***
***REMOVED***
***REMOVED***
<div id="page-wrap">

    <h2>jQuery/PHP Chat</h2>
    <p id="name-area"></p>
    <div id="chat-wrap">
     <div id="chatbox" style="height:300px; width:300px; border:solid; overflow:scroll">
***REMOVED***
     /*
     if(!file_exists("log.html")){
echo("nonono");
***REMOVED***
if(file_exists("log.html") && filesize("log.html") > 0){
    $handle = fopen("log.html", "r");
    $contents = fread($handle, filesize("log.html"));
    fclose($handle);
    echo $contents;
    ***REMOVED****/
***REMOVED***
     ***REMOVED***
    <p class="logout"><a id="exit" href="#">Exit Chat</a></p>

    ***REMOVED***

    <form id="send-message-area" action="">
        <p>Your message: </p>
        <textarea id="message"></textarea>
     <input  type="button" id="submit" value="Send" />
    ***REMOVED***

***REMOVED***
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script type="text/javascript" src ="chat_room.js"></script>
 ***REMOVED***
    ***REMOVED***