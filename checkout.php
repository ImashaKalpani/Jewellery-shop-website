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

        <title>jewellary shop - Checkout page</title>
</head>
    <body>
        <?php include 'components/header.php'; ?>
        <div class ="main">
            <div class="banner">
                <h1>Checkout Summary</h1>
            </div>
        <div class = "title2">
            <a href="home.php">home</a>Checkout Summary<span> 
        </div>
    
        <section class="checkout">
            <div class="title">
                <img src="img/download.png" class="logo">
                    <h1>checkout summary</h1>
                    <p> Fill in the following details to proceed with checkout. </p>
            <div class="row">
                <form method="post">
                    <h3>billing details</h3>
                    <div class="flex">
                        <div class="box">
                            <div class="input-field">
                                <p>your name<span>*</span></p>
                                <input type="text" name="name" required maxlength="50" placeholder="Enter your name" class="input">
                            </div>
                            <div class="input-field">
                                <p>your number<span>*</span></p>
                                <input type="number" name="number" required maxlength="10" placeholder="Enter your number" class="input">
                            </div>
                            <div class="input-field">
                                <p>your email<span>*</span></p>
                                <input type="email" name="email" required maxlength="50" placeholder="Enter your email" class="input">
                            </div>
                            <div class="input-field">
                                <p>payment method<span>*</span></p>
                                <select name="method" class="input"> 
                                    <option value="cash on delivery">cash on delivery</option>
                                    <option value="credit or debit card">credit or debit card</option>
                                    <option value="net banking">net banking</option>
                                    <option value="UPI or RuPay">UPI or RuPay</option>
                                    <option value="paytm">paytm</option>
                                </select>

                            </div>
                            <div class="input-field">
                                <p>your name<span>*</span></p>
                                <input type="text" name="name" required maxlength="50" placeholder="Enter your name" class="input">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </section>

         <?php include 'components/footer.php'; ?>
        </div>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/sweeralert/2.1.2/sweetalert.min.js"></script>
        <script src="script.js"></script>
        <?php include 'components/alert.php'; ?>
    </body>
</html>
