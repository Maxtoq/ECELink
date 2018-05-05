<!-- Titre de la page -->
<?php $title = 'ECELink - >Réseau'; ?>

<!-- Stylesheet et scripts à inclure -->
<?php ob_start(); ?>
 <link rel="stylesheet" type = "text/css" href="css/style_reseau.css">
 <script type="text/javascript" src="js/script_reseau.js"></script>
<?php $include = ob_get_clean(); ?>
<?php ob_end_flush(); ?>

<!-- Content -->
<?php ob_start(); ?>
<div class="container text-center" style= >
  <div class="row">
    <div class="col-sm-3">
      <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title" align=left >Suggestions :</h3>
    </div>
    <div class="panel-body">

        <div class="wah">
          <img src="img/mickey.jpg" class="img-circle" id="photo1"height="20" width="20" alt="Avatar">
          <p class="s"> Utlisateur 1 </p>

          <button type="button" class="btn btn-primary btn-xs" id="yala1">Add</button>

        </div>
         </br>
        <div class="wah" >
          <img src="img/mickey.jpg" class="img-circle" id="photo1" height="20" width="20" alt="Avatar">
          <p class="s"> Utlisateur 2 </p>
          <button type="button" class="btn btn-primary btn-xs" id="yala2">Add</button>
        </div>
        </br>
        <div class="wah">
          <img src="img/mickey.jpg" class="img-circle" id="photo1" height="20" width="20" alt="Avatar">
          <p class="s"> Utlisateur 3 </p>
          <button type="button" class="btn btn-primary btn-xs" id="yala3">Add</button>
        </div>
        </br>
        <div class="wah">
          <img src="img/mickey.jpg" class="img-circle" id="photo1" height="20" width="20" alt="Avatar">
          <p class="s"> Utlisateur 4 </p>
          <button type="button" class="btn btn-primary btn-xs" id="yala4">Add</button>
        </div>
      </br>
        <div class="wah">
          <img src="img/mickey.jpg" class="img-circle" id="photo1" height="20" width="20" alt="Avatar">
          <p class="s"> Utlisateur 5 </p>
          <button type="button" class="btn btn-primary btn-xs" id="yala5">Add</button>
        </div>



      </div>
    </div>
  </div>

  <!--reseau des familles-->
    <div class="col-sm-1">
    </div>
    <div class="col-sm-7 well">
      <h1 class="page-header" style ="color:#3277b3;" align= center >Mon Réseau Perso </h1>

      <div class="row" ></br>
        <div class="col-md-1">
        </div>

        <div class="col-md-10 " id="waouf1" >
          <div class="col-md-3 " >
            <img src="img/mickey.jpg" class="img-circle" id="photo" height="70" width="70" alt="Avatar">
            <p class="nom">Clément Pecresse</p>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-7"></br>
            <p class="etud">Etudiant</p></br></br>
            <div class="row">
            <div class="col-md-8">
              <p class="etuddesc"> ECE Paris</p>
            </div>
            <div class="col-md-4">
              <button type="button"  class="btn btn-primary btn-xs" id="but1">Supp</button></br>
              <button type="button" class="btn btn-primary btn-xs" id="bu1">Add</button>
            </div>

          </div>

          </div>

          </div>


        </div>
      </br>

      <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10 " id="waouf2">
          <div class="col-md-3 ">
            <img src="img/mickey.jpg" class="img-circle" id="photo" height="70" width="70" alt="Avatar">
            <p class="nom">Max Toquebiau</p>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-7 "></br>
            <p class="etud">Etudiant</p></br></br>
            <div class="row">
            <div class="col-md-8">
              <p class="etuddesc"> ECE Paris</p>
            </div>
            <div class="col-md-4">
              <button type="button" class="btn btn-primary btn-xs" id="but2">Supp</button></br>
              <button type="button" class="btn btn-primary btn-xs" id="bu2">Add</button>
            </div>

          </div>

          </div>

          </div>
        </div>
      </br>
        <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10 " id="waouf3">
          <div class="col-md-3 ">
            <img src="img/mickey.jpg" class="img-circle" id="photo" height="70" width="70" alt="Avatar">
            <p class="nom"> Thomas Wurhlin</p>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-7 "></br>
            <p class="etud">Etudiant</p></br></br>
            <div class="row">
            <div class="col-md-8">
              <p class="etuddesc"> ECE Paris</p>
            </div>
            <div class="col-md-4">
              <button type="button" class="btn btn-primary btn-xs" id="but3">Supp</button></br>
              <button type="button" class="btn btn-primary btn-xs" id="bu3">Add</button>
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
