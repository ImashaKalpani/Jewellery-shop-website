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
    $cpass = $_POST['cpass'];
    $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
    $select_user->execute([$email, $pass]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);

    if ($select_user->rowCount() > 0) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
        $_SESSION['user_email'] = $row['email'];
        header('location: home.php');
    } else {
        $message[] = 'incorrect username or password';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="styleS.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Ceylon - login Now</title>
</head>

<body>
    <div class="form-container">
        <div class="logo-name">Aurora Ceylon</div>
        <!-- <section class="form-container"> -->
        <div class="title">

            <h1>Login In</h1>
        </div>
        <form action="" method="post">
            <div class="input-field">
                <p>your email <sup>*</sup></p>
                <input type="email" name="email" required placeholder="enter your email" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <div class="input-field">
                <p>your password <sup>*</sup></p>
                <input type="password" name="pass" required placeholder="enter your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <!-- <div class="input-field">
                <p>confirm password <sup>*</sup></p>
                <input type="password" name="cpass" required placeholder="enter your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            </div> -->
            <input type="submit" name="submit" value="Login now" class="btn">
            <p>Do not have an account? <a href="register.php">Register now</a></p>
        </form>
        <!-- </section> -->
    </div>
</body>

</html>