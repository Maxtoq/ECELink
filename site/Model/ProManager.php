<?php
require_once("AuteurManager.php");
require_once("Pro.php");

class ProManager extends AuteurManager {

    // Nom de la table
    const PRO_TABLE = 'pro';

    /**
     * Ajoute un champs dans la table
     *
     * @param
     *
     * @return Pro le nouveau pro, ou null si l'ajout est un échec
     */
    public function addPro($_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_descr, $_entreprise, $_poste) {
        // On ajoute le pro dans la table auteur
        $auteur = parent::addAuteur($_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_descr);

        // Si l'ajout d'un auteur est un succès
        if (!is_null($auteur)) {
            // On crée la requête insert into
            // On commence par la préparer
            $q = Manager::$db->prepare('INSERT INTO '.self::PRO_TABLE.'(id, entreprise, poste, actif) VALUES(:id, :entreprise, :poste, 1)');

            // On remplit les champs de la requête
            $id = $auteur->getId();
            $q->bindParam(':id', $id);
            $q->bindParam(':entreprise', $_entreprise);
            $q->bindParam(':poste', $_poste);

            // On éxécute la requête
            $q->execute();

            // On retourne le nouveau pro
            return new Pro($id, 1, $_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_descr, $_entreprise, $_poste);
        }
        // Sinon, on renvoie null
        else return null;
    }


}
?>
