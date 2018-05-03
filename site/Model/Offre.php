<?php
class Offre extends Post {

    private $type;
    private $remun;

    public function __construct($_id, $_actif, $_id_auteur, $_texte, $_type, $_remun) {
        parent::__construct($_id, $_actif, $_id_auteur, $_texte);

        $this->setType($_type);
        $this->setRemun($_remun);
    }

    public function setType($_type) { $this->type = $_type; }
    public function setRemun($_remun) { $this->remun = $_remun; }

    public function getType() { return $type; }
    public function getRemun() { return $remun; }
}
?>
