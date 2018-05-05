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
        case 'RESEAU':
            $controler->getReseau();
            break;
        case 'EMPLOIS':
            $controler->getEmplois();
            break;
        case 'PROFIL':
            $controler->getProfil();
            break;
        case 'MESSAGES':
            $controler->getMessages();
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
    // On cherche à s'inscrire
    elseif ($_GET['action'] == 'new') {
        // Si on est pas connecté
        if (!$controler->getConnected()) {
            // On récupère le contenu du form
            $nom = isset($_POST["nom"]) ? $_POST["nom"] : "";
            $prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : "";
            $mail = isset($_POST["mail"]) ? $_POST["mail"] : "";
            $pseudo = isset($_POST["pseudo"]) ? $_POST["pseudo"] : "";
            $mdp1 = isset($_POST["mdp1"]) ? $_POST["mdp1"] : "";
            $mdp2 = isset($_POST["mdp2"]) ? $_POST["mdp2"] : "";
            $descr = isset($_POST["descr"]) ? $_POST["descr"] : "";
            $type = isset($_POST["typeRadio"]) ? $_POST["typeRadio"] : "";

            // Si tous les champs sont remplis, et que les deux mdp sont égaux
            if (($nom != "") && ($prenom != "") && ($mail != "") && ($pseudo != "") && ($mdp1 != "") && ($mdp2 != "") && ($descr != "") && ($type != "") && ($mdp1 == $mdp2)) {
                // Si le champs étudiant est coché
                if ($type == "Etudiant") {
                    // On récupère les champs
                    $maj = isset($_POST["maj"]) ? $_POST["maj"] : "";
                    $promo = isset($_POST["promo"]) ? $_POST["promo"] : "";

                    // Si ces champs sont remplis
                    if (($maj != "") && ($promo != "")) {
                        // On inscrit l'étudiant et on lance la page d'accueil
                        $controler->signEtuIn($nom, $prenom, $mail, $pseudo, $mdp1, $descr, $promo, $maj);
                        goPage('ACCUEIL');
                    }
                    else goPage('LOGIN');
                }
                elseif ($type == 'Enseignant') {
                    // On récupère les champs
                    $matiere = isset($_POST["matiere"]) ? $_POST["matiere"] : "";

                    // Si ces champs sont remplis
                    if ($matiere != "") {
                        // On inscrit l'enseignant et on lance la page d'accueil
                        $controler->signEnsIn($nom, $prenom, $mail, $pseudo, $mdp1, $descr, $matiere);
                        goPage('ACCUEIL');
                    }
                    else goPage('LOGIN');
                }
                elseif ($type == 'Professionnel') {
                    // On récupère les champs
                    $entreprise = isset($_POST["entreprise"]) ? $_POST["entreprise"] : "";
                    $poste = isset($_POST["poste"]) ? $_POST["poste"] : "";

                    // Si ces champs sont remplis
                    if (($entreprise != "") && ($poste != "")) {
                        // On inscrit l'enseignant et on lance la page d'accueil
                        $controler->signProIn($nom, $prenom, $mail, $pseudo, $mdp1, $descr, $entreprise, $poste);
                        goPage('ACCUEIL');
                    }
                    else goPage('LOGIN');
                }
            }
            else goPage('LOGIN');
        }
        else {
            goPage('ACCUEIL');
        }
    }
    // On cherche à aller sur la page monProfil
    elseif ($_GET['action'] == 'monProfil') {
        // Si on est déjà connecté
        if ($controler->getConnected()) {
            // On charge la page monProfil
            goPage('MONPROFIL');
        }
        else {
            goPage('LOGIN');
        }
    }
    // On cherche à aller sur la page réseau
    elseif ($_GET['action'] == 'reseau') {
        // Si on est déjà connecté
        if ($controler->getConnected()) {
            // On charge la page réseau
            goPage('RESEAU');
        }
        else {
            goPage('LOGIN');
        }
    }
    // On cherche à aller sur la page emplois
    elseif ($_GET['action'] == 'emplois') {
        // Si on est déjà connecté
        if ($controler->getConnected()) {
            // On charge la page emplois
            goPage('EMPLOIS');
        }
        else {
            goPage('LOGIN');
        }
    }
    // On cherche à aller sur la page profil
    elseif ($_GET['action'] == 'profil') {
        // Si on est déjà connecté
        if ($controler->getConnected()) {
            // On charge la page profil
            goPage('PROFIL');
        }
        else {
            goPage('LOGIN');
        }
    }
    // On cherche à aller sur la page messages
    elseif ($_GET['action'] == 'messages') {
        // Si on est déjà connecté
        if ($controler->getConnected()) {
            // On charge la page messages
            goPage('MESSAGES');
        }
        else goPage('LOGIN');
    }
    // On cherche à se déconnecter
    elseif ($_GET['action'] == 'deco') {
        // Si on est déjà connecté
        if ($controler->getConnected()) {
            // On supprime les données de la session
            session_destroy();
            // On recharge la première page
            header("Refresh:0; url = index.php");
        }
    }
    // On cherche à publier un post
    elseif ($_GET['action'] == 'publiPost') {
        // Si on est déjà connecté
        if ($controler->getConnected()) {
            // On vérifie que le textArea est rempli
            $texte = isset($_POST["publi"]) ? $_POST["publi"] : "";
            if ($texte != "") {
                $controler->publiPost($texte);
        	}
            goPage('ACCUEIL');
        }
        else goPage('LOGIN');
    }
}
else {
    goPage('LOGIN');
}
?>
