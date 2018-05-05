<!-- Titre de la page -->
<?php $title = 'ECELink - >Emplois'; ?>

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
    <div class="col-md-2">
    </div>
    <div class = "col-md-8">
      <h2 class="page-header" style ="color:#3277b3;" align= center >Emploies disponibles </h2>
      <div class="row">
        <div class="col-md-3 " >
          <p>Rechercher par: </p>
        </div>
        <div class="col-md-4 " >
          <form >Type d'emploie:
            <select name="Type d'emploie">
              <option value="Stage">Stage</option>
              <option value="CDI">CDI</option>
              <option value="CDD">CDD</option>
              <option value="Partenariat">Partenariat</option>
            </select>
          </form>
        </div>
        <div class="col-md-5">
          <div class="slidecontainer">
            <p>selection d'un salaire:</p><input type="range" min="1" max="50" value="25" id="jauge"></input>
          </div>
        </div>
      </div>
    <div class="row">
      <div class="col-md-12 well">
        <div class="col-md-3">
          <img src="img/emplois.png"  height="120" width="120"  alt="Avatar" id="shak">
        </div>
        <div class="col-md-5">
          <h5  class="titre"><strong>Offre d'emploie n°1</strong></h5>

          <p style ="color:#3277b3;"> Description </p>
          </br>
          <p class="">Description de l'emplois/p>
        </div>
        <div class="col-md-4">
          </br></br></br></br>
          <button type="button" class="btn btn-primary" >Go</button>
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-md-12 well">
        <div class="col-md-3">
          <img src="img/emplois.png"  height="120" width="120"  alt="Avatar" id="shak">
        </div>
        <div class="col-md-5">
          <h5  class="titre"><strong>Offre d'emploie n°2</strong></h5>

          <p style ="color:#3277b3;"> Description </p>
          </br>
          <p class="">Description de l'emplois</p>
        </div>
        <div class="col-md-4">
          </br></br></br></br>
          <button type="button" class="btn btn-primary" >Go</button>
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-md-12 well">
        <div class="col-md-3">
          <img src="img/emplois.png"  height="120" width="120"  alt="Avatar" id="shak">
        </div>
        <div class="col-md-5">
          <h5  class="titre"><strong>Offre d'emploie n°3</strong></h5>

          <p style ="color:#3277b3;"> Description </p>
          </br>
          <p class="">Description de l'emplois</p>
        </div>
        <div class="col-md-4">
          </br></br></br></br>
          <button type="button" class="btn btn-primary" >Go</button>
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-md-12 well">
        <div class="col-md-3">
          <img src="img/emplois.png"  height="120" width="120"  alt="Avatar" id="shak">
        </div>
        <div class="col-md-5">
          <h5  class="titre"><strong>Offre d'emploie n°4</strong></h5>

          <p style ="color:#3277b3;"> Description </p>
          </br>
          <p class="">Description de l'emplois</p>
        </div>
        <div class="col-md-4">
          </br></br></br></br>
          <button type="button" class="btn btn-primary" >Go</button>
        </div>

      </div>
    </div>
    </div>
    </div>
    </div>

    </div>

    <div class="col-md-2">
    </div>


  </div>


</div>
<?php $content = ob_get_clean(); ?>

<!-- On appelle le template -->
<?php require('template.php') ?>
