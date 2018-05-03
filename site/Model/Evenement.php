<?php
require_once("Object.php");

class Evenement extends Object {

    protected $id_auteur;
    protected $date_eve;
    protected $desc;
    protected $img;

    public function __construct($_id, $_actif, $_id_auteur, $_date_eve, $_desc, $_img) {
        $this->setId($_id);
        $this->setActif($_actif);
        $this->setId_auteur($_id_auteur);
        $this->setDate_eve($_date_eve);
        $this->setDesc($_desc);
        $this->setImg($_img);
    }

    public function setId_auteur($_id_auteur) { $this->id_auteur = $_id_auteur; }
    public function setDate_eve($_date_eve) { $this->date_eve = $_date_eve; }
    public function setDesc($_desc) { $this->desc = $_desc; }
    public function setImg($_img) { $this->img = $_img; }

    public function getId_auteur() { return $id_auteur; }
    public function getDate_eve() {  return $date_eve; }
    public function getDesc() { return $desc; }
    public function getImg() {  return $img; }
}
?>
