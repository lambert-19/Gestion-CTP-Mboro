<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Information</title>
  <link href="logo/1-0.jpg"  rel="logo icon" title="Logo" type="image/jpg">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 <link rel="stylesheet" href="css/display.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<header>
            <!-- place navbar here -->
        <?php include 'header.php';
        include 'server/db_connect.php';
        ?>
        </header>

        
        <main class="conatiner min-vh-100 mt-5 ">
       <?php
       $sql="SELECT * FROM students WHERE id='$_GET[num]'";
       $query=$conn->prepare($sql);
       $query->execute();
       $row = $query->fetch(); 
       
    
          ?>
     
     <form method="post" enctype="multipart/form-data">


<section class="photo mt-4 ">
<div class="image float-start  col-md-6 text-center p-3 border">

<img src="<?= $row["Images/photo"] ?>" class="rounded float-start" alt="studentphoto" width="450" height="400">

</div>


</section>

<section class="information float-end  col-md-6 ">

<div class="items text-start p-3 border ms-3 mb-5  ">
<p>Prenom:<span><?= $row['prenom']; ?></span></p>
<p>Nom:<span><?= $row["nom"] ?></span></p>
<p>Date de Naissance:<span><?= $row["birthday"] ?></span></p>
<p>lieu de Naissance:<span><?= $row["lieu_de_naissance"] ?></span> </p>
<p>sexe:<span><?= $row["sexe"] ?></span></p>
<p>religion:<span><?= $row["religion"] ?></span></p>
<p>section:<span><?= $row["section"] ?></span></p>
<p>prenom du pere:<span><?= $row["prenom_du_pere"] ?></span></p>
<p>prenom de la mere:<span><?= $row["prenom_de_la_mere"] ?></span></p>
<p>nom de la mere:<span><?= $row["nom_de_la_mere"] ?></span></p>
<p>profession:<span><?= $row["profession"] ?></span></p>
<p>adresse:<span><?= $row["adresse"] ?></span></p>
<p>telephone:<span><?= $row["telephone"] ?></span></p>
<p>observation:<span><?= $row["observation"] ?></span></p>
<p>annee scolaire:<span><?= $row["scolaire"] ?></span></p>
</div>

</section>



        </form>
      
     



        </main>
       

      

 
        <footer class=" bg-dark  ">
<div class="container ">
  
</div>


</footer>
       


</body>
</html>