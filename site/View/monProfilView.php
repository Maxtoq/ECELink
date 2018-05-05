<!-- Titre de la page -->
<?php $title = 'ECELink - Accueil'; ?>

<!-- Stylesheet et scripts à inclure -->
<?php ob_start(); ?>
<link rel="stylesheet" type = "text/css" href ="profile.css">
<?php $include = ob_get_clean(); ?>
<?php ob_end_flush(); ?>

<!-- Content -->
<?php ob_start(); ?>
<div class="container ">
<div class ="row">
 <div class = "col-md-8">
   <div class ="profile">
     <h1 class="page-header" style ="color:#3277b3;" align= center >Mickey Mouse </h1>
     <div class ="row">
       <div class="col-md-4 ">
         <div class="well">
           <img src="img/mickey.jpg" class="img-circle" height="100" width="100"  alt="Avatar" id="PP">
           <div class = "buttonpp">
             <button type="button" class="btn1" data-toggle="modal" data-target="#exampleModal" id="buttonpp" >Modifier</button>
           </div>
           <div class="panel panel-primary">
             <div class="panel-heading">
             <h3 class="panel-title" align=left >Description Personnelle :</h3>
             </div>
           <div class="panel-body">
             <h4><strong style ="color:#3277b3;"> Loisirs : </strong></h4>
             <p> La destruction, la mort et surtout la vente de sexe aux enfants!</p>
             <h4><strong style ="color:#3277b3;"> Sports : </strong></h4>
             <p> Karaté bien sur.</p>
             <h4> <strong style ="color:#3277b3;">Voyage : </strong></h4>
             <p> Vahlala une fois par semaine.</p>
             <div class="buttonmodif">
               <button type="button" class="btn btn-primary btn-sm" align = right >Modifier</button>
             </div>
           </div>
           </div>
         </div>
       </div>
       <div class="col-md-8 well">
         <ul>
               <li ><strong style ="color:#3277b3;">Nom :</strong> Mickey</li>
               <li><strong style ="color:#3277b3;">Prenom :</strong>Mouse</li>
               <li><strong style ="color:#3277b3;">Promo :</strong>666</li>
               <li><strong style ="color:#3277b3;">Majeur :</strong>Se</li>
               <li><strong style ="color:#3277b3;">Mineur :</strong>Ingenieurie Financière</li>
         </ul>
         <div class="row">
               <div class="panel panel-primary">
                   <div class="panel-heading">
                       <h3 class="panel-title" align=left >C.V :</h3>
                   </div>
                   <div class="panel-body"> <p> President de La Disney Unlimited Compagny HAHA,
                        Vous allez me laisser vendre du sexe à vos petites filles</p>
                        <div class="buttonmodif">
                          <button type="button" class="btn btn-primary btn-sm" align = right >Modifier</button>
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
                   <div class="buttonmodif">
                      <button type="button" class="btn btn-primary btn-sm">Modifier</button>
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
