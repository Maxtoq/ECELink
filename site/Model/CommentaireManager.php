<?php
require_once("Commentaire.php");
require_once("Manager.php");

class CommentaireManager extends Manager {

    // Nom de la table
    const COMM_TABLE = 'commentaire';

    /**
     * Ajoute un champs dans la table
     *
     * @param
     *
     * @return Commentaire le nouveau comm, ou null si l'ajout est un échec
     */
    public function addComm($_id_auteur, $_id_post, $_texte) {
        // On crée la requête insert into
        // On commence par la préparer
        if (is_null(Manager::$db)) parent::dbConnect();
        $q = Manager::$db->prepare('INSERT INTO '.self::COMM_TABLE.'(id_auteur, id_post, texte, actif) VALUES(:id_auteur, :id_post, :texte, 1)');

        // On remplit les champs de la requête
        $q->bindParam(':id_auteur', $_id_auteur);
        $q->bindParam(':id_post', $_id_post);
        $q->bindParam(':texte', $_texte);

        // On éxécute la requête et on vérifie qu'elle s'est bien éxécutée
        if ($q->execute()) {
            // On récupère l'id du comm
            $id = Manager::$db->lastInsertId();

            // On retourne le nouveau comm
            return new Commentaire((int)$id, 1, $_id_auteur, $_id_post, $_texte);
        }
        // Sinon on retourne null
        else return null;
    }

    public function delete(Commentaire $comm) {

    }

    /**
     * Récupère un comm dans la base avec un id en paramètre
     *
     * @param  int $id identifiant à rechercher
     *
     * @return Commentaire comm correspondant à la recherche
     */
    public function getById($id) {
        $id = (int) $id;

        // On éxécute la requête
        if (is_null(Manager::$db)) parent::dbConnect();
        $q = Manager::$db->query('SELECT * FROM '.self::COMM_TABLE.' WHERE id = '.$id);

        // Si on a bien retourné un comm
        if ($q) {
            $data = $q->fetch(PDO::FETCH_ASSOC);

            // On retourne le comm
            return new Commentaire($data['id'], $data['actif'], $data['id_auteur'], $data['id_post'], $data['texte']);
        }
        // Sinon on retourne null
        else return null;
    }

    /**
     * Renvoies les comm d'un post
     *
     * @param  int $id_post id du post
     * @return array        champs retournés par la requête
     */
    public function selectList($id_post) {
        // On éxécute la requête
        if (is_null(Manager::$db)) parent::dbConnect();
        $q = Manager::$db->query('SELECT id, id_auteur, id_post, texte FROM '.self::COMM_TABLE.' WHERE id_post = '.$id_post.' ORDER BY id DESC');

        // Si la requête est une résussite, on retourne le résultat de la requête
        if ($q) return $q;
        // Sinon on retourne null
        else return null;
    }

    /**
     * Modifie un comm dans la base
     *
     * @param  Commentaire $comm comm à modifier
     */
    /*public function update(Commentaire $comm) {
        // On crée la requête update
        // On commence par la préparer
        if (is_null(Manager::$db)) parent::dbConnect();
        $q = Manager::$db->prepare('UPDATE '.self::COMM_TABLE.' SET id_auteur = :id_auteur, texte = :texte, actif = :actif WHERE id = :id');

        // On remplit les champs de la requête
        $id_auteur = $comm->getId_auteur();
        $texte = $comm->getTexte();
        $actif = $postr->getActif();
        $id = $comm->getId();
        $q->bindParam(':id_auteur', $id_auteur, PDO::PARAM_INT);
        $q->bindParam(':texte', $texte);
        $q->bindParam(':actif', $actif, PDO::PARAM_INT);
        $q->bindParam(':id', $id, PDO::PARAM_INT);

        // On éxécute la requête
        $q->execute();
    }*/
}
?>
