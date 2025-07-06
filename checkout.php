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
            </div>
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
                                <p>address type<span>*</span></p>
                                <select name="address_type" class="input"> 
                                    <option value="home">home</option>
                                    <option value="office">office</option>
                                    
                                </select>
                            </div>
                        </div>
                                 <div class="input-field">
                                <p>address line 01<span>*</span></p>
                                <input type="text" name="flat" required maxlength="50" placeholder="e.g flat & building number" class="input">
                            </div>


                             <div class="input-field">
                                <p>address line 02<span>*</span></p>
                                <input type="text" name="street" required maxlength="50" placeholder="e.g street name" class="input">
                            </div>


                             <div class="input-field">
                                <p>address line 03<span>*</span></p>
                                <input type="text" name="city" required maxlength="50" placeholder="Enter your city name" class="input">
                            </div>


                             <div class="input-field">
                                <p>Country name<span>*</span></p>
                                <input type="text" name="country" required maxlength="50" placeholder="Enter your country name" class="input">
                            </div>


                             <div class="input-field">
                                <p>Pincode<span>*</span></p>
                                <input type="text" name="pincode" required maxlength="6" placeholder="112233"  min="0" max="999999" class="input">
                            </div>
                    </div>
                    </div>

                    <button type="submit" name="place_order" class="btn">place order</button>
                </form>

                <div class="summary">
                    <h3>my bag</h3>
                    <div class="box-container">
                        <?php
                        $grand_total=0;
                        if (isset($_GET['get_id'])) {
                                $select_get = $conn->prepare("SELECT * FROM 'products' WHERE id=?");
                                $select_get->execute([$_GET['get_id']]);
                                while($fetch_get = $select_get->fetch(PDO::FETCH_ASSOC)){
                                    $sub_total = $fetch_get['price'];
                                    $grand_total+=$sub_total;
                        ?>
                            <div class="flex">
                                <img src="image/<?=$fetch_get['image']; ?>" class="image">
                            <div>
                                <h3 class="name"><?=$fetch_get['name']; ?></h3>
                                <p class="price"><?=$fetch_get['price']; ?></p>
                                </div>
                                </div>
                            <?php
                                }
                        }else{
                            $select
                        }
                        ?>
                    </div>
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
