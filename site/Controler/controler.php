<?php
require('Model/AuteurManager.php');

class Controler {
    // Les Manager
    private $auteurManager;

    // L'utilisateur
    private $user;

    public function __construct() {
        $this->auteurManager = new AuteurManager;
    }

    public function getUser() { return $this->user; }

    public function tryLogIn($tryPseudo, $tryMdp) {
        // On essaie de se connecter à un compte : si ça marche, user prend la valeur de l'objet Auteur correspondant ; sinon il prend "null"
        $this->user = $this->auteurManager->LogUser($tryPseudo, $tryMdp);

        // Si user est bien connecté à un compte, on retourne true
        if (!is_null($this->user)) return true;
        // Sinon on retourne false
        else return false;
    }

    public function getLoad() {
        require('/loadView.php');
    }

    public function getAccueil() {
        require('/accueilView.php');
    }
    
    public function getLogIn() {
        require('/connectView.php');
    }
}
?>
