<?php
    // On récupère les inputs du formulaire
    $pseudo = isset($_POST["pseudo"]) ? $_POST["pseudo"] : "";
	$mdp = isset($_POST["mdp"]) ? $_POST["mdp"] : "";
	if (($pseudo != "") && ($mdp != "")) {

	}
	else { // On affiche quels champs sont vides
		if ($pseudo == "") alert("Pseudo manquant");
		if ($mdp == "") alert("Mot de passe manquant");
	}

	function alert($msg) {
	    echo "<script type='text/javascript'>alert('$msg');</script>";
	}

    $db = "ecelink";

    // On se connecte à la dbs
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $db);

    // Si la db existe, faire le traitement
    if ($db_found) {
        // On éxécute la requête
        $sql = "SELECT * FROM auteur WHERE pseudo='$pseudo'";
		$result = mysqli_query($db_handle, $sql);

        // On vérifie que le pseudo est présent dans la base de données
        if ($result->num_rows > 0) {
            // On récupère le résultat
            $data = mysqli_fetch_row($result);
x
            // On vérifie que le mot de passe est le bon
		    if ($data[5] == $mdp) echo "Connexion au compte réussie";
            else echo "Mot de passe erroné";
        }
        else echo "No matching pseudo";
    }
    else echo "Database not found";

    mysqli_close($db_handle);
?>
