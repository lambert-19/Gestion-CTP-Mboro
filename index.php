<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="logo/1-0.jpg"  rel="logo icon" title="Logo" type="image/jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/ctp.css">
</head>


<body>
    

    <form action="/server/login.php" method="POST" >
       
    <div class="container-fluid">
            <form class="mx-auto" method="post" action="server/login.php">
                <h4 class="text-center">Login</h4>
                <?php 
                if(isset($_GET['error'])){?>
                 <p class="error mt-5"><?php echo $_GET['error'];?></p>
               <?php }
                ?>
                <div class="mb-3 mt-5">
                  <label for="exampleInputEmail1" class="form-label">Nom D'utilisateur</label>
                  <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Mot de Passe</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                  <a href="" class="emailHelp"><div id="emailHelp" class="form-text mt-5 text-center">Forget password ?</div></a>
                </div>
              
                <button type="submit" name="submit" class="btn btn-outline-primary mt-3">Login</button>
              </form>
        </div>



    </form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>