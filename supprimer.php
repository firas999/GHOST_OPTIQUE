<?php

  $id=$_POST['id'];
if($_POST['submit']=='modifier')
{
session_start();
$_SESSION['hi']=$id;
echo "trash";
header("location: ../views/modifiercommande.html");	
}
else
{
                  $id=$_POST['id'];
 $host='localhost';
                  $user2='root';
                  $pass='';
                  $db='ghostoptique';
                  $co=new PDO("mysql:host=$host;dbname=$db",$user2,$pass);
                  $sql="DELETE FROM commande where IDcommande='$id'";
                  $query=$co->prepare($sql);
                  $query->execute();

                  header("location: ../views/commande.php");
              }






?>