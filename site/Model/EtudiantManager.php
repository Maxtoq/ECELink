<?php
require_once("AuteurManager.php");
require_once("Etudiant.php");

class EtudiantManager extends AuteurManager {

    // Nom de la table
    const ETUDIANT_TABLE = 'etudiant';

    /**
     * Ajoute un champs dans la table
     *
     * @param Etudiant $etudiant etudiant à créer dans la base
     *
     * @return bool true si l'ajout est une réussite, false sinon (pseudo ou mail déjà existant)
     */
    public function addEtudiant(Etudiant $etudiant) {
        // On crée la requête insert into
        // On commence par la préparer
        $q = Manager::$db->prepare('INSERT INTO '.self::ETUDIANT_TABLE.'(promo, maj, actif) VALUES(:promo, :maj, 1)');

        // On remplit les champs de la requête
        $promo = $etudiant->getPromo();
        $maj = $etudiant->getmaj();
        $q->bindParam(':maj', $maj);
        $q->bindParam(':maj', $maj);

        // On éxécute la requête et on renvoie le résultat (true : réussite, false : échec)
        return $q->execute();

        // On récupère l'id de la table

        // On ajoute également l'étudiant dans la table auteur
        parent::addAuteur(new Auteur());
    }
}
?>
