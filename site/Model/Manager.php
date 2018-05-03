<?php
class Manager {

    protected static $db;

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
