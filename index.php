<?php 
session_start();

?>
<!doctype html>

<head>
<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="lib/dropzone/css/dropzone.css" rel="stylesheet" />
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
                <a href="index.html#">See all messages</a>
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
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
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
          <li><a class="logout" href="auth.html">Logout</a></li>
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
              <li><a href="list-off-promotion.php">list de promotion</a></li>
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
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.html">Lobby</a></li>
              <li><a href="chat_room.html"> Chat Room</a></li>
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
 
      <section class="wrapper site-min-height">
       
     
 
        
  
 
      
        
  
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/dropzone/dropzone.js"></script>

</body>

</html>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `produits` WHERE CONCAT(id,prix,quantitee,nomproduit,couleur,etat,nouveauprix) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
 else {
    $query = "SELECT * FROM `produits` where id = '*' ";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{  $connect = mysqli_connect("localhost", "root", "", "ghostoptique");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>


  <body>

        <form action="index.php" method="post" style="margin-left:18%;" >
		  <div class="input-group">

            <input type="text" name="valueToSearch" placeholder="valeur a rechercher"><br><br>
            <button type="submit" name="search" class="btn">search</button>

              </div>
            <table>


                <tr>

                    <th>id</th>
                    <th>nom</th>
                    <th>prix</th>
					<th>quantitee</th>
					<th>couleur</th>
					

                </tr>

              <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['nomproduit'];?></td>
                    <td><?php echo $row['prix'];?></td>
					<td><?php echo $row['quantitee'];?></td>
					<td><?php echo $row['couleur'];?></td>
					<td><?php if ($row['quantitee'] != '0' ) echo 'disponible' ;else  echo ' non disponible';?></td>


                </tr>
                <?php endwhile;?>





            </table>
        </form>

    </body>
</html>
<?php
include ('modifierProduit.php');
require_once"../core/ProduitC.php";

//create instance of our employeC class
$ec=new ProduitC();
//get data
$liste=$ec->afficheP();
//<input type="hidden" name="ref" value="<?php echo $ref;!>">

?>
<html>
<head>

    <title> CRUD produit</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <?php if (isset($_SESSION['msg'])):?>
        <div class="msg">
            <?php
                echo $_SESSION['msg'];
                unset( $_SESSION['msg']);
            ?>

        </div>
    <?php endif?>
<div id="global">
     <!-- <form method="post" action="ajoutProduit.php">-->
        <form method="POST" style="margin-left:18%"; <?php if ($edit_state == false): ?>action="ajoutProduit.php" <?php else :?> action="modifierProduit.php" <?php    endif?>>

            <div class="input-group">
                <label>id</label>
                <input type="text" class="form-control" name="id" required placeholder="entrer la reference de votre produit"  pattern="[0-9]{3,15}" <?php if ($edit_state == true): ?> value="<?php echo $id;?>" <?php endif?> >

            </div>
            <div class="input-group">
                <label>nom</label>
                <input type="text" class="form-control" name="nom" required placeholder="entrer le non de votre produit" pattern="[a-zA-Z]{3,15}$"<?php if ($edit_state == true): ?> value="<?php echo $nom;?>" <?php endif?>>
            </div>
            <div class="input-group">
                <label>prix</label>
                <input type="text" class="form-control" name="prix" required  placeholder="entrer le prix de votre produit"pattern="[0-9]{0,3}" <?php if ($edit_state == true): ?> value="<?php echo $prix;?>" <?php endif?>>
            </div>
			<div class="input-group">
                <label>quantitee</label>
                <input type="text" class="form-control" name="quantitee" required placeholder="entrer la quantitee disponible" pattern="[0-9]{0,3}"<?php if ($edit_state == true): ?> value="<?php echo $quantitee;?>" <?php endif?>>
            </div>
			<div class="input-group">
                <label>couleur</label>
                <input type="text" class="form-control" name="couleur" required placeholder="choissisez un  couleur" pattern="[a-zA-Z]{3,15}$" <?php if ($edit_state == true): ?> value="<?php echo $couleur;?>" <?php endif?>>
            </div>


            <div class="input-group">
                 <?php if ($edit_state == false)  :?>

                     <button type="submit" name="save" class="btn">Save</button>
                    <?php else :?>

                <button type="submit" name="update" class="btn">Update</button>
                    <?php endif?>
					

<button type="button" align="center" class="btn btn-primary btn-outline btn-icon" onclick="javascript:window.print();">
  <i class="fa fa-print"></i><span>Print</span>
  
</button>


            </div>

        </form>



        <table style="margin-left:18%";>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nom</th>
                        <th>prix</th>
						 <th>quantitee</th>
						  <th>couleur</th>
						

                        <th colspan="2"> Action </th>
                    </tr>
                </thead>
                <tbody>




                <?php
                foreach ($liste as $value){ echo'<tr><td>'.$value['id'].'</td><td>'.$value['nomproduit']. '</td><td>'.$value['prix'].'</td><td>'.$value['quantitee']. '</td> <td>'.$value['couleur'].'</td> ';?>
	        
					  <td>
                            <a class="edit_btn" href="index.php?edit=<?php echo $value['id'];?>">Edit</a>

                        </td>
                        <td>

                            <a class="del_btn" onclick="return confirm('do you want To Delete !!')" href="supprimerProduit.php?del=<?PHP echo $value['id'];?>">Delete</a>

                        </td>

                    </tr>


			

                <?php 

}

                ?>



  


                </tbody>
        </table>
        <form method="POST" action="ajoutetmodifier.php?id=<?php if (isset($_POST['id'])){ echo $_POST['id'];}?>">
        <input type="text" class="form-control" placeholder="entrez la reference du produit" name="id" style="width:500px; margin-left:400px;" >
    
      <input type="submit" class="btn btn-theme04" style="width:500px;margin-left:400px;">>
        </form>
</div>

</body>
</html>
