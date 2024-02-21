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

</style>
<body >
<header>
            <!-- place navbar here -->
        <?php include 'header.php';?>
        </header>
<?php
// create pagination
include_once('server/db_connect.php');

$num_page=05;


if(isset($_GET["pages"])){
  $page=$_GET["pages"];
}else{
  $page=1;
}
$start_from=($page-1)*05;
$pagination="SELECT * FROM students limit $start_from,$num_page";
$rs=mysqli_query($conn,$pagination);
?>

        <main class="min-vh-100 mt-5 pt-5   ">

            
<table  class="container-fluid table table-responsive table-hover " >

<h1 class="text-center mt-1  " >Liste des Elèves</h1>



    <form class="d-flex align-content-end  " role="search" >
      <input class="form-controlsearch ms-5" type="search" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" name="submit" type="submit">Search</button>
    </form>
<br>
    <?php
$sqlo="SELECT * FROM students";
$rs_result=mysqli_query($conn,$sqlo);
$total_rows=mysqli_num_rows($rs_result);
$total_pages =ceil(($total_rows/$num_page)) ;

for($j=1;$j<=$total_pages;$j++){
  echo "<a class='pages' href='listedeseleves.php?pages=".$j."'>".$j."</a>";
}

?>


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

// retrieve data from the database
    $i=1;
    $sql="SELECT * FROM students ORDER BY nom ASC ";
    $results=$conn->query($sql);
    ?>
    <?php foreach($results as $row): ?>
<tr>
<td><?php echo $i++; ?> </td>
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


    <?php endforeach;?>
  

     </tbody>
</table >
        </main>

        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

</body>
</html>