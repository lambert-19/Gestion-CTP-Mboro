<!doctype html>
<html lang="en">
    <head>
        <title>Home Page</title>
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/home.css">
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        <?php include 'header.php';?>

        
        </header>


        <main class="container overflow-hidden text-center  ">

        
   <aside id="aside">


   </aside>
   
        <div class="carte align-items-center ">
  <div class="row gx-5">
    <div class="col-3">
    <a href="addStudent.php"><div class="frame p-4 "><i class="bi bi-person-plus-fill "></i><p>Ajouter un élève</p> </div></a>
    </div>
    <div class="col-3">
     <a href="listedeseleves.php"><div class="frame p-4 "><i class="bi bi-person-fill"></i> <p>liste des élèves </p></div></a> 
    </div>
    <div class="col-3">
     <a href="addpersonel.php"> <div class="frame p-4 "><i class="bi bi-person-plus-fill "></i><p>Ajouter un Membre du Personnel</p></div> </a> 
    </div>
    
    <div class="col-3">
     <a href=""> <div class="frame p-4 "><i class="bi bi-person-fill "></i><p>liste du Personnel</p></div> </a> 
    </div>
  </div>
</div>

        


        
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
