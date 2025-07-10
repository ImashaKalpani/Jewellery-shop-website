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
                <div class="slider__slider slide1">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Lorem ipsom dolor sit</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsa modi distinctio accusantium dignissimos odio expedita itaque, nihil tenetur esse, doloremque minus dolores repellat, quidem fugiat illum? Quisquam, impedit consequatur.</p>
                        <a href="view_products.php" class="btn">Shop Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- Slide end -->

                <div class="slider__slider slide2">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcome To My Shop</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsa modi distinctio accusantium dignissimos odio expedita itaque, nihil tenetur esse, doloremque minus dolores repellat, quidem fugiat illum? Quisquam, impedit consequatur.</p>
                        <a href="view_products.php" class="btn">Shop Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- Slide end -->

                <div class="slider__slider slide3">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Lorem ipsom dolor sit</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsa modi distinctio accusantium dignissimos odio expedita itaque, nihil tenetur esse, doloremque minus dolores repellat, quidem fugiat illum? Quisquam, impedit consequatur.</p>
                        <a href="view_products.php" class="btn">Shop Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- Slide end -->

                <div class="slider__slider slide4">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Lorem ipsom dolor sit</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsa modi distinctio accusantium dignissimos odio expedita itaque, nihil tenetur esse, doloremque minus dolores repellat, quidem fugiat illum? Quisquam, impedit consequatur.</p>
                        <a href="view_products.php" class="btn">Shop Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- Slide end -->

                <div class="slider__slider slide5">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Lorem ipsom dolor sit</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsa modi distinctio accusantium dignissimos odio expedita itaque, nihil tenetur esse, doloremque minus dolores repellat, quidem fugiat illum? Quisquam, impedit consequatur.</p>
                        <a href="view_products.php" class="btn">Shop Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>---
                <!-- Slide end -->
                <div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
                <div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>
            </div>
        </section>
        <!-------home slider end----->

        <section class="thumb">
            <div class="box-container">
                <div class="box">
                    <img src="img/thumb2.jpg">
                    <h1>Bangles</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsa modi distinctio accusantium dignissimos odio expedita itaque, nihil tenetur esse, doloremque minus dolores repellat, quidem fugiat illum? Quisquam, impedit consequatur.</p>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="box">
                    <img src="img/thumb0.jpg">
                    <h1>Rings</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsa modi distinctio accusantium dignissimos odio expedita itaque, nihil tenetur esse, doloremque minus dolores repellat, quidem fugiat illum? Quisquam, impedit consequatur.</p>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="box">
                    <img src="img/thumb1.jpg">
                    <h1>Pendants</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsa modi distinctio accusantium dignissimos odio expedita itaque, nihil tenetur esse, doloremque minus dolores repellat, quidem fugiat illum? Quisquam, impedit consequatur.</p>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="box">
                    <img src="img/thumb.jpg">
                    <h1>Ear Studs</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsa modi distinctio accusantium dignissimos odio expedita itaque, nihil tenetur esse, doloremque minus dolores repellat, quidem fugiat illum? Quisquam, impedit consequatur.</p>
                    <i class="bx bx-chevron-right"></i>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="box-container">
                <div class="box">
                    <img src="img/about-us.jpg">
                </div>
                <div class="box">
                    <img src="img/download.png">
                    <span>Healthy Tea</span>
                    <h1>Save up to 50% off</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsa modi distinctio accusantium dignissimos odio expedita itaque, nihil tenetur esse, doloremque minus dolores repellat, quidem fugiat illum? Quisquam, impedit consequatur.</p>
                </div>
            </div>
        </section>

        <section class="shop">
            <div class="title">
                <img src="img/download.png">
                <h1>Trending Products</h1>
            </div>
            <div class="row">
                <img src="img/about.jpg">
                <div class="row-detail">
                    <img src="img/basil.jpg">
                    <div class="top-footer">
                        <h1>A cup of green tea makes you healthy</h1>
                    </div>
                </div>
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="img/home_necklace.jpg">
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
                    <img src="img/6.jpg">
                    <div class="detail">
                        <span>BIG OFFERS</span>
                        <h1>Extra 15% off</h1>
                        <a href="view_products.php" class="btn">Shop Now</a>
                    </div>
                </div>
                <div class="box">
                    <img src="img/7.jpg">
                    <div class="detail">
                        <span>New in taste</span>
                        <h1>Coffee House</h1>
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
                    <img src="img/brand (1).jpg">
                </div>
                <div class="box">
                    <img src="img/brand (2).jpg">
                </div>
                <div class="box">
                    <img src="img/brand (3).jpg">
                </div>
                <div class="box">
                    <img src="img/brand (4).jpg">
                </div>
                <div class="box">
                    <img src="img/brand (5).jpg">
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