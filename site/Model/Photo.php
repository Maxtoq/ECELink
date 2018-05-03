<?php
class Photo extends Post {

    private $photo;

    public function __construct($_id, $_actif, $_id_auteur, $_texte, $_photo) {
        parent::__construct($_id, $_actif, $_id_auteur, $_texte);

        $this->setPhoto($_photo);
    }

    public function setPhoto($_photo) { $this->photo = $_photo; }

    public function getPhoto() { return $photo; }
}
?>
