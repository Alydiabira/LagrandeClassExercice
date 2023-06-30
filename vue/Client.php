<!-- Classes et objets -->
<?php
// class Fruit {
//   // Properties
//   public $name;
//   public $color;

//   // Methods
//   function set_name($name) {
//     $this->name = $name;
//   }
//   function get_name() {
//     return $this->name;
//   }
// }

// $apple = new Fruit();
// $banana = new Fruit();
// $apple->set_name('Apple');
// $banana->set_name('Banana');

// echo $apple->get_name();
// echo "<br>";
// echo $banana->get_name();
?>

<!-- Constructeurs et destructeurs https://www.php.net/manual/fr/language.oop5.decon.php -->
<?php
class Personne {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name; 
    $this->color = $color; 
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Personne("ABBAS", "ALY",);
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
?>

<!-- https://www.php.net/manual/fr/language.oop5.visibility.php -->

<?php
// class Client
// {
//     // attributs: caractéristiques du client
//     private $nomClient;
//     private $prenomClient;
//     private $tel;    // Méthodes : actions qu'on peut appliquer sur les données
//     // 1 méthode = 1 fonction    /// constructeur : fonction magique prédéfinie en php
//     //qui permet d'initialiser les valeurs des attributs de la classe en cours    public function __construct($nom,$pren,$tel){
//         $this->nomClient = $nom;
//         $this->prenomClient = $pren;
//         $this->tel = $tel;    }
//     // les getters : fonction de récupération => récupérer la valeur d'un / des champs
//     public function __get($var){
//         return $this->$var;
//     }
//     // les setters : fonction de mutation => modifier la valeur d'un attributs
//     public function  __set($var,$val){
//         $this->$var = $val;
//     }
// }
// // créer des objets
// $client1 = new Client("el atchia", "Sana","0645512666");
// echo $client1->nomClient;
// $client1->nomClient = "beaufort";
// echo $client1->nomClient;
?>