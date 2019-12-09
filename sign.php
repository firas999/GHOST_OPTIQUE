<?php
session_start();
include "../core/compteC.php";
include "../entities/Compte.php";
$erreurs=array();

if (isset($_POST['validation']))
{
    
$nom=$_POST['nom'];
$email=$_POST['email'];
$tele=$_POST['tel'];
$ville=$_POST['Ville'];
if ($ville=="Ariena")
{
$localisation="https://www.google.fr/maps/place/Ariana/@36.8662295,10.1402133,13z/data=!3m1!4b1!4m8!1m2!2m1!1sariena!3m4!1s0x12e2cb56af876209:0x1fa3a019258e5704!8m2!3d36.8655718!4d10.1759285";
}
else if ($ville=="Beja")
{   
    
 $localisation="https://www.google.fr/maps/place/B%C3%A9ja/@36.729743,9.1700926,14z/data=!3m1!4b1!4m5!3m4!1s0x12fb588073d15b35:0x67e6f1f9d0f178b2!8m2!3d36.7333193!4d9.1843676";   
    
    
}
else if ($ville=="BenArous")
{
    $localisation="https://www.google.fr/maps/place/Ben+Arous/@36.7465169,10.2171373,14z/data=!3m1!4b1!4m5!3m4!1s0x12fd496f233f4109:0x3bfd822b0ccc697b!8m2!3d36.7435003!4d10.2319757";
   
}
else if ($ville=="Bizert")
{
    $localisation="https://www.google.fr/maps/place/Bizerte/@37.2811363,9.8264847,13z/data=!3m1!4b1!4m5!3m4!1s0x12e31e4db2105f13:0xf44361a00609c69e!8m2!3d37.2767579!4d9.8641609";
}
else if ($ville=="Gabes")
{
    $localisation="https://www.google.fr/maps/place/Gab%C3%A8s/@33.8893134,10.0851486,14z/data=!3m1!4b1!4m5!3m4!1s0x12556fc5487bd237:0x4980e09bdb547a86!8m2!3d33.888077!4d10.0975221";
}
else if ($ville=="Kairouan")
{
    $localisation="https://www.google.fr/maps/place/Kairouan/@35.6734626,10.0694276,13z/data=!3m1!4b1!4m5!3m4!1s0x12fdc54531303f79:0xbba4cacca78e555e!8m2!3d35.6711663!4d10.1005469";
}
else if ($ville=="Sousse")
{
    $localisation="https://www.google.fr/maps/place/Sousse/@35.8284534,10.5480137,12z/data=!3m1!4b1!4m5!3m4!1s0x130275759ac9d10d:0x698e3915682cef7d!8m2!3d35.8245029!4d10.634584";
}
$addresse=$_POST['Adresse'];
$CodePostal=$_POST['codeP'];
$verif=0;
$pass=$_POST['mdp'];
$passCNF=$_POST['mdp2'];
$longeurKEY =15;
        $token="";
            for ($i=1;$i<$longeurKEY;$i++)
            {
                $token .= mt_rand(0,9);
            }
if (!empty($_POST['captcha']) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['tel']) && !empty($_POST['mdp']) && !empty($_POST['mdp2']) && !empty($_POST['Ville']) && !empty($_POST['Adresse']) && !empty($_POST['codeP']) ){
    $compteX=new Compte($nom,$email,$tele,$pass,$token,$verif,$ville,$addresse,$CodePostal,$localisation);
    $compteXC=new compteC();
if ($pass!=$passCNF)
{
    $erreurs['MDP']= "Les mots de passe ne sont pas identiques";
}
else{
        
    if (filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        $erreursMail=$compteXC->EmailExist($email);
        if ($erreursMail!="")
        {
            $erreurs['EMAIL']="Email existant";
        }
}
else $erreurs['Email_valid']="L adresse email est invalide";

 if (strlen($tele) != 8 || !is_numeric($tele) )
 {
     $erreurs['tele']="Numero de telephone invalide";
 }

 if (strlen($CodePostal)!=4)
 {
     $erreurs['CodeP']="Code postal invalid";
 }

 if ($_POST['captcha']!=$_SESSION['captcha'])
 {
     $erreurs['captcha']="code captcha invalide";
 }

}


if (count($erreurs)===0)
 {
     
    $compteXC->ajouterCompte($compteX);

//-------------------------------validation par mail----------------------

$_SESSION['email']=$_POST['email'];
$_SESSION['IDmembre']=$_POST['IDmembre'];


//--------------------------------------------------------------------------------
$compteXC->envoyerMail($email);



header('location:index.php'.$_SESSION['IDmembre']);
         
                        
        

//----------------------------------------------------------------------

     

     exit();
 }

}
else{
    $erreurs['vide']="Tous les champs doivent etre completes";
}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/sign.css">

    <title>Document</title>
<style>

.navigation{
  background-color:black;
  opacity:0.9;
    height:50px;
    width:100%;
}

.navigation>a{
    color:white;
    font-weight:bold;
    text-decoration:none;
    display: inline-block;
	padding: 15px 13px;
    color: #FFF;
    font-weight:bold;
    font-size:18px;

}

.navigation>a:hover{
    color: #60adde;
    
}

.liste{
    width:100%;
    height:45px;
    font-size:18px;
    background: rgba(0,0,0,0.10);
    color:gray;
    margin-left:6px;
    margin-top:8px;
    margin-bottom:8px;
}

.para{
    color:#00AA00;
    font-size:15px;
    margin-left:9px;

}

</style>

</head>
<body>
<nav class="navigation">
    <a href="index.php"><< Revenir vers le site </a>
</nav>
<div class="wrap">
    <h2>S'inscrire</h2>
    <form  method="POST" action="sign.php" >

        <input  type="text" placeholder="Nom" name="nom" value="<?php if (isset($nom)){echo $nom;} ?>" >
        <input type="text" placeholder="E-mail"   name="email" value="<?php if (isset($email)){echo $email;} ?>" >
        <input type="text"  placeholder="(+216)xxxxxxx" name="tel" value="<?php if (isset($tele)){echo $tele;} ?>" >
        
                <select name="Ville" class="liste">
        <option value="Ariena">Ariena</option>
        <option value="Beja">Beja</option>
        <option value="BenArous">BenArous</option>
        <option value="Bizert">Bizert</option>
        <option value="Gabes">Tunis</option>
        <option value="Kairouan">Kairouan</option>
        <option value="Sousse">Sousse</option>

        
        </select>
        <p class="para" >*Cette liste contient seulemant les gouvernerats dont on dispose un local  </p>
        <input type="text" placeholder="Adresse" name="Adresse" >
        <input type="text" placeholder="Code postal" name="codeP">
        <input type="password" placeholder="Mot de passe" name="mdp" >
        <input type="password" placeholder="Confimer mot de passe" name="mdp2"  >
        <table>
        <tr>
        <td> <img src="captcha.php" style="border-radius:10px;"></td>
        <td><input type="text" name="captcha" placeholder="tapez le code"> </td>
         </tr>
         </table>
        <?php if (count($erreurs)>0):?>
        <div class="alert alert-danger" id="ERR" role="alert">
        <?php foreach($erreurs as $erreur): ?>
            <li><?php echo $erreur;?></li>
        <?php endforeach; ?>
        </div>
        <?php endif; ?>
                
        <input type="submit" value="S'inscire" name="validation">

    </form>
</div>

</body>
</html>