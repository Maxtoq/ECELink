<?php
require_once("Post.php");

class Statut extends Post {

    public function __construct($_id, $_actif, $_id_auteur, $_texte) {
        parent::__construct($_id, $_actif, $_id_auteur, $_texte);
    }

}
?>
