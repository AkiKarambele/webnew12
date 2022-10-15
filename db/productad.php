<?php include 'db.php';?>
<?php




if(isset($_POST['add_to_cart'])){
    $product_name = $_POST['product_id'];
    $product_price1 = $_POST['product_price1'];
    $product_image = $_POST['product_img'];
   $product_name = $_POST['product_name'];
   $product_price2 = $_POST['product_price2'];
   $product_discount = $_POST['product_discount'];
   $product_link = $_POST['product_link'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE namep = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      echo '<script>alert("sorry already added");</script>';
   }else{
     
      $insert_product = mysqli_query($conn, "INSERT INTO `cart` ( `discount`, `img`, `link`, `namep`, `price1`, `price2`, `time`, `quantity`) VALUES ( '$product_discount', '$product_image', '$product_link', '$product_name', '$product_price1', '$product_price1', current_timestamp() , `$product_quantity` );");
      if($insert_product){
        header("Location: product.php");
      echo '<script>alert(" added");</script>';}
   }

}

?>