<?PHP

include "../entities/promotion.php";
include "../core/produitC.php";

var_dump($_POST);
if (isset($_POST['dated']) and isset($_POST['datef']) and isset($_POST['solde']) and isset($_POST['product_id'])){
$promotion=new promotion($_POST['dated'],$_POST['datef'],$_POST['solde'],$_POST['product_id']);
var_dump($promotion);


//Partie2
//Partie3
$produit=new ProduitC();
$promotion1C=new PromotionC();
var_dump($promotion1C);
/*die("fin ");*/
$promotion1C->ajouterPromotion($promotion);

$promotion1C->setmail($promotion->getProductId());







$produit->updatetat($_POST['product_id']);
header('Location: list-off-promotion.php');
  
}else{
  echo "vérifier les champs";
}
//*/
?>