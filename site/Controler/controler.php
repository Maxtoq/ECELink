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

    public function __construct() {
        $this->auteurManager = new AuteurManager;
        $this->auteurManager->dbConnect();
        $this->etudiantManager = new EtudiantManager;
        $this->enseignantManager = new EnseignantManager;
        $this->proManager = new ProManager;
    }

    public function getUser() { return $this->user; }

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
        $this->enseignantManager->addEnseignant('Tournesol', 'Kévin','kevtourn@ece.fr','kevdu56','kevin1978','bjr moi c kev','Imitation de Gérard Jugnot');
        $this->proManager->addPro('Musk','Ellon','ellonkikou@gmail.com','KingdomDestroyer','ellon123','slt les copains, vous voulez voir mon lance-flamme ?', 'SpaceX','le boss');

        // Si user est bien connecté à un compte, on retourne true
        if (!is_null($this->user)) return true;
        // Sinon on retourne false
        else return false;
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
