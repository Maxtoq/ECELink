<?php $title = 'ECELink - Chargement'; ?>

<?php ob_start(); ?>
<h4>Chargement de votre compte</h4>

<div class="loader"></div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>
