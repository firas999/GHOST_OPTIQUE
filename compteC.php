<?php 
include '../config.php';
class compteC{
  function supprimerCompte($ID){
    $sql="DELETE FROM membre where IDmembre = '$ID'";
    $sql1="DELETE FROM LivraisonMembre where IDmembre = '$ID'";
    $db = config::getConnexion();
    $req=$db->prepare($sql);
    $req1=$db->prepare($sql1);
    try{
        $req->execute();
        $req1->execute();
       
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}


function afficherCompte($ID){
		
    $sql="SElECT * From membre WHERE IDmembre LIKE '%$ID%' OR nom LIKE '%$ID%' OR email LIKE '%$ID%' OR tele LIKE '%$ID%'";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}

function GET_ID($ID){
		
    $sql="SElECT IDmembre From membre WHERE IDmembre LIKE '%$ID%' OR nom LIKE '%$ID%' OR email LIKE '%$ID%' OR tele LIKE '%$ID%'";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}

function afficherCompte_L($ID){
    $i=0;
    $db = config::getConnexion();    
    while ($IDS=$ID->fetch())
   {
     $sql[$i]="SElECT * From LivraisonMembre WHERE IDmembre = '$IDS[IDmembre]'";
     $liste[$i]=$db->query($sql[$i]);
     $i++;
    }
    
    try{
   
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}

function NBcompte()
{
    $sql="SElECT IDmembre From membre";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	

}

function supprimerCompte_L($ID){
    $sql="DELETE FROM LivraisonMembre where IDmembre = '$ID'";
    $db = config::getConnexion();
    $req=$db->prepare($sql);
    try{
        $req->execute();
      
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}



function afficherBase($depart,$CPP){
    $sql="SElECT * From membre ORDER BY IDmembre ASC LIMIT $depart,$CPP";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}

function afficherBase_L($depart,$CPP){
    $sql="SElECT * From LivraisonMembre ORDER BY IDmembre ASC LIMIT $depart,$CPP";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}

function AfficherRecent($depart,$CPP)
{
    $sql="SElECT * From membre ORDER BY IDmembre DESC LIMIT $depart,$CPP";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	

}

function AfficherRecentL($depart,$CPP)
{
    $sql="SElECT * From LivraisonMembre ORDER BY IDmembre DESC LIMIT $depart,$CPP";
    $db = config::getConnexion($depart,$CPP);
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	

}

function AfficherAncien($depart,$CPP)
{
    $sql="SElECT * From membre ORDER BY IDmembre ASC LIMIT $depart,$CPP";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	

}

function AfficherAncienL($depart,$CPP)
{
    $sql="SElECT * From LivraisonMembre ORDER BY IDmembre ASC LIMIT $depart,$CPP";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	

}

function AfficherNonActif()
{
    $sql="SElECT * From membre WHERE verif = 0";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	

}

function AfficherActif()
{
    $sql="SElECT * From membre WHERE verif = 1";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	

}




}
?>

