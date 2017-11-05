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
    <div class="chat_head">
    <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
    ***REMOVED***
    <div id="chatbox">
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


<div class="user_input">
    <form id="send-message-area" action="">
     <textarea id="message" placeholder="Type your message here..."></textarea>
     <input  type="button" id="submit" value="Send" />
    ***REMOVED***
    ***REMOVED***
    ***REMOVED***
***REMOVED***
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script type="text/javascript" src ="chat_room.js"></script>
 ***REMOVED***
    ***REMOVED***