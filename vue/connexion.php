<?php
try {
    $strConnection = 'mysql:host=localhost;port=8889;dbname=ecole';
    $pdo = new PDO($strConnection, 'root', 'root');
} catch (PDOException $etudiant) {
    $msg = 'ERREUR PDO dans' . $etudiant->getMessage();
    die($msg);
}
