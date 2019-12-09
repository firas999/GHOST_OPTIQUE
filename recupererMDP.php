<?php 
include "../core/compteC.php";
include "../entities/Compte.php";
session_start();
if (isset($_SESSION['email']))
{
    if (isset($_POST['submit'])){
    if (isset($_POST['pass']) && !empty($_POST['pass']) && isset($_POST['passCNF']) && !empty($_POST['passCNF']) && $_POST['pass']==$_POST['passCNF'])
    {
        $compteXC=new compteC();
        $compteXC->modfiermotdepasse($_POST['pass'],$_SESSION['email']);
    }
    else {
        echo "non";
    }
    // $compteXC=new compteC();
    // $email= urldecode($_SESSION['email']);
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/CNF.css">
    <title>Document</title>
</head>
<body>

<form method="POST">
<input type="text" name="pass">
<input type="text" name="passCNF">
<input type="submit" name="submit" >

</form>
    <!-- <div class="line">
        <p><?php//  echo $_GET['email']; echo "<br>"; echo "votre email est confirmé <br> ";?></p>
    </div> -->
</body>
</html>