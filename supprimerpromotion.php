<?PHP
include "../core/produitC.php";

$promotionC=new PromotionC();
if (isset($_POST["id"])){
    $promotionC->supprimerPromotion($_POST["id"]);
    header('Location: list-off-promotion.php');
}

?>