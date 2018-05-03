<?php
require_once("Post.php");

class Offre extends Post {

    private $type_offre;
    private $remun;

    public function __construct($_id, $_actif, $_id_auteur, $_texte, $_type_offre, $_remun) {
        parent::__construct($_id, $_actif, $_id_auteur, $_texte);

        $this->setType_offre($_type_offre);
        $this->setRemun($_remun);
    }

    public function setType_offre($_type_offre) { $this->type_offre = $_type_offre; }
    public function setRemun($_remun) { $this->remun = $_remun; }

    public function getType_offre() { return $type_offre; }
    public function getRemun() { return $remun; }
}
?>
