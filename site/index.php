<?php
require('controler.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'accueil') {
        // On récupère les inputs du formulaire
        $pseudo = isset($_POST["pseudo"]) ? $_POST["pseudo"] : "";
    	$mdp = isset($_POST["mdp"]) ? $_POST["mdp"] : "";
    	if (($pseudo != "") && ($mdp != "")) {
            tryLogIn($pseudo, $mdp);

            getAccueil();
    	}
    	else {
            LogIn();
    	}


    }
}
else {
    LogIn();
}
?>
