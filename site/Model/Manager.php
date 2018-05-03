<?php
class Manager {

    protected $db;

    public function __construct($_db) {
        $db = $_db;
    }

    public function dbConnect() {
        try
    	{
    	    $db = new PDO('mysql:host=localhost;dbname=ecelink;charset=utf8', 'root', '');
    	}
    	catch(Exception $e)
    	{
    	    die('Erreur connexion db : '.$e->getMessage());
    	}
    }
}
?>
