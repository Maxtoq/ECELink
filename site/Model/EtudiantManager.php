<?php
require_once("AuteurManager.php");
require_once("Etudiant.php");

class EtudiantManager extends AuteurManager {

    // Nom de la table
    const ETUDIANT_TABLE = 'etudiant';

    /**
     * Ajoute un champs dans la table
     *
     * @param
     *
     * @return Etudiant le nouvel étudiant, ou null si l'ajout est un échec
     */
    public function addEtudiant($_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_descr, $_promo, $_maj) {
        // On ajoute l'étudiant dans la table auteur
        $auteur = parent::addAuteur($_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_descr);

        // Si l'ajout d'un auteur est un succès
        if (!is_null($auteur)) {
            // On crée la requête insert into
            // On commence par la préparer
            $q = Manager::$db->prepare('INSERT INTO '.self::ETUDIANT_TABLE.'(id, promo, maj, actif) VALUES(:id, :promo, :maj, 1)');

            // On remplit les champs de la requête
            $id = $auteur->getId();
            $q->bindParam(':id', $id);
            $q->bindParam(':promo', $_promo);
            $q->bindParam(':maj', $_maj);

            // On éxécute la requête et on 
            $q->execute();
        }
        // Sinon, on renvoie null
        else return null;
    }
}
?>
