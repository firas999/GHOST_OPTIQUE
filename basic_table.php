<?php
include "../core/compteC.php";
include "../entities/Compte.php";
session_start();
$CompteXC=new compteC();

$CompteParPage = 5;
$CompteTotalBDD = $CompteXC->NBcompte();
$CompteTotal=$CompteTotalBDD->rowCount();
$pageTotales=ceil($CompteTotal/$CompteParPage);
if (isset($_GET['page']) && !empty(isset($_GET['page'])) && $_GET['page'] >0 ){
  $_GET['page']=intval($_GET['page']);
  $pageCourante=$_GET['page'];
}
else {
  $pageCourante=1;
}

$depart= ($pageCourante-1)*$CompteParPage;
if (isset($_GET['supprimer']) AND !empty($_GET['supprimer']))
{
  $supprimer= (int) $_GET['supprimer'];
 $CompteXC->supprimerCompte($supprimer);
 
}

if (isset($_POST['search']) AND !empty($_POST['search'])  AND isset($_POST['IDsearch']) AND !empty($_POST['IDsearch']))
{
  $bar=1;
  $membreSRCH= $_POST['IDsearch'];
$ALL=$CompteXC->afficherCompte($membreSRCH);
$IDS=$CompteXC->GET_ID($membreSRCH);
$ALL1=$CompteXC->afficherCompte_L($IDS);
}                                  

else if (isset($_POST['ancien'])){
  $bar=0;
  $ALL=$CompteXC-> AfficherAncien($depart,$CompteParPage);
  $ALL1=$CompteXC-> AfficherAncienL($depart,$CompteParPage);
}

else if (isset($_POST['recent'])){
  $bar=0;
  $ALL=$CompteXC->AfficherRecent($depart,$CompteParPage);
  $ALL1=$CompteXC->AfficherRecentL($depart,$CompteParPage);
}
else if (isset($_POST['NonActif'])){
  $bar=5;
  $ALL=$CompteXC->AfficherNonActif();

}
else if (isset($_POST['Actif'])){
  $bar=5;
  $ALL=$CompteXC->AfficherActif();


}

else{
  $bar=0;
$ALL=$CompteXC->afficherBase($depart,$CompteParPage);
$ALL1=$CompteXC->afficherBase_L($depart,$CompteParPage);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
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
  <link rel="stylesheet" href="css/dash.css">
  
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
          <p class="centered">
            <a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a>
          </p>
          <h5 class="centered">Sam Soffes</h5>
          <li class="mt">
            <a href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>UI Elements</span>
              </a>
            <ul class="sub">
              <li>
                <a href="general.html">General</a>
              </li>
              <li>
                <a href="buttons.html">Buttons</a>
              </li>
              <li>
                <a href="panels.html">Panels</a>
              </li>
              <li>
                <a href="font_awesome.html">Font Awesome</a>
              </li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
              </a>
            <ul class="sub">
              <li>
                <a href="grids.html">Grids</a>
              </li>
              <li>
                <a href="calendar.html">Calendar</a>
              </li>
              <li>
                <a href="gallery.html">Gallery</a>
              </li>
              <li>
                <a href="todo_list.html">Todo List</a>
              </li>
              <li>
                <a href="dropzone.html">Dropzone File Upload</a>
              </li>
              <li>
                <a href="inline_editor.html">Inline Editor</a>
              </li>
              <li>
                <a href="file_upload.html">Multiple File Upload</a>
              </li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Extra Pages</span>
              </a>
            <ul class="sub">
              <li>
                <a href="blank.html">Blank Page</a>
              </li>
              <li>
                <a href="login.html">Login</a>
              </li>
              <li>
                <a href="lock_screen.html">Lock Screen</a>
              </li>
              <li>
                <a href="profile.html">Profile</a>
              </li>
              <li>
                <a href="invoice.html">Invoice</a>
              </li>
              <li>
                <a href="pricing_table.html">Pricing Table</a>
              </li>
              <li>
                <a href="faq.html">FAQ</a>
              </li>
              <li>
                <a href="404.html">404 Error</a>
              </li>
              <li>
                <a href="500.html">500 Error</a>
              </li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Forms</span>
              </a>
            <ul class="sub">
              <li>
                <a href="form_component.html">Form Components</a>
              </li>
              <li>
                <a href="advanced_form_components.html">Advanced Components</a>
              </li>
              <li>
                <a href="form_validation.html">Form Validation</a>
              </li>
            </ul>
          </li>
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Data Tables</span>
              </a>
            <ul class="sub">
              <li class="active">
                <a href="basic_table.html">Basic Table</a>
              </li>
              <li>
                <a href="responsive_table.html">Responsive Table</a>
              </li>
              <li>
                <a href="advanced_table.html">Advanced Table</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Charts</span>
              </a>
            <ul class="sub">
              <li>
                <a href="morris.html">Morris</a>
              </li>
              <li>
                <a href="chartjs.html">Chartjs</a>
              </li>
              <li>
                <a href="flot_chart.html">Flot Charts</a>
              </li>
              <li>
                <a href="xchart.html">xChart</a>
              </li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li>
                <a href="lobby.html">Lobby</a>
              </li>
              <li>
                <a href="chat_room.html"> Chat Room</a>
              </li>
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
        <h3><i class="fa fa-angle-right"></i> Client</h3>

        <div class="row mt">
          
          <div class="col-md-12">
            <div class="content-panel">
              
              <table class="table table-striped table-advance table-hover">
                
                <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    Rechercher par :
                    <form action="basic_table.php" class="pull-right mail-src-position" method="POST">
                      <div class="input-append">
                        <!-- firas -->
                        
                        <input type="search" class="form-control-sm"  style="width:600px;" placeholder="id,email,nom,telephone..." name="IDsearch">   |
                        <input type="submit" name="search" value="search">
                                  <br><br><br>
                                  Ou Trier par :
                                  <br> <br>
                        <input type="submit" name="recent" value="Les plus recents" class="tri"> |
                <input type="submit" name="ancien" value="Les plus anciens" class="tri2"> |
                <input type="submit" name="NonActif" value="Compte non actifs" class="tri2"> |
                <input type="submit" name="Actif" value="Compte actifs" class="tri2">
                      </div>
                      
                    </form>
                  </h4>
              </header>
                <hr>
                <thead>
                <h4><i class="fa fa-angle-right"></i> Compte clients</h4>
                
                  <tr>
                    <th><i class="fa fa-user"></i>ID</th>
                    <th ><i class="fa fa-address-book-o"></i> Nom</th>
                    <th><i class="fa fa-at"></i> Email</th>
                    <th><i class="fa fa-phone"></i> telephone</th>
                    <th><i class="fa fa-key"></i> mot de passe</th>
                    <th><i class=" fa fa-check"></i> verif</th>
                    <th><i class=" fa fa-edit"></i> Editer</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                
                <?php while ($m=$ALL->fetch()) { ?>
                  
                  <tr>
                 
                    <td><?php echo $m['IDmembre']; $_SESSION['IDmembre']=$m['IDmembre']; ?></td>
                    <td class="hidden-phone"><?php echo $m['nom'] ?></td>
                    <td><?php echo $m['email'] ?></td>
                    <td><?php echo $m['tele'] ?></td>
                    <td> <?php echo $m['pass'] ?></td>
                    
                    <td>
                    <?php if ($m['verif']==0): ?>
                    <span class="label label-warning"><i class="fa fa-times"></i></span>
                    <?php endif; ?>
                    <?php if ($m['verif']==1): ?>
                    <span class="label label-success"><i class="fa fa-check"></i></span>
                    <?php endif; ?>
                    </td>
                      
                    <td>
                      <button class="btn btn-danger btn-xs" name="supprimer" onclick="window.location.href='basic_table.php?supprimer=<?php echo $m['IDmembre']?>'">                      
                      <i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                  
                  <?php } ?>
                  
                  </table>

                      <!-- ------------------------------------------------------------------------- -->
                      <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Information pour livraison</h4>
              
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-user"></i>ID</th>
                    <th ><i class="fa fa-address-book-o"></i> gouvernorat</th>
                    <th><i class="fa fa-at"></i> adresse</th>
                    <th><i class="fa fa-phone"></i> code postal</th>
                    <th>Map</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                
                <?php
                if ($bar==1){
                $j=0;
                while ($j<count($ALL1))
                {
                while ($m1=$ALL1[$j]->fetch()) { 
                  
                  ?>
                  
                  <tr>
                  <td><?php echo $m1['IDmembre'];?></td>
                     <td><?php echo $m1['ville'] ?></td>
                    <td><?php echo $m1['adresse'] ?></td>
                    <td> <?php echo $m1['codeP'] ?></td>
                  
                      
                    <td>

                      <button class="btn btn-primary btn-x"  onclick="window.location.href='<?php echo $m1['localisation']; ?>'" ><i class="fa fa-map-marker"></i></button>
                    </td>
                  </tr>
                  
                  <?php }
                  $j++; 
                        }   
                      }

                      else if ($bar==2)
                      {
                        while ($m1=$ALL1->fetch()) { ?>
                  
                          <tr>
                          <td><?php echo $m1['IDmembre'];?></td>
                             <td><?php echo $m1['ville'] ?></td>
                            <td><?php echo $m1['adresse'] ?></td>
                            <td> <?php echo $m1['codeP'] ?></td>
                            <td>

                      <button class="btn btn-primary btn-x"  onclick="window.location.href='<?php echo $m1['localisation'];?>'" ><i class="fa fa-map-marker"></i></button>
                    </td>
                              
                           
                          </tr>
                          
                          <?php } ?>
                          <?php

                      }

                      else if ($bar==0) {
                        while ($m1=$ALL1->fetch()) { ?>
                  
                          <tr>
                          <td><?php echo $m1['IDmembre'];?></td>
                             <td><?php echo $m1['ville'] ?></td>
                            <td><?php echo $m1['adresse'] ?></td>
                            <td> <?php echo $m1['codeP'] ?></td>
                            <td>

                      <button class="btn btn-primary btn-x"  onclick="window.location.href='<?php echo $m1['localisation'];?>'" ><i class="fa fa-map-marker"></i></button>
                    </td>
                              
                           
                          </tr>
                          
                          <?php } ?>
                          <?php
                      }
                     ?>
                  
                  </table>

                <?php if ($bar==0){?>
                  <div style="padding-left:500px; color=blue;">  
                    <?php for ($i=1;$i<=$pageTotales;$i++){
                        if ($i==$pageCourante)
                        {
                          echo $i." ";
                        }
                        else{
                          echo '<a href="basic_table.php?page='.$i.'">'.$i.'</a> ';
                        }
                      } ?>
                      </div>
                    <?php } ?>


                 
        <!-- row -->
        
        <!-- /row -->
      </section>
        <form action="basic_table.php" method="POST">
                      
          
        
        
        </form>
    </section>

    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          Un compte dont la marque (x) est attribué n'est pas encore verifier par email
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          
        </div>
        <a href="basic_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
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
