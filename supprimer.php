<?php

                  $id=$_POST['id'];
 $host='localhost';
                  $user2='root';
                  $pass='';
                  $db='ghostoptique';
                  $co=new PDO("mysql:host=$host;dbname=$db",$user2,$pass);
                  $sql="DELETE FROM commande where IDcommande='$id'";
                  $query=$co->prepare($sql);
                  $query->execute();

                  header("location: commande.php");






?>