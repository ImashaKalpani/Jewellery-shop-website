<?php
include 'components/connection.php';
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

// Logout
if (isset($_POST['logout'])) {
    session_destroy();
    header("location: login.php");
    exit;
}

// Handle contact form submission
if (isset($_POST['submit-btn'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $number = filter_var($_POST['number'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    if (empty($name) || empty($email) || empty($number) || empty($message)) {
        $warning_msg[] = 'All fields are required!';
    } else {
        $insert_msg = $conn->prepare("INSERT INTO `messages` (user_id, name, email, number, message) VALUES (?, ?, ?, ?, ?)");
        $insert_msg->execute([$user_id, $name, $email, $number, $message]);
        $success_msg[] = 'Message sent successfully!';
    }
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
    <title>Jewellery Shop - Contact Page</title>
</head>

<body>
    <?php include 'components/header.php'; ?>

    <div class="main">
        <div class="banner">
            <h1>Contact Us</h1>
        </div>

        <div class="title2">
            <a href="home.php">Home</a><span> / Contact Us</span>
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
                        <p>vouchers on every festival</p>
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
                <div class="box"><img src="img/brand1.png" style="width: 200px;"></div>
                <div class="box"><img src="img/brand2.png" style="width: 200px;"></div>
                <div class="box"><img src="img/brand4.png" style="width: 200px;"></div>
                <div class="box"><img src="img/brand3.png" style="width: 200px;"></div>
            </div>
        </section>

        <div class="form-container">
            <form method="post">
                <div class="title">
                    <img src="img/download1.png" class="logo" style="width: 100px;">
                    <h1>Leave a Message</h1>
                </div>

                <div class="input-field">
                    <p>Your Name<span>*</span></p>
                    <input type="text" name="name" required>
                </div>
                <div class="input-field">
                    <p>Your Email<span>*</span></p>
                    <input type="email" name="email" required>
                </div>
                <div class="input-field">
                    <p>Your Number<span>*</span></p>
                    <input type="text" name="number" required>
                </div>
                <div class="input-field">
                    <p>Your Message<span>*</span></p>
                    <textarea name="message" required></textarea>
                </div>

                <button type="submit" name="submit-btn" class="btn">Send Message</button>
            </form>
        </div>

        <div class="address">
            <div class="title">
                <img src="img/download1.png" class="logo" style="width: 100px;">
                <h1>Contact Details</h1>
                <p>Use this information to get in touch with us.</p>
            </div>

            <div class="box-container">
                <div class="box">
                    <i class="bx bxs-map-pin"></i>
                    <div>
                        <h4>Address</h4>
                        <p>No. 123, Colombo, Sri Lanka</p>
                    </div>
                </div>

                <div class="box">
                    <i class="bx bxs-phone-call"></i>
                    <div>
                        <h4>Phone Number</h4>
                        <p>+94 75 123 4567</p>
                    </div>
                </div>

                <div class="box">
                    <i class="bx bxs-envelope"></i>
                    <div>
                        <h4>Email</h4>
                        <p>auroraceylon25@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'components/footer.php'; ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>

</html>