<?php
    include 'components/connection.php';
    session_start();
    if(isset(&_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }else{
        $user_id = '';
    }

    if(isset($_POST['logout'])){
        session_destroy();
        header("location: login.php"); 
    }
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

        <title>jewellary shop - Contact page</title>
</head>
    <body>
        <?php include 'components/header.php'; ?>
        <div class ="main">
            <div class="banner">
                <h1>Contact Us</h1>
            </div>
        <div class = "title2">
            <a href="home.php">home</a>Contact Us<span> 
        </div>

        <section class="services">
            <div class="box-container">
                
                <div class="box">
                <img src="img/icon2.png">
                <div class="detail">
                    <h3>great savings</h3>
                    <p>save big every order</p>
                </div>
                </div>

                <div class="box">
                <img src="img/icon1.png">
                <div class="detail">
                    <h3>24*7 support</h3>
                    <p>one-on-one support</p>
                </div>
                </div>

                <div class="box">
                <img src="img/icon0.png">
                <div class="detail">
                    <h3>gift vouchers</h3>
                    <p>vouchers on every festivals</p>
                </div>
                </div>

                    <div class="box">
                        <img src="img/icon.png">
                            <div class="detail">
                            <h3>worldwide delivery</h3>
                            <p>dropship worldwide</p>
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


        <div class = "form-container">
    <form method="post">
        <div class="title">
            <img src="img/download.png" class="logo">
            <h1>leave a message</h1>
        </div>
        <div class="input-field">
            <P> your name<sup>*</sup></p>
            <input type="text" name="name">
        </div>
         <div class="input-field">
            <P> your email<sup>*</sup></p>
            <input type="email" name="email">
        </div>
         <div class="input-field">
            <P> your number<sup>*</sup></p>
            <input type="text" name="number">
        </div>
         <div class="input-field">
            <P> your message<sup>*</sup></p>
            <textarea name="message"></textarea>
        </div>
        <button type="submit" name="submit-btn" class="btn">send message</button>
    </form>
   
</div>

     <div class="address">
        <div class="title">
            <img src="img/download.png" class="logo">
            <h1>contact details</h1>
            <p>Use this information to get in touch with us.</p>
        </div>
            <div class="box-container">
                <div class="box">
                    <i class="bx bxs-map-pin"></i>
                        <div>
                            <h4>address</h4>
                            <P>123 Colombo, Sri Lanka</p>
                        </div>
                </div>

                    <div class="box">
                    <i class="bx bxs-phone-call"></i>
                        <div>
                            <h4>Phone number</h4>
                            <P>0751234567</p>
                        </div>
                </div>
                    <div class="box">
                    <i class="bx bxs-map-pin"></i>
                        <div>
                            <h4>email</h4>
                            <P>jewellaryshop@gmail.com</p>
                        </div>
                </div>
            </div>
    </div>

        <?php include 'components/footer.php'; ?>
        </div>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/sweeralert/2.1.2/sweetalert.min.js"></script>
        <script src="script.js"></script>
        <?php include 'components/alert.php'; ?>
    </body>
</html>
