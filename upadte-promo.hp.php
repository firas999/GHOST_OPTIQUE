<?php

include "../core/promotionC.php";
include "../entities/promotion.php";

if (isset($_POST['dated']) and isset($_POST['datef']) and isset($_POST['solde']) and isset($_POST['product_id'])){

	$promotion=new promotion($_POST['dated'],$_POST['datef'],$_POST['solde'],$_POST['product_id']);
	$promotionC->updatePromotion($promotion);
}
?>