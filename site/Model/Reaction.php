<?php
class Reaction extends Object {

    protected $id_auteur;
    protected $id_post;
    protected $type;

    public function __construct($_id, $_actif, $_id_auteur, $_id_post, $_type) {
        $this->setId($_id);
        $this->setActif($_actif);
        $this->setId_auteur($_id_auteur);
        $this->setId_post($_id_post);
        $this->setType($_type);
    }

    public function setId_auteur($_id_auteur) { $this->id_auteur = $_id_auteur; }
    public function setId_post($_id_post) { $this->id_post = $_id_post; }
    public function setType($_type) { $this->type = $_type; }

    public function getId_auteur() { return $id_auteur; }
    public function getId_post() {  return $id_post; }
    public function getType() {  return $type; }
}
?>
