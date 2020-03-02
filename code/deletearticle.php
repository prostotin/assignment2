<?php
include("config.php");
include("lib/db.php");
session_start();

if ( $_SESSION['authenticated'] == True) {



$auth = $_GET['auth'];

if ($_SESSION['username'] == "admin" || $_SESSION['username'] == $auth){

#echo "aid=".$aid."<br>";
$aid = $_GET['aid'];
$result = delete_article($dbconn, $aid);
#echo "result=".$result."<br>";
# Check result
header("Location: /admin.php");
} else{
    echo "youre not the one who posted it/not admin";
    echo PHP_EOL;
    echo "Author is: ".$auth;
    echo PHP_EOL;
    echo "You're logged in as: ".$_SESSION['username'];
}
}
else{
echo "not enough priveleges...";
}
?>
