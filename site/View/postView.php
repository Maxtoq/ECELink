<!-- Titre de la page -->
<?php $title = 'ECELink - >Post'; ?>

<!-- Stylesheet et scripts à inclure -->
<?php ob_start(); ?>
<link rel="stylesheet" type = "text/css" href ="css/post.css">
<script type="text/javascript" src="js/script_Mon-profil.js"></script>
<?php $include = ob_get_clean(); ?>
<?php ob_end_flush(); ?>

<!-- Content -->
<?php ob_start(); ?>
<div class="container">
    <div class="row">
        <h1 class="page-header" style ="color:#3277b3;" align= "center" >Post</h1>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <img src="mickey.jpg" width="50" height="50" alt="avatar">
                        <span> Nom Utilisateur </span>
                    </div>
                    <div class="panel-body">
                        <div class="well">
                            <p>Voici mon poste:</p>
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="text_com">Nouveau Commentaire</label>
                                <input type="text" class="form-control" id="text-com" placeholder="Nouveau commentaire...">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <div id="pasmal" class="well">
                            <strong>Nom personne</strong>
                            <p>Ancien commentaires </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<!-- On appelle le template -->
<?php require('template.php') ?>
