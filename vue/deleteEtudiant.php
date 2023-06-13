
<?php
// require_once("securite.php");
require_once("roleEtudiant.php");


//récuperer le code de l'etudiant à supprimer
$code = $_GET['nom'];
// Se connecter à la base de données
require_once("connexion.php");
// créer la requete de suppression
$p = $pdo->prepare("DELETE FROM etudiant WHERE nom=?");
// recup les params(1seul params) dans un tableau*
$params = array($nom);
//executer la requete
$p->execute($params);
//rediriger vers la liste des etudiants
header("location: etudiant.php");


?>