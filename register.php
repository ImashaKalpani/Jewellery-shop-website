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
        //echo 'email already exist';
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
            background: #f0f7fd;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: #1e3a5f;
            position: relative;
        }

        /* Decorative background */
        body::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 50% 50%, rgba(59, 130, 246, 0.05), transparent 70%);
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
            border: 1px solid #e2effa;
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
            background: linear-gradient(to right, #2563eb, #3b82f6);
            border-radius: 0 0 3px 3px;
        }

        .logo-name {
            text-align: center;
            font-size: 2.2rem;
            font-weight: 700;
            color: #2563eb;
            margin-bottom: 18px;
            letter-spacing: 1px;
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
        }

        .title h1 {
            color: #1e3a5f;
            font-size: 1.4rem;
        }

        .title p {
            color: #475569;
            font-size: 0.95rem;
            margin-top: 8px;
            line-height: 1.4;
        }

        .input-field {
            margin-bottom: 16px;
        }

        .input-field p {
            color: #1e293b;
            font-size: 0.85rem;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .input-field sup {
            color: #2563eb;
            font-size: 0.8rem;
        }

        .input-field input {
            width: 100%;
            padding: 11px 14px;
            background: #f8fbff;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            color: #1e293b;
            font-size: 0.95rem;
            transition: border 0.3s ease, box-shadow 0.3s ease;
        }

        .input-field input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2);
            outline: none;
            background: #f0f8ff;
        }

        .input-field input::placeholder {
            color: #94a3b8;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background: #2563eb;
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
            background: #3b82f6;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }

        .btn:active {
            transform: translateY(0);
        }

        form>p {
            text-align: center;
            color: #64748b;
            font-size: 0.85rem;
            margin-top: 15px;
        }

        form>p a {
            color: #2563eb;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        form>p a:hover {
            color: #3b82f6;
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

        /* Message alert */
        .message {
            background-color: #e0f2ff;
            color: #1e40af;
            padding: 14px 20px;
            border-radius: 6px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 15px;
            font-weight: 600;
            border: 1.5px solid #93c5fd;
            box-shadow: 0 2px 6px rgba(59, 130, 246, 0.25);
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
            animation: fadeIn 0.4s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-6px);
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
        <?php
        if (isset($message)) {
            foreach ($message as $msg) {
                echo '<div class="message">' . htmlspecialchars($msg) . '</div>';
            }
        }
        ?>

        <form action="" method="post">
            <div class="input-field">
                <p>Your name <sup>*</sup></p>
                <input type="text" name="name" required placeholder="enter your name" maxlength="50">
            </div>
            <div class="input-field">
                <p>Your email <sup>*</sup></p>
                <input type="email" name="email" required placeholder="enter your email" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <div class="input-field">
                <p>Your password <sup>*</sup></p>
                <input type="password" name="pass" required placeholder="enter your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <div class="input-field">
                <p>Confirm password <sup>*</sup></p>
                <input type="password" name="cpass" required placeholder="enter your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <input type="submit" name="submit" value="register now" class="btn">
            <p>Already have an account? <a href="login.php">Login now</a></p>
        </form>
        <!-- </section> -->
    </div>
</body>

</html>