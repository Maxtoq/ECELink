<!-- Titre de la page -->
<?php $title = 'ECELink - >Profil'; ?>

<!-- Stylesheet et scripts à inclure -->
<?php ob_start(); ?>
<link rel="stylesheet" type = "text/css" href ="css/profile.css">
<script type="text/javascript" src="js/script_Mon-profil.js"></script>
<?php $include = ob_get_clean(); ?>
<?php ob_end_flush(); ?>

<!-- Content -->
<?php ob_start(); ?>
<!-- Container pour la page -->
<div class="container ">
<div class ="row">
    <!-- Colonne vide pour centrer lautre colonne  -->
<div class="col-md-2"></div>
<!-- colonne avec tout le contenu de la page pour la structure -->
 <div class = "col-md-8">
   <div class ="profile">
       <!-- Titre page -->
     <h1 class="page-header" style ="color:#3277b3;" align= center >Profil utilisateur </h1>
     <div class ="row">
         <!-- colonne pour afficher la photo de l'utilisateur -->
       <div class="col-md-4 ">
         <div class="well">
           <img src="img/mickey.jpg" class="img-circle" height="150" width="150"  alt="Avatar" id="PP">
         </div>
     </div>
     <!-- Colonne pour afficher les description de la personne et ses anciens postes -->
       <div class="col-md-8 well">
         <ul>
             <!-- On recupere les valeurs grace au php -->
               <li ><strong style ="color:#3277b3;">Nom : </strong><?= $auteur->getNom() ?></li>
               <li><strong style ="color:#3277b3;">Prenom : </strong><?= $auteur->getPrenom() ?></li>
         </ul>
         <!-- nouvelle ligne pour la description perso meillleur structure et affichage -->
         <div class="row">
               <div class="panel panel-primary">
                   <div class="panel-heading">
                       <h3 class="panel-title" align=left >Description Personnelle :</h3>
                   </div>
                   <!-- Recuperer les description -->
                   <div class="panel-body" > <p id="CV"><?= $auteur->getDescr() ?></p>

                   </div>
               </div>
         </div>
            <!-- Ligne pour structure -->
             <div class="row">
                 <!-- Panel pouyr les anciens postes -->
               <div class="panel panel-primary">
                   <div class="panel-heading">
                       <h3 class="panel-title" align=left >Post récent :</h3>
                   </div>
                   <div class="well">
                    <p> Plein de trucs géniaux</p>
                   </div>
                   </div>
               </div>
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
