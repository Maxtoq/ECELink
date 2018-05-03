<?php
class Relation extends Object {

    protected $id_auteur1;
    protected $id_auteur2;
    protected $type;

    public function __construct($_id, $_actif, $_id_auteur1, $_id_auteur2, $_type) {
        $this->setId($_id);
        $this->setActif($_actif);
        $this->setId_auteur1($_id_auteur1);
        $this->setId_auteur2($_id_auteur2);
        $this->setType($_type);
    }

    public function setId_auteur1($_id_auteur1) { $this->id_auteur1 = $_id_auteur1; }
    public function setId_auteur2($_id_auteur2) { $this->id_auteur2 = $_id_auteur2; }
    public function setType($_type) { $this->type = $_type; }

    public function getId_auteur1() { return $id_auteur1; }
    public function getId_auteur2() { return $id_auteur2; }
    public function getType() {  return $type; }
}
?>
