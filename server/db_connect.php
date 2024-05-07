<?php 
$dbname='ctp';
$dbuser='root';
$dbpass='#ibrahimaNDAW19';
$dbhost='localhost:4306';

try{
   $conn= new PDO("mysql:host=".$dbhost.";dbname=$dbname",$dbuser,$dbpass);

}catch(PDOException $e){
    echo "Error connecting".$e->getMessage();
   exit();
}