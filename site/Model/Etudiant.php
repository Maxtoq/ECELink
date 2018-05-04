<?php
require_once("Auteur.php");

class Etudiant extends Auteur {

    private $promo;
    private $maj;

    public function __construct($_id, $_actif, $_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_desc, $_promo, $_maj) {
        parent::__construct($_id, $_actif, $_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_desc);

        $this->setPromo($_promo);
        $this->setMaj($_maj);
    }

    public function setPromo($_promo) { $this->promo = $_promo; }
    public function setMaj($_maj) { $this->maj = $_maj; }

    public function getPromo() { return $this->promo; }
    public function getMaj() {  return $this->maj; }
}
?>
