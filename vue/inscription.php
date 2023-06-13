<?php
$nom = $_POST['nom'];
$email = $_POST['email'];
$prenom = $_POST['prenom'];
$password = md5($_POST['password']);
require_once("connexion.php");
// créer objet prepare statment $ps.. je vais inserer dans la table etudiant, le nom email photo
$ps = $pdo->prepare("INSERT INTO user(nom,email,prenom,password) VALUES (?,?,?,?)");
// stocker les params(dans l'ordre) dans un  tableau
$params = array($nom, $email, $prenom,$password);
//Executer la requete + transferer les parametres dans l'ordre
$ps->execute($params); // les données sont stockées dans la base de données.
// rediriger : revenir vers l'apache pour afficher les etudiants
header("location:login.php");
