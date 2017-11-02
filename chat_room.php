***REMOVED***
***REMOVED***
***REMOVED***
***REMOVED***
<div id="page-wrap">

    <h2>jQuery/PHP Chat</h2>
    <p id="name-area"></p>
    <div id="chat-wrap">
     <div id="chat-area" style="height:300px; width:300px; border:solid">
***REMOVED***
     if(!file_exists("log.html")){
echo("nonono");
***REMOVED***
if(file_exists("log.html") && filesize("log.html") > 0){
    $handle = fopen("log.html", "r");
    $contents = fread($handle, filesize("log.html"));
    fclose($handle);
    echo $contents;
***REMOVED***
***REMOVED***
     ***REMOVED***
     ***REMOVED***

    <form id="send-message-area" action="">
        <p>Your message: </p>
        <textarea id="message"></textarea>
     <input  type="button" id="submit" value="Send" />
    ***REMOVED***

***REMOVED***
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script type="text/javascript" src ="test.js"></script>
 ***REMOVED***
    ***REMOVED***