<?php
require('Controler/controler.php');

$controler = new Controler;
$connected = false;

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'accueil') {
        // On récupère les inputs du formulaire
        $pseudo = isset($_POST["pseudo"]) ? $_POST["pseudo"] : "";
    	$mdp = isset($_POST["mdp"]) ? $_POST["mdp"] : "";
    	if (($pseudo != "") && ($mdp != "")) {
            // On tente de se connecter avec les identifiants
            // Si la connexion est réussie, on met connected à true, sinon à false
            $connected = $controler->tryLogIn($pseudo, $mdp);

            if ($connected) $controler->getAccueil();
            else  $controler->getLogIn();
    	}
    	else {
            $controler->getLogIn();
    	}


    }
}
else {
    $controler->getLogIn();
}
?>
