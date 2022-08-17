<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Le Blog Culinaire - Les recettes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
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
                          <a class="nav-link active" aria-current="page" href="#">Les recettes</a>
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
                <h2 class="mb-3">La liste des recettes</h2>
                <?php
                // Affichage de la liste des recettes par 6
                /*
                for ($i = 1; $i <= 6; $i++) {
                    echo '<article class="col-12 col-md-6 col-lg-4 my-2 ">
                            <div class="body p-4">
                                <a href="single.php">
                                    <img src="assets/images/chef-hat.png" class="d-block mx-auto"/>
                                </a>
                                <p class="fs-4 mt-2">';
                                $votes = ['<i class="bi bi-star"></i>','<i class="bi bi-star"></i>','<i class="bi bi-star"></i>','<i class="bi bi-star"></i>','<i class="bi bi-star"></i>'];
                                
                                $nb = rand(1,5);
                                for($j = 0; $j < $nb; $j++){
                                    $votes[$j] = "<i class='bi bi-star-fill'></i>";
                                }
                                foreach ($votes as $value) {
                                    echo $value;
                                }
                                echo" $nb/5";
                            echo'</p></div>
                        </article>';
                }*/
                require_once "connect.php";

                $sql = "SELECT * FROM `recette` ORDER BY `RefRecette` ASC LIMIT 6";
                $requete = $db->query($sql);
                $recettes = $requete->fetchAll();
                foreach($recettes as $recette): ?>
                    <article class="col-12 col-md-6 col-lg-4 my-2 ">
                        <div class="body p-4">
                            <p class="fs-4 mt-2">
                                <h3><?= strip_tags($recette["TitreRecette"]) ?></h3>
                            </p>
                            <a href="single.php?id=<?= $recette["RefRecette"] ?>">
                                <img src="assets/images/<?= strip_tags($recette["ImageRecette"]) ?>" class="d-block mx-auto"/>
                            </a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
        <section class="container my-5">
            <div class="row">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <li class="page-item"><a class="page-link" href="#">Précedente</a></li>
                      <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Suivante</a></li>
                    </ul>
                 </nav>
            </div>
        </section>
        <footer>
            ceci est le footer
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>
