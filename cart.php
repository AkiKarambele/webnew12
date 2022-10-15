

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="images/Cute2.jpg" type="images/jpg">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/main.css">
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
}

.Bproducts .box-container .box .image .icons .cart-btn{
    border-left: .1rem solid #fff7;
    border-right: .1rem solid #fff7;
    width:100%;
}

.Bproducts .box-container .box .image .icons a:hover{
    background:#333;
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
.afg{
    position: relative;

}
.afg img{
    width: 100%;
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


include 'db/db1.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
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
        <a href="#review">review</a>
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

<div class="container">

<section class="shopping-cart">
<br>
<br><br>
   <h1 class="heading">Shopping <span style="color: #e84393;">cart</span></h1>

   <table>

      <thead>
         <th style="background-color: #e84393;">image</th>
         <th style="background-color: #e84393;">name</th>
         <th style="background-color: #e84393;">price</th>
         <th style="background-color: #e84393;">quantity</th>
         <th style="background-color: #e84393;">total price</th>
         <th style="background-color: #e84393;">action</th>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <td class="afg"><img src="images/<?php echo $fetch_cart['img'];?>" width="100" height="100" alt=""></td>
            <td><?php echo $fetch_cart['namep']; ?></td>
            <td>$<?php echo number_format($fetch_cart['price1']); ?>/-</td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input class="rty" style="border: 2px solid #e84393; color: #e84393; background-color: white;" type="submit" value="update" name="update_update_btn">
               </form>   
            </td>
            <td>$<?php echo $sub_total = number_format($fetch_cart['price1'] * $fetch_cart['quantity']); ?>/-</td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('Are You Sure?')" class="delete-btn"> <i class="fas fa-trash"></i> remove</a></td>
         </tr>
         <?php
           $grand_total += $sub_total;  
            };
         };
         ?>
         <tr class="table-bottom">
            <td><a href="product.php" class="option-btn rty" style="margin-top: 0; border: 2px solid #e84393; color: #e84393; background-color: white;">continue shopping</a></td>
            <td colspan="3">grand total</td>
            <td>$<?php echo $grand_total; ?>/-</td>
            <td><a href="cart.php?delete_all" onclick="return confirm('Are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> delete all </a></td>
         </tr>

      </tbody>

   </table>

   <div class="checkout-btn">
      <a style="background-color: #e84393;" href="addcart.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">Procced to Payment</a>
   </div>

</section>

</div>
   
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>