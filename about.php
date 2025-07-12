<?php

include 'components/connection.php';
?>
<style       type="text/css">
             <?php include 'style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewellery Shop - about us page</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php include 'components/header.php'; ?>
    <div class="main">
           <div class="banner">
            <h1> about us</h1>
</div>
<div class ="title2">
    <a href = "home.php">home</a><span>about</span>
</div>
<div class ="about-category">
    <div class="box">
        <img src="img/3.webp">
        <div class="detail">
            <span>coffee</span>
            <h1>lemon green</h1>
            <a href="view_products.php" class="btn"> shop now</a>
        </div>
    </div>
    <div class="box">
        <img src="img/about.webp">
        <div class="detail">
            <span>coffee</span>
            <h1>lemon Teaname</h1>
            <a href="view_products.php" class="btn"> shop now</a>
        </div>
    </div>
     
     <div class="box">
        <img src="img/2.webp">
        <div class="detail">
            <span>coffee</span>
            <h1>lemon Teaname</h1>
            <a href="view_products.php" class="btn"> shop now</a>
        </div>
    </div>
     
<div class="box">
        <img src="img/1.webp">
        <div class="detail">
            <span>coffee</span>
            <h1>lemon green</h1>
            <a href="view_products.php" class="btn"> shop now</a>
        </div>
    </div>
     
     
</div>
        
<section class="services">
    <div class="title">
        <img src="img/download1.png" class="logo">
        <h1>why choose us</h1>
        <p>lorem ishdfgssmhjsg ,sdhfg,shf shd,hfdhgf ,shfh,sdf ,fdhbghhh</p>

    </div>
            <div class="box-container">
                <div class="box">
                    <img src="img/icon2.png">
                    <div class="detail">
                        <h3>Great Servings</h3>
                        <p>Save big for every order</p>
                    </div>
                </div>
                <div class="box">
                    <img src="img/icon1.png">
                    <div class="detail">
                        <h3>24*7 support</h3>
                        <p>One-on-one support</p>
                    </div>
                </div>
                <div class="box">
                    <img src="img/icon0.png">
                    <div class="detail">
                        <h3>Gift Vouchers</h3>
                        <p>Vouchers on every festivals</p>
                    </div>
                </div>
                <div class="box">
                    <img src="img/icon.png">
                    <div class="detail">
                        <h3>Worldwide Delivery</h3>
                        <p>Dropship worldwide</p>
                    </div>
                </div>
            </div>
        </section>
        <div class ="about">
            <div class="row">
                <div class="img-box">
                <img src ="img/c.jpg">
            </div>
            <div class="detail">
    <h1>Visit our beautiful showroom</h1>
    <p>
our showroom is an expression of what we love doing;being creative with floral and 
plant arrangements.whether you are looking for a florist for your perfect wedding,
or just want to uplift any room with some one of a kind living decor,Blossom 
with love can help.</p>
<a href="view_products.php" class ="btn">shop now</a>

</div>
</div>
 </div>
 <div class ="testimonial-container">
    <div class="title">
        <img src ="img/download1.png" class="logo">
        <h1>what people say about us </h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsa modi distinctio accusantium 
            dignissimos odio expedita itaque, nihil tenetur esse, doloremque minus dolores repellat,
             quidem fugiat illum? Quisquam, impedit consequatur.</p>
        
</div>        
             <div class ="container">
             <div class="testimonial-item active">
                <img src ="img/01.jpg">
                <h1>sara smith</h1>
                <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                    tempor incidiunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud 
                    exercitation ullamco laboris nisi ut aliquip exea commodo consequat.
                </p>
               </div>
                <div class="testimonial-item">
                <img src ="img/02.jpg">
                <h1>jone smith</h1>
                <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                    tempor incidiunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud 
                    exercitation ullamco laboris nisi ut aliquip exea commodo consequat.
                </p>
        </div>
             <div class="testimonial-item">
                <img src ="img/03.jpg">
                <h1>selena smith</h1>
                <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                    tempor incidiunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud 
                    exercitation ullamco laboris nisi ut aliquip exea commodo consequat.
                </p>
            </div>
<div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i>  </div>
<div class="right-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i>  </div>
            </div>
       
    </div>
    <?php include 'components/footer.php'; ?>
    </div>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="http://localhost/GREEN-TEA-SHOP-WEBSITE/script.js"></script>

    <!-- Alert system -->
    <?php include 'components/alert.php'; ?>

</body>

</html>