<?php
abstract class Object {

    protected $id;
    protected $actif;

    public function setId($_id) { $this->id = $_id; }
    public function setActif($_actif) { $this->actif = $_actif; }

    public function getId() { return $this->id; }
    public function getActif() {  return $this->actif; }
}
?>
