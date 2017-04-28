<?php
/* classe compteur */
class Compteur
{
  // Déclaration de la variable $compteur
  private static $_compteur = 0;

  public function __construct()
  {
    // On instancie la variable $compteur qui appartient à la classe (donc utilisation du mot-clé self).
    self::$_compteur++;
  }

  public static function getCompteur() // Méthode statique qui renverra la valeur du compteur.
  {
    return self::$_compteur;
  }
}


/* classe Personnage */
class Personnage
{
  private $_force;
  private $_localisation;
  private $_experience;
  private $_degats;

  const FORCE_PETITE = 20;
  const FORCE_MOYENNE = 50;
  const FORCE_GRANDE = 80;

  // Variable statique PRIVÉE.
  private static $_texteADire = 'Je vais tous vous tuer !';

  public function __construct($forceInitiale)
  {
    $this->setForce($forceInitiale);
  }

  public function deplacer()
  {

  }

  public function frapper()
  {

  }

  public function gagnerExperience()
  {

  }

  public function setForce($force)
  {
    // On vérifie qu'on nous donne bien soit un « FORCE_PETITE », soit une « FORCE_MOYENNE », soit une « FORCE_GRANDE ».
    if (in_array($force, [self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE]))
    {
      $this->_force = $force;
    }
  }

  public static function parler()
  {
    echo self::$_texteADire; // On donne le texte à dire.
  }
}





// exo du compteur
/*
Nous allons maintenant faire un petit exercice. Je veux que vous me fassiez une classe toute bête qui ne sert à rien. Seulement, à la fin du script, je veux pouvoir afficher le nombre de fois où la classe a été instanciée. Pour cela, vous aurez besoin d'un attribut appartenant à la classe (admettons $_compteur) qui est incrémenté dans le constructeur.
*/
$test1 = new Compteur;
$test2 = new Compteur;
$test3 = new Compteur;

echo Compteur::getCompteur();
echo "\r\n";
echo Personnage::parler();
