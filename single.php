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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/css/styles.css"/>
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
                          <a class="nav-link" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="recettes.php">Les recettes</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="formulaire.php">Se connecter/S'inscrire</a>
                        </li>
                      </ul>
                    </div>
                </div>
            </nav>
        </header>
        <section class="container mt-5">
            <div class="row">
                <article class="class">
                    <h1 class="text-center">Salade de pâtes au basilic</h1>
                    <p class="fs-4 mt-2 text-center">
                    <?php
                    $votes = ['<i class="bi bi-star"></i>','<i class="bi bi-star"></i>','<i class="bi bi-star"></i>','<i class="bi bi-star"></i>','<i class="bi bi-star"></i>'];

                    $nb = rand(1,5);
                    for($j = 0; $j < $nb; $j++){
                        $votes[$j] = "<i class='bi bi-star-fill'></i>";
                    }
                    foreach ($votes as $value) {
                        echo $value;
                    }
                    echo" $nb/5 (moy des notes)";
                    ?>
                    </p>

                    <div class="col-12">
                        <img src="assets/images/salade-de-pates.png" alt="alt" class="d-block mx-auto"/>
                    </div>
                    <div class="article-body">
                        <h2>Les ingédients</h2>
                        <p id="test" class="d-flex flex-row align-items-center">                            
                            <button id="plus" class="btn btn-light"><i class="fs-2 bi bi-plus-circle"></i></button>
                            <span id="nbPersonnes" class="mx-2"> 4 </span>
                            <span>personnes </span>
                            <button id="moins" class="btn btn-light"><i class="fs-2 bi bi-dash-circle"></i></button>
                        </p>
                        <div class="d-flex flex-row justify-content-evenly">
                            <p>3 tomates rondes</p>
                            <p>1 citron</p>
                            <p>huile d'olive</p>
                            <p>poivre noir</p>
                            <p>sel</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <?php
        // put your code here
        ?>
        <footer class="bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-3">
                        <p class="text-center fs-2">
                            <a href="#"><i class="bi bi-pinterest"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-youtube"></i></a>
                        </p>
                    </div>
                </div>
            </div>            
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
