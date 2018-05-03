<?php
require_once("Manager.php");
require_once("Auteur.php");

class AuteurManager extends Manager {

    const AUTEUR_TABLE = 'auteur';

    public function __construct($_db) {
        parent::__construct($_db);
    }

    public function add(Auteur $auteur) {

    }

    public function delete(Auteur $auteur) {

    }

    public function getById($id) {
        $id = (int) $id;

        $q = $this->db->query('SELECT * FROM '.AUTEUR_TABLE.' WHERE id = '.$id);

        if ($q) {
            $data = $q->fetch(PDO::FETCH_ASSOC);

            return new Auteur($data['id'], $data['actif'], $data['nom'], $data['prenom'], $data['mail'], $data['pseudo'], $data['mdp'], $data['desc']);
        }
        else { return null; }
    }

    public function getByPseudo($pseudo) {
        $q = $this->db->query('SELECT * FROM '.AUTEUR_TABLE.' WHERE pseudo = \''.$pseudo.'\'');

        if ($q) {
            $data = $q->fetch(PDO::FETCH_ASSOC);

            return new Auteur($data['id'], $data['actif'], $data['nom'], $data['prenom'], $data['mail'], $data['pseudo'], $data['mdp'], $data['desc']);
        }
        else { return null; }
    }

    public function update(Auteur $auteur) {

    }
}
?>
