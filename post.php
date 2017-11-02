Hello
<?
***REMOVED***
echo "testing";
//if(isset($_SESSION['name'])){
    $text = $_POST['text'];
    echo $text;
    $fp = fopen("log.html", 'a');
    fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".stripslashes(htmlspecialchars($text))."<br>***REMOVED***");
    fclose($fp);
//***REMOVED***
***REMOVED***