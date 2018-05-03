<?php
require_once("Object.php");

class Notification extends Object {

    protected $id_emmetteur;
    protected $id_recepteur;
    protected $texte;
    protected $lien;

    public function __construct($_id, $_actif, $_id_emmetteur, $_id_recepteur, $_texte, $_lien) {
        $this->setId($_id);
        $this->setActif($_actif);
        $this->setId_emmetteur($_id_emmetteur);
        $this->setId_recepteur($_id_recepteur);
        $this->setTexte($_texte);
        $this->setLien($_lien);
    }

    public function setId_emmetteur($_id_emmetteur) { $this->id_emmetteur = $_id_emmetteur; }
    public function setId_recepteur($_id_recepteur) { $this->id_recepteur = $_id_recepteur; }
    public function setTexte($_texte) { $this->texte = $_texte; }
    public function setLien($_lien) { $this->lien = $_lien; }

    public function getId_emmetteur() { return $id_emmetteur; }
    public function getId_recepteur() {  return $id_recepteur; }
    public function getTexte() {  return $texte; }
    public function getLien($_lien) { $this->lien = $_lien; }
}
?>
