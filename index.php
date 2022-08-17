<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bienvenue sur le Blog Culinaire</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <header>       
            <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="assets/images/chef-hat-64.png" alt="logo blog culinaire"/></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExample04">
                      <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="recettes.php">Les recettes</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="formulaire.php">Se connecter/S'inscrire</a>
                        </li>
                      </ul>
                    </div>
                </div>
            </nav>
        </header>
        
        <?php
        
        ?>

        <section class="container mt-5">
            <div class="row">
                <!-- Affichage des recettes de saison X3 -->
                <h2 class="mb-3">Les 3 dernières Recettes</h2>
                <article class="col-12 col-md-4">
                    <img src="assets/images/salade-de-pates.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Salade de pâtes au basilic</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </article>
                <article class="col-12 col-md-4">
                    <img src="assets/images/super-citronnade.png" class="card-img-top" alt="citronnade maison">
                    <div class="card-body">
                      <h5 class="card-title">Super citronnade maison</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </article>
                <article class="col-12 col-md-4">
                    <img src="assets/images/gratin-courgettes.png" class="card-img-top" alt="Gratin de courgettes">
                    <div class="card-body">
                      <h5 class="card-title">Gratin de courgettes</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                 </article>
            </div>
        </section>

        <footer>
            ceci est le footer
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>
