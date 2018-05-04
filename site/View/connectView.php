<!-- Titre de la page -->
<?php $title = 'ECELink - Connexion'; ?>

<!-- Stylesheet et scripts à inclure -->
<?php ob_start(); ?>
<link rel="stylesheet" type = "text/css" href ="View/connexion.css">
<script type="text/javascript" src ="View/connexion.js"></script>
<?php $include = ob_get_clean(); ?>
<?php ob_end_flush(); ?>

<!-- Content -->
<?php ob_start(); ?>
<div class="container">
 <div class="row">
   <div class="col-md-4">
     <div class="panel panel-primary">
       <div class="panel-heading">
         <h2 class="panel-title" align="left" >Connexion :</h2>
       </div>
       <div class="panel-body">
         <form action ="index.php?action=accueil" method="post">
           <div class="form-group">
             <label for="InputPseudoco">Pseudo :</label>
             <input type="text" class="form-control" id="InputPseudoco" autocomplete="off"  placeholder="Enter Pseudo">
           </div>
           <div class="form-group">
             <label for="InputPasswordco">Password :</label>
             <input type="password" class="form-control" id="InputPasswordco" autocomplete="off"  placeholder="Password">
           </div>
           <input type="submit" class="btn btn-primary" value="Envoyer">
         </form>
       </div>

     </div>
   </div>
 <div class="col-md-8">
   <div class="panel panel-info">
     <div class="panel-heading">
       <h2 class="panel-title" align="left" > Inscription :</h2>
     </div>
     <div class="panel-body">
       <form action ="index.php?action=accueil" method="post">
         <div class="form-group">
           <label for="InputNom">Nom :</label>
           <input type="text" class="form-control" id="InputNom" autocomplete="off"   placeholder="Enter Nom">
         </div>
         <div class="form-group">
           <label for="InputPrenom">Prénom :</label>
           <input type="text" class="form-control" id="InputPrénom" autocomplete="off"   placeholder="Enter Prénom">
         </div>
         <div class="form-group">
           <label for="exampleInputEmail1">Email address :</label>
           <input type="email" class="form-control" id="InputEmail1" autocomplete="off"  placeholder="Enter email">
         </div>
         <div class="form-group">
           <label for="InputPseudo">Pseudo :</label>
           <input type="text" class="form-control" id="InputPseudo"  autocomplete="off"  placeholder="Enter Pseudo">
         </div>
         <div class="form-group">
           <label for="InputPassword1">Mot de passe :</label>
           <input type="password" class="form-control" id="InputPassword1" autocomplete="off"  placeholder="Password">
         </div>
         <div class="form-group">
           <label for="InputPassword2">Confirmer Mot de Passe :</label>
           <input type="password" class="form-control" id="InputPassword2" autocomplete="off"  placeholder="Password">
         </div>
         <div class="form-group">
           <label for="Desc">Description Personnelle :</label>
           <textarea class="form-control" id="Desc" rows="3"></textarea>
         </div>
         <fieldset class="form-group">
           <legend>Vous êtes :</legend>
           <div class="form-check">
             <label class="form-check-label">
               <input type="radio" class="form-check-input" name="optionsRadios" id="RadioEtudiant" value="Etudiant" onclick="Check()" autocomplete="off" >
               Etudiant
             </label>
             <label class="form-check-label">
               <input type="radio" class="form-check-input" name="optionsRadios" id="RadioProf" onclick="Check()" value="Professeur" autocomplete="off" >
              Professeur
             </label>
             <label class="form-check-label">
               <input type="radio" class="form-check-input" name="optionsRadios" id="RadioPro" onclick="Check()" value="Professionel" autocomplete="off" >
               Professionel
             </label>
             <div class="reveal-if-active" id="ifYes"  style="display:none">
               <label for="SelectMajeur">Votre Majeur :</label>
               <select class="form-control" id="SelectMajeur" >
                 <option value="">Choississez ici :</option>
                 <option value ="SE">SE</option>
                 <option value ="SI">SI</option>
                 <option value ="OCRES">OCRES</option>
                 <option value ="IF">IF</option>
                 <option value ="RS">RS</option>
                 <option value ="EE">EE</option>
               </select>
               <label for="SelectPromo">Votre Promo :</label>
               <select class="form-control" id="SelectPromo">
                <option value="" disabled selected>Choississez ici :</option>
                 <option value ="ING1">ING1</option>
                 <option value ="ING2">ING2</option>
                 <option value ="ING3">ING3</option>
                 <option value ="ING4">ING4</option>
                 <option value ="ING5">ING5</option>
                 <option value ="Autres">Autres</option>
               </select>
             </div>
             <div class="reveal-if-active" id="ifYes1"   style="display:none">
               <label for="InputMatiere">Qu'elle est votre Matière ?</label>
               <input type="text" class="form-control" id="InputMatiere" name="Matiere" autocomplete="off" placeholder="Matière">
             </div>
             <div class="reveal-if-active" id="ifYes2"  style="display:none">
               <label for="InputEntreprise">A qu'elle entreprise appartenez-vous?</label>
               <input type="text" class="form-control" id="InputEntreprise" name="Entreprise" autocomplete="off" placeholder="Entreprise">
               <label for="InputPoste">Qu'elle est votre poste?</label>
               <input type="text" class="form-control" id="InputPoste" name="poste"autocomplete="off"  placeholder="Poste">
             </div>
           </div>
         </fieldset>
         <input type="submit" class="btn btn-info" value="Submit">
       </form>
     </div>
     </div>
 </div>
</div>
</div>
<?php $content = ob_get_clean(); ?>

<!-- On appelle le template -->
<?php require('template.php') ?>
