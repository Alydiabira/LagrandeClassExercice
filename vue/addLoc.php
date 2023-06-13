<?php
$nom = $_POST('nom');
$email = $_POST('email');
$prenom = $_POST('prenom');
$password = $_POST('password');
$password = $_POST('password');


require_once("connexion.php");

$ps = $pdo->prepare("INSERT INTO etudiant('nom','email','prenom','password') VALUES(?,?,?,?)");

$data = array($nom,$email,$prenom,$password);

$ps->execute($data);

header("location:etudiant.php");

?>