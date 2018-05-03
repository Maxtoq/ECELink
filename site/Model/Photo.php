<?php
class Photo extends Post {

    private $img;

    public function __construct($_id, $_actif, $_id_auteur, $_texte, $_img) {
        parent::__construct($_id, $_actif, $_id_auteur, $_texte);

        $this->setImg($_img);
    }

    public function setImg($_img) { $this->img = $_img; }

    public function getImg() { return $img; }
}
?>
