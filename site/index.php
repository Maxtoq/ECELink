<?php
require('Controler/controler.php');

$controler = new Controler;

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'accueil') {
        // On récupère les inputs du formulaire
        $pseudo = isset($_POST["pseudo"]) ? $_POST["pseudo"] : "";
    	$mdp = isset($_POST["mdp"]) ? $_POST["mdp"] : "";
    	if (($pseudo != "") && ($mdp != "")) {
            $controler->tryLogIn($pseudo, $mdp);

            $controler->getAccueil();
    	}
    	else {
            $controler->LogIn();
    	}


    }
}
else {
    $controler->LogIn();
}
?>
