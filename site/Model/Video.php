<?php
require_once("Post.php");

class Video extends Post {

    private $vid;

    public function __construct($_id, $_actif, $_id_auteur, $_texte, $_vid) {
        parent::__construct($_id, $_actif, $_id_auteur, $_texte);

        $this->setVid($_vid);
    }

    public function setVid($_vid) { $this->vid = $_vid; }

    public function getVid() { return $this->vid; }
}
?>
