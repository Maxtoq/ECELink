<?php
require_once("AuteurManager.php");
require_once("Enseignant.php");

class EnseignantManager extends AuteurManager {

    // Nom de la table
    const ENSEIGNANT_TABLE = 'enseignant';

    /**
     * Ajoute un champs dans la table
     *
     * @param
     *
     * @return Enseignant le nouvel enseignant, ou null si l'ajout est un échec
     */
    public function addEnseignant($_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_descr, $_matiere) {
        // On ajoute l'enseignant dans la table auteur
        $auteur = parent::addAuteur($_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_descr);

        // Si l'ajout d'un auteur est un succès
        if (!is_null($auteur)) {
            // On crée la requête insert into
            // On commence par la préparer
            if (is_null(Manager::$db)) parent::dbConnect();
            $q = Manager::$db->prepare('INSERT INTO '.self::ENSEIGNANT_TABLE.'(id, matiere, actif) VALUES(:id, :matiere, 1)');

            // On remplit les champs de la requête
            $id = $auteur->getId();
            $q->bindParam(':id', $id);
            $q->bindParam(':matiere', $_matiere);

            // On éxécute la requête
            $q->execute();

            // On retourne le nouvel enseignant
            return new Enseignant($id, 1, $_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_descr, $_matiere);
        }
        // Sinon, on renvoie null
        else return null;
    }


}
?>
