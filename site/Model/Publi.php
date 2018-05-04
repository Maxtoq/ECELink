<?php
require_once("Object.php");

class Publi extends Object {

    protected $id_auteur;
    protected $id_post;
    protected $date_post;

    public function __construct($_id, $_actif, $_id_auteur, $_id_post, $_date_post) {
        $this->setId($_id);
        $this->setActif($_actif);
        $this->setId_auteur($_id_auteur);
        $this->setId_post($_id_post);
        $this->setDate_post($_date_post);
    }

    public function setId_auteur($_id_auteur) { $this->id_auteur = $_id_auteur; }
    public function setId_post($_id_post) { $this->id_post = $_id_post; }
    public function setDate_post($_date_post) { $this->date_post = $_date_post; }

    public function getId_auteur() { return $this->id_auteur; }
    public function getId_post() {  return $this->id_post; }
    public function getDate_post() {  return $this->date_post; }
}
?>
