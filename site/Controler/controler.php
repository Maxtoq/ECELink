<?php
require('Model/AuteurManager.php');
require('Model/EtudiantManager.php');
require('Model/EnseignantManager.php');
require('Model/ProManager.php');

class Controler {
    // Les Manager
    private $auteurManager;
    private $etudiantManager;
    private $enseignantManager;
    private $proManager;

    // L'utilisateur
    private $user;
    // Type de user
    private $userType;
    // Le booleen de connexion
    private $connected;

    public function __construct() {
        $this->auteurManager = new AuteurManager;
        $this->auteurManager->dbConnect();
        $this->etudiantManager = new EtudiantManager;
        $this->enseignantManager = new EnseignantManager;
        $this->proManager = new ProManager;
    }

    public function getUser() { return $this->user; }
    public function getUserType() { return $this->userType; }
    public function getConnected() { return $this->connected; }

    /**
     * Tente de se connecter à un compte Auteur avec le pseudo et le mdp
     * Si les identifiants sont bons, l'attribut $user récupère l'objet Auteur correspondant au compte
     *
     * @param  string $tryPseudo pseudo
     * @param  string $tryMdp    mot de passe
     *
     * @return bool true si la connexion est réussie, false sinon
     */
    public function tryLogIn($tryPseudo, $tryMdp) {
        // On essaie de se connecter à un compte : si ça marche, user prend la valeur de l'objet Auteur correspondant ; sinon il prend "null"
        $this->user = $this->auteurManager->LogUser($tryPseudo, $tryMdp);

        // Si user s'est bien connecté à un compte
        if (!is_null($this->user))  {
            // On met connected à true
            $this->connected = true;

            // On cherche de quel type est le user
            $this->userType = $this->auteurManager->findUserType($this->user);
            // A RETIRER
            die($this->getUserType());
        }
        // Sinon on met connected à false
        else $this->connected = false;
    }

    public function getLoad() {
        require('View/loadView.php');
    }

    public function getAccueil() {
        require('View/accueilView.php');
    }

    public function getLogIn() {
        require('View/connectView.php');
    }
}
?>
