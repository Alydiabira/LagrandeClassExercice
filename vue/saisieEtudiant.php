<?php require_once("securite.php");
require_once("roleEtudiant.php");

?>
<html lang="fr">

<head>
    <title>Ajouter un etudiant</title>
</head>

<body>
    <?php require_once("nav.php"); ?>
    <div class="col-md-12 col-xs-12 spacer">
        <div class="card spacer ">
            <div class="card-header">Ajouter etudiant</div>
            <div class="card-body">
                <!--  contenu du formulaire -->
                <form method="post" action="saveLocataire.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nom:</label>
                        <input type="text" name="nom" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" name="email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Prenom:</label>
                        <input type="text" name="prenom" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Photo:</label>
                        <input type="file" name="photo" class="form-control" />
                    </div>
                    <div>
                        <button type="submit">Sauvgarder</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</body>

</html>