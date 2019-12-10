<?PHP
include "../core/promotionC.php";

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

$produitC = $produit->getProduitById($_POST['product_id']);
$a=$POST_['solde'];


$co=new PDO('mysql:host=localhost;dbname=ghostoptique', 'root', '');


$header="MIME-Version: 1.0\r\n";
$header.='From:"Yasmine.com"<support@yasmine.com>'."\n" ;
$header.='content-Type:text/html; charset="utf-8"'."\n" ;
$header.='content-transfer-Encoding: 8bit' ;
$message='

<html> 
<body>
<div align="center">
<img src="../stylesheets/img/cancel.png">

chér client , nous avons le plaisir de vous annoncer une promotion sur notre produit 
<br />

</div>
</body>
</html> 



'
.$produitC[3] ;

//		class Sorter {};
		$data = $co->query("SELECT email from membre ")->fetchAll();
        $i=0;
        foreach ($data as $row) {
        	$listmail= $row;
        	mail($row[0],"promo",$message,$header);
        }








$produit->updatetat($_POST['product_id']);
header('Location: list-off-promotion.php');
  
}else{
  echo "vérifier les champs";
}
//*/
?>