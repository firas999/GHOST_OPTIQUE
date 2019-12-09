<?php
include "../core/compteC.php";
include "../entities/Compte.php";
session_start();
if (isset($_SESSION['email']))
{
    
    $compteXC=new compteC();
$AfficherProfile=$compteXC->afficherCompte($_SESSION['email']);
$USER=$AfficherProfile->fetch();
$AfficherProfile_L=$compteXC->afficherLiv_INFO($_SESSION['email']);
$USER_L=$AfficherProfile_L->fetch();
$_SESSION['IDmembre']=$USER_L['IDmembre'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <title>Document</title>
</head>
<body>

<div class="card-container">
    
<div class="upper-container">
<a href="makepdf.php" class="btn"  style="margin-top:540px;margin-left:130px; ">Exporter sous PDF</a>
</div>
<div class="lower-container">

            
         
<ul>
<li><strong> Nom : <i class="fa fa-files-o"></i></strong>  <?php echo $USER['nom'];$_SESSION['Fnom']=$USER['nom']; ?></li>
<li><strong> E-mail :</strong> <?php echo $USER['email']; $_SESSION['Femail']=$USER['email']; ?></li>
<li><strong> Telephone  :</strong> <?php echo $USER['tele']; $_SESSION['Ftele']=$USER['tele']; ?></li>
<li><strong> Ville :</strong> <?php echo $USER_L['ville']; $_SESSION['Fville']=$USER_L['ville'];?></li>
<li><strong> Adresse :</strong> <?php echo $USER_L['adresse']; $_SESSION['Fadresse']=$USER_L['adresse']; ?></li>
<li><strong> Code postal : <?php  echo $USER_L['codeP']; $_SESSION['FcodeP']=$USER_L['codeP'];?></li>
</ul>               

            
        
     <a href="EditProfile.php" class="btn">Editer mon profile</a>
     <a href="index.php" class="btn">Revenir vers le site</a><br><br>

        
    </div>
</div>
</body>
</html>
<?php 
}
else{
    header("location:connexion.php");
?>
<?php 
//     $newPASS=$_POST['newPASS'];
//     $ID=$_SESSION['IDmembre'];
//     $stmt=$bdd->prepare("UPDATE membre SET pass=? where IDmembre=?");
// $stmt->execute([$newPASS,$ID]);

}
?>