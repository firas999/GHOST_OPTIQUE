<?php 
session_start();
include "../core/compteC.php";
include "../entities/Compte.php";
$compteXC=new compteC();
if (isset($_POST['submit']))
{
    if (isset($_POST['email']) && !empty($_POST['email']))
    {
    $stmt=$compteXC->checkEmail($_POST['email']);
    $validerCNX=$stmt->rowCount();
    if ($validerCNX == 1)
        {
            $USER_INFO = $stmt->fetch();
            $_SESSION['email']=$USER_INFO['email'];
            $compteXC->PasswordReset($_SESSION['email']);
            header('location:recupererMDP.php?email='.$_SESSION['email']);
        }
    else {
        echo "email inexistant";
    }
}
}






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
<form method="POST">
    <h1>entrer votre email</h1>
    <input type="text" name="email">
    <input type="submit" name="submit">
    </form>
</body>
</html>