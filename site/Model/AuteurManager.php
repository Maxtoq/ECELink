<?php
require_once("Auteur.php");
require_once("Manager.php");

class AuteurManager extends Manager {

    // Nom de la table
    const AUTEUR_TABLE = 'auteur';

    public function __construct() {
        parent::__construct();
    }

    public function add(Auteur $auteur) {

    }

    public function delete(Auteur $auteur) {

    }

    /**
     * Récupère un auteur dans la base avec un id en paramètre
     *
     * @param  int $id identifiant à rechercher
     *
     * @return Auteur auteur correspondant à la recherche
     */
    public function getById($id) {
        $id = (int) $id;

        $q = Manager::$db->query('SELECT * FROM '.self::AUTEUR_TABLE.' WHERE id = '.$id);

        if ($q) {
            $data = $q->fetch(PDO::FETCH_ASSOC);

            return new Auteur($data['id'], $data['actif'], $data['nom'], $data['prenom'], $data['mail'], $data['pseudo'], $data['mdp'], $data['desc']);
        }
        else return null;
    }

    /*public function getByPseudo($pseudo) {
        // On recherche un auteur dans la table avec le pseudo demandé
        $q = $this->db->query('SELECT * FROM '.self::AUTEUR_TABLE.' WHERE pseudo = \''.$pseudo.'\'');

        // Si la requête retourne bien un auteur
        if ($q) {
            // On récupère le champs
            $data = $q->fetch(PDO::FETCH_ASSOC);

            // On retourne un nouvel Auteur avec les données correspondantes
            return new Auteur($data['id'], $data['actif'], $data['nom'], $data['prenom'], $data['mail'], $data['pseudo'], $data['mdp'], $data['desc']);
        }
        // S'il n'y a pas ce pseudo dans la base, on retourne null
        else { return null; }
    }*/

    /**
     * Modifie un auteur dans la base
     *
     * @param  Auteur $auteur auteur à modifier
     */
    public function update(Auteur $auteur) {
        // On crée la requête update
        // On commence par la préparer
        $q = Manager::$db->prepare('UPDATE auteur SET nom = :nom, prenom = :prenom, mail = :mail, pseudo = :pseudo, mdp = :mdp, descr = :descr, actif = :actif WHERE id = :id');

        // On remplit les champs de la requête
        $nom = $auteur->getNom();
        $prenom = $auteur->getPrenom();
        $mail = $auteur->getMail();
        $pseudo = $auteur->getPseudo();
        $mdp = $auteur->getMdp();
        $descr = $auteur->getDescr();
        $actif = $auteur->getActif();
        $id = $auteur->getId();
        $q->bindParam(':nom', $nom);
        $q->bindParam(':prenom', $prenom);
        $q->bindParam(':mail', $mail);
        $q->bindParam(':pseudo', $pseudo);
        $q->bindParam(':mdp', $mdp);
        $q->bindParam(':descr', $descr);
        $q->bindParam(':actif', $actif, PDO::PARAM_INT);
        $q->bindParam(':id', $id, PDO::PARAM_INT);

        // On éxécute la requête
        if (!$q->execute()) die("update :(");
    }

    /**
     * Tente de se connecter à un compte
     *
     * @param string $tryPseudo pseudo à rechercher dans la base
     * @param string $tryMdp    mot de passe du user
     *
     * @return l'auteur correspondant à la connexion, ou null si le pseudo ou le mdp est mauvais
     */
    public function LogUser($tryPseudo, $tryMdp) {
        // On recherche un auteur dans la table avec le pseudo demandé
        $q = Manager::$db->query('SELECT * FROM '.self::AUTEUR_TABLE.' WHERE pseudo = \''.$tryPseudo.'\'');

        // Si la requête retourne bien un auteur
        if ($q) {
            // On récupère le champs
            $data = $q->fetch(PDO::FETCH_ASSOC);

            // Si le mot de passe est le bon
            if ($tryMdp == $data['mdp']) {
                // On retourne un nouvel Auteur avec les données correspondantes
                return new Auteur($data['id'], $data['actif'], $data['nom'], $data['prenom'], $data['mail'], $data['pseudo'], $data['mdp'], $data['descr']);
            }
            // Sinon, on retourne null
            else return null;
        }
        // S'il n'y a pas ce pseudo dans la base, on retourne null
        else return null;
    }
}
?>
