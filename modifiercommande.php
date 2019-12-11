
<?php
session_start();
$id=$_SESSION['hi'];
$user2='root';
                   $email=$_POST['email'];
                  $adress=$_POST['adress'];
                  $nomprod=$_POST['nomprod'];
                  $prix=$_POST['prix'];
                  $tel=$_POST['telephone'];
                  $pass='';
                  $db='ghostoptique';
                  $co=new PDO("mysql:host=$host;dbname=$db",$user2,$pass);
                  
              $sql = "UPDATE commande SET email='$email'  ,adresse='$adress',nomproduit='$nomprod',prix='$prix' , telephone='$tel' WHERE IDcommande='$id'";
                  $query=$co->prepare($sql);
                  $query->execute();
                    header("location: ../views/commande.php");



                  ?>