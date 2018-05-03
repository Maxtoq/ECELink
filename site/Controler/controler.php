<?php
require('Model/AuteurManager.php');

class Controler {
    private $auteurManager;

    public function __construct() {
        try
    	{
    	    $db = new PDO('mysql:host=localhost;dbname=ecelink;charset=utf8', 'root', '');
    	}
    	catch(Exception $e)
    	{
    	    die('Erreur connexion db : '.$e->getMessage());
        }
        $this->auteurManager = new AuteurManager($db);
        //$this->auteurManager->dbConnect();
    }

    public function LogIn() {
        require('/connectView.php');
    }

    public function tryLogIn($tryPseudo, $tryMdp) {
        $this->auteurManager->getByPseudo($tryPseudo);
    }

    public function getLoad() {
        require('/loadView.php');
    }

    public function getAccueil() {
        require('/accueilView.php');
    }
}
?>
