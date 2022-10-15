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

    <!-- header section starts  -->

    <?php
$servername = "localhost: 3307";
$username = "root";
$password = "";
$database = "contact";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    echo 'not connect';
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

      ?>
    <div class="icons">
        <!-- <a href="#" class="fas fa-heart"></a> -->
        <a href="#" class="fas fa-shopping-cart"> </a>
        <span><?php echo $row_count; ?></span>
        <!-- <a href="#" class="fas fa-user"></a> -->
    </div>

</header>


    <Br><Br><Br><Br>

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