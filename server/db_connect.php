<?php 
$sname="localhost:4306";
$uname="root";
$password="#ibrahimaNDAW19";
$db_name="ctp";

$conn =mysqli_connect($sname,$uname,$password,$db_name);

if(!$conn){
    echo "Error connecting";
}
?>