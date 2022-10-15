


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
<?php
include 'db/db1.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{  
    $name=$_POST['name1'];
    $email=$_POST['email'];
    $num=$_POST['num'];
    $msg=$_POST['msg'];

   
    
    $sql="INSERT INTO `contactus` (`name`, `email`, `number`, `msg`, `datetime`) VALUES ( '$name', '$email', '$num', '$msg', current_timestamp())";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo'<script> alert("Thank You."); </script>';
    }
    else{
        echo'<div> error </div>'.mysqli_error($conn);
    }
}



?>
<!-- header section starts  -->




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

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Fluffy Paws</h3>
        <span>Time spent with pets is never wasted</span>
        <p>Introducing cute pet products, especially for your spoiled cats and savage dogs. Starting from nutritious foods to delicious treats and going far up to healthcare and grooming, everything you need to ensure your pets' good well-being is available at Fluffy Paws.</p>
        <a href="product.php" class="btn">shop now</a>
    </div>
    
</section>
<!-- Make Your House Their Home -->

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span> about </span> us </h1>

    <div class="row">

        <div class="video-container">
            <video src="images/pexels-thirdman-8944044.mp4" loop autoplay muted></video>
            <h3>Best Pet Products</h3>
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem cumque sit nemo pariatur corporis perspiciatis aspernatur a ullam repudiandae autem asperiores quibusdam omnis commodi alias repellat illum, unde optio temporibus.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium ea est commodi incidunt magni quia molestias perspiciatis, unde repudiandae quidem.</p>
            <a href="learn.php" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <img src="images/icon-1.png" alt="">
        <div class="info">
            <h3>free delivery</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-2.png" alt="">
        <div class="info">
            <h3>10 days returns</h3>
            <span>moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-3.png" alt="">
        <div class="info">
            <h3>offer & gifts</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-4.png" alt="">
        <div class="info">
            <h3>secure payments</h3>
            <span>protected by paypal</span>
        </div>
    </div>
   
</section>

<!-- icons section ends -->

<!-- prodcuts section starts  -->


</section>

<!-- prodcuts section ends -->

<!-- review section starts  -->

<section class="review" id="review">

<h1 class="heading"> customer's <span>review</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>We love the pet beddings from Fluffy Paw! These beddings are the most reasonably priced and best quality available for pets, according to the company study we conducted. The dogs adore it and the drain is very swift! This item and the website are both ones I wholeheartedly endorse.</p>
        <div class="user">
            <img src="images/pic-1.png" alt="">
            <div class="user-info">
                <h3>rochelle fernandes</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>We love the pet beddings from Fluffy Paw! These beddings are the most reasonably priced and best quality available for pets, according to the company study we conducted. The dogs adore it and the drain is very swift! This item and the website are both ones I wholeheartedly endorse.</p>
        <div class="user">
            <img src="images/Erica.png" alt="">
            <div class="user-info">
                <h3>Erica Andrews</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>The cat food I bought from Fluffy Paws is being absolutely loved by my cats. It is genuinely fantastic. My cat used to throw half of her food away before, but now she actually licks the bowl clean! She was very skinny but now she has become a lot chubby and cute which is pretty noticeable by my family and friends. This lovely website is highly recommended.</p>
        <div class="user">
            <img src="images/pic-2.png" alt="">
            <div class="user-info">
                <h3>Maria Simmons</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Since I've had this Spikey Ball for six months, I believe that this is the ideal moment to write a review of it. One of the best Fluffy Paws products I've ever purchased is this one. Usually when I buy him toys from other websites, he destroys them in a matter of seconds. I'm genuinely annoyed by it. However, the spikey ball is incredibly durable. We appreciate Fluffy Paws!</p>
        <div class="user">
            <img src="images/pic-3.png" alt="">
            <div class="user-info">
                <h3>john deo</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

</div>
    
</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span> contact </span> us </h1>

    <div class="row">

    <form action="index.php" method="post">
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

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">products</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#">my account</a>
            <a href="#">my order</a>
            <a href="#">my favorite</a>
        </div>

        <div class="box">
            <h3>locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+91 8978654367</a>
            <a href="#">fluffypaws@gmail.com</a>
            <a href="#">mumbai, india - 400104</a>
            <img src="images/payment.png" alt="">
        </div>

    </div>

    <div class="credit"> created by <span> fluffy paws team </span> | all rights reserved </div>
   
          



</div>
</section>

<!-- footer section ends -->


















    
</body>
</html>