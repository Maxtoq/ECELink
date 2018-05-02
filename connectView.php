<?php $title = 'ECELink - Accueil'; ?>

<?php ob_start(); ?>
<form action="conn.php" method="post">
    <table>
        <tr>
            <td>Pseudo :</td>
            <td><input type="text" name="pseudo"></td>
        </tr>
        <tr>
            <td>Mot de passe :</td>
            <td><input type="text" name="mdp"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Connexion"></td>
        </tr>
    </table>
</form>
<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>
