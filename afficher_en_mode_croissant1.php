<?php

include "../entities/livraison.php";
include "../core/livraison_core.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <script type="text/javascript" language="javascript" src="control.js"></script>
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages
                  </a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span> Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span> Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span> Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span> New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li>
            <a class="logout" href="login.html">Logout</a>
          </li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5>
          <li class="mt">
            <a href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <!-- <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>UI Elements</span>
              </a>
            <ul class="sub">
              <li><a href="general.html">General</a></li>
              <li><a href="buttons.html">Buttons</a></li>
              <li><a href="panels.html">Panels</a></li>
              <li><a href="font_awesome.html">Font Awesome</a></li>
            </ul>
          </li> -->
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Produits</span>
              </a>
            <ul class="sub">
             
              <li><a href="categorie.php">Categorie</a></li>
              <li class="active"><a href="index.php"> Produit</a></li>
               </ul>
          </li>
          <!-- <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Extra Pages</span>
              </a>
            <ul class="sub">
              <li><a href="blank.html">Blank Page</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="lock_screen.html">Lock Screen</a></li>
              <li><a href="profile.html">Profile</a></li>
              <li><a href="invoice.html">Invoice</a></li>
              <li><a href="pricing_table.html">Pricing Table</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="404.html">404 Error</a></li>
              <li><a href="500.html">500 Error</a></li>
            </ul>
          </li> -->
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Promotion</span>
              </a>
            <ul class="sub">
              <li><a href="list-off-promotion.php">liste of promotion</a></li>
             
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Comptes</span>
              </a>
            <ul class="sub">
              <li><a href="basic_table.php">Clients</a></li>
            </ul>
          </li>
          <!-- <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li> -->
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>statistiques</span>
              </a>
            <ul class="sub">
              <li><a href="affichage.php">affichage</a></li>
              <li><a href="statistique_stock22.php">stock</a></li>
              <li><a href="stat_profits.php">profits</a></li>
              <li><a href="ajoutStat.html">ajouter</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>SAV</span>
              </a>
            <ul class="sub">
              <li><a href="livreur.php">Livraisaon</a></li>
              <li><a href="responsive_table.php"> Livreur</a></li>
            </ul>
          </li>
          <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
       <form name="myform" action="recuperation/ajouter_livraison.php" method="POST">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> LIVRAISON </h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> ID_livraison</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i>ID_livreur</th>
                    <th><i class="fa fa-bookmark"></i> ID_client</th>
                    <th><i class=" fa fa-edit"></i> DATE</th>
                    <th><i class="fa fa-bullhorn"></i> ETAT</th>
                    <th><i class="fa fa-bullhorn"></i> COMMANDE </th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                    </td>
                    <td class="hidden-phone"><input type="text" name="ide_livreur" value=""></td>
                    <td><input type="text" name="id_client"></td>
                    <td><input type="date" name="day"></td>
                    <td><select name="etat">
            <option value="En livraison"><i>En livraison</i></option>
            <option value="Terminer"><i>Terminer</i></option>
          </select></td>
                    <td><input type="text" name="id_commande" value=""></td>
                    <td>
                    <input class="btn btn-success btn-xs" type="submit" name="ajouter" value="ajouter" onclick="commande();">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
        </form>
      </section>
    </section>
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> MES LIVRAISON</h3>
          <a href="afficher_en_mode_croissant1.php"><button class="btn btn-success btn-xs">Tri croissant</button></a>
        <a href="afficher_en_mode_decroissant2.php"><button class="btn btn-success btn-xs">Tri decroissant</button></a>
        <a href="livreur.php"><button class="btn btn-success btn-xs">Tri normal</button></a>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Livraison des produit </h4>
              <section id="unseen">
                <form name="f" action="rechercher_livreur2.php" method="POST" >
        <input type="text" placeholder="rechercher" value="" maxlength="100" name="rechercher">
         <input class="btn btn-success btn-xs" type="submit" value="rechercher">
        </form>

<center>
    <p class="mtext-105 cl2 txt-center p-b-30" > MES LIVRAISON </p>
    <?php
$cnx = new PDO('mysql:host=localhost;dbname=ghostoptique;charset=utf8', 'root', '');
$page = (!empty($_GET['page']) ? $_GET['page'] : 1);
$limite = 10;
$debut = ($page - 1) * $limite;
$query = 'SELECT SQL_CALC_FOUND_ROWS * FROM ghostoptique.livraison_du_produit ORDER BY id_livraison ASC LIMIT :limite OFFSET :debut';
$query = $cnx->prepare($query);
$query->bindValue(
    'limite',        
     $limite,        
     PDO::PARAM_INT   
);
$query->bindValue('debut', $debut, PDO::PARAM_INT);
$query->execute();
$resultFoundRows = $cnx->query('SELECT found_rows()');
$nombredElementsTotal = $resultFoundRows->fetchColumn();
?>
   <table class="table table-bordered table-striped table-condensed" style="text-align: center; width: 50%;" border="1" cellpadding="2" cellspacing="2">
                  <thead>
                    <tr>
                      <th>ID_livraison</th>
                      <th>ID_livreur</th>
                      <th class="numeric">ID_client</th>
                      <th class="numeric">DATE</th>
                      <th class="numeric">ETAT</th>
                      <th class="numeric">COMMANDE</th>
                      <th class="numeric"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $a=0;
            while($element = $query->fetch()){
                    $a++;
              ?>
                          <tr>
                      <td><?php echo $element['id_livraison']; ?></td>
                      <td class="numeric"><?php echo $element['ide_livreur']; ?></td>
                      <td class="numeric"><?php echo $element['id_client']; ?></td>
                      <td class="numeric"><?php echo $element['day']; ?></td>
                      <td class="numeric"><?php echo $element['etat']; ?></td>
                      <td class="numeric"><?php echo $element['id_commande']; ?></td>
                      <td>
                      <a href="modifier_livraison.php?id_livraison=<?php echo $element['id_livraison']; ?>
                      "><button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                      <a href="recuperation/supprimer_livraison.php?id_livraison=<?php echo $element['id_livraison']; ?>"><button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                      </td>
                    </tr>
                    <?php
              }
              ?>
              
                  </tbody>
                </table>
<?php
$nombreDePages = ceil($nombredElementsTotal / $limite);
if ($page > 1):
    ?><a href="?page=<?php echo $page - 1; ?>"><button>Page précédente</button></a> — <?php
endif;
for ($i = 1; $i <= $nombreDePages; $i++):
    ?><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a> <?php
endfor;
if ($page < $nombreDePages):
    ?>— <a href="?page=<?php echo $page + 1; ?>"><button>Page suivante</button></a><?php
endif;
?>
                </center>
                <button><?php echo $nombredElementsTotal; ?></button>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  
</body>

</html>
