<?php require_once("securite.php");
require_once("roleEtudiant.php");


// récuperer les données saisies par l'utilisateur AVEC LE CODE AUSSI
$nom = $_POST['nom'];
$email = $_POST['email'];
$prenom = $_POST['prenom'];
$password = $_POST['password'];
$nomPhoto = $_FILES['photo']['name'];
// se connecter à la base de données
require_once("connexion.php");
if ($prenom == "") {
    // créer objet prepare statment $ps.. je vais update dans la table etudiant, le nom email sans photo
    $ps = $pdo->prepare("UPDATE  etudiant SET nom=?, email=?, prenom=?, password=? WHERE nom=?");
    // stocker les params(dans l'ordre) dans un  tableau
    $params = array($nom, $email, $prenom, $password);
    //Executer la requete + transferer les parametres dans l'ordre
    $ps->execute($params); // les données sont stockées dans la base de données.
} else {
    $fichierTempo = $_FILES['photo']['tmp_name'];
    // deplacer le fichier temporel vers le dossier images de notre application
    move_uploaded_file($fichierTempo, './img/' . $nomPhoto);

    // Envoie des données vers la BD

    // créer objet prepare statment $ps.. je vais update dans la table etudiant, le nom email photo
    $ps = $pdo->prepare("UPDATE  etudiant SET nom=?, email=?, prenom=?, photo=? 'password'=? WHERE nom=?");
    // stocker les params(dans l'ordre) dans un  tableau
    $params = array($nom, $email, $prenom, $password);
    //Executer la requete + transferer les parametres dans l'ordre
    $ps->execute($params); // les données sont stockées dans la base de données.
}

// rediriger : revenir vers l'apache pour afficher les etudiants
header("location:etudiant.php");


