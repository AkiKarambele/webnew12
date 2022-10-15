<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive flower website design tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  --><?php
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
        <a href="">home</a>
        <a href="about.php">about</a>
        <!--<a href="#products">products</a> -->
        <a href="product.php">products</a>
        <a href="review.php">review</a>
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
<br><br>
<!-- header section ends -->

<section class="about" id="about">

    <h1 class="heading"> <span> Cat </span> Clothes </h1>

    <div class="row">

        <div class="box-container">

            <div class="box">
                <!-- <span class="discount">-10%</span> -->
                <div class="image">
                    <img src="images/CatClothes.png" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <!--<a href="#" class="fas fa-share"></a> -->
                    </div>
                </div>
                <div class="content">
                    <h3>Cat Clothes</h3>
                    <div class="price"> $12.99 <span>$15.99</span> </div>
                </div>
            </div>
    

        <div class="content">
            <h3>Description</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem cumque sit nemo pariatur corporis perspiciatis aspernatur a ullam repudiandae autem asperiores quibusdam omnis commodi alias repellat illum, unde optio temporibus.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium ea est commodi incidunt magni quia molestias perspiciatis, unde repudiandae quidem.</p>
            <a href="" class="btn">Add Cart</a>
        </div>

    </div>

</section>