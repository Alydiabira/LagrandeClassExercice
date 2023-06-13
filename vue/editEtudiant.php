<?php
require_once("securite.php");
require_once("roleEtudiant.php");


//récuperer le code de l'etudiant à editer
$code = $_GET['nom'];
// Se connecter à la base de données
require_once("connexion.php");
// créer la requete de suppression
$ps = $pdo->prepare("SELECT * FROM etudiant WHERE nom=?");
// recup les params(1seul params) dans un tableau*
$params = array($nom);
//executer la requete
$ps->execute($params);
//stocker le resultat dans une variable
$etudiant = $ps->fetch();
//mnt il me reste d'afficher l'etudiant dans un formulaire(regarder en bas)
?>


<html lang="fr">

<head>
    <title>Edit Etudiant</title>
</head>

<body>
    <?php require_once("nav.php"); ?>
    </div>

    <!--Formulaire-->
        <!--Débordé-->
        <div class="overflow-x-auto" >
            <h1>Edit Etudiant</h1>
        </div>
        <br>
                    <!-- Pills navs -->
        <div class="container" onmouseenter="myEnterFunction1()">
            <!-- Section: Design Block -->
            <!-- Section: Design Block -->
            <section  class="background-radial-gradient overflow-hidden" >
                
                <div  class="container px-4 py-5 px-md-5 text-center text-lg-start my-5" onmouseenter="myEnterFunction1()">
                    <div class="row gx-lg-5 align-items-center mb-5">
                        <div class="col-lg-6 mb-5 mb-lg-0 overflow-x-auto" style="z-index: 10">
                            <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
                                    padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
                                    border-radius: 8px; will-change: transform;" onmouseenter="myEnterFunction1()" >
                                    <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                                        src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFOjetyUY0&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                                    </iframe>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                            <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                            <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                            <div class="card bg-glass">
                            <div class="card-body px-4 py-5 px-md-5">
                                <form  method="post" action="updateEtudiant.php" enctype="multipart/form-data">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                        <input type="text" name="nom" class="form-control" value="<?php echo ($locataire['nom']); ?>" />
                                            <label class="form-label" for="form3Example1">NOM</label>
                                        </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                        <input type="text" name="nom" class="form-control" value="<?php echo ($locataire['prenom']) ?>" />
                                            <label class="form-label" for="form3Example2">Prenom</label>
                                        </div>
                                        </div>
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                    <input type="text" name="email" class="form-control" value="<?php echo ($locataire['email']); ?>" />
                                        <label class="form-label" for="form3Example3">Email</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Photo:</label>
                                        <input type="file" name="photo" class="form-control" />
                                        <img src="img/<?php echo ($etudiant['photo']) ?>" style="height: 200px; width: 200px; border-radius: 50%;">
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                    <input type="text" name="password" class="form-control" value="<?php echo ($locataire['password']); ?>" />
                                        <label class="form-label" for="form3Example4">Mots de passe</label>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block mb-4">
                                        Sauvegarder
                                    </button>
                            
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Design Block -->
        </div>
</body>

</html>