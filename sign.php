<?php 
$bdd = new PDO('mysql:host=127.0.0.1;dbname=ghostoptique','root','');
if (isset($_POST["valdiation"]))
{
    echo "ok";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/sign.css">
</head>
<body>
    <div class="wrap">
        <h2>S'inscrire</h2>
        <form  method="POST">
            <input type="text" placeholder="Nom" required>
            <input type="text" placeholder="Prenom" required>
            <input type="text" placeholder="Pseudo" required>
            <input type="email" placeholder="e-mail" required>
            <input type="password" placeholder="mot de passe" required> 
            <input type="password" placeholder="confimer mot de passe" required> 
            <input type="submit" value="S'inscire" name="validation">

        </form>
    </div>
</body>
</html>