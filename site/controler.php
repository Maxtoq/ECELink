<?php
require('Model/model.php');

initConn();

function LogIn() {
    require('connectView.php');
}

function tryLogIn($tryPseudo, $tryMdp) {

}

function getLoad() {
    require('loadView.php');
}

function getAccueil() {
    require('accueilView.php');
}
?>
