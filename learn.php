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

    <!-- header section starts  -->

  
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


    <Br><Br><Br><Br>

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