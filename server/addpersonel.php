<?php
include('db_connect.php');
if(isset($_POST['submit'])){

    $prenom= $_POST['prenom'];
    $nom= $_POST['nom'];
    $date=$_POST['birthday'];
    $place = $_POST['place'];
    $sexe = $_POST['sexe'];
    $religion =$_POST['religion'];
    $matricule=$_POST['matricule'];
    $fonction=$_POST['fonction'];
    $grade=$_POST['grade'];
    $entree=$_POST['entree'];
    $prisedeservice=$_POST['prisedeservice'];
    $affectation=$_POST['affectation'];
    $diplome=$_POST['diplome'];
    $file=$_POST['file'];

// check if the personnel is already added//
$checkuser=$conn->prepare("SELECT * from personnel WHERE prenom='$prenom'AND nom='$nom' AND birthday='$date' AND lieu_de_naissance='$place'
AND sexe='$sexe' AND religion='$religion' AND matricule='$matricule'AND grade='$grade' AND ");
$checkuser->execute();
$row=$checkuser->rowCount();
if($row>0){
  $_SESSION['error']="Il est déja dans les données.";
  header("Location:../addpersonel.php");
  exit();
}else{
  $sql="INSERT into personnel (prenom,nom,birthday,lieu_de_naissance,sexe,religion,matricule
  ,fonction,grade,entree_en_fonction,prise_de_service,affectation,diplome,photo)VALUES()
  (:prenom,:nom,:birthday,:place,:sexe,:religion,:matricule,:fonction,:garde,
  :entree,:prisedeservice,:affectation,:diplome,:file)";
  $result=$conn->prepare($sql);
  $data=[
    'prenom'=>$prenom,
     'nom'=>$nom,
     'birthday'=>$date,
     'place'=>$place,
     'sexe'=>$sexe,
     'religion'=>$religion,
     'matricule'=>$matricule,
     'fonction'=>$fonction,
     'grade'=>$grade,
     'entree'=>$entree,
     'prisedeservice'=>$prisedeservice,
     'affectation'=>$affectation,
     'diplome'=>$diplome,
     'file'=>$file,  
  ];
  echo
        $_SESSION['success']="<span>Il/Elle a été enregistré avec success</span>";
        header("Location:../addpersonel.php");
    
}
// ccheck if there is any empty input //
if(empty($prenom) || empty($nom) || empty($date) || empty($place) || empty($sexe) || empty($religion)
  || empty($matricule) || empty($fonction) || empty($grade) || empty($entree) || empty($prisedeservice)||
empty($affectation) || empty($diplome)|| empty($file)
){
    $_SESSION['error']="Remplissez les cases avant de valider";
    header("Location:../addpersonel.php");
    exit();
}

}