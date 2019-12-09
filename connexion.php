<?php 
  session_start();

include "../core/compteC.php";
include "../entities/Compte.php";
$erreurs="";
if (isset($_POST['connecter'])){
    $compteXC=new compteC();
    $emailCNX=$_POST['emailCNX'];
    $passCNX=$_POST['passCNX'];
    if (!empty($emailCNX) && !empty($passCNX))
    {
       $stmt=$compteXC->connexion($emailCNX,$passCNX);
        $validerCNX=$stmt->rowCount();

        if ($validerCNX== 1)
        {
          
            $USER_INFO = $stmt->fetch();
            $_SESSION['IDmembre']=$USER_INFO['IDmembre'];
            $_SESSION['nom']=$USER_INFO['nom'];
            $_SESSION['email']=$USER_INFO['email'];
            $_SESSION['tele']=$USER_INFO['tele'];
            $_SESSION['pass']=$USER_INFO['pass'];
            // $_SESSION['verif']=$USER_INFO['verif'];
            
            
            header('location:index.php?id='.$_SESSION['IDmembre']);
        }
        else {
            $erreurs="Verifier votre email ou  votre mot de passe";

        }
    }
    
}

if (isset($_POST['MDP_oublie']))
{
    header("location:recuperer.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/connexion.css">
    <link rel="stylesheet" href="css/bootstrap.min">
</head>

<style>
.inscrivezVous{
    color:white;
    margin: 20px 27px;
 }

.inscrivezVous:hover{
    color:#60adde;
    text-decoration:none;
}

.MDP_oublie
{
    color:white;
    margin: 20px 60px 50px;
}

.MDP_oublie:hover{
    color:#60adde;
    text-decoration:none;
}


</style>
<body>
<nav class="navigation">
    <a href="index.php"><< Revenir vers le site </a>
</nav>
<div class="container red">
    </div>
    <div class="wrap">
    <form action="" method="POST">
    <input type="email" placeholder="email" name="emailCNX">  
    <input type="password" placeholder="mot de passe" name="passCNX">
   
   
    <?php if ($erreurs!=""):?>     
        <div class="alert alert-danger" id="ERR" role="alert">
            <li><?php echo $erreurs;?></li>
        </div>
        <?php endif; ?>
        
        <a href="recuperer.php" class="MDP_oublie">Mot de pass oublié?</a>    
        <input type="submit" value="Se connecter" name="connecter" >
    <a href="sign.php" class="inscrivezVous">Pas de compte? inscrivez-vous</a>

    </form>
    </div>
</body>
</html>