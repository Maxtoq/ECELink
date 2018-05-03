<?php
class AuteurManager extends Manager {

    const AUTEUR_TABLE = 'auteur';

    public function add(Auteur $auteur) {

    }

    public function delete(Auteur $auteur) {

    }

    public function getById($id) {
        $id = (int) $id;

        $q = $this->db->query('SELECT * FROM '.AUTEUR_TABLE.' WHERE id = '.$id);
        if ($q) {
            
        }
        else { return null; }
    }

    public function update(Auteur $auteur) {

    }
}
?>
