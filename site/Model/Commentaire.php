<?php
require_once("Object.php");

class Commentaire extends Object {

    protected $id_auteur;
    protected $id_post;
    protected $texte;

    public function __construct($_id, $_actif, $_id_auteur, $_id_post, $_texte) {
        $this->setId($_id);
        $this->setActif($_actif);
        $this->setId_auteur($_id_auteur);
        $this->setId_post($_id_post);
        $this->setTexte($_texte);
    }

    public function setId_auteur($_id_auteur) { $this->id_auteur = $_id_auteur; }
    public function setId_post($_id_post) { $this->id_post = $_id_post; }
    public function setTexte($_texte) { $this->texte = $_texte; }

    public function getId_auteur() { return $this->id_auteur; }
    public function getId_post() {  return $this->id_post; }
    public function getTexte() {  return $this->texte; }
}
?>
