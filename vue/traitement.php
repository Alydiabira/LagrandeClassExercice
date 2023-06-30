<?php

require_once 'Client.php';
require_once 'Produit.php';
// créer des objets
$client1 = new Client("el atchia", "Sana","0645512666");$p1 = new Produit(1,"HP",1000,"Ordinateur");
$p2 = new Produit(2,"watch galaxy",300,"montre");$p1->parcourirObject();
//unset permet de détruire un objet
unset($p2);
$p2->parcourirObject();
unset($p1);
?>