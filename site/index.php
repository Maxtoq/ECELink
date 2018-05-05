<?php
// On ouvre la session
session_start();

// On inclut les fichiers nécessaires
require('Controler/controler.php');

$controler = null;

// Si les superglobales ne sont pas créées, on les crée et on les serialize
if (!isset($_SESSION['controler'])) {
    $controler = new Controler;
    $_SESSION['controler'] = serialize($controler);
}
// Sinon, on deserialize les variables de session
else {
    $controler = unserialize($_SESSION['controler']);
}

/**
 * Charge la page demandée en paramètre
 *
 * @param  string $page page demandée
 */
function goPage($page) {
    global $controler;
    // On serialize le controler avant de charger une autre page
    $_SESSION['controler'] = serialize($controler);
    // On charge la page demandée
    switch ($page) {
        case 'ACCUEIL':
            $controler->getAccueil();
            break;
        case 'LOGIN':
            $controler->getLogIn();
            break;
        case 'MONPROFIL':
            $controler->getMonProfil();
            break;
    }
}



if (isset($_GET['action'])) {
    // On veut charger la page d'accueil
    if ($_GET['action'] == 'accueil') {
        // Si on est déjà connecté
        if ($controler->getConnected()) {
            // On charge la page d'accueil
            goPage('ACCUEIL');
        }
        // Sinon, on essaie de se connecter avec les identifiants
        else {
            // On récupère les inputs du formulaire
            $pseudo = isset($_POST["pseudo"]) ? $_POST["pseudo"] : "";
            $mdp = isset($_POST["mdp"]) ? $_POST["mdp"] : "";
            if (($pseudo != "") && ($mdp != "")) {
                // On tente de se connecter avec les identifiants
                // Si la connexion est réussie, on met connected à true, sinon à false
                $controler->tryLogIn($pseudo, $mdp);

                // Si la connexion est réussie, on lance la page d'accueil
                if ($controler->getConnected()) goPage('ACCUEIL');
                // Sinon, on relance la page de connexion
                else  goPage('LOGIN');
        	}
        	else {
                goPage('LOGIN');
        	}
        }
    }
    // On cherche à aller sur la page monProfil
    elseif ($_GET['action'] == 'profil') {
        // Si on est déjà connecté
        if ($controler->getConnected()) {
            // On charge la page monProfil
            goPage('MONPROFIL');
        }
        else {
            goPage('LOGIN');
        }
    }
    // On cherche à se déconnecter
    elseif ($_GET['action'] == 'deco') {
        // On supprime les données de la session
        session_destroy();
        // On recharge la première page
        header("Refresh:0; url = index.php");
    }
}
else {
    goPage('LOGIN');
}
?>
