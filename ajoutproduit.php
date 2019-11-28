<?PHP

include "../core/produitC.php";
include "../entities/produit.php";
if (isset($_POST['id']) and isset($_POST['nomproduit']) and isset($_POST['prix']) and isset($_POST['quantitee']) and isset($_POST['couleur'])){
$produit=new produit($_POST['id'],$_POST['nomproduit'],$_POST['prix'],$_POST['quantitee'],$_POST['couleur']);
echo $produit->getnomp();
//Partie2
//Partie3
$produit1C=new ProduitC();
var_dump($produit);
$produit1C->ajoutP($produit);
header('Location: afficherproduit.php');

}else{
  echo "vérifier les champs";
}

//*/
?>