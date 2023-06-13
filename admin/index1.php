
<?php
try{
    $bdd= new PDO('mysql:host=localhost;dbname=bd_commerce','root','' );
} catch (Exception $e) {
    die('Erreur : ' .$e->getMessage());
}


$reponse=$bdd->query("SELECT * FROM produits");

//$donne= $reponse->fetch();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css">
    @import url(style1.css);
    
    </style>
    


</head>
<body >
<nav class="navbar navbar-expand-md ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="log.png" alt="Logo" width="90">
                </a>
                <button style="background-color:white" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index1.php">ACCUEIL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">PRODUIT</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">DASHBOARD</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


<div class="container ">
    <div class="row justify-content-center">
      <div class="col-md-6 ">
        <h2 class="text-center">Connexion</h2>
        <hr >
    <form class="" method="get" action="dashboard.php">
        
        
          <div class="">
          <div >
            <div class="form-outline ">
                <label for=""><strong>Login</strong></label>
              <input  type="email" id="form3Example2" class="form-control" name="email" placeholder="Saisir votre mail" required/>
              
            </div>
          </div>
          <div ><br><br>
            <div class="form-outline">
                <label for=""><strong>Mot de passe</strong></label>
              <input type="password" id="form3Example2" class="form-control" name="password"  placeholder="Saisir votre mot de passe" required />
              
            </div>
          </div>
        </div>
      
        
      
        <div class="text-center pt-4">
        <button type="submit" class="btn btn-success btn-block mb-4 "><strong>Se connecter</strong></button>
        </div>
        
    
        
      </form>

    
 
      
   </div>
   </div>
   </div>

</body>
</html>