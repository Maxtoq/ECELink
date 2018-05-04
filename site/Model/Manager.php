<?php
/**
 * Classe mère de tous les managers, ils gèrent l'accès aux données de chaque table
 */
class Manager {

    // Lien vers la bdd
    protected static $db;

    /**
     * Se connecte à la base de données et récupère le PDO dans $db
     */
    public function dbConnect() {
        try {
    	    Manager::$db = new PDO('mysql:host=localhost;dbname=ecelink;charset=utf8', 'root', '');
    	}
    	catch(Exception $e) {
    	    die('Erreur connexion db : '.$e->getMessage());
    	}
    }
}
?>
