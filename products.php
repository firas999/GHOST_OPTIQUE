<?php
if(isset($_POST['price_range'])){
    
    //Include database configuration file
    include('dbConfig.php');
    
    //set conditions for filter by price range
    $whereSQL = $orderSQL = '';
    $priceRange = $_POST['price_range'];
    if(!empty($priceRange)){
        $priceRangeArr = explode(',', $priceRange);
        $whereSQL = "WHERE price BETWEEN '".$priceRangeArr[0]."' AND '".$priceRangeArr[1]."'";
        $orderSQL = " ORDER BY price ASC ";
    }else{
        $orderSQL = " ORDER BY created DESC ";
    }
    
    //get product rows
    $query = $db->query("SELECT * FROM tbl_product $whereSQL $orderSQL");
    
    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
    ?>
     
            <h2 class="A1"><?php echo $row["name"]; ?></h2>
			<img width="80px" height ="80px" src="images/<?php echo $row["image"]; ?>" class="img-responsive"/><br />
            <h4 class="A1"> <?php echo $row["price"]; ?> TND </h4>
      
    <?php }
    }else{
        echo 'Product not found';
		echo '<img src="images/smile.png">'; 
    }
}
?>