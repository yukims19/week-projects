Hello
<?
***REMOVED***

if(isset($_SESSION['user'])){
    $text = $_POST['text'];
    echo $text;
    $fp = fopen("log.html", 'a');
    fwrite($fp, "<div class='msgln'><div class='user'>".$_SESSION['user'].": <br/>***REMOVED***<div class= 'message msj'>".stripslashes(htmlspecialchars($text))."<br>***REMOVED******REMOVED***");
    fclose($fp);***REMOVED***
/*
background-color: white;
    padding: 5px;
    font-weight: 100;
    border-radius: 15px;
    margin: 10px;
    margin-bottom: 10px;*/
***REMOVED***