<?php
session_start();
include('db_connect.php');

if(isset($_POST['submit'])){

    $prenom= $_POST['prenom'];
    $nom= $_POST['nom'];
    $date=$_POST['date'];
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
    $scolaire=$_POST['scolaire'];
    $photo = $_FILES['file']['name'];
    $tempname=$_FILES['file']['tmp_name'];
    $folder='../Images'.$photo;

// check if the student is already added//
if(empty($prenom) || empty($nom) || empty($date) || empty($place) || empty($sexe) || empty($religion) || empty($section)
  || empty($fathername) || empty($mothername) || empty($lastname) || empty($profession) || empty($address)||
empty($phone) || empty($scolaire)|| empty($photo)
){
    $_SESSION['error']="Remplissez les cases avant de valider";
    header("Location:../addStudent.php");
    exit();
}

$checkuser="SELECT * FROM students WHERE prenom='$prenom' AND nom='$nom' AND birthday='$date' AND lieu_de_naissance='$place'
AND sexe='$sexe' AND religion='$religion' AND prenom_du_pere='$fathername' AND prenom_de_la_mere='$mothername' AND nom_de_la_mere='$lastname'";
$results=mysqli_query($conn,$checkuser);
$rowCount=mysqli_num_rows($results);
if($rowCount>0){
    $_SESSION['error']="      Cet élève est déja dans les données.";
    header("Location:../addStudent.php");
    exit();
}else{
//insert if the user does not already exist 

    $sql="INSERT into students (prenom,nom,birthday,lieu_de_naissance,sexe,religion,section,prenom_du_pere,prenom_de_la_mere,
    nom_de_la_mere,profession,adresse,telephone,observation,scolaire,photo) 
    values('$prenom','$nom','$date','$place','$sexe','$religion','$section','$fathername','$mothername','$lastname','$profession','$address','$phone','$observation','$scolaire','$photo');";

    $result = mysqli_query($conn, $sql);
    echo
        $_SESSION['success']="<span>L'élève a été enregistré avec success</span>";
        header("Location:../addStudent.php");
    
}
}

