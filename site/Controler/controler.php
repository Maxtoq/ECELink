<?php
require('Model/model.php');
require('Model/AuteurManager.php');

class Controler {
    private $auteurManager;

    public function __contruct() {
        $this->auteurManager = new AuteurManager;
        $auteurManager->dbConnect();
    }

    function LogIn() {
        require('/connectView.php');
    }

    function tryLogIn($tryPseudo, $tryMdp) {
        
    }

    function getLoad() {
        require('/loadView.php');
    }

    function getAccueil() {
        require('/accueilView.php');
    }
}
?>
