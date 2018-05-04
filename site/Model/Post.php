<?php
require_once("Object.php");

class Post extends Object {

    protected $id_auteur;
    protected $texte;

    public function __construct($_id, $_actif, $_id_auteur, $_texte) {
        $this->setId($_id);
        $this->setActif($_actif);
        $this->setId_auteur($_id_auteur);
        $this->setTexte($_texte);
    }

    public function setId_auteur($_id_auteur) { $this->id_auteur = $_id_auteur; }
    public function setTexte($_texte) { $this->texte = $_texte; }

    public function getId_auteur() { return $this->id_auteur; }
    public function getTexte() {  return $this->texte; }
}
?>
