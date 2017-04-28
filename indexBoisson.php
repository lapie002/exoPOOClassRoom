<?php
//include 'chargeClasse.php';
require_once 'chargeClasse.php';

// On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.
spl_autoload_register('chargerClasse');

$ingredientsOne = array("alcool"=>"2%","cereales"=>"malte");
$ingredientsTwo = array("alcool"=>"4%","cereales"=>"houblon");
$ingredientsThree = array("alcool"=>"6%","cereales"=>"froment");
$ingredientsFour = array("alcool"=>"0%","cereales"=>"avoine");
$ingredientsFive = array("alcool"=>"0%","cereales"=>"orge");

/* les constructeurs pour les 5 boissons*/

$boisson1 = new Boisson("Victoria Bitter","blonde",$ingredientsOne); // Un premier personnage
$boisson2 = new Boisson("Affligem","blonde",$ingredientsTwo); // Un second personnage
$boisson3 = new Boisson("Guinness","brune ",$ingredientsThree); // Un premier personnage
$boisson4 = new Boisson("Tourtel Twist","blonde",$ingredientsFour); // Un premier personnage
$boisson5 = new Boisson("Erdinger","rousse",$ingredientsFive); // Un premier personnage

/*on affecte un prix a chaque boisson avec les setters*/
$boisson1->setPrix(5);
$boisson2->setPrix(2.5);
$boisson3->setPrix(6);
$boisson4->setPrix(2);
$boisson5->setPrix(3);

/* affichage */
echo 'La biere 1 est une ', $boisson1->getBrand(), ' avec ', $boisson1->_ingredients['alcool'], ' d\' alccol et elle coute ', $boisson1->getPrix(),  ' euros<br />';
echo 'La biere 2 est une ', $boisson2->getBrand(), ' avec ', $boisson2->_ingredients['alcool'], ' d\' alccol et elle coute ', $boisson2->getPrix(),  ' euros<br />';
echo 'La biere 3 est une ', $boisson3->getBrand(), ' avec ', $boisson3->_ingredients['alcool'], ' d\' alccol et elle coute ', $boisson3->getPrix(),  ' euros<br />';
echo 'La biere 4 est une ', $boisson4->getBrand(), ' avec ', $boisson4->_ingredients['alcool'], ' d\' alccol et elle coute ', $boisson4->getPrix(),  ' euros<br />';
echo 'La biere 5 est une ', $boisson5->getBrand(), ' avec ', $boisson5->_ingredients['alcool'], ' d\' alccol et elle coute ', $boisson5->getPrix(),  ' euros<br />';
