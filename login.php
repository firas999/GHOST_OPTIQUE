<?php

$host='localhost'; 
$user2='root';
$pass='';
$occ=0; 
$db='ghostoptique'; 
$login=$_POST['login'];
$password=$_POST['password'];
echo $login.$password;
$co=new PDO("mysql:host=$host;dbname=$db",$user2,$pass);
$sql="SELECT * FROM login WHERE login='$login' "; 
$query=$co->prepare($sql); 
$query->execute(); 
$occ=0; 
if ($data=$query->fetch()) 
{
if($data['mdp']==$password)
{
header("location: commande.php");	
$occ++;
}
else
{
header("location: login.html");	
}	
}
if($occ==0)
{
header("location: login.html");		
}


?>