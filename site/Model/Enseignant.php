<?php
require_once("Auteur.php");

class Enseignant extends Auteur {

    private $matiere;

    public function __construct($_id, $_actif, $_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_desc, $_matiere) {
        parent::__construct($_id, $_actif, $_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_desc);

        $this->setMatiere($_matiere);
    }

    public function setMatiere($_matiere) { $this->matiere = $_matiere; }

    public function getMatiere() { return $matiere; }
}
?>
