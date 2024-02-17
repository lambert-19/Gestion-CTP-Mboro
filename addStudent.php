<!doctype html>
<html lang="en">
    <head>
        <title>Ajouter un eleve</title>
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
            <?php include 'header.php';?>
        </header>
        <main class="container min-vh-100 mt-3 d-flex justify-content-center align-items-center ">
        
        <form class="row g-3 mt-2 p-3 border" action="" method="post" enctype="multipart/form-data">
         <h2> Ajouter un élève </h2>
         <?php 
                if(isset($_GET['error'])){?>
                 <p class="error mt-5"><?php echo $_GET['error'];?></p>
               <?php }
                ?>
        <div class="col-md-5">
    <label for="inputfirstname" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="prenom" name="prenom">
  </div>
 
  <div class="col-md-5">
    <label for="inputlastname" class="form-label">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom">
  </div>

  <div class="col-5">
    <label for="inputDate" class="form-label">Date de Naissance</label>
    <input type="Date" class="form-control" id="Date" name="date">
  </div>

  <div class="col-md-5">
    <label for="inputlieu" class="form-label">Lieu de Naissance</label>
    <input type="text" class="form-control" id="place" name="place">
  </div>

  <div class="col-5">Sexe</label>
    <select name="sexe" id="inputsexe" class="form-select">
    <option value="" selected>-----Choisir le Sexe-----</option>
      <option value="Masculin">Masculin</option>
      <option value="Feminin">Feminin</option>
    </select>
  </div>
 
 
  <div class="col-5">
    <label for="inputreligion" class="form-label">Religion</label>
    <select id="inputState" name="religion" class="form-select">
    <option value="" selected>-----Choisir la Religion-----</option>
      <option value="Musulman" >Musulman</option>
      <option value="Catholique">Catholique</option>
    </select>
  </div>

  <div class="col-5">
    <label for="inputsection" class="form-label">Section</label>
    <select id="inputSection" name="section" class="form-select">
    <option value="" selected>-----Choisir la Section-----</option>
      <option value="Petite" >Petite</option>
      <option value="Moyenne">Moyenne</option>
      <option value="Grande">Grande</option>
    </select>
  </div>
 
  <div class="col-5">
    <label for="inputname" class="form-label">Prenom du Pere</label>
    <input type="text" class="form-control" id="fathername" name="fathername">
  </div>

  <div class="col-md-5">
    <label for="inputmother" class="form-label">Prenom de la Mère </label>
    <input type="text" class="form-control" id="motherfirstname" name="motherfirstfathername">
  </div>

  <div class="col-md-5">
    <label for="inputCity" class="form-label">Nom de la Mère</label>
    <input type="text" class="form-control" id="motherlastname" name="motherlastname">
  </div>


  <div class="col-5">
    <label for="inputprofession" class="form-label">Profession</label>
    <input type="text" class="form-control" id="profession" name="profession">
  </div>


  <div class="col-5">
    <label for="inputAddress" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="Address" name="address" >
  </div>



  
  <div class="col-5">
    <label for="inputphone" class="form-label">Telephone</label>
    <input type="text" class="form-control" id="phone" name="phone">
  </div>

  <div class="col-5">
    <label for="inputobs" class="form-label">Observation</label>
    <input type="text" class="form-control" id="observation" name="observation">
  </div>

  <div class="photo">
  <div class="mb-3">
  <label for="formFile" class="form-label">Inserer une photo</label>
  <input class="form-control form-control" id="formFile" name="file" type="file">
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
