<?php
require_once("Auteur.php");
require_once("Manager.php");

class AuteurManager extends Manager {

    // Nom de la table
    const AUTEUR_TABLE = 'auteur';

    /**
     * Ajoute un champs dans la table
     *
     * @param
     *
     * @return Auteur le nouvel auteur, ou null si l'ajout est un échec
     */
    public function addAuteur($_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_descr) {
        // On crée la requête insert into
        // On commence par la préparer
        $q = Manager::$db->prepare('INSERT INTO '.self::AUTEUR_TABLE.'(nom, prenom, mail, pseudo, mdp, descr, actif) VALUES(:nom, :prenom, :mail, :pseudo, :mdp, :descr, 1)');

        // On remplit les champs de la requête
        $q->bindParam(':nom', $_nom);
        $q->bindParam(':prenom', $_prenom);
        $q->bindParam(':mail', $_mail);
        $q->bindParam(':pseudo', $_pseudo);
        $q->bindParam(':mdp', $_mdp);
        $q->bindParam(':descr', $_descr);

        // On éxécute la requête et on vérifie qu'elle s'est bien éxécutée
        if ($q->execute()) {
            // On retourne le nouvel auteur
            return $this->getByPseudo($_pseudo);
        }
        // Sinon on retourne null
        else return null;
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

    public function getByPseudo($pseudo) {
        // On recherche un auteur dans la table avec le pseudo demandé
        if (is_null(Manager::$db)) parent::dbConnect();
        $q = Manager::$db->query('SELECT * FROM '.self::AUTEUR_TABLE.' WHERE pseudo = \''.$pseudo.'\'');

        // Si la requête retourne bien un auteur
        if ($q) {
            // On récupère le champs
            $data = $q->fetch(PDO::FETCH_ASSOC);

            // On retourne un nouvel Auteur avec les données correspondantes
            return new Auteur($data['id'], $data['actif'], $data['nom'], $data['prenom'], $data['mail'], $data['pseudo'], $data['mdp'], $data['descr']);
        }
        // S'il n'y a pas ce pseudo dans la base, on retourne null
        else return null;
    }

    public function findUserType(Auteur $user) {
        // On recherche dans les tables etudiant, enseignant et pro le champs correspondant au user
        if (is_null(Manager::$db)) parent::dbConnect();
        $q = Manager::$db->query('SELECT * FROM etudiant WHERE id = '.$user->getId());
        // Si la requête retourne un étudiant, on renvoie 'ETUDIANT'
        if ($q) return 'ETUDIANT';

        $q = Manager::$db->query('SELECT * FROM enseignant WHERE id = '.$user->getId());
        // Si la requête retourne un enseignant, on renvoie 'ENSEIGNANT'
        if ($q) return 'ENSEIGNANT';

        $q = Manager::$db->query('SELECT * FROM pro WHERE id = '.$user->getId());
        // Si la requête retourne un pro, on renvoie 'PRO'
        if ($q) return 'PRO';
    }

    /**
     * Modifie un auteur dans la base
     *
     * @param  Auteur $auteur auteur à modifier
     */
    public function update(Auteur $auteur) {
        // On crée la requête update
        // On commence par la préparer
        $q = Manager::$db->prepare('UPDATE '.self::AUTEUR_TABLE.' SET nom = :nom, prenom = :prenom, mail = :mail, pseudo = :pseudo, mdp = :mdp, descr = :descr, actif = :actif WHERE id = :id');

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
        $q->execute();
    }

    /**
     * Tente de se connecter à un compte
     *
     * @param string $tryPseudo pseudo à rechercher dans la base
     * @param string $tryMdp    mot de passe du user
     *
     * @return Auteur l'auteur correspondant à la connexion, ou null si le pseudo ou le mdp est mauvais
     */
    public function LogUser($tryPseudo, $tryMdp) {
        // On recherche un auteur dans la table avec le pseudo demandé
        $user = $this->getByPseudo($tryPseudo);

        // On vérifie qu'on a bien récupéré un auteur existant
        if (!is_null($user)) {
            // Si le mot de passe est le bon
            if ($tryMdp == $user->getMdp()) {
                // On retourne un nouvel Auteur avec les données correspondantes
                return $user;
            }
            // Sinon, on retourne null
            else return null;
        }
        // S'il n'y a pas ce pseudo dans la base, on retourne null
        else return null;
    }
}
?>
