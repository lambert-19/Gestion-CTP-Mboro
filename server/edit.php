<?php
session_start();
include('db_connect.php');
$sql="SELECT * FROM students WHERE id='$_GET[num]'";
$results=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($results);
