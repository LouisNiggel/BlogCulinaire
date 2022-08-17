<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Le Blog Culinaire - inscription</title>
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
                          <a class="nav-link" href="recettes.php">Les recettes</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page"href="#">Se connecter/S'inscrire</a>
                        </li>
                      </ul>
                    </div> 
                </div>
            </nav>
        </header>
        
        <?php
          if(!empty($_POST)){
            
            //var_dump($_POST);
            if(isset($_POST["email"], $_POST["pass"], $_POST["confpass"])
              && !empty($_POST["email"]) && !empty($_POST["pass"]) && !empty($_POST["confpass"])
            ){
              // - Contrôles
              if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                die("L'adresse email est incorrecte");
              }
              $pass=password_hash($_POST["pass"], PASSWORD_ARGON2ID);
              if($_POST["confpass"]!==$_POST["pass"]){
                die("Le mot de passe n'est pas le même que celui de la confirmation");
              }

              require_once "connect.php";

              $sql="INSERT INTO `USERS`(`EmailUser`, `PwdUser`, `RoleUser`) VALUES
              (:email, '$pass', '[\"ROLE_USER\"]')";

              $query=$db->prepare($sql);
              $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
              $query->execute();

              // - Connexion
              session_start();
              $_SESSION["user"] =[
                "email" => $_POST["email"],
                "roles" => $user["ROLE_USER"]
              ];
              header("Location: profil.php");
            }
          }
          if(!empty($_POST)){
            if(isset($_POST["emailcnx"], $_POST["passcnx"])
              && !empty($_POST["emailcnx"] && !empty($_POST["passcnx"]))
            ){
              if(!filter_var($_POST["emailcnx"], FILTER_VALIDATE_EMAIL)){
                die("Ce n'est pas un email");
              }

              require_once "connect.php";

              $sql="SELECT * FROM `USERS` WHERE `EmailUser` = :email";

              $query = $db->prepare($sql);
              $query->bindValue(":email", $_POST["emailcnx"], PDO::PARAM_STR);
              $query->execute();

              $user = $query->fetch(PDO::FETCH_ASSOC);

              if(!$user){
                die("L'utilisateur est incorrect");
              }

              if(!password_verify($_POST["passcnx"], $user["PwdUser"])){
                
                die("Le mot de passe est incorrect");
              }

              session_start();
              $_SESSION["user"] =[
                "email" => $user["EmailUser"],
                "roles" => $user["RoleUser"]
              ];
              header("Location: profil.php");

            }
          }
        ?>

        <!-- https://www.youtube.com/watch?v=4G_EJZFmoa4 -->
        <section class="container my-5">
            <div class="row">
                
                <div class="col-12 col-md-6 mt-4">
                    <h2>Se connecter</h2>
                    <form class="" method="post">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="emailcnx">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" name="passcnx">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Connexion"/>
                     </form>
                </div>
                <div class="col-12 col-md-6 mt-4">
                    <h2>S'inscrire</h2>
                    <form class="" method="post">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                        </div>
                        <div class="mb-3">
                          <label for="confirmPassword1" class="form-label">Confirmation Password</label>
                          <input type="password" class="form-control" id="confirmPassword1" name="confpass">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Inscription"/>
                     </form>
                </div>
            </div>
            
        </section>
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
    </body>
</html>
