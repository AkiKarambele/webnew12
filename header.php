<header>

<input type="checkbox" name="" id="toggler">
<label for="toggler" class="fas fa-bars"></label>

<a href="#" class="logo" style="text-decoration: none;">Fluffy Paws<span>.</span></a>

<nav class="navbar">
    <a href="index.php">home</a>
    <a href="#about">about</a>
    <!--<a href="#products">products</a> -->
    <a href="product.php">products</a>
    <a href="review.php">review</a>
    <a href="contact.php">contact</a>
</nav>
<?php
    include 'db/db1.php';
  $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
  $row_count = mysqli_num_rows($select_rows);
  if($row_count==0){
    $row_count="";
}
  ?>
<div class="icons" style="display: flex; flex-direction: row; position: relative; align-items: center;">

 
<?php
 if($_GET(sucess)){
 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){ 
  echo '<a style="text-decoration:none;" href="logout.php" class="btn1">Log Out</a>
  <div class="icons" style="display: flex; flex-direction: row; position: relative;">
    <P style="margin-right: 4px; ">
    <a href="cart.php" class="fas fa-shopping-cart"> </a>';
     if(!$row_count==0){
    
      echo '<span style="font-size: 15px; text-align: center; align-items: center; background-color: #e84393; display: block; color: white; border-radius: 50%; width: 22px; height: 22px; position: absolute; right: 66%; bottom: 22px;"><?php echo $row_count; ?></span>';
     }echo '</p>
     </div>';
  
  
 }
 else{
  echo '<a style="text-decoration:none;" href="login.php" class="btn1">Login</a>
<a style="text-decoration:none;" href="sigh.php" class="btn1">Signup</a>';
 }
}
 ?>
</div>
</header>



