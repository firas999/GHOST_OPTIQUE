<?php

        $host='localhost';
                  $user2='root';
                  $pass='';
                  $db='ghostoptique';
                  $co=new PDO("mysql:host=$host;dbname=$db",$user2,$pass);
                  $nb=rand(10000,99999);
                  $email=$_POST['email'];
                  $adress=$_POST['adress'];
                  $nomprod=$_POST['nomprod'];
                  $prix=$_POST['prix'];
                  $tel=$_POST['telephone'];


                $holy="INSERT INTO commande (IDcommande,email,adresse,telephone,nomproduit,prix) values ('$nb','$email','$adress','$tel','$nomprod','$prix')";
                $query=$co->prepare($holy);
                $query=$co->query($holy);
                header("location: ../views/index.html");






?>