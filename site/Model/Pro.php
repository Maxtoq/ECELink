<?php
require_once("Auteur.php");

class Pro extends Auteur {

    private $entreprise;
    private $poste;

    public function __construct($_id, $_actif, $_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_desc, $_entreprise, $_poste) {
        parent::__construct($_id, $_actif, $_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_desc);

        $this->setEntreprise($_entreprise);
        $this->setPoste($_poste);
    }

    public function setEntreprise($_entreprise) { $this->entreprise = $_entreprise; }
    public function setPoste($_poste) { $this->poste = $_poste; }

    public function getEntreprise() { return $this->entreprise; }
    public function getPoste() {  return $this->poste; }
}
?>
