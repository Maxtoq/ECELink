<?php
require_once("Post.php");
require_once("Manager.php");

class PostManager extends Manager {

    // Nom de la table
    const POST_TABLE = 'post';

    /**
     * Ajoute un champs dans la table
     *
     * @param
     *
     * @return Post le nouveau post, ou null si l'ajout est un échec
     */
    public function addPost($_id_auteur, $_texte) {
        // On crée la requête insert into
        // On commence par la préparer
        if (is_null(Manager::$db)) parent::dbConnect();
        $q = Manager::$db->prepare('INSERT INTO '.self::POST_TABLE.'(id_auteur, texte, actif) VALUES(:id_auteur, :texte, 1)');

        // On remplit les champs de la requête
        $q->bindParam(':id_auteur', $_id_auteur);
        $q->bindParam(':texte', $_texte);

        // On éxécute la requête et on vérifie qu'elle s'est bien éxécutée
        if ($q->execute()) {
            // On récupère l'id du post
            $id = Manager::$db->lastInsertId();

            // On retourne le nouveau post
            return new Post((int)$id, 1, $_id_auteur, $_texte);
        }
        // Sinon on retourne null
        else return null;
    }

    public function delete(Post $post) {

    }

    /**
     * Récupère un post dans la base avec un id en paramètre
     *
     * @param  int $id identifiant à rechercher
     *
     * @return Post post correspondant à la recherche
     */
    public function getById($id) {
        $id = (int) $id;

        // On éxécute la requête
        if (is_null(Manager::$db)) parent::dbConnect();
        $q = Manager::$db->query('SELECT * FROM '.self::POST_TABLE.' WHERE id = '.$id);

        // Si on a bien retourné un post
        if ($q) {
            $data = $q->fetch(PDO::FETCH_ASSOC);

            // On retourne le post
            return new Post($data['id'], $data['actif'], $data['id_auteur'], $data['texte']);
        }
        // Sinon on retourne null
        else return null;
    }

    /**
     * Renvoies les posts
     *
     * @param  Auteur $id_user id du user (inutile pour l'instant)
     *
     * @return array        champs retournés par la requête
     */
    public function selectList($id_user) {
        // On éxécute la requête
        if (is_null(Manager::$db)) parent::dbConnect();
        $q = Manager::$db->query('SELECT id, id_auteur, texte FROM '.self::POST_TABLE.' ORDER BY id DESC');

        // Si la requête est une résussite, on retourne le résultat de la requête
        if ($q) return $q;
        // Sinon on retourne null
        else return null;
    }

    /**
     * Renvoies les posts d'un auteur
     *
     * @param  Auteur $id_auteur id du auteur (inutile pour l'instant)
     *
     * @return array        champs retournés par la requête
     */
    public function selectListAuteur($id_auteur) {
        // On éxécute la requête
        if (is_null(Manager::$db)) parent::dbConnect();
        $q = Manager::$db->query('SELECT id, id_auteur, texte FROM '.self::POST_TABLE.' WHERE id_auteur = '.$id_auteur.' ORDER BY id DESC');

        // Si la requête est une résussite, on retourne le résultat de la requête
        if ($q) return $q;
        // Sinon on retourne null
        else return null;
    }

    /**
     * Modifie un post dans la base
     *
     * @param  Post $post post à modifier
     */
    public function update(Post $post) {
        // On crée la requête update
        // On commence par la préparer
        if (is_null(Manager::$db)) parent::dbConnect();
        $q = Manager::$db->prepare('UPDATE '.self::POST_TABLE.' SET id_auteur = :id_auteur, texte = :texte, actif = :actif WHERE id = :id');

        // On remplit les champs de la requête
        $id_auteur = $post->getId_auteur();
        $texte = $post->getTexte();
        $actif = $postr->getActif();
        $id = $post->getId();
        $q->bindParam(':id_auteur', $id_auteur, PDO::PARAM_INT);
        $q->bindParam(':texte', $texte);
        $q->bindParam(':actif', $actif, PDO::PARAM_INT);
        $q->bindParam(':id', $id, PDO::PARAM_INT);

        // On éxécute la requête
        $q->execute();
    }
}
?>
