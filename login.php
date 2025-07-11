<?php

include 'components/connection.php';
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

// login user
if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $pass = $_POST['pass'];
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
    $select_user->execute([$email, $pass]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);

    if ($select_user->rowCount() > 0) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
        $_SESSION['user_email'] = $row['email'];
        header('location: home.php');
    } else {
        $message[] = 'Incorrect username or password!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="styleS.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Ceylon - Login Now</title>
    <style>
        .message {
            background-color: #fddede;
            /* Light red/pink background */
            color: #b94a48;
            /* Darker red text */
            padding: 14px 20px;
            /* More padding for comfort */
            border-radius: 6px;
            /* Slightly rounder corners */
            margin-bottom: 20px;
            text-align: center;
            font-size: 15px;
            font-weight: 600;
            border: 1.5px solid #e17b7b;
            /* Softer red border */
            box-shadow: 0 2px 6px rgba(217, 83, 79, 0.3);
            /* subtle shadow */
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <div class="logo-name">Aurora Ceylon</div>

        <div class="title">
            <h1>Login In</h1>
        </div>

        <form action="" method="post">
            <?php
            if (isset($message)) {
                foreach ($message as $msg) {
                    echo '<div class="message">' . $msg . '</div>';
                }
            }
            ?>
            <div class="input-field">
                <p>Your Email <sup>*</sup></p>
                <input type="email" name="email" required placeholder="Enter your email" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>

            <div class="input-field">
                <p>Your Password <sup>*</sup></p>
                <input type="password" name="pass" required placeholder="Enter your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>

            <input type="submit" name="submit" value="Login now" class="btn">
            <p>Do not have an account? <a href="register.php">Register now</a></p>
        </form>
    </div>
</body>

</html>