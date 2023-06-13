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
    <title>Dashboard</title>
   
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <style type="text/css">
        @import url(style1.css);
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-md ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="log.png" alt="Logo" width="100">
            </a>
            <button style="background-color:white" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                <h2 class="text-center">Dashboard</h2>
                <hr>
                <br><br>
                <form class="d-flex" method="get" action="">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btnbtn-blockmb "><strong>Voir liste des produits</strong></button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btnbtn-blockmb "><strong>Ajouter un produit</strong></button>
                            </div>
                        </div> <br><br>

                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btnbtn-blockmb "><strong>Voir liste des ventes</strong></button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btnbtn-blockmb "><strong> Ajouter une vente </strong></button>
                            </div><br><br>
                            <hr>
                            <h2 class="marg">Liste des produits</h2><br><br>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Libelle</th>
                                    <th scope="col">Prix</th>
                                </tr>
                                </thead>
                                
                                <?php 
                                $reponse = $bdd-> query("SELECT * FROM produits");
                                while ($donne= $reponse->fetch()) {
                                 ?>
                                 <tbody>
                                   <tr class="table-active">
                                    <th scope="row"> <?php echo $donne ['id'] ?> </th>
                                 
                                    
                                    <td><?php echo $donne['libelle'] ?></td>
                                    <td><?php echo $donne['prix_unitaire'] ;}?></td>
                                    
                                    
                                </tr>
                                 </tbody>
                                <?php $reponse->closeCursor();?>
                               
                            </table>


                        </div>



                        <hr>
                        <h2 class="marg">Ajout de produit</h2>
                        <br>

                        <form  action="bd.php" method="POST">
                        <div class="row">
                            <div class="col-6">
                                <label class="marg"><strong>Libelle</strong></label>
                                <input class="form-control mr-sm-2" type="text" name="text">
                            </div>
                            <div class="col-6">
                                <label class="marg"><strong>Prix</strong></label>
                                <input class="form-control mr-sm-2" type="text" name="txt">
                            </div>
                        </div> <br>

                        <input type="submit" class=" btn btn-success" value="Enregistrer">

                    </div>
            </div>
                                </form>
            <h3>Contacts</h3>
   <hr>

   <p>CONTACT : 70 48 00 00</p>
        </div>

    </div> <br>


    
        <script src="bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>


</body>

</html>