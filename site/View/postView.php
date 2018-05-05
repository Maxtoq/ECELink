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
<!-- Container pour tout notre contenu -->
<div class="container">
    <!-- nouvelle row -->
    <div class="row">
        <h1 class="page-header" style ="color:#3277b3;" align= "center" >Post</h1>
        <div class="row">
            <!-- colonne vide pratique pour centre la div -->
            <div class="col-md-2">
            </div>
            <!-- colonne principale -->
            <div class="col-md-8">
                <!-- panel pour le post -->
                <div class="panel panel-primary">
                    <!-- titre avec la photo et le nom de l'utilisateur qui a fait le post -->
                    <div class="panel-heading">
                        <img src="img/mickey.jpg" width="50" height="50" alt="avatar">
                        <span> <?= $this->auteurManager->getNom($post->getId_auteur()) ?> </span>
                    </div>
                    <!-- Contenu du post + les commentaires  -->
                    <div class="panel-body">
                        <!-- Contenu du post  -->
                        <div class="well">
                            <p><?= $post->getTexte() ?></p>
                        </div>
                        <!-- form pour recuperer le commentaire  -->
                        <form action="index.php?action=publiComm&id=<?= $id_post ?>" method="post">
                            <div class="form-group">
                                <label for="text_com">Nouveau Commentaire</label>
                                <input type="text" name="comm" class="form-control" id="text-com" placeholder="Nouveau commentaire...">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Commenter">
                        </form>
                        <!-- Les anciens commentaires -->
                        <!--Boucle  PHP pour recupere tout les postes ainsi que les gens qui les ont ecrits-->
                        <?php while ($data = $commList->fetch()){ ?>
                        <div id="pasmal" class="well">
                            <strong><?= $this->auteurManager->getNom($data['id_auteur']) ?></strong>
                            <p><?= $data['texte'] ?></p>
                        </div>
                      <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<!-- On appelle le template -->
<?php require('template.php') ?>
