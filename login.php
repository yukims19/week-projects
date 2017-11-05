<?php
/*Sql*/
$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '11111';
$db = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $db ) {
    die('Could not connect: ' . mysql_error());
}

/*create db if does not exist*/
$newdb = 'CREATE DATABASE IF NOT EXISTS webchat';
$retval_newdb = mysqli_query($db,$newdb);
if(! $retval_newdb ) {
    die('Could not create database: ' . mysqli_error());
}
mysqli_select_db($db,'webchat');

/*creat user table*/
$user_tb_file='user_tb.txt';
$user_tb_fp = fopen($user_tb_file, 'r');
$user_tb = fread($user_tb_fp, filesize($user_tb_file));
fclose($user_tb_fp);
$retval_user_tb = mysqli_query($db, $user_tb);
if(! $retval_user_tb ) {
    die('Could not create table: ' . mysqli_error());
}
?>
<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
$username = $_POST['username'];
$password = $_POST['password'];
$select_id= "SELECT password FROM user WHERE username = '$username';";
$re_password = mysqli_query($db,$select_id);

$data = mysqli_fetch_row($re_password);
if($data[0] == $password){
    //echo "Submited!!!!!";
//session_register("username");
$_SESSION['user'] = $username;
header("location: chat_room.php");
}else {
$error = "Your Login Name or Password is invalid";
echo $error;
}
}

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>

<div class="login">
</div>

<form id="login_form" action ="" method = "post">
                              <h1>Your Account </h1>
    <input id= "login_username" type = "text" name = "username" placeholder = "USERNAME" required/><br /><br />
    <input id= "login_password" type = "password" name = "password" placeholder = "PASSWORD" required/><br/><br />
    <input id="login_submit" type = "submit" value = "Login"/><br />
</form>

   </body>
</html>
