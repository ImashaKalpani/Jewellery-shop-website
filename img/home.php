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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Jewellery Shop - Home Page</title>
</head>

<body>
    <?php include 'components/header.php'; ?>
    <div class="main">
        <?php include 'components/footer.php'; ?>
        <section class="home-section">
            <div class="slider">
                <div class="slider_slider slide1">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcom To My Shop</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat necessitatibus repellendus atque, placeat libero delectus expedita doloremque nostrum laudantium quod sint sit incidunt consequuntur reprehenderit, ut, suscipit voluptate voluptates rerum.</p>
                        <a href="view_products.php" class="btn">Shp Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!--slide end-->

                <div class="slider_slider slide2">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcom To My Shop</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat necessitatibus repellendus atque, placeat libero delectus expedita doloremque nostrum laudantium quod sint sit incidunt consequuntur reprehenderit, ut, suscipit voluptate voluptates rerum.</p>
                        <a href="view_products.php" class="btn">Shp Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!--slide end-->

                <div class="slider_slider slide3">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcom To My Shop</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat necessitatibus repellendus atque, placeat libero delectus expedita doloremque nostrum laudantium quod sint sit incidunt consequuntur reprehenderit, ut, suscipit voluptate voluptates rerum.</p>
                        <a href="view_products.php" class="btn">Shp Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!--slide end-->

                <div class="slider_slider slide4">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcom To My Shop</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat necessitatibus repellendus atque, placeat libero delectus expedita doloremque nostrum laudantium quod sint sit incidunt consequuntur reprehenderit, ut, suscipit voluptate voluptates rerum.</p>
                        <a href="view_products.php" class="btn">Shp Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!--slide end-->

                <div class="slider_slider slide5">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcom To My Shop</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat necessitatibus repellendus atque, placeat libero delectus expedita doloremque nostrum laudantium quod sint sit incidunt consequuntur reprehenderit, ut, suscipit voluptate voluptates rerum.</p>
                        <a href="view_products.php" class="btn">Shp Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!--slide end-->
                <div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
                <div class="right-arrow"><i class="bx bxs-rightt-arrow"></i></div>
            </div>
        </section>
        <!--home slider end-->
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>

</body>

</html>