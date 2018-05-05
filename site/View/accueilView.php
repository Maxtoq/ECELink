<!-- Titre de la page -->
<?php $title = 'ECELink - Accueil'; ?>

<!-- Stylesheet et scripts à inclure -->
<?php ob_start(); ?>
<link rel="stylesheet" type = "text/css" href ="css/acceuil.css">
<script type="text/javascript" src="js/accueil.js"></script>
<?php $include = ob_get_clean(); ?>
<?php ob_end_flush(); ?>

<!-- Content -->
<?php ob_start(); ?>
<div class="container text-center">
      <div class="row">
            <div class="col-sm-2 well">
                <div class="well" id="photoHG">
                    <!-- Ecriture sous profil en haut a gauche -->
                    <h5 style ="color:#3277b3;"><a href="index.php?action=monProfil"><?= $this->user->getPrenom().' '.$this->user->getNom() ?></a></h5>
                    <a href="index.php?action=monprofil"><img src="img/mickey.jpg" class="img-circle" height="80" width="80" alt="Avatar"></a>
                </div>

                <!--<div class="Description_Pro">
                    Ecriture sous les centres d'interêts en haut a gauche
                    <h4 style ="color:#3277b3;">Parcours Pro</h4>
                    <p>Scola Lycée Hoche</p>
                    <p>Stage Fin d'année 1ère Dassault Système</p>
                </div>-->
                <div class="Info perso">
                    <!-- Ecriture sous les parcours pro a gauche -->
                    <h4 style ="color:#3277b3;">Descritpion Personnelle</h4>
                    <p><?= $this->user->getDescr() ?></p>
                </div>
            </div>

         <!-- Ecriture sous la barre de nav Au centre -->
         <div class="col-sm-7 ">
          <div class="panel panel-primary" >
             <div class="panel-heading">
                 <h3 class="panel-title" align=left >Votre Mur :</h3>
             </div>
             <div class="panel-body">
              <div class="row" id="publi">
                <div class="col-sm-12">
                  <div class="panel panel-default text-left">
                    <div class="panel-body">
                      <p style ="color:#3277b3;"><strong>Statut : </strong> </p>
                      <form action="">
                          <textarea  name="publication"  rows="1" cols="80" resize : none placeholder="Partagez comment vous sentez vous!"></textarea>
                          <div class="buttonpubli">
                              <input type="submit" class="btn btn-primary btn-sm" value="Publier">
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <?php while ($data = $posts->fetch()){ ?>
             <!-- Conteneur photo ami plus nom plus texte publié-->
             <div class="row" id="post">
               <!--Conteneur photo-->
               <div class="col-sm-3" >
                 <div class="well" id="conteneur_photo">
                  <p ><strong> <?= $this->auteurManager->getNom($data['id_auteur']) ?></strong></p>
                  <img src="img/mickey.jpg" class="img-circle"  height="70" width="70" alt="Avatar">
                </div>
               </div>
               <div class="col-sm-9" id="contpubli">
                 <div class="well" >
                   <p> <?= htmlspecialchars( $data['texte'])?></p>
                   <button type="button" class="btn btn-default btn-sm">
                     <span class="glyphicon glyphicon-thumbs-up"></span> Like
                   </button>
                   <div class="dropdown">
                     <button type="button" data-toggle="modal"  data-target="#message<?php echo $data['id'];?>" class="btn btn-default btn-sm">
                     <span class="glyphicon glyphicon-comment"></span> Commenter
                   </button>
                      <div id="myDropdown" class="dropdown-content">
                          <form method="post" action="traitement.php">
                              <p>Rentrez votre texte ici :</p>
                              <textarea name="commenter" id="Newpublication" rows="1" cols="50" placeholder="C'est ici que ça se passe!"></textarea>
                              <button type="button" class="btn btn-primary btn-sm" align ="right" >Commenter</button>
                              <button type="button" class="btn btn-primary btn-sm" onclick="myFunction2(Newpublication)" align ="right" >Fermer</button>
                          </form>
                        </div>
                    </div>
                 </div>
               </div>
             </div>

             <div class="modal fade" id="message<?php echo $data['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLabel"><strong>Votre Commentaire du post <?= $data['id']?>: </strong></h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="post" action="traitement.php">
                    <p>Rentrez votre texte ici :</p>
                    <textarea name="ameliorer" id="to" rows="5" cols="50" placeholder="C'est ici que ça se passe!"></textarea>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary"  id="modifCv" data-dismiss="modal">Save changes</button>
                </div>
              </div>
             </div>
             </div>
           <?php } ?>
        </div>
        </div>
        </div>


    <div class="col-sm-3" >
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title" align="left" >Suggestions :</h3>
      </div>
      <div class="panel-body">
        <?php for( $i=0;$i<4;$i++){ ?>
         <div class="panel panel-info">
           <div class="panel-heading">
          <h5 class="panel-title" align="left" >Offre d'emploi numero <?php echo $i?>:</h5>
          </div>
          <div class="panel-body">
            <h6 align =left><strong>Entreprise <?php echo $i?> : </strong></h6>
               <small> Description du travail!</small><br></br>
               <input type="button" class="btn btn-primary btn-sm" value="GO" id="go<?php echo $i?>" onclick="go(id)">
             </div>
         </div>
         <?php }
         $posts->closeCursor(); ?>
      </div>
    </div>
    </div>
    </div>

</div>
<?php $content = ob_get_clean(); ?>

<!-- On appelle le template -->
<?php require('template.php') ?>
