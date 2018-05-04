<?php
require_once("Object.php");

class Participe extends Object {

    protected $id_auteur;
    protected $id_eve;

    public function __construct($_id, $_actif, $_id_auteur, $_id_eve) {
        $this->setId($_id);
        $this->setActif($_actif);
        $this->setId_auteur($_id_auteur);
        $this->setId_eve($_id_eve);
    }

    public function setId_auteur($_id_auteur) { $this->id_auteur = $_id_auteur; }
    public function setId_eve($_id_eve) { $this->id_eve = $_id_eve; }

    public function getId_auteur() { return $this->id_auteur; }
    public function getId_eve() {  return $this->id_eve; }
}
?>
