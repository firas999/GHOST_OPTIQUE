<?php 
include "../core/compteC.php";
include "../entities/Compte.php";
session_start();
$bar=0;
$CompteXC=new compteC();
$CompteParPage = 2;
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

  $ALL=$CompteXC->INNER_Join_AFFICHAGE_ALL($depart,$CompteParPage);
// $ALL=$CompteXC->afficherCompte($membreSRCH);
// $IDS=$CompteXC->GET_ID($membreSRCH);
// $ALL1=$CompteXC->afficherCompte_L($IDS);
 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="testAFFICHAGE.php" method="POST">
    <input type="text" name="IDsearch">
    <input type="submit" name="search">
    <br><br><br>

    <table style="margin-left:200px;"> 
    <tr>
    <td>IDmembre</td>
    <td>Nom</td>
    <td>email</td>
    <td>telephone</td>
    <td>ville</td>
    <td>adresse</td>
    <td>code postal</td>
    <td>map</td>
    </tr>

    
   <?php while ($m1=$ALL->fetch()) { ?>
                  
                  <tr>
                  <td><?php echo $m1['IDmembre'];?></td>
                  <td><?php echo $m1['nom'];?></td>
                  <td><?php echo $m1['email'];?></td>
                  <td><?php echo $m1['tele'];?></td>
                     <td><?php echo $m1['ville'] ?></td>
                    <td><?php echo $m1['adresse'] ?></td>
                    <td> <?php echo $m1['codeP'] ?></td>
                    <td>
              <a href="<?php echo $m1['localisation'];?>">MAP</a>
            </td>
                      
                   
                  </tr>
                  
                  <?php } ?>
    </table>
    
    
    </form>
    <?php if ($bar==0){?>
                  <div style="padding-left:500px; color=blue;">  
                    <?php for ($i=1;$i<=$pageTotales;$i++){
                        if ($i==$pageCourante)
                        {
                          echo $i." ";
                        }
                        else{
                          echo '<a href="testAFFICHAGE.php?page='.$i.'">'.$i.'</a> ';
                        }
                      } ?>
                      </div>
                    <?php } ?>
</body>
</html>