<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="images/Cute2.jpg" type="images/jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fluffy Paws</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php include 'db/db.php';?>
    <!-- header section starts  -->
<?php
include 'db/db1.php';?>
<?php
   
if($_SERVER['REQUEST_METHOD']=='POST')
{  
    $name=$_POST['name1'];
    $email=$_POST['email'];
    $num=$_POST['num'];
    $msg=$_POST['msg'];

   
    
    $sql="INSERT INTO `contactus` (`name`, `email`, `number`, `msg`, `datetime`) VALUES ( '$name', '$email', '$num', '$msg', current_timestamp())";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo'<script> alert("Thank You.."); </script>';
    }
    else{
        echo'<div> error </div>'.mysqli_error($conn);
    }
}


?>
<header>

<input type="checkbox" name="" id="toggler">
<label for="toggler" class="fas fa-bars"></label>

<a href="#" class="logo">Fluffy Paws<span>.</span></a>

<nav class="navbar">
    <a href="index.php">home</a>
    <a href="#about">about</a>
    <!--<a href="#products">products</a> -->
    <a href="product.php">products</a>
    <a href="review.php">review</a>
    <a href="contact.php">contact</a>
</nav>
<?php
  
  $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
  $row_count = mysqli_num_rows($select_rows);
  if($row_count==0){
    $row_count="";
}
  ?>
<div class="icons" style="position: relative;">
    <!-- <a href="#" class="fas fa-heart"></a> -->
    <a href="cart.php" class="fas fa-shopping-cart"> </a>
    <?php if(!$row_count==0){
    ?>
    <span style="font-size: 15px; text-align: center; alighn-items: center; background-color: #e84393; display: block; color: white; border-radius: 50%; width: 22px; height: 22px; position: absolute; right: -12px; bottom: 15px;"><?php echo $row_count; ?></span>
   <?php
   }
   ?>
    <!-- <a href="#" class="fas fa-user"></a> -->
</div>

</header>


    <Br><Br><Br><Br>

        <!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span> contact </span> us </h1>

    <div class="row">

    <form action="contact.php" method="post">
   
    <input type="text" name="name1" placeholder="name" class="box" autocomplete="off">
            <input type="email" name="email" placeholder="email" class="box" autocomplete="off">
            <input type="number" name="num" placeholder="number" class="box" autocomplete="off">
            <textarea name="msg" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <div class="image">
            <img src="images/Cute2-removebg-preview.png" alt="">
        </div>

    </div>

</section>

<!-- contact section ends -->
