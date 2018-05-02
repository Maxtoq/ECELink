<?php
    try {
        $db = new PDO('mysql:host=localhost;dbname=ecelink;charset=utf8', 'root', '');
    }
    catch (Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    require('testconn.php');
 ?>
