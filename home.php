<?php
include 'components/connection.php';
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
                    <h1>Green Tea</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsa modi distinctio accusantium dignissimos odio expedita itaque, nihil tenetur esse, doloremque minus dolores repellat, quidem fugiat illum? Quisquam, impedit consequatur.</p>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="box">
                    <img src="img/thumb0.jpg">
                    <h1>Lemon Tea</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsa modi distinctio accusantium dignissimos odio expedita itaque, nihil tenetur esse, doloremque minus dolores repellat, quidem fugiat illum? Quisquam, impedit consequatur.</p>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="box">
                    <img src="img/thumb1.jpg">
                    <h1>green coffee</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsa modi distinctio accusantium dignissimos odio expedita itaque, nihil tenetur esse, doloremque minus dolores repellat, quidem fugiat illum? Quisquam, impedit consequatur.</p>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="box">
                    <img src="img/thumb.jpg">
                    <h1>Jewellery</h1>
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

        <?php include 'components/footer.php'; ?>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="http://localhost/GREEN-TEA-SHOP-WEBSITE/script.js"></script>

    <!-- Alert system -->
    <?php include 'components/alert.php'; ?>

</body>

</html>