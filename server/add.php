<?php
session_start();
include('db_connect.php');

if(isset($_POST['submit'])){

    $prenom= $_POST['prenom'];
    $nom= $_POST['nom'];
    $date=date('d-m-Y',strtotime($_POST['date']));
    $place = $_POST['place'];
    $sexe = $_POST['sexe'];
    $religion =$_POST['religion'];
    $section=$_POST['section'];
    $fathername=$_POST['fathername'];
    $mothername = $_POST['motherfirstfathername'];
    $lastname = $_POST['motherlastname'];
    $profession = $_POST['profession'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $observation= $_POST['observation'];
    $photo = $_POST['file'];

// check if the student is already added//




//insert if the user does not already exist 

    $sql="insert into Students (prenom,nom,birthday,sexe,religion,section,nom_du_pere,prenom_de_la_mere,
    nom_de_la_mere,profession,adresse,telephone,observation,photo) 
    values()";

    $result = mysqli_query($conn, $sql);
}

