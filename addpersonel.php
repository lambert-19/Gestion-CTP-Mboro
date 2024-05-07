<!doctype html>
<html lang="en">
    <head>
        <title>Ajouter un membre du Personnel</title>
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
        <div class="wrapper">
        <main class="container min-vh-100 mt-5 d-flex justify-content-center align-items-center ">
        
        <form class="row g-3 mt-5 p-4 border " action="server/" method="post" enctype="multipart/form-data">
         <h2> Ajouter un membre du Personnel </h2>
         <?php 
                if(isset($_SESSION['error']))
                {?>
                 <p class="error mt-5 align-items-center "><?php echo $_SESSION['error']; ?></p>
               <?php 
               echo $_SESSION['error'];
               unset($_SESSION['error']);
                }
                ?>

               <?php 
                if(isset($_SESSION['success']))
                {?>
                
                <p class="alert alert-success" role="alert">
                <?php echo $_SESSION['success']; ?>
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </p>
               <?php 
               echo $_SESSION['success'];
               unset($_SESSION['success']);
                }
                ?>
                
        <div class="col-md-5">
    <label for="inputfirstname" class="form-label" >Prenom</label>
    <input type="text" class="form-control" id="prenom" name="prenom">
  </div>
 
  <div class="col-md-5">
    <label for="inputlastname" class="form-label">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom">
  </div>

  <div class="col-md-5">
    <label for="inputDate" class="form-label">Date de Naissance</label>
    <input type="Date" class="form-control" id="Date" name="birthday">
  </div>

  <div class="col-md-5">
    <label for="inputlieu" class="form-label">Lieu de Naissance</label>
    <input type="text" class="form-control" id="place" name="place">
  </div>

  <div class="col-md-5">Sexe</label>
    <select name="sexe" id="inputsexe" class="form-select">
    <option value="" selected>-----Choisir le Sexe-----</option>
      <option value="Masculin">Masculin</option>
      <option value="Feminin">Feminin</option>
    </select>
  </div>
 
 
  <div class="col-md-5">
    <label for="inputreligion" class="form-label">Religion</label>
    <select id="inputState" name="religion" class="form-select">
    <option value="" selected>-----Choisir la Religion-----</option>
      <option value="Musulman" >Musulman</option>
      <option value="Catholique">Catholique</option>
    </select>
  </div>

 
  <div class="col-md-5">
    <label for="inputmatricule" class="form-label">Matricule</label>
    <input type="text" class="form-control" id="matricule" name="matricule">
  </div>

  <div class="col-md-5">
    <label for="inputFonction" class="form-label">Fonction</label>
    <input type="text" class="form-control" id="fonction" name="fonction">
  </div>


  <div class="col-md-5">
    <label for="inputgrade" class="form-label">Grade</label>
    <input type="text" class="form-control" id="grade" name="grade">
  </div>


  <div class="col-md-5">
    <label for="inputDate" class="form-label">Date d'entre dans l'enseignement</label>
    <input type="Date" class="form-control" id="entree" name="entree">
  </div>



  
  <div class="col-md-5">
    <label for="inputDate" class="form-label">Date de prise de service</label>
    <input type="Date" class="form-control" id="prisedeservice" name="prisedeservice">
  </div>

  <div class="col-md-5">
    <label for="inputDate" class="form-label">Date d'affectation</label>
    <input type="Date" class="form-control" id="affectation" name="affectation">
  </div>

  <div class="col-md-5">
    <label for="inputannee" class="form-label">Diplome Obtenu</label>
    <input type="text" class="form-control" id="diplome" name="diplome">
  </div>

  <div class="photo">
  <div class="mb-3">
  <label for="formFile" class="form-label">Inserer une photo</label>
  <input class="form-control form-control" id="formFile" name="file" type="file">
</div>
  </div>
  
  <div class="col-12">
    <button type="submit" name="submit" class="add btn btn-outline-success btn-lg ">Ajouter</button>
  </div>
</form>


        </main>


        </div>
        

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
