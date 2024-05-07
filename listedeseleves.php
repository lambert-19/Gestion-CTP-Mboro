<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des Elèves</title>
  <link href="logo/1-0.jpg"  rel="logo icon" title="Logo" type="image/jpg">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<style>
body{
  scroll-behavior: smooth;
}
.form-controlsearch{
  width: 250px;
  height: 35px;
  
}

table{
  margin-bottom: 50px;
}
.pages{
  color: red; 
  margin-top:18px ;
  align-items: flex-start;
  text-decoration: none;
  gap: 2px;
}

@media only screen and (max-width: 600px) {

  .form-controlsearch{
    margin-top:10px;
  }
  .chercher .btn .btn-outline-primary{
    width:40px;
    right:0;
  }


}

</style>
<body >
<header>
            <!-- place navbar here -->
        <?php include 'header.php';?>
        </header>


        <main class="min-vh-100 mt-5 pt-5   ">

            
<table  class="container-fluid table table-responsive table-hover " >

<h1 class="text-center mt-1  " >Liste des Elèves</h1>



    <form class="searching  " role="search" >
      <input class="form-controlsearch ms-5" type="search" name="search" placeholder="Search" aria-label="Search">
      <button class="chercher btn btn-outline-primary" name="submit" type="submit">Search</button>
    </form>

    




     <thead class="table-dark ">
     <tr>
      <th scope="col">#</th>
      <th scope="col">Prenom</th>
      <th scope="col">Nom</th>
      <th scope="col">Section</th>
      <th scope="col">Annee Scolaire</th>
      <th scope="col">Action</th>
    </tr>
     </thead>
     <tbody>

     <?php
if(isset($_POST['submit'])){
  $search=$_POST['search'];
  
  $sql="SELECT prenom,nom,section,scolaire FROM students where prenom='$search' or name='$search'";
  $result=mysqli_query($conn,$sql);
  if($result){
   if($num=mysqli_num_rows($result)>0) {
    while( $row=mysqli_fetch_assoc($result)){

 echo '<tr>
 <td>'.$row['i'].'</td>
 <td<a class="text-decoration-none text-dark text-capitalize" ></a>>'.$row['prenom'].'</td>
 <td>'.$row['nom'].'</td>
 <td>'.$row['section'].'</td>
 <td>'.$row['scolaire'].' </td>

    </tr>';
   }
  }
    else{
      echo"<h2 class='text-danger'>Cet Eleve n'existe pas</h2>";
    }
  }
}



?>

     <?php
     
    include('server/db_connect.php');
//Create Pagination

//set page 1 as a default page
if(isset($_GET['page'])&&!empty($_GET['page'])){
  $currentPage=(int)strip_tags($_GET['page']);
}else{
  $currentPage=1;
}

/*
if($currentPage<=0){
  throw new Exception('Numero de page Invalide');
}
*/
//count the number of data into the database
$count =(int)$conn->query('SELECT COUNT(id) FROM students')->fetch(PDO::FETCH_NUM)[0];

//set the limit per page
$perPage = 50;
// avoid the decimal number for the pagination
$pages = ceil($count / $perPage);

//prevent the user to put unexisting page

if($currentPage > $pages){
 throw new Exception('Numero de page Invalide');
}

//calcul du premier article
$premier = ($currentPage * $perPage)-$perPage;




//increment the number after pagination 
$compter=1;

//we add the initialize value $compter we add it with the current page minus 1 and multiply it with number of article per page
$i=$compter+($currentPage -1)*$perPage;
// retrieve data from the database
    $sql='SELECT * FROM students ORDER BY nom,prenom ASC LIMIT :premier,:perPage;';
   $query=$conn->prepare($sql);
    $query->bindValue(':premier',$premier,PDO::PARAM_INT);
    $query->bindValue(':perPage',$perPage,PDO::PARAM_INT);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <?php foreach($results as $row):
    
     
      ?>
      
<tr>
 
<td><?php echo $i++;?> </td>

<td class="text-capitalize"><?php echo $row["prenom"];?></td>
<td class="text-capitalize"><?php echo $row["nom"];?></td>
<td class="text-capitalize"><?php echo $row["section"];?></td>
<td><?php echo $row["scolaire"];?></td>
<td>
       <a class='btn btn-success btn-sm' href='display.php?num=<?php echo $row['id'];?>' >Details</a>
         <a class='btn btn-primary btn-sm' href='editstudent.php?num=<?php echo $row['id']; ?>' >Editer</a>
         <a class='btn btn-danger btn-sm' href='#' >Supprimer</a>
         </td>
</tr>


    <?php endforeach;
   
    ?>

   <nav class="mt-3">
   <ul class="pagination">
    <li class="page-item <?=($currentPage==1)?"disabled ":"" ?>">
      <a href="?page=<?=$currentPage -1?>" class="page-link">Precedente</a>
    </li>
    <?php for($page=1;$page<=$pages;$page++):?>
    <li class="page-item <?= ($currentPage ==$page)?"active":""?>">
      <a href="?page=<?=$page ?>" class="page-link"><?=$page?></a>
    </li>
    <?php endfor ?>
    <li class="page-item">
      <a href="?page=<?=$currentPage + 1?>" class="page-link <?=($currentPage==$pages)?"disabled ":"" ?>">Suivante</a>
    </li>
   </ul>

   </nav>

     </tbody>
</table >
        </main>

        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

</body>
</html>