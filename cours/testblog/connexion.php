<?php
try {
    $strConnection = 'mysql:host=localhost;port=8889;dbname=ecole';
    $pdo = new PDO($strConnection, 'root', 'root');
} catch (PDOException $e) {
    $msg = 'ERREUR PDO dans' . $e->getMessage();
    die($msg);
}
