<?php
class Video extends Post {

    private $video;

    public function __construct($_id, $_actif, $_id_auteur, $_texte, $_video) {
        parent::__construct($_id, $_actif, $_id_auteur, $_texte);

        $this->setVideo($_video);
    }

    public function setVideo($_video) { $this->video = $_video; }

    public function getVideo() { return $video; }
}
?>
