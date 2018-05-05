<?php
require('Model/AuteurManager.php');
require('Model/EtudiantManager.php');
require('Model/EnseignantManager.php');
require('Model/ProManager.php');
require('Model/PostManager.php');

class Controler {
    // Les Manager
    private $auteurManager;
    private $etudiantManager;
    private $enseignantManager;
    private $proManager;
    private $postManager;

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
        $this->postManager = new PostManager;
    }

    public function getUser() { return $this->user; }
    public function getUserType() { return $this->userType; }
    public function getConnected() { return $this->connected; }
    public function getPostManager() { return $this->postManager; }

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
        }
        // Sinon on met connected à false
        else $this->connected = false;
    }

    public function signEtuIn($_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_descr, $_promo, $_maj) {
        $this->user = $this->etudiantManager->addEtudiant($_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_descr, $_promo, $_maj);
        if (!is_null($this->user)) $this->connected = true;
    }

    public function signEnsIn($_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_descr, $_matiere) {
        $this->user = $this->enseignantManager->addEnseignant($_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_descr, $_matiere);
        if (!is_null($this->user)) $this->connected = true;
    }

    public function signProIn($_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_descr, $_entreprise, $_poste) {
        $this->user = $this->proManager->addPro($_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_descr, $_entreprise, $_poste);
        if (!is_null($this->user)) $this->connected = true;
    }

    public function publiPost($texte) {
        $this->postManager->addPost($this->user->getId(), $texte);
    }

    public function getLoad() {
        require('View/loadView.php');
    }

    public function getAccueil() {
        $posts = $this->postManager->selectList($this->user->getId());
        require('View/accueilView.php');
    }

    public function getLogIn() {
        require('View/connectView.php');
    }

    public function getMonProfil() {
        require('View/monProfilView.php');
    }

    public function getReseau() {
        require('View/reseauView.php');
    }

    public function getEmplois() {
        require('View/emploisView.php');
    }

    public function getProfil() {
        // On récupère l'id de l'auteur
        $id_auteur = $_GET['id'];
        // On récupère l'auteur en question
        $auteur = $this->auteurManager->getById($id_auteur);
        require('View/profilView.php');
    }

    public function getMessages() {
        require('View/messagesView.php');
    }
}
?>
