<?php
require_once("Object.php");

class Message extends Object {

    protected $id_emmetteur;
    protected $id_recepteur;
    protected $texte;

    public function __construct($_id, $_actif, $_id_emmetteur, $_id_recepteur, $_texte) {
        $this->setId($_id);
        $this->setActif($_actif);
        $this->setId_emmetteur($_id_emmetteur);
        $this->setId_recepteur($_id_recepteur);
        $this->setTexte($_texte);
    }

    public function setId_emmetteur($_id_emmetteur) { $this->id_emmetteur = $_id_emmetteur; }
    public function setId_recepteur($_id_recepteur) { $this->id_recepteur = $_id_recepteur; }
    public function setTexte($_texte) { $this->texte = $_texte; }

    public function getId_emmetteur() { return $this->id_emmetteur; }
    public function getId_recepteur() {  return $this->id_recepteur; }
    public function getTexte() {  return $this->texte; }
}
?>
