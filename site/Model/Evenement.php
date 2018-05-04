<?php
require_once("Object.php");

class Evenement extends Object {

    protected $id_auteur;
    protected $date_eve;
    protected $descr;
    protected $img;

    public function __construct($_id, $_actif, $_id_auteur, $_date_eve, $_descr, $_img) {
        $this->setId($_id);
        $this->setActif($_actif);
        $this->setId_auteur($_id_auteur);
        $this->setDate_eve($_date_eve);
        $this->setDescr($_descr);
        $this->setImg($_img);
    }

    public function setId_auteur($_id_auteur) { $this->id_auteur = $_id_auteur; }
    public function setDate_eve($_date_eve) { $this->date_eve = $_date_eve; }
    public function setDescr($_descr) { $this->descr = $_descr; }
    public function setImg($_img) { $this->img = $_img; }

    public function getId_auteur() { return $this->id_auteur; }
    public function getDate_eve() {  return $this->date_eve; }
    public function getDescr() { return $this->descr; }
    public function getImg() {  return $this->img; }
}
?>
