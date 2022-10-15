
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
<style>
:root{
    --pink:#e84393;
}

*{
    margin:0; padding:0;
    box-sizing: border-box;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

html{
    font-size: 62.5%;
    scroll-behavior: smooth;
    scroll-padding-top: 6rem;
    overflow-x: hidden;
}
nav a{
    text-decoration: none;
}

section{
    padding:2rem 9%;
}

.heading{
    text-align: center;
    font-size: 4rem;
    color:#333;
    padding:1rem;
    margin:2rem 0;
    background:rgba(255, 51, 153,.05);
}

.heading span{
    color:var(--pink);
}

.btn{
    display: inline-block;
    margin-top: 1rem;
    border-radius: 5rem;
    background:#333;
    color:#fff;
    padding:.9rem 3.5rem;
    cursor: pointer;
    font-size: 1.7rem;
}

.btn:hover{
    background:var(--pink);
}

header{
    position: fixed;
    top:0; left:0; right:0;
    background:#fff;
    padding:2rem 9%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
}

header .logo{
    font-size: 3rem;
    color:#333;
    font-weight: bolder;
}

header .logo span{
    color:var(--pink);
}

header .navbar a{
    font-size: 2rem;
    padding:0 1.5rem;
    color:#666;
}

header .navbar a:hover{
    color:var(--pink);
}

header .icons a{
    font-size: 2.5rem;
    color:#333;
    margin-left: 1.5rem;
}

header .icons a:hover{
    color:var(--pink);
}

header #toggler{
    display: none;
}

header .fa-bars{
    font-size: 3rem;
    color:#333;
    border-radius: .5rem;
    padding:.5rem 1.5rem;
    cursor: pointer;
    border:.1rem solid rgba(0,0,0,.3);
    display: none;
}

.home{
    display: flex;
    align-items: center;
    min-height: 100vh;
    background:url(../images/bg2.png) no-repeat;
    /* background: image("home-bg.jpg"); */
    background-size: cover;
    background-position: center;
}

.home .content{
    max-width: 50rem;
}

.home .content h3{
    font-size: 6rem;
    color:#333;
}

.home .content span{
    font-size: 3.5rem;
    color:var(--pink);
    padding:1rem 0;
    line-height: 1.5;
}

.home .content p{
    font-size: 1.5rem;
    color:black;
    padding:1rem 0;
    line-height: 1.5;
}

.about .row{
    display: flex;
    align-items: center;
    gap:2rem;
    flex-wrap: wrap;
    padding:2rem 0;
    padding-bottom: 3rem;
}

.about .row .video-container{
    flex:1 1 30rem;
    position: relative;
}

.about .row .video-container video{
    width:100%;
    border:1.5rem solid #fff;
    border-radius: .5rem;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
    height: 100%;
    object-fit: cover;
}

.about .row .video-container h3{
    position: absolute;
    top:50%; transform: translateY(-50%);
    font-size: 3rem;
    background:#fff;
    width:100%;
    padding:1rem 2rem;
    text-align: center;
    mix-blend-mode: screen;
}

.about .row .content{
    flex:1 1 40rem;
}

.about .row .content h3{
    font-size: 3rem;
    color:#333;
}

.about .row .content p{
    font-size: 1.5rem;
    color:#999;
    padding:.5rem 0;
    padding-top: 1rem;
    line-height: 1.5;
}

.icons-container{
    background:#eee;
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
    padding-top: 5rem;
    padding-bottom: 5rem;
}

.icons-container .icons{
    background:#fff;
    border:.1rem solid rgba(0,0,0,.1);
    padding:2rem;
    display: flex;
    align-items: center;
    flex:1 1 25rem;
}

.icons-container .icons img{
    height:5rem;
    margin-right: 2rem;
}

.icons-container .icons h3{
    color:#333;
    padding-bottom: .5rem;
    font-size: 1.5rem;
}

.icons-container .icons span{
    color:#555;
    font-size: 1.3rem;
}

.products .box-container{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
}

.products .box-container .box{
    flex:1 1 30rem;
    box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1);
    border-radius: .5rem;
    border:.1rem solid rgba(0,0,0,.1);
    position: relative;    
}

.products .box-container .box .discount{
    position: absolute;
    top:1rem; left:1rem;
    padding:.7rem 1rem;
    font-size: 2rem;
    color:var(--pink);
    background:rgba(255, 51, 153,.05);
    z-index: 1;
    border-radius: .5rem;
}

.products .box-container .box .image{
    position: relative;
    text-align: center;
    padding-top: 2rem;
    overflow:hidden;
}

.products .box-container .box .image img{
    height:25rem;
    width:45rem;
}

.products .box-container .box:hover .image img{
    transform: scale(1.1);
}

.products .box-container .box .image .icons{
    position: absolute;
    bottom:-7rem; left:0; right:0;
    display: flex;
}

.products .box-container .box:hover .image .icons{
    bottom:0;
}

.products .box-container .box .image .icons a{
    height: 5rem;
    text-decoration: none;
    line-height: 5rem;
    font-size: 2rem;
    width:50%;
    background:var(--pink);
    color:#fff;
}
.products .box-container .box .image .icons .btn12{
    height: 5rem;
    text-decoration: none;
    line-height: 5rem;
    font-size: 2rem;
    width:50%;
    background:var(--pink);
    color:#fff;
}

.products .box-container .box .image .icons .cart-btn{
    border-left: .1rem solid #fff7;
    border-right: .1rem solid #fff7;
    width:100%;
}
.products .box-container .box .image .icons a:hover{
    background:white;
    color: var(--pink);
}
.products .box-container .box .image .icons btn12:hover{
    background:white;
    color: var(--pink);
}

.products .box-container .box .content{
    padding:2rem;
    text-align: center;
}

.products .box-container .box .content h3{
    font-size: 2.5rem;
    color:#333;
}

.products .box-container .box .content .price{
    font-size: 2.5rem;
    color:var(--pink);
    font-weight: bolder;
    padding-top: 1rem;
}

.products .box-container .box .content .price span{
    font-size: 1.5rem;
    color:#999;
    font-weight: lighter;
    text-decoration: line-through;
}

/* Brand new products............................................... */
.Bproducts .box-container{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
}

.Bproducts .box-container .box{
    flex:1 1 30rem;
    box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1);
    border-radius: .5rem;
    border:.1rem solid rgba(0,0,0,.1);
    position: relative;    
}

.Bproducts .box-container .box .discount{
    position: absolute;
    top:1rem; left:1rem;
    padding:.7rem 1rem;
    font-size: 2rem;
    color:var(--pink);
    background:rgba(255, 51, 153,.05);
    z-index: 1;
    border-radius: .5rem;
}

.Bproducts .box-container .box .image{
    position: relative;
    text-align: center;
    padding-top: 2rem;
    overflow:hidden;
}

.Bproducts .box-container .box .image img{
    height:25rem;
    width:45rem;
}

.Bproducts .box-container .box:hover .image img{
    transform: scale(1.1);
}

.Bproducts .box-container .box .image .icons{
    position: absolute;
    bottom:-7rem; left:0; right:0;
    display: flex;
}

.Bproducts .box-container .box:hover .image .icons{
    bottom:0;
}

.Bproducts .box-container .box .image .icons a{
    height: 5rem;
    line-height: 5rem;
    font-size: 2rem;
    width:50%;
    background:var(--pink);
    color:#fff;
    text-decoration: none;
}
.Bproducts .box-container .box .image .icons #not{
    height: 5rem;
    line-height: 5rem;
    font-size: 2rem;
    width:50%;
    background:var(--pink);
    color:#fff;
}

.Bproducts .box-container .box .image .icons .cart-btn{
    border-left: .1rem solid #fff7;
    border-right: .1rem solid #fff7;
    width:100%;
}

.Bproducts .box-container .box .image .icons a:hover{
    background:white;
    color: var(--pink);
}
.Bproducts .box-container .box .image .icons #not:hover{
    background:white;
    color: var(--pink);
}

.Bproducts .box-container .box .content{
    padding:2rem;
    text-align: center;
}

.Bproducts .box-container .box .content h3{
    font-size: 2.5rem;
    color:#333;
}

.Bproducts .box-container .box .content .price{
    font-size: 2.5rem;
    color:var(--pink);
    font-weight: bolder;
    padding-top: 1rem;
}

.Bproducts .box-container .box .content .price span{
    font-size: 1.5rem;
    color:#999;
    font-weight: lighter;
    text-decoration: line-through;
}


.review .box-container{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
}

.review .box-container .box{
    flex:1 1 30rem;
    box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1);
    border-radius: .5rem;
    padding:3rem 2rem;
    position: relative;
    border:.1rem solid rgba(0,0,0,.1);
}

.review .box-container .box .fa-quote-right{
    position: absolute;
    bottom:3rem; right:3rem;
    font-size: 6rem;
    color:#eee;
}

.review .box-container .box .stars i{
    color:var(--pink);
    font-size: 2rem;
}

.review .box-container .box p{
    color:#999;
    font-size: 1.5rem;
    line-height: 1.5;
    padding-top: 2rem;
}

.review .box-container .box .user{
    display: flex;
    align-items: center;
    padding-top: 2rem;
}

.review .box-container .box .user img{
    height:6rem;
    width:6rem;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 1rem;
}

.review .box-container .box .user h3{
    font-size: 2rem;
    color:#333;
}

.review .box-container .box .user span{
    font-size: 1.5rem;
    color:#999;
}

.contact .row{
    display: flex;
    flex-wrap: wrap-reverse;
    gap:1.5rem;
    align-items: center;
}

.contact .row form{
    flex:1 1 40rem;
    padding:2rem 2.5rem;
    box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1);
    border:.1rem solid rgba(0,0,0,.1);
    background: #fff;
    border-radius: .5rem;
}

.contact .row .image{
    flex:1 1 40rem;
}

.contact .row .image img{
    width: 100%;
}

.contact .row form .box{
    padding:1rem;
    font-size: 1.7rem;
    color:#333;
    text-transform: none;
    border:.1rem solid rgba(0,0,0,.1);
    border-radius: .5rem;
    margin:.7rem 0;
    width: 100%;
}

.contact .row form .box:focus{
    border-color: var(--pink);
}

.contact .row form textarea{
    height: 15rem;
    resize: none;
}

.footer .box-container{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
}

.footer .box-container .box{
    flex:1 1 25rem;
}

.footer .box-container .box h3{
    color:#333;
    font-size: 2.5rem;
    padding:1rem 0;
}

.footer .box-container .box a{
    display: block;
    color:#666;
    font-size: 1.5rem;
    padding:1rem 0;
}

.footer .box-container .box a:hover{
    color:var(--pink);
    text-decoration: underline;
}

.footer .box-container .box  img{
    margin-top: 1rem;
}

.footer .credit{
    text-align: center;
    padding:1.5rem;
    margin-top: 1.5rem;
    padding-top: 2.5rem;
    font-size: 2rem;
    color:#333;
    border-top: .1rem solid rgba(0,0,0,.1);
    padding-bottom: 9rem;
}

.footer .credit span{
    color:var(--pink);
}

.asd{
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    justify-content:center;
    width: 95%;
    margin:auto;
    
    gap: 40px;
}

.message{
   background-color: var(--blue);
   position: sticky;
   top:0; left:0;
   z-index: 10000;
   border-radius: .5rem;
   background-color: var(--white);
   padding:1.5rem 2rem;
   margin:0 auto;
   max-width: 1200px;
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap:1.5rem;
}

.message span{
   font-size: 2rem;
   color:var(--black);
}

.message i{
   font-size: 2.5rem;
   color:var(--black);
   cursor: pointer;
}

.message i:hover{
   color:var(--red);
}











/* media queries  */
@media (max-width:991px){
    
    html{
        font-size: 55%;
    }

    header{
        padding:2rem;
    }

    section{
        padding:2rem;
    }

    .home{
        background-position: left;
    }

}

@media (max-width:768px){

    header .fa-bars{
        display: block;
    }

    header .navbar{
        position:absolute;
        top:100%; left:0; right:0;
        background:#eee;
        border-top: .1rem solid rgba(0,0,0,.1);
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    header #toggler:checked ~ .navbar{
        clip-path:polygon(0 0, 100% 0, 100% 100%, 0% 100%);
    }

    header .navbar a{
        margin:1.5rem;
        padding:1.5rem;
        background:#fff;
        border:.1rem solid rgba(0,0,0,.1);
        display: block;
    }

    .home .content h3{
        font-size: 5rem;
    }

    .home .content span{
        font-size: 2.5rem;
    }

    .icons-container .icons h3{
        font-size: 2rem;
    }
    
    .icons-container .icons span{
        font-size: 1.7rem;
    }
    
}

@media (max-width:450px){
    
    html{
        font-size: 50%;
    }

    .heading{
        font-size: 3rem;
    }

}
    </style>
</head>

<body>

<?php
include 'db/db1.php';?>
<?php




if(isset($_POST['add_to_cart'])){
    $product_id = $_POST['product_id'];
    $product_price1 = $_POST['product_price1'];
    $product_image = $_POST['product_img'];
   $product_name = $_POST['product_name'];
   $product_price2 = $_POST['product_price2'];
   $product_discount = $_POST['product_discount'];
   $product_link = $_POST['product_link'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE namep = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      echo '<script>alert("Already added");</script>';
   }else{
    $insert_product = mysqli_query($conn, "INSERT INTO `cart` (`discount`,`img`, `link`, `namep`, `price1`, `price2`, `time`, `quantity`) VALUES ( '$product_discount', '$product_image', '$product_link', '$product_name', '$product_price1', '$product_price2', current_timestamp(), '$product_quantity');");
    if($insert_product){
        $message[] = 'Product added to cart succesfully';}
        else{
            $message[] = 'Product not added';
        }

 }
     
  

}


?>


  
    <!-- header section starts  -->

    
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

      <!-- header section ends -->
     <Br><Br><Br><Br>
               <!-- prodcuts section starts  -->
               <br>
<br>
               <?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>
<section class="products" id="products">


    <h1 class="heading"> latest <span>products</span> </h1>
    
    <div class="box-container">  
        <div class="asd">
    <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `product`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
            ?>
 <form action="product.php" method="post">
 
      <div class="box" style="width: 100%;">
      
            <span class="discount">-<?php echo $fetch_product['discount']; ?>%</span>
            <div class="image">
                <img src="images/<?php echo $fetch_product['img']; ?>" alt="">
                <div class="icons">
                    <!-- <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a> -->
                    <input type="hidden" name="product_id" value="<?php echo $fetch_product['id']; ?>">
                <input type="hidden" name="product_img" value="<?php echo $fetch_product['img'];?>">
                <input type="hidden" name="product_link" value="<?php echo $fetch_product['link']; ?>">
                 <input type="hidden" name="product_name" value="<?php echo $fetch_product['namep']; ?>">
                <input type="hidden" name="product_price1" value="<?php echo $fetch_product['price1']; ?>">
                <input type="hidden" name="product_price2" value="<?php echo $fetch_product['price2']; ?>">
               <input type="hidden" name="product_discount" value="<?php echo $fetch_product['discount']; ?>">
                     <input name="add_to_cart" id="not" type="submit" class="cart-btn btn12" value="Add to cart" >
                   
                     <a href="<?php echo $fetch_product['link']; ?>.php" class="cart-btn">Preview</a> 
                </div>
            </div>
            <div class="content">
                 
                <h3><?php echo $fetch_product['namep']; ?></h3>
                <div class="price">$ <?php echo $fetch_product['price1']; ?> <span>$ <?php echo $fetch_product['price2']; ?></span> </div>
            </div>
         </div>
            </form>  
            <?php
         };
      };
      ?>
 
    </div>  
    
  </div>

</section>
<section class="Bproducts" id="Bproducts">

            <h1 class="heading">Brand New <span>products</span> </h1>
        
            <div class="box-container">
            <div class="asd">
       

        
        <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `lproduct`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
            ?>
            <form action="product.php" method="post">
            <div class="box">
            <span class="discount">-<?php echo $fetch_product['discount']; ?>%</span>
            <div class="image">
                <img src="images/<?php echo $fetch_product['img']; ?>" alt="">
                <div class="icons">
                    <!-- <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a> -->
                    
                    <input type="hidden" name="product_id" value="<?php echo $fetch_product['id']; ?>">
                <input type="hidden" name="product_img" value="<?php echo $fetch_product['img'];?>">
                <input type="hidden" name="product_link" value="<?php echo $fetch_product['link']; ?>">
                 <input type="hidden" name="product_name" value="<?php echo $fetch_product['namep']; ?>">
                <input type="hidden" name="product_price1" value="<?php echo $fetch_product['price1']; ?>">
                <input type="hidden" name="product_price2" value="<?php echo $fetch_product['price2']; ?>">
               <input type="hidden" name="product_discount" value="<?php echo $fetch_product['discount']; ?>">
                     <input name="add_to_cart" id="not" type="submit" class="cart-btn btn12" value="Add to cart" >
                     <a href="<?php echo $fetch_product['link']; ?>.php" class="cart-btn">Preview</a> 
                </div>
            </div>
            <div class="content">
                <h3><?php echo $fetch_product['namep']; ?></h3>
                <div class="price"> $ <?php echo $fetch_product['price1']; ?> <span><?php echo $fetch_product['price2']; ?></span> </div>
            </div>
        </div>
         </form>
         <?php
         };
      };
      ?>
  </div>
    </div>
    </section>
 
</body>
</html>


