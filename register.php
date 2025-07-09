<?php

include 'components/connection.php';
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

//register user

if (isset($_POST['submit'])) {

    $id = unique_id();
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $pass = $_POST['pass'];
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $cpass = $_POST['cpass'];
    $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
    $select_user->execute([$email]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);

    if ($select_user->rowCount() > 0) {
        $message[] = 'email already exist';
        echo 'email already exist';
    } else {
        if ($pass != $cpass) {
            $message[] = 'confirm your password';
            echo 'confirm your password';
        } else {
            $insert_user = $conn->prepare("INSERT INTO `users` (id, name, email, password) VALUES(?,?,?,?)");
            $insert_user->execute([$id, $name, $email, $pass]);
            header('location: home.php');
            $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
            $select_user->execute([$email, $pass]);
            $row = $select_user->fetch(PDO::FETCH_ASSOC);
            if ($select_user->rowCount() > 0) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_email'] = $row['email'];
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>JewelAura - Register Now</title>
    <style>
        /* Base setup */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #fdf6ed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: #2b2b2b;
            position: relative;
        }

        /* Decorative background */
        body::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 50% 50%, rgba(249, 168, 37, 0.05), transparent 70%);
            pointer-events: none;
            z-index: 0;
        }

        .form-container {
            background: #ffffff;
            border-radius: 14px;
            padding: 35px 40px;
            width: 100%;
            max-width: 460px;
            position: relative;
            box-shadow: 0 8px 28px rgba(0, 0, 0, 0.08);
            border: 1px solid #f2eae2;
            animation: slideIn 0.5s ease;
            z-index: 1;
        }

        /* Top line */
        .form-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 3px;
            background: linear-gradient(to right, #d97706, #f59e0b);
            border-radius: 0 0 3px 3px;
        }

        .logo-name {
            text-align: center;
            font-size: 2.2rem;
            font-weight: 700;
            color: #d97706;
            margin-bottom: 18px;
            letter-spacing: 1px;
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
        }

        .title h1 {
            color: #2b2b2b;
            font-size: 1.4rem;
        }

        .title p {
            color: #555555;
            font-size: 0.95rem;
            margin-top: 8px;
            line-height: 1.4;
        }

        .input-field {
            margin-bottom: 16px;
        }

        .input-field p {
            color: #333;
            font-size: 0.85rem;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .input-field sup {
            color: #e11d48;
            font-size: 0.8rem;
        }

        .input-field input {
            width: 100%;
            padding: 11px 14px;
            background: #fffdfb;
            border: 1px solid #ccc;
            border-radius: 6px;
            color: #333;
            font-size: 0.95rem;
            transition: border 0.3s ease, box-shadow 0.3s ease;
        }

        .input-field input:focus {
            border-color: #d97706;
            box-shadow: 0 0 0 2px rgba(217, 119, 6, 0.2);
            outline: none;
            background: #fffaf4;
        }

        .input-field input::placeholder {
            color: #aaa;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background: #d97706;
            border: none;
            border-radius: 6px;
            color: #fff;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
            margin-top: 8px;
            text-transform: capitalize;
        }

        .btn:hover {
            background: #f59e0b;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);
        }

        .btn:active {
            transform: translateY(0);
        }

        form>p {
            text-align: center;
            color: #777;
            font-size: 0.85rem;
            margin-top: 15px;
        }

        form>p a {
            color: #d97706;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        form>p a:hover {
            color: #f59e0b;
            text-decoration: underline;
        }

        /* Slide-in animation */
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 480px) {
            .form-container {
                padding: 28px 24px;
            }

            .logo-name {
                font-size: 1.8rem;
            }

            .title h1 {
                font-size: 1.3rem;
            }
        }
    </style>
</head>

<body>
    <div class="form-container">
        <!-- <section class="form-container"> -->
        <div class="title">
            <div class="logo-name">Aurora Ceylon</div>
            <h1>Register Now</h1>
        </div>
        <form action="" method="post">
            <div class="input-field">
                <p>your name <sup>*</sup></p>
                <input type="text" name="name" required placeholder="enter your name" maxlength="50">
            </div>
            <div class="input-field">
                <p>your email <sup>*</sup></p>
                <input type="email" name="email" required placeholder="enter your email" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <div class="input-field">
                <p>your password <sup>*</sup></p>
                <input type="password" name="pass" required placeholder="enter your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <div class="input-field">
                <p>confirm password <sup>*</sup></p>
                <input type="password" name="cpass" required placeholder="enter your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <input type="submit" name="submit" value="register now" class="btn">
            <p>already have an account? <a href="login.php">login now</a></p>
        </form>
        <!-- </section> -->
    </div>
</body>

</html>