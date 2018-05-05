<!DOCTYPE html>
<html lang="en">
<head>
      <title><?= $title ?></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" type = "text/css" href = "../Navbar.css">
      <link rel="stylesheet" type = "text/css" href = "../Boutons.css">
      <link rel="stylesheet" href="../css/demo.css">
      <link rel="stylesheet" href="../css/footer-distributed.css">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
      <?= $include ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <!--Navbar, froncée -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                     <li class="active"><a href="#">Accueil</a></li>
                     <li><a href="#">Profil</a></li>
                     <li><a href="#">Réseau</a></li>
                </ul>
                <form class="navbar-form navbar-right" action="index.html?action=deco" method="post">
                    <input type="submit" value="Déconnexion">
                </form>
                <form class="navbar-form navbar-right" role="search">
                     <div class="form-group input-group">
                           <input type="text" class="form-control" placeholder="Search..">
                           <span class="input-group-btn">
                                 <button class="btn btn-default" type="button">
                                     <span class="glyphicon glyphicon-search"></span>
                                 </button>
                           </span>
                     </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <div class="dropdown">
                      <button type="button" class="btn btn-lg btn-link" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-fire"></span>
                      </button>
                        <ul class="dropdown-menu">

                        </ul>
                    </div>


                </li>
                 <li><a href="#">M</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $content ?>


    <footer class="footer-distributed">
          <div class="footer-right">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
          </div>

          <div class="footer-left">
                <p class="footer-links">
                      <a href="#">Accueil</a>
                      ·
                      <a href="#">Profil</a>
                      ·
                      <a href="#">Réseau</a>
                      ·
                      <a href="#">Messages</a>
                      ·
                      <a href="#">Contact</a>
                </p>
                <p>Le Coon et sa Bande &copy; 2018</p>
          </div>
    </footer>
</body>
</html>
