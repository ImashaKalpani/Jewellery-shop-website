<?php

include 'components/connection.php';
?>
<style type="text/css">
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
        <div class="title2">
            <a href="home.php">home</a><span>/ about</span>
        </div>
        <div class="about-category">
            <div class="box">
                <img src="img/product_cont.jpg" style="opacity: 0.8; height: 270px; overflow: hidden;">
                <div class="detail">
                    <span>HANDMADE RINGS</span>
                    <h1>Timeless Beauty</h1>
                    <a href="view_products.php" class="btn"> shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="img/home3.jpg" style="opacity: 0.8; height: 270px; overflow: hidden;">
                <div class="detail">
                    <span>BEADED NECKLACES</span>
                    <h1>Nature’s Charm</h1>
                    <a href="view_products.php" class="btn"> shop now</a>
                </div>
            </div>

            <div class="box" style="height: 300px; overflow: hidden;">
                <img src="img/home2.jpg" style="height: 100%; object-fit: cover;  width:345px; opacity: 0.8;">
                <div class="detail">
                    <span>PEARL RINGS</span>
                    <h1>Elegant Touch</h1>
                    <a href="view_products.php" class="btn"> shop now</a>
                </div>
            </div>

            <div class="box" style="height: 300px; overflow: hidden;">
                <img src="img/home4.jpg" style="height: 100%; object-fit: cover; opacity:0.8;">
                <div class="detail">
                    <span>NECKLACES SETS</span>
                    <h1>Grace in Gold</h1>
                    <a href="view_products.php" class="btn"> shop now</a>
                </div>
            </div>


        </div>

        <section class="services">
            <div class="title">
                <img src="img/download1.png" class="logo">
                <h1>why choose us</h1>
                <p>Crafted for Those Who Expect More.</p>

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
        <div class="about">
            <div class="row">
                <div class="img-box">
                    <img src="img/home1.jpg">
                </div>
                <div class="detail">
                    <h1>Visit Our Showroom – Where Elegance Comes to Life</h1>
                    <p>We warmly invite you to visit our Aurora Ceylon showroom and experience the elegance of our handmade jewellery up close. Discover the beauty, craftsmanship, and stories behind each piece in person. Whether you're looking for something special or simply wish to explore, our team is here to welcome you with a smile. Come feel the sparkle!</p>
                    <a href="view_products.php" class="btn">shop now</a>

                </div>
            </div>
        </div>
        <div class="testimonial-container">
            <div class="title">
                <img src="img/download1.png" class="logo">
                <h1>what people say about us </h1>
                <p>At Aurora Ceylon, we take pride in crafting jewellery that speaks to the heart — and nothing makes us happier than hearing from our valued customers. From the quality of our handmade pieces to the warmth of our showroom and the ease of our online shopping experience, your kind words continue to inspire us. Here’s what some of our lovely customers have shared.</p>

            </div>
            <div class="container">
                <div class="testimonial-item active">
                    <img src="img/lady1.png">
                    <h1>Nethra Perera</h1>
                    <p>The craftsmanship is beautiful — you can tell each piece is made with love. I ordered a necklace online and it was even better in person. Packaging was lovely too!</p>
                </div>
                <div class="testimonial-item">
                    <img src="img/man1.png">
                    <h1>Hemal Sebastian</h1>
                    <p>I visited the Aurora Ceylon showroom last weekend — such a warm and elegant atmosphere. The staff were friendly and helped me choose the perfect gift. Will definitely return!</p>
                </div>
                <div class="testimonial-item">
                    <img src="img/lady2.png">
                    <h1>Sashika Godaudage</h1>
                    <p>Your website is easy to navigate, and checkout was simple. I appreciate how transparent everything is — from product details to delivery updates. Great job!</p>
                </div>
                <div class="testimonial-item">
                    <img src="img/man2.png">
                    <h1>Nadun Dias</h1>
                    <p>My earrings arrived safely and they’re exquisite! I had a quick question after ordering and your team responded right away. So impressed by the attention to detail.</p>
                </div>
                <div class="left-arrow"><i class="bx bxs-left-arrow-alt"></i></div>
                <div class="right-arrow"><i class="bx bxs-right-arrow-alt"></i></div>

            </div>

        </div>
        <?php include 'components/footer.php'; ?>
    </div>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>


    <!-- Alert system -->
    <?php include 'components/alert.php'; ?>

</body>

</html>