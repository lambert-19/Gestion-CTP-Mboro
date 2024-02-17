<?php
session_start();
include ("db_connect.php");

if(isset($_POST['submit'])){
$username =$_POST['email'];
$password =$_POST['password'];

$sql="select * from users where username = '$username' and password = '$password' ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count==1){
header("Location:../Home.php");
}else if(empty($username)){
header("Location:../index.php?error=entrez le nom d'utilisateur");
exit();
}else if(empty($password)){
    header("Location:../index.php?error=entrez votre mot de passe");
    exit();
}
else{
   header("Location:../index.php?error=user does not exist"); 
}

}


