<?php
include "../core/produitC.php";
include "../entities/promotion.php";

if (isset($_POST['dated']) and isset($_POST['datef']) and isset($_POST['solde']) and isset($_POST['product_id']) and isset($_POST['promotion_id'])){

	$promotion=new promotion( $_POST['dated'],$_POST['datef'],$_POST['solde'],$_POST['product_id'],$_POST['promotion_id']);
	$promotionC=new promotionC();
	$promotionC->updatePromotion($promotion);
	header('Location: list-off-promotion.php');
}
?>