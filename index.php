<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        @import url(style.css);
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="log.png" alt="Logo" width="90">
            </a>
            <button style="background-color:white" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="admin/index1.php">ACCUEIL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">PRODUIT</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="admin/dashboard.php">DASHBOARD</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="admin/dashboard.php">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2>A propos</h2>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-7">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a massa ut enim ullamcorper maximus nec vitae nisl. Sed sed massa sed lacus faucibus ultricies non a velit. Mauris id hendrerit dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a massa ut enim ullamcorper maximus nec vitae nisl. Sed sed massa sed lacus faucibus ultricies non a velit. Mauris id hendrerit dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a massa ut enim ullamcorper maximus nec vitae nisl. Sed sed massa sed lacus faucibus ultricies non a velit. Mauris id hendrerit dolor.</p>
                        </div>
                        <div class="col-5">

                            <img src="supermar.jpeg" class="image rounded-circle" alt="Votre image">
                        </div>
                    </div>

                    <h2>Produits</h2>
                    <hr>

                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card">
                                <img src="sosuco.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Sucre</h5>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="nesca.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Cafe</h5>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="nido.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Lait</h5>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="the.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">The</h5>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="miel.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Miel</h5>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="chicor.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Chicoree</h5>

                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <h3>Contacts</h3>
                    <hr>

                    <p>CONTACT : 70 48 00 00</p>


                </div>
            </div>
        </div>
    </div>



    <script src="bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>

</body>

</html>