<?php
include 'connection.php'; // Adjust path if needed
            if (session_status() === PHP_SESSION_NONE) {
                
            }
           


            $user_id = $_SESSION['user_id'] ?? '';

// Initialize counts
$wishlist_count = 0;
$cart_count = 0;

// Get wishlist count
if (!empty($user_id)) {
    $stmt = $conn->prepare("SELECT COUNT(*) FROM `wishlist` WHERE user_id = ?");
    $stmt->execute([$user_id]);
    $wishlist_count = $stmt->fetchColumn();
}

// Get cart count
if (!empty($user_id)) {
    $stmt = $conn->prepare("SELECT COUNT(*) FROM `cart` WHERE user_id = ?");
    $stmt->execute([$user_id]);
    $cart_count = $stmt->fetchColumn();
}
?>

<header class="header">
    <div class="flex">
        <a href="home.php" class="logo">
            <img src="img/logo.png" alt="Logo" style="width: 100px; height: auto;">
        </a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="view_products.php">Products</a>
            <a href="order.php">Orders</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact Us</a>
        </nav>

        <div class="icons">
            <i class="bx bxs-user" id="user-btn"></i>
            <a href="wishlist.php" class="cart-btn">
                <i class="bx bx-heart"></i><sup><?= $wishlist_count; ?></sup>
            </a>
            <a href="cart.php" class="cart-btn">
                <i class="bx bx-cart-download"></i><sup><?= $cart_count; ?></sup>
            </a>
            <i class="bx bx-list-plus" id="menu-btn" style="font-size: 2rem;"></i>
        </div>

        <div class="user-box">
            <?php if (isset($_SESSION['user_name']) && isset($_SESSION['user_email'])): ?>
                <p>Username : <span><?= $_SESSION['user_name']; ?></span></p>
                <p>Email : <span><?= $_SESSION['user_email']; ?></span></p>
            <?php else: ?>
                <p>Please log in to view your profile.</p>
            <?php endif; ?>

            <a href="login.php" class="btn">Login</a>
            <a href="register.php" class="btn">Register</a>

            <form method="post">
                <button type="submit" name="logout" class="logout-btn">Log Out</button>
            </form>
        </div>
    </div>
</header>