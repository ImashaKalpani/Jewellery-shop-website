<?php include 'components/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewellery Shop - About Us Page</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<?php include 'components/header.php'; ?>

<div class="main">
    <div class="banner">
        <h1>About Us</h1>
    </div>

    <div class="title2">
        <a href="home.php">Home</a><span> / About Us</span>
    </div>

    <div class="about-category">
        <div class="box">
            <img src="img/3.webp" alt="Lemon Green">
            <div class="detail">
                <span>Coffee</span>
                <h1>Lemon Green</h1>
                <a href="view_products.php" class="btn">Shop Now</a>
            </div>
        </div>

        <div class="box">
            <img src="img/2.webp" alt="Lemon Tea Name">
            <div class="detail">
                <span>Coffee</span>
                <h1>Lemon Tea Name</h1>
                <a href="view_products.php" class="btn">Shop Now</a>
            </div>
        </div>

        <div class="box">
            <img src="img/about.png" alt="About Product">
            <div class="detail">
                <span>Coffee</span>
                <h1>Lemon Tea Name</h1>
                <a href="view_products.php" class="btn">Shop Now</a>
            </div>
        </div>

        <div class="box">
            <img src="img/1.webp" alt="Lemon Green 2">
            <div class="detail">
                <span>Coffee</span>
                <h1>Lemon Green</h1>
                <a href="view_products.php" class="btn">Shop Now</a>
            </div>
        </div>
    </div>

    <section class="services">
        <div class="title">
            <img src="img/download.png" class="logo" alt="Logo">
            <h1>Why Choose Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dolorem doloremque deserunt minus veniam tenetur.</p>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="img/icon2.png" alt="Savings">
                <div class="detail">
                    <h3>Great Savings</h3>
                    <p>Save big on every order</p>
                </div>
            </div>
            <div class="box">
                <img src="img/icon1.png" alt="Support">
                <div class="detail">
                    <h3>24×7 Support</h3>
                    <p>One-on-one support</p>
                </div>
            </div>
            <div class="box">
                <img src="img/icon0.png" alt="Vouchers">
                <div class="detail">
                    <h3>Gift Vouchers</h3>
                    <p>Vouchers for every festival</p>
                </div>
            </div>
            <div class="box">
                <img src="img/icon.png" alt="Delivery">
                <div class="detail">
                    <h3>Worldwide Delivery</h3>
                    <p>We ship across the globe</p>
                </div>
            </div>
        </div>
    </section>

    <div class="about">
        <div class="row">
            <div class="img-box">
                <img src="img/3.png" alt="Showroom">
            </div>
            <div class="detail">
                <h1>Visit Our Beautiful Showroom!</h1>
                <p>Our showroom is an expression of what we love doing—being creative with floral and plant arrangements. Whether you're looking for a florist for your perfect wedding or just want to uplift a room with one-of-a-kind living decor, Blossom With Love can help.</p>
                <a href="view_products.php" class="btn">Shop Now</a>
            </div>
        </div>
    </div>

    <div class="testimonial-container">
        <div class="title">
            <img src="img/download.png" class="logo" alt="Logo">
            <h1>What People Say About Us</h1>
            <p>Real reviews from our satisfied customers.</p>
        </div>

        <div class="container">
            <div class="testimonial-item active">
                <img src="img/01.jpg" alt="Sara Smith">
                <h1>Sara Smith</h1>
                <p>Amazing quality and fast delivery. Highly recommend!</p>
            </div>

            <div class="testimonial-item">
                <img src="img/02.jpg" alt="John Smith">
                <h1>John Smith</h1>
                <p>Exceptional service and the products are worth every penny.</p>
            </div>

            <div class="testimonial-item">
                <img src="img/03.jpg" alt="Selena Smith">
                <h1>Selena Smith</h1>
                <p>Great customer support and beautiful packaging. Loved it!</p>
            </div>

            <div class="left-arrow" onclick="prevSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
            <div class="right-arrow" onclick="nextSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
        </div>
    </div>

    <?php include 'components/footer.php'; ?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="script.js"></script>
<?php include 'components/alert.php'; ?>

</body>
</html>
<?php include 'components/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewellery Shop - About Us Page</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<?php include 'components/header.php'; ?>

<div class="main">
    <div class="banner">
        <h1>About Us</h1>
    </div>

    <div class="title2">
        <a href="home.php">Home</a><span> / About Us</span>
    </div>

    <div class="about-category">
        <div class="box">
            <img src="img/3.webp" alt="Lemon Green">
            <div class="detail">
                <span>Coffee</span>
                <h1>Lemon Green</h1>
                <a href="view_products.php" class="btn">Shop Now</a>
            </div>
        </div>

        <div class="box">
            <img src="img/2.webp" alt="Lemon Tea Name">
            <div class="detail">
                <span>Coffee</span>
                <h1>Lemon Tea Name</h1>
                <a href="view_products.php" class="btn">Shop Now</a>
            </div>
        </div>

        <div class="box">
            <img src="img/about.png" alt="About Product">
            <div class="detail">
                <span>Coffee</span>
                <h1>Lemon Tea Name</h1>
                <a href="view_products.php" class="btn">Shop Now</a>
            </div>
        </div>

        <div class="box">
            <img src="img/1.webp" alt="Lemon Green 2">
            <div class="detail">
                <span>Coffee</span>
                <h1>Lemon Green</h1>
                <a href="view_products.php" class="btn">Shop Now</a>
            </div>
        </div>
    </div>

    <section class="services">
        <div class="title">
            <img src="img/download.png" class="logo" alt="Logo">
            <h1>Why Choose Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dolorem doloremque deserunt minus veniam tenetur.</p>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="img/icon2.png" alt="Savings">
                <div class="detail">
                    <h3>Great Savings</h3>
                    <p>Save big on every order</p>
                </div>
            </div>
            <div class="box">
                <img src="img/icon1.png" alt="Support">
                <div class="detail">
                    <h3>24×7 Support</h3>
                    <p>One-on-one support</p>
                </div>
            </div>
            <div class="box">
                <img src="img/icon0.png" alt="Vouchers">
                <div class="detail">
                    <h3>Gift Vouchers</h3>
                    <p>Vouchers for every festival</p>
                </div>
            </div>
            <div class="box">
                <img src="img/icon.png" alt="Delivery">
                <div class="detail">
                    <h3>Worldwide Delivery</h3>
                    <p>We ship across the globe</p>
                </div>
            </div>
        </div>
    </section>

    <div class="about">
        <div class="row">
            <div class="img-box">
                <img src="img/3.png" alt="Showroom">
            </div>
            <div class="detail">
                <h1>Visit Our Beautiful Showroom!</h1>
                <p>Our showroom is an expression of what we love doing—being creative with floral and plant arrangements. Whether you're looking for a florist for your perfect wedding or just want to uplift a room with one-of-a-kind living decor, Blossom With Love can help.</p>
                <a href="view_products.php" class="btn">Shop Now</a>
            </div>
        </div>
    </div>

    <div class="testimonial-container">
        <div class="title">
            <img src="img/download.png" class="logo" alt="Logo">
            <h1>What People Say About Us</h1>
            <p>Real reviews from our satisfied customers.</p>
        </div>

        <div class="container">
            <div class="testimonial-item active">
                <img src="img/01.jpg" alt="Sara Smith">
                <h1>Sara Smith</h1>
                <p>Amazing quality and fast delivery. Highly recommend!</p>
            </div>

            <div class="testimonial-item">
                <img src="img/02.jpg" alt="John Smith">
                <h1>John Smith</h1>
                <p>Exceptional service and the products are worth every penny.</p>
            </div>

            <div class="testimonial-item">
                <img src="img/03.jpg" alt="Selena Smith">
                <h1>Selena Smith</h1>
                <p>Great customer support and beautiful packaging. Loved it!</p>
            </div>

            <div class="left-arrow" onclick="prevSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
            <div class="right-arrow" onclick="nextSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
        </div>
    </div>

    <?php include 'components/footer.php'; ?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="script.js"></script>
<?php include 'components/alert.php'; ?>

</body>
</html>
<?php include 'components/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewellery Shop - About Us Page</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<?php include 'components/header.php'; ?>

<div class="main">
    <div class="banner">
        <h1>About Us</h1>
    </div>

    <div class="title2">
        <a href="home.php">Home</a><span> / About Us</span>
    </div>

    <div class="about-category">
        <div class="box">
            <img src="img/3.webp" alt="Lemon Green">
            <div class="detail">
                <span>Coffee</span>
                <h1>Lemon Green</h1>
                <a href="view_products.php" class="btn">Shop Now</a>
            </div>
        </div>

        <div class="box">
            <img src="img/2.webp" alt="Lemon Tea Name">
            <div class="detail">
                <span>Coffee</span>
                <h1>Lemon Tea Name</h1>
                <a href="view_products.php" class="btn">Shop Now</a>
            </div>
        </div>

        <div class="box">
            <img src="img/about.png" alt="About Product">
            <div class="detail">
                <span>Coffee</span>
                <h1>Lemon Tea Name</h1>
                <a href="view_products.php" class="btn">Shop Now</a>
            </div>
        </div>

        <div class="box">
            <img src="img/1.webp" alt="Lemon Green 2">
            <div class="detail">
                <span>Coffee</span>
                <h1>Lemon Green</h1>
                <a href="view_products.php" class="btn">Shop Now</a>
            </div>
        </div>
    </div>

    <section class="services">
        <div class="title">
            <img src="img/download.png" class="logo" alt="Logo">
            <h1>Why Choose Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dolorem doloremque deserunt minus veniam tenetur.</p>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="img/icon2.png" alt="Savings">
                <div class="detail">
                    <h3>Great Savings</h3>
                    <p>Save big on every order</p>
                </div>
            </div>
            <div class="box">
                <img src="img/icon1.png" alt="Support">
                <div class="detail">
                    <h3>24×7 Support</h3>
                    <p>One-on-one support</p>
                </div>
            </div>
            <div class="box">
                <img src="img/icon0.png" alt="Vouchers">
                <div class="detail">
                    <h3>Gift Vouchers</h3>
                    <p>Vouchers for every festival</p>
                </div>
            </div>
            <div class="box">
                <img src="img/icon.png" alt="Delivery">
                <div class="detail">
                    <h3>Worldwide Delivery</h3>
                    <p>We ship across the globe</p>
                </div>
            </div>
        </div>
    </section>

    <div class="about">
        <div class="row">
            <div class="img-box">
                <img src="img/3.png" alt="Showroom">
            </div>
            <div class="detail">
                <h1>Visit Our Beautiful Showroom!</h1>
                <p>Our showroom is an expression of what we love doing—being creative with floral and plant arrangements. Whether you're looking for a florist for your perfect wedding or just want to uplift a room with one-of-a-kind living decor, Blossom With Love can help.</p>
                <a href="view_products.php" class="btn">Shop Now</a>
            </div>
        </div>
    </div>

    <div class="testimonial-container">
        <div class="title">
            <img src="img/download.png" class="logo" alt="Logo">
            <h1>What People Say About Us</h1>
            <p>Real reviews from our satisfied customers.</p>
        </div>

        <div class="container">
            <div class="testimonial-item active">
                <img src="img/01.jpg" alt="Sara Smith">
                <h1>Sara Smith</h1>
                <p>Amazing quality and fast delivery. Highly recommend!</p>
            </div>

            <div class="testimonial-item">
                <img src="img/02.jpg" alt="John Smith">
                <h1>John Smith</h1>
                <p>Exceptional service and the products are worth every penny.</p>
            </div>

            <div class="testimonial-item">
                <img src="img/03.jpg" alt="Selena Smith">
                <h1>Selena Smith</h1>
                <p>Great customer support and beautiful packaging. Loved it!</p>
            </div>

            <div class="left-arrow" onclick="prevSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
            <div class="right-arrow" onclick="nextSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
        </div>
    </div>

    <?php include 'components/footer.php'; ?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="script.js"></script>
<?php include 'components/alert.php'; ?>

</body>
</html>
