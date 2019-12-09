<?php  
include "../core/compteC.php";
include "../entities/Compte.php";
session_start();
if (isset($_SESSION['IDmembre'])  )
{

    $compteXC=new compteC();
    $AfficherProfile=$compteXC->afficherCompte($_SESSION['IDmembre']);
    $USER=$AfficherProfile->fetch();
   
// ----------------------------------------------------------------------
     if (isset($_POST['Newnom']) && !empty($_POST['Newnom']) && $_POST['Newnom']!=$USER['nom']  )
     {
        $compteXC->modifierPofileNom($_POST['Newnom'],$_SESSION['IDmembre']); 
        header('location:profile.php?id='.$_SESSION['IDmembre']);
        
     }

     if (isset($_POST['Newemail']) && !empty($_POST['Newemail']) && $_POST['Newemail']!=$USER['email'])
     {
        if (filter_var($_POST['Newemail'],FILTER_VALIDATE_EMAIL))
        {
            $erreursMail=$compteXC->EmailExist($_POST['Newemail']);
            if ($erreursMail=="")
            {
                $_SESSION['email']=$_POST['Newemail'];
                $compteXC->modifierPofileEmail($_POST['Newemail'],$_SESSION['IDmembre']);
                header('location:profile.php?id='.$_SESSION['IDmembre']);   
            }
            else {
                echo "email fama minou";
            } 
        }
        else{
            echo "email ghalet";
        }
     }

     if (isset($_POST['Newtel']) && !empty($_POST['Newtel']) && $_POST['Newtel']!=$USER['tele'])
     {
        if (strlen($_POST['Newtel']) == 8 && is_numeric($_POST['Newtel']))
        {
        $compteXC->modifierPofileTel($_POST['Newtel'],$_SESSION['IDmembre']);
        header('location:profile.php?id='.$_SESSION['IDmembre']);
        }
        else 
        {
            echo "telephone!!!!";
        }
    }

     if (isset($_POST['Newpass']) && !empty($_POST['Newpass']) && isset($_POST['NewpassCNF']) && !empty($_POST['NewpassCNF']) && $_POST['Newpass']!=$USER['pass'])
     {
         $NEWmdp1=$_POST['Newpass'];
         $NEWmdp2=$_POST['NewpassCNF'];
         if ($NEWmdp1 == $NEWmdp2)
         { 
            $compteXC->modifierPofilePASS($_POST['Newpass'],$_SESSION['IDmembre']);
            header('location:profile.php?id='.$_SESSION['IDmembre']);
          }
          else {
              echo "mdp!=mdp2";
          }
     }

     if (isset($_POST['ville']) && !empty($_POST['ville']) )
     {
        $compteXC->modifierPofileVille($_POST['ville'],$_SESSION['IDmembre']); 
        header('location:profile.php?id='.$_SESSION['IDmembre']);

     }
     
     if (isset($_POST['adresse']) && !empty($_POST['adresse']) )
     {
        $compteXC->modifierPofileAdresse($_POST['adresse'],$_SESSION['IDmembre']); 
        header('location:profile.php?id='.$_SESSION['IDmembre']);
     }

     if (isset($_POST['codeP']) && !empty($_POST['codeP']) )
     {
        $compteXC->modifierPofileCodeP($_POST['codeP'],$_SESSION['IDmembre']); 
        header('location:profile.php?id='.$_SESSION['IDmembre']);
     }
     

     

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/editProfile.css">
    <title>Document</title>
</head>
<body>
<div class="card-container">
<div class="upper-container"></div>
<div class="lower-container">
    <form method="POST" action="">
        <input type="text" placeholder=" nom" name="Newnom">
        <br>
        <input type="text" name=" Newemail" placeholder=" Email">
        <br>
        <input type="text" name=" Newtel" placeholder=" Telephone">
       <br>
       <input type="text" name=" ville" placeholder=" Ville">
       <br>
       <input type="text" name=" adresse"  placeholder=" Adresse">
       <br>
       <input type="text" name=" codeP"  placeholder=" Code postal">
       <br>
        <input type="text" name=" Newpass" placeholder=" Mot de pass">
        <br>
        <input type="text" name="NewpassCNF" placeholder=" ConfirmPass">
        <br>
        <input type="submit" class="btn" name="valider" >
        <a type="submit" class="btn" name="valider"   href="profile.php" >Annuler</a>
    </form>
</div>
</body>
</html>

<?php } ?>