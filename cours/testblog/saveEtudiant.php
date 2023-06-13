<?php require_once("securite.php");
require_once("RoleScolarite.php");


// récuperer les données saisies par l'utilisateur
$nom = $_POST['nom'];
$email = $_POST['email'];
$nomPhoto = $_FILES['photo']['name'];
$fichierTempo = $_FILES['photo']['tmp_name'];
// deplacer le fichier temporel vers le dossier images de notre application
move_uploaded_file($fichierTempo, './IMAGES/' . $nomPhoto);
//echo ($fichierTempo);
// Envoie des données vers la BD
// se connecter à la base de données
require_once("connexion.php");
// créer objet prepare statment $ps.. je vais inserer dans la table etudiant, le nom email photo
$ps = $pdo->prepare("INSERT INTO user(NOM,EMAIL,PHOTO) VALUES ( ?,?,?)");
// stocker les params(dans l'ordre) dans un  tableau
$params = array($nom, $email, $nomPhoto);
//Executer la requete + transferer les parametres dans l'ordre
$ps->execute($params); // les données sont stockées dans la base de données.
// rediriger : revenir vers l'apache pour afficher les etudiants
header("location:etudiant.php");
