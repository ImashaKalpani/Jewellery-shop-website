<?php

include 'components/connection.php';
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("location: login.php");
}

?>


<!DOCTYPE html>

<style type="text/css">
    <?php include 'style.css'; ?>
</style>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewellery Shop - Home</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <?php include 'components/header.php'; ?>

    <div class="main">

        <section class="home-section">
    <div class="slider">

        <!-- Slide 1 -->
                <div class="slider__slider slide1">
                    <video autoplay muted loop playsinline class="background-video">
                        <source src="img/video1.mp4" type="video/mp4">
                    </video>
                    <div class="overlay"></div>
                    <div class="slide-detail">
                <div class="container">
                    <h1>Welcome To My Shop</h1>
                    <p>Here, every piece is crafted with heart, inspired by nature, and made to celebrate your unique beauty...</p>
                    <a href="view_products.php" class="btn">Shop Now</a>
                </div>
                </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>

        <!-- Slide 2 -->
        <div class="slider__slider slide2">
            <video autoplay muted loop playsinline class="background-video">
                <source src="img/video1.mp4" type="video/mp4">
            </video>
            <div class="overlay"></div>
            <div class="slide-detail">
                <div class="container">
                <h1>Crafted with Love</h1>
                <p>Every piece tells a story. Our handmade jewellery is carefully designed and crafted with love...</p>
                <a href="view_products.php" class="btn">Shop Now</a>
            </div>
                </div>
            <div class="hero-dec-top"></div>
            <div class="hero-dec-bottom"></div>
        </div>

        <!-- Slide 3 -->
        <div class="slider__slider slide3">
            <video autoplay muted loop playsinline class="background-video">
                <source src="img/video1.mp4" type="video/mp4">
            </video>
            <div class="overlay"></div>
            <div class="slide-detail">
                <div class="container">
                <h1>Inspired by Nature</h1>
                <p>From the calm of the forest to the sparkle of the sea, nature inspires our designs...</p>
                <a href="view_products.php" class="btn">Shop Now</a>
            </div>
                </div>
            <div class="hero-dec-top"></div>
            <div class="hero-dec-bottom"></div>
        </div>

        <!-- Slide 4 -->
        <div class="slider__slider slide4">
            <video autoplay muted loop playsinline class="background-video">
                <source src="img/video1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="overlay"></div>
            <div class="slide-detail">
                <div class="container">
                <h1>Authentic & Unique</h1>
                <p>No two pieces are ever the same. Our jewellery celebrates individuality and craftsmanship...</p>
                <a href="view_products.php" class="btn">Shop Now</a>
            </div>
                </div>
            <div class="hero-dec-top"></div>
            <div class="hero-dec-bottom"></div>
        </div>

        <!-- Slide 5 -->
        <div class="slider__slider slide5">
            <video autoplay muted loop playsinline class="background-video">
                <source src="img/video1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="overlay"></div>
            <div class="slide-detail">
                <div class="container">
                <h1>Handmade in Sri Lanka</h1>
                <p>Proudly made in Sri Lanka, our creations blend tradition, culture, and creativity...</p>
                <a href="view_products.php" class="btn">Shop Now</a>
            </div>
                </div>
            <div class="hero-dec-top"></div>
            <div class="hero-dec-bottom"></div>
        </div>

        <!-- Arrows -->
        <div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
        <div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>
    </div>
</section>

        <!-------home slider end----->

        <section class="thumb">
            <div class="box-container">
                <div class="box">
                    <img src="img/bangle.png" alt="Logo" style="width: 150px; height: auto;">
                    <h1>Bangles</h1>
                    <p>Our handmade bangles are more than accessories — they’re wearable art. Crafted with love using natural materials like jute, clay, beads, and metal accents, each bangle carries a rustic charm that complements any look. Whether you prefer a single bold piece or a stack of thin bangles, our collection offers a variety of textures and tones inspired by nature. Celebrate your individuality with bangles that are as unique as you are.</p>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="box">
                    <img src="img/ring.png" alt="Logo" style="width: 150px; height: auto;">
                    <h1>Rings</h1>
                    <p>Every ring in our collection is designed to tell a story — of craftsmanship, tradition, and elegance. We use earthy elements like polished stones, colorful beads, and braided cords to create rings that feel personal and meaningful. Each piece is handmade with care, making it a special addition to your daily wear or gift to someone close. Whether you're drawn to minimal designs or something more detailed, you'll find a ring here that fits your spirit.</p>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="box">
                   <img src="img/necklace.png" alt="Logo" style="width: 150px; height: auto;">
                    <h1>Pendants</h1>
                    <p>Our pendants are the heart of our handmade jewellery line, designed to keep your favorite stories close. Each pendant features a thoughtful combination of textures — from wood and reflects a blend of culture and creativity. Perfect for everyday wear or as a standout piece, these pendants are lightweight, meaningful, and beautifully unique. Let your necklace speak for you with designs inspired by nature, emotions, and tradition.</p>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="box">
                   <img src="img/earrings.png" alt="Logo" style="width: 100px; height: auto;">
                    <h1>Ear Studs</h1>
                    <p>Delicate yet full of character, our ear studs bring a handmade charm to even the simplest outfits. Designed with natural tones and vibrant accents, they’re ideal for those who love small details that stand out. We use quality materials like polymer clay, turquoise beads, and brass backs to ensure comfort and durability. Whether you're dressing up or keeping it casual, these studs are made to reflect your personality in the most elegant way.</p>
                    <i class="bx bx-chevron-right"></i>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="box-container">
                <div class="box">
                    <img src="img/home.png">
                </div>
                <div class="box1">
                    <img src="img/download1.png">
                    <span>Handmade Elegance</span>
                    <h1>Save up to 50% on Artisan Jewellery</h1>
                    <p>Discover the beauty of handcrafted jewellery made with love, care, and natural materials. From earthy bangles to unique pendants, each piece is designed to reflect your personality and style. Don't miss out on our limited-time offer to add a touch of artistry to your collection — for less.</p>
                </div>
            </div>
        </section>

        <section class="shop">
            <div class="title">
                <img src="img/download1.png">
                <h1>Trending Products</h1>
            </div>
            <div class="row">
                <img src="img/home_image.png">
                <div class="row-detail">
                    <img src="img/landscape.png">
                    <div class="top-footer">
                        <h1>Your beauty deserves something handmade.</h1>
                    </div>
                </div>
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="img/home_necklace3.png">
                    <a href="view_products.php" class="btn">Shop Now</a>
                </div>
                <div class="box">
                    <img src="img/home_earrings.jpg">
                    <a href="view_products.php" class="btn">Shop Now</a>
                </div>
                <div class="box">
                    <img src="img/home_bracelet.png">
                    <a href="view_products.php" class="btn">Shop Now</a>
                </div>
                <div class="box">
                    <img src="img/home_bangle.png">
                    <a href="view_products.php" class="btn">Shop Now</a>
                </div>
                <div class="box">
                    <img src="img/home_chain.png">
                    <a href="view_products.php" class="btn">Shop Now</a>
                </div>
                <div class="box">
                    <img src="img/home_ring.png">
                    <a href="view_products.php" class="btn">Shop Now</a>
                </div>
            </div>
        </section>

        <section class="shop-category">
            <div class="box-container">
                <div class="box">
                    <img src="img/rack.png">
                    <div class="detail">
                        <span>BIG OFFERS</span>
                        <h1>Extra 15% off</h1>
                        <a href="view_products.php" class="btn">Shop Now</a>
                    </div>
                </div>
                <div class="box">
                    <img src="img/mens_ring.png">
                    <div class="detail">
                        <span>New in collection</span>
                        <h1>Mens Rings</h1>
                        <a href="view_products.php" class="btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="services">
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

           <section class="brand">
            <div class="box-container">
                <div class="box">
                    <img src="img/brand1.png" style="width: 200px; height: auto;">
                </div>
                <div class="box">
                    <img src="img/brand2.png" style="width: 200px; height: auto;">
                </div>
                <div class="box">
                   <img src="img/brand4.png" style="width: 200px; height: auto;">
                </div>
                <div class="box">
                   <img src="img/brand3.png" style="width: 200px; height: auto;">
                </div>
            </div>
        </section>



        <?php include 'components/footer.php'; ?>
    </div>

    <!-- Scripts -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="http://localhost/GREEN-TEA-SHOP-WEBSITE/script.js"></script>

    <!-- Alert system -->
    <?php include 'components/alert.php'; ?>

</body>

</html>