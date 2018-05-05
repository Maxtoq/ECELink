<?php
// On ouvre la session
session_start();

// On inclut les fichiers nécessaires
require('Controler/controler.php');

// Si les superglobales ne sont pas créées, on les crée et on les serialize
if (!isset($_SESSION['controler'])) {
    $controler = new Controler;
    $_SESSION['controler'] = serialize($controler);
}
// Sinon, on deserialize les variables de session
else {
    $controler = unserialize($_SESSION['controler']);
}

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'accueil') {
        // On récupère les inputs du formulaire
        $pseudo = isset($_POST["pseudo"]) ? $_POST["pseudo"] : "";
    	$mdp = isset($_POST["mdp"]) ? $_POST["mdp"] : "";
    	if (($pseudo != "") && ($mdp != "")) {
            // On tente de se connecter avec les identifiants
            // Si la connexion est réussie, on met connected à true, sinon à false
            $controler->tryLogIn($pseudo, $mdp);

            // On serialize le controler avant de charger une autre page
            $_SESSION['controler'] = serialize($controler);
            // Si la connexion est réussie, on lance la page d'accueil
            if ($controler->getConnected()) $controler->getAccueil();
            // Sinon, on relance la page de connexion
            else  $controler->getLogIn();
    	}
    	else {
            // On serialize le controler avant de charger une autre page
            $_SESSION['controler'] = serialize($controler);
            $controler->getLogIn();
    	}


    }
}
else {
    // On serialize le controler avant de charger une autre page
    $_SESSION['controler'] = serialize($controler);
    $controler->getLogIn();
}
?>
