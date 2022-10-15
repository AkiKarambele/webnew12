<head>
<link rel="shortcut icon" href="images/Cute2.jpg" type="images/jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive flower website design tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
<style>
   .row .pay{
    flex:1 1 40rem;
    padding:2rem 2.5rem;
    box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1);
    border:.1rem solid rgba(0,0,0,.1);
    background: #fff;
    border-radius: .5rem;
}
.contact .row .pay .box{
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
    </style>

</head>

<?php 
  include 'db/db1.php';       
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                $sub_total = number_format($fetch_cart['price1'] * $fetch_cart['quantity']);     
           $grand_total += $sub_total;  
            };
         };
         ?>
         
<section class="contact" id="contact"style="width:50%; margin: auto;">

    <h1 class="heading"> <span> Payment </span>  </h1>

    <div class="row">
    <form action="product.php" method="post">
        <input style=" background-color: #e84393;" type="submit" href="product.php" value="Continue Shopping" class="btn">
        </form> 
        <h3 style="margin: 20px;" text-align: center;>OR</h3>
        
  <div class="pay">
   
            <h2 style="color: #e84393;">Total Patment</h2>
          
            <input type="text" value="$<?php echo $grand_total; ?>/-" class="box">
            <a href="https://paytm.com/" style="background-color: #e84393;" class="btn">Paytm</a> 
             <a href="https://www.phonepe.com/" style="background-color: #e84393;" class="btn">PhonePe</a> 
            
            </div>
  
    </div>

</section>