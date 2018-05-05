<!-- Titre de la page -->
<?php $title = 'ECELink -Mon Profile'; ?>

<!-- Stylesheet et scripts à inclure -->
<?php ob_start(); ?>
<link rel="stylesheet" type = "text/css" href ="css/profile.css">
<script type="text/javascript" src="js/script_Mon-profil.js"></script>
<?php $include = ob_get_clean(); ?>
<?php ob_end_flush(); ?>

<!-- Content -->
<?php ob_start(); ?>
<div class="container ">
<div class ="row">
 <div class = "col-md-8">
   <div class ="profile">
     <h1 class="page-header" style ="color:#3277b3;" align= center >Profil utilisateur </h1>
     <div class ="row">
       <div class="col-md-4 ">
         <div class="well">
           <img src="img/mickey.jpg" class="img-circle" height="150" width="150"  alt="Avatar" id="PP">
             <button type="button" class="btn1" data-toggle="modal" data-target="#exampleModal" id="buttonpp" >Modifier</button>
         </div>
       </div>
       <div class="col-md-8 well">
         <ul>
               <li ><strong style ="color:#3277b3;">Nom : </strong><?= $this->user->getNom() ?></li>
               <li><strong style ="color:#3277b3;">Prenom : </strong><?= $this->user->getPrenom() ?></li>
         </ul>
         <div class="row">
               <div class="panel panel-primary">
                   <div class="panel-heading">
                       <h3 class="panel-title" align=left >Description Personnelle :</h3>
                   </div>
                   <div class="panel-body" > <p id="CV"><?= $this->user->getDescr() ?></p>
                        <div class="buttonmodif" id="button_modif">
                          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ModalpubliCV"  align ="right" >Modifier</button>
                        </div>
                   </div>
               </div>
         </div>

             <div class="row">
               <div class="panel panel-primary">
                   <div class="panel-heading">
                       <h3 class="panel-title" align=left >Post récent :</h3>
                   </div>
                   <div class="panel-body"> <p> Plein de trucs géniaux</p>
                   </div>
               </div>
         </div>
       </div>
     </div>
 </div>
</div>

</div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalpubliDP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
 <div class="modal-content">
   <div class="modal-header">
     <h4 class="modal-title" id="exampleModalLabel"><strong>Modifier</strong></h4>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
   <div class="modal-body">
     <form method="post" action="">
       <h4><strong style ="color:#3277b3;"> Loisirs : </strong></h4>
       <p id="loisirs">Quels sont vos losirs ? :</p>
       <textarea name="ameliorer" id="areaLoisirs" rows="5" cols="50" placeholder="Rentrez les ici!"></textarea>
     </form>
     <form method="post" action="">
       <h4><strong style ="color:#3277b3;"> Sports : </strong></h4>
       <p id="Sports">Quels sports pratiquez-vous ? :</p>
       <textarea name="ameliorer" id="areaSports" rows="5" cols="50" placeholder="Rentrez les ici!"></textarea>
     </form>
     <form method="post" action="">
       <h4><strong style ="color:#3277b3;"> Voyage : </strong></h4>
       <p id="voyages">Quels voyages avaient vous fait? :</p>
       <textarea name="ameliorer" id="areaVoyages" rows="5" cols="50" placeholder="Rentrez les ici!"></textarea>
     </form>
   </div>
   <div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     <button type="button" class="btn btn-primary"  id="ModifDescPerso" data-dismiss="modal">Save changes</button>
   </div>
 </div>
</div>
</div>
<div class="modal fade" id="ModalpubliCV" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
 <div class="modal-content">
   <div class="modal-header">
     <h4 class="modal-title" id="exampleModalLabel"><strong>Modifier</strong></h4>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
   <div class="modal-body">
     <form method="post" action="traitement.php">
       <p>Rentrez votre texte ici :</p>
       <textarea name="ameliorer" id="ameliorer1" rows="5" cols="50" placeholder="C'est ici que ça se passe!"></textarea>
     </form>
   </div>
   <div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     <button type="button" class="btn btn-primary"  id="modifCv" data-dismiss="modal">Save changes</button>
   </div>
 </div>
</div>
</div>

<div class="modal fade" id="ModalpubliPR" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
 <div class="modal-content">
   <div class="modal-header">
     <h4 class="modal-title" id="exampleModalLabel"><strong>Modifier</strong></h4>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
   <div class="modal-body">
     <form method="post" action="traitement.php">
       <p>Rentrez votre texte ici :</p>
       <textarea name="ameliorer" id="ameliorer" rows="5" cols="50"> C'est ici que ça se passe!</textarea>
     </form>
   </div>
   <div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     <button type="button" class="btn btn-primary" onclick="ChangeText()" >Save changes</button>
   </div>
 </div>
</div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
 <div class="modal-content">
   <div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel">Uploadez votre photo</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
   <div class="modal-body">
     <form>
      <div class="form-group">
      <label for="FormPP">Choisissez la Photo</label>
      <input type="file" class="form-control-file" id="FormPP">
      <img id="output" alt="your image" />
      </div>
     </form>
   </div>
   <div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     <button type="button" class="btn btn-primary" onclick="ChangeImage()">Save changes</button>
   </div>
 </div>
</div>
</div>

<?php $content = ob_get_clean(); ?>

<!-- On appelle le template -->
<?php require('template.php') ?>
