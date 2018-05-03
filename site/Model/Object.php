<?php
abstract class Object {

    protected $id;
    protected $actif;

    public function setId($_id) { this->id = (int)$_id; }
    public function setActif($_actif) { this->actif = (int)$_actif; }

    public function getId() { return $id; }
    public function getActif() {  return $actif; }
}
?>
