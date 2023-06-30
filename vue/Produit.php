<?php
// class Produit
// {
//     // attributs
//     private $id;
//     private $nom;
//     private $prix;
//     private $categorie;    //méthodes => fonctions
//     // constructeur : fonction qui initialise les attribts de la classe
//     public function __construct($id,$nom,$prix, $cat){
//         $this->id = $id;
//         $this->nom = $nom;
//         $this->prix = $prix;
//         $this->categorie = $cat;
//     }
//     // getter : récuperer une / des valeurs
//     public function __get($var){
//         return $this->$var;    }
//     // setter : modifier la valeur d'un champ    public  function __set($var,$val){
//         $this->$var =$val;
//     }    public function parcourirObject(){        foreach($this as $key => $value) {
//             echo $key .' :'. $value. '<br/>';
//         }
//     }    public  function __destruct(){
//         echo $this->categorie . " est détruit <br/>";
//     }
// }

?>

<!-- https://www.php.net/manual/fr/function.serialize.php --> serialize
