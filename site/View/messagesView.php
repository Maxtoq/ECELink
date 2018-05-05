<?php $title = 'ECELink - Accueil'; ?>

<!-- Stylesheet et scripts à inclure -->
<?php ob_start(); ?>
<link rel="stylesheet" type = "text/css" href ="css/messages.css">
<?php $include = ob_get_clean(); ?>
<?php ob_end_flush(); ?>

<!-- Content -->
<?php ob_start(); ?>
<div class="container ">
  <div class ="row">
    <div class = "col-md-12">
      <div class ="profile">
        <h1 class="page-header" style ="color:#3277b3;" align= center >Messages </h1>
        <div class ="row">
          <div class="col-md-4 ">
            <div class="well">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title" align=left >Derniers Messages :</h3>
                </div>
              <div class="panel-body">
                <img src="img/mickey.jpg" class="img-circle" height="25" width="25"  alt="Avatar" id="PP">
                <a href="#"><span><strong style ="color:#3277b3;"> Utilisateur 1 : </strong>
                 Dernier message </span> <br></br></a>
                 <img src="img/mickey.jpg" class="img-circle" height="25" width="25"  alt="Avatar" id="PP">
                <a href="#"><span><strong style ="color:#3277b3;"> Utlisateur 2 : </strong>
                Trop fort</span><br></br></a></a>
                <img src="img/mickey.jpg" class="img-circle" height="25" width="25"  alt="Avatar" id="PP">
                <a href="#"><span> <strong style ="color:#3277b3;"> Utilisateur 3: </strong>
                Esketit</span><br></br></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title" align=left >
              <img src="img/mickey.jpg" class="img-circle" height="50" width="50"  alt="Avatar" > Utilisateur 1 :</h3>
            </div>
          <div class="panel-body">
            <div class="bubble">
              <div class="pointer">
                <div class ="well" >
                  <p><img src="Saddam-southpark.png" class="img-circle" height="50" width="50"  alt="Avatar" >
                     Salut comment vas-tu? </p><hr> <br></br>
                </div>
                <div class ="well" >
                  <p ><img src="mickey.jpg" class="img-circle" height="50" width="50"  alt="Avatar" >
                     Très bien et toi? </p><br></br>
                  <hr>
                </div>
                <div class ="well" >
                  <p><img src="Saddam-southpark.png" class="img-circle" height="50" width="50"  alt="Avatar" >
                     Tres bien. Merci!</p><hr><br></br>
                </div>

              </div>
              <div class="pointer-border">
              </div>
              <form>
                <div class="form-group">
                  <label for="Text_Message">Nouveau Message</label>
                  <input type="text" class="form-control" id="text-message" placeholder="Nouveau message...">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">

</div>
</div>
</div>
<?php $content = ob_get_clean(); ?>

<!-- On appelle le template -->
<?php require('template.php') ?>
