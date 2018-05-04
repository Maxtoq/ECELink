<?php $title = 'ECELink - Accueil'; ?>
<?php $Nom = 'Maxime Toquebiau' ?>

<?php ob_start(); ?>
<div class="container text-center">
  <div class="row">
    <div class="col-sm-2 well">
      <div class="well">
        <!-- Ecriture sous profil en haut a gauche -->
        <h4 style ="color:#3277b3;"><a href="#"><?= $Nom ?></a></h4>
        <a href="#"><img src="mickey.jpg" class="img-circle" height="65" width="65" alt="Avatar"></a>

      </div>


<div class="Description_Pro">
        <!-- Ecriture sous les centres d'interêts en haut a gauche -->
        <h4 style ="color:#3277b3;">Parcours Pro</h4>
        <p>
          Scola Lycée Hoche
        </p>
        <p>
          Stage Fin d'année 1ère Dassault Système
       </p>
</div>
<div class="Info perso">
  <!-- Ecriture sous les parcours pro a gauche -->
        <h4 style ="color:#3277b3;">Descritpion Personnelle</h4>
        <p>
          Majeur SE
        </p>
        <p>
         Mineur management de Projet
       </p>
       <p>
        Facilitéés en Maths...
       </p>
    </div>
</div>

 <!-- Ecriture sous la barre de nav Au centre -->
 <div class="col-sm-7 ">

      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
              <p style ="color:#3277b3;"><strong>Statut : </strong> </p>
               <textarea  name="publication"  rows="1" cols="80" resize : none placeholder="Partagez comment vous sentez vous!"></textarea>
               <div class="buttonpubli">
                 <input type="button" value="Publier">
               </div>
            </div>
          </div>
        </div>
      </div>

 <!-- Conteneur photo ami plus nom plus texte publié-->
 <div class="row">
   <!--Conteneur photo-->
   <div class="col-sm-3" >
     <div class="well" id="conteneur_photo">
      <p><strong>Saddam Hussein</strong></p>
      <img src="Saddam-southpark.png" class="img-circle" height="70" width="70" alt="Avatar">
    </div>
   </div>
   <div class="col-sm-9">
     <div class="well">
       <p> Satan and I finnaly broke up, feeling blue :'(</p>
       <button type="button" class="btn btn-default btn-sm">
         <span class="glyphicon glyphicon-thumbs-up"></span> Like
       </button>
       <button type="button" class="btn btn-default btn-sm">
         <span class="glyphicon glyphicon-comment"></span>
       </button>
     </div>
   </div>
</div>
</div>


<div class="col-sm-3" >
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title" align=left >Suggestions :</h3>
  </div>
  <div class="panel-body">
     <div class="panel panel-info">
       <div class="panel-heading">
      <h5 class="panel-title" align=left >Offre d'emploi :</h5>
      </div>
      <div class="panel-body">
        <h6 align =left><strong>Purex élevage de Poulet : </strong></h6>
           <small> Recherche hommes/ femmes / créatures fantastiques pour  féconder des coqs! </small><br></br>
           <small> Posté par: Dc Mephisto </small>
           <input type="button" value="GO" id="boutongo">
         </div>
     </div>
  </div>
</div>
</div>
</div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>
