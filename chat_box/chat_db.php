<?php
defined("DB_HOST")? null:define("DB_HOST","localhost");
defined("DB_USER")? null:define("DB_USER","root");
defined("DB_PASS")? null:define("DB_PASS","fordgt45");
defined("DB_NAME")? null:define("DB_NAME","Chat_box");

$connection=  mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$query="SELECT * FROM chat ";

if(!$connection){
    echo "Error Connection Database<br>";
}
?>