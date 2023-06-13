<?php
require_once("securite.php");
require_once("connexion.php");
$req = "SELECT * FROM user";
$ps = $pdo->prepare($req);
$ps->execute();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="CSS/style.css" />
    <title>Liste des étudiants</title>
</head>

<body>
    <?php require_once("entete.php"); ?>
    <div class="col-md-12 col-xs-12 spacer">
        <div class="card spacer ">
            <div class="card-header">La liste des étudiands</div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>CODE</th>
                            <th>NOM</th>
                            <th>EMAIL</th>
                            <th>PHOTO</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($etudiant = $ps->fetch()) { ?>
                            <tr>
                                <td><?php echo ($etudiant['CODE']) ?></td>
                                <td><?php echo ($etudiant['NOM']) ?></td>
                                <td><?php echo ($etudiant['EMAIL']) ?></td>
                                <td><img src="IMAGES/<?php echo ($etudiant['PHOTO']) ?>" width="100" height="100"></td>
                                <td <?php if ($_SESSION['PROFILE']['ROLE'] == "SCOLARITE") {  ?>>
                                    <a href="editEtudiant.php?code=<?php echo ($etudiant['CODE']) ?>">Modifier</a>
                                </td>
                                <td><a onclick="return confirm('Etes vous sure..?');" href="deleteEtudiant.php?code=<?php echo ($etudiant['CODE']) ?>">Supprimer</a></td>
                            <?php } else {
                            ?>
                                <td></td>
                                <td></td>

                            <?php }
                            ?>



                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>

</html>