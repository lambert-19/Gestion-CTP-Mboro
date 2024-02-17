<!doctype html>
<html lang="en">
    <head>
        <title>Editer l'information d'un Eleve</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link href="logo/1-0.jpg"  rel="logo icon" title="Logo" type="image/jpg">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="css/addstudent.css">
    </head>

    <body>
        <header>
            <!-- place navbar here -->
            <?php include 'header.php';
            session_start();
            ?>
            
        </header>
        
        <?php
        
include('server/db_connect.php');
$sql="SELECT * FROM students WHERE id='$_GET[num]'";
$results=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($results);
        ?>

        <main class="container min-vh-100 mt-3 d-flex justify-content-center align-items-center ">
        
   


        <form class="row g-3 mt-2 p-3 border " action="server/edit.php" method="post" enctype="multipart/form-data">
         <h2> Editer l'information d'un Eleve </h2>
         
        <div class="col-md-5">
    <label for="inputfirstname" class="form-label" >Prenom</label>
    <input type="text" class="form-control" id="prenom" name="prenom" value="<?=$row["prenom"] ?>">
  </div>
 
  <div class="col-md-5">
    <label for="inputlastname" class="form-label">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom" value="<?=$row["nom"] ?>">
  </div>

  <div class="col-5">
    <label for="inputDate" class="form-label">Date de Naissance</label>
    <input type="Date" class="form-control" id="Date" name="date" value="<?=$row["birthday"] ?>">
  </div>

  <div class="col-md-5">
    <label for="inputlieu" class="form-label">Lieu de Naissance</label>
    <input type="text" class="form-control" id="place" name="place" value="<?=$row["lieu_de_naissance"] ?>">
  </div>

  <div class="col-5">Sexe</label>
    <select name="sexe" id="inputsexe" class="form-select">
    <option  selected>-----Choisir le Sexe-----</option>
      <option value="Masculin"
      <?php
      if($row["sexe"]=='Masculin'){
        echo'selected';
      }
      ?>>Masculin</option>
      <option value="Feminin"
      <?php
      if($row["sexe"]== 'Feminin'){
        echo'selected';
      }
      
      ?>>Feminin</option>
    </select>
  </div>
 
 
  <div class="col-5">
    <label for="inputreligion" class="form-label">Religion</label>
    <select id="inputState" name="religion" class="form-select">
    <option value="" selected>-----Choisir la Religion-----</option>
      <option value="Musulman"
      
      <?php
    if($row["religion"] == 'Musulman'){
      echo"selected";
    }
      ?>
      
      >Musulman</option>
      <option value="Catholique"
      
      <?php
    if($row["religion"] == 'Catholique'){
      echo"selected";
    }
      ?>
      
      >Catholique</option>
    </select>
  </div>

  <div class="col-5">
    <label for="inputsection" class="form-label">Section</label>
    <select id="inputSection" name="section" class="form-select">
    <option value="" selected>-----Choisir la Section-----</option>
      <option value="Petite" 
      <?php
    if($row["section"] == 'Petite'){
      echo"selected";
    }
      ?>
      >Petite</option>
      <option value="Moyenne"
      <?php
    if($row["section"] == 'Moyenne'){
      echo"selected";
    }
      ?>
      
      >Moyenne</option>
      <option value="Grande"
      
      <?php
    if($row["section"] == 'Grande'){
      echo"selected";
    }
      ?>
      
      >Grande</option>
    </select>
  </div>
 
  <div class="col-5">
    <label for="inputname" class="form-label">Prenom du Pere</label>
    <input type="text" class="form-control" id="fathername" name="fathername" value="<?=$row["prenom_du_pere"] ?>">
  </div>

  <div class="col-md-5">
    <label for="inputmother" class="form-label">Prenom de la Mère </label>
    <input type="text" class="form-control" id="motherfirstname" name="motherfirstfathername" value="<?=$row["prenom_de_la_mere"] ?>">
  </div>

  <div class="col-md-5">
    <label for="inputCity" class="form-label">Nom de la Mère</label>
    <input type="text" class="form-control" id="motherlastname" name="motherlastname" value="<?=$row["nom_de_la_mere"] ?>">
  </div>


  <div class="col-5">
    <label for="inputprofession" class="form-label">Profession</label>
    <input type="text" class="form-control" id="profession" name="profession" value="<?=$row["profession"] ?>">
  </div>


  <div class="col-5">
    <label for="inputAddress" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="Address" name="address" value="<?=$row["adresse"] ?>">
  </div>



  
  <div class="col-5">
    <label for="inputphone" class="form-label">Telephone</label>
    <input type="text" class="form-control" id="phone" name="phone" value="<?=$row["telephone"] ?>">
  </div>

  <div class="col-5">
    <label for="inputobs" class="form-label">Observation</label>
    <input type="text" class="form-control" id="observation" name="observation" value="<?=$row["observation"] ?>">
  </div>

  <div class="col-5">
    <label for="inputannee" class="form-label">Annee Scolaire</label>
    <input type="text" class="form-control" id="scolaire" name="scolaire" value="<?=$row["scolaire"] ?>">
  </div>

  <div class="photo">
  <div class="mb-3">
  <label for="formFile" class="form-label">Inserer une photo</label>
  <input class="form-control form-control" id="formFile" name="file" type="file" value="<?=$row["photo"] ?>">
</div>
  </div>
  
  <div class="col-12 align-items-center">
    <button type="submit" name="submit" class="btn btn-outline-success btn-lg ">Ajouter</button>
  </div>
</form>


        </main>


        <footer>
            <!-- place footer here -->


        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
