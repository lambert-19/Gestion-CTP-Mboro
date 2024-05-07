<?php
session_start();
include('db_connect.php');
$sql=$conn->query("SELECT * FROM students WHERE id='$_GET[num]'");

