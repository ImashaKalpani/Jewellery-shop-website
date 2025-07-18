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
    header('location: home.php');
    exit();
}

//update product in cart
if (isset($_POST['update_cart'])) {
    $cart_id = $_POST['cart_id'];
    $cart_id = filter_var($cart_id, FILTER_SANITIZE_STRING);
    $qty = $_POST['qty'];
    $qty = filter_var($qty, FILTER_SANITIZE_STRING);


    $update_qty = $conn->prepare("UPDATE `cart` SET qty = ? WHERE id = ?");
    $update_qty->execute([$qty, $cart_id]);

    $success_msg[] = 'Cart quantity updated successfully';
}

// Delete wishlist item
if (isset($_POST['delete_item'])) {
    $cart_id = $_POST['cart_id'];
    $cart_id = filter_var($cart_id, FILTER_SANITIZE_STRING);

    $verify_delete_item = $conn->prepare("SELECT * FROM `cart` WHERE id = ?");
    $verify_delete_item->execute([$cart_id]);

    if ($verify_delete_item->rowCount() > 0) {
        $delete_cart_id = $conn->prepare("DELETE FROM `cart` WHERE id = ?");
        $delete_cart_id->execute([$cart_id]);
        $success_msg[] = "Cart item deleted successfully";
    } else {
        $warning_msg[] = 'Cart item already deleted';
    }
}

//Empty cart
if (isset($_POST['empty_cart'])) {
    $varify_empty_item = $conn->prepare("SELECT * FROM `cart` WHERE user_id=?");
    $varify_empty_item->execute([$user_id]);

    if ($varify_empty_item->rowCount() > 0) {
        $delete_cart_id = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
        $delete_cart_id->execute([$user_id]);
        $success_msg[] = "Empty successfully";
    } else {
        $warning_msg[] = 'Cart item already deleted';
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
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>Jewellery Shop - Cart</title>
</head>

<body>
    <?php include 'components/header.php'; ?>

    <div class="main">
        <div class="banner">
            <h1>My Cart</h1>
        </div>
        <div class="title2">
            <a href="home.php">Home</a><span> / Cart</span>
        </div>

        <section class="products">
            <h1 class="title">Products added in cart</h1>
            <div class="box-container">
                <?php
                $grand_total = 0;
                $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
                $select_cart->execute([$user_id]);

                if ($select_cart->rowCount() > 0) {
                    while ($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)) {
                        $select_products = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
                        $select_products->execute([$fetch_cart['product_id']]);
                        if ($select_products->rowCount() > 0) {
                            $fetch_products = $select_products->fetch(PDO::FETCH_ASSOC);
                ?>
                            <form method="post" action="" class="box">
                                <input type="hidden" name="cart_id" value="<?= $fetch_cart['id']; ?>">
                                <img src="image/<?= $fetch_products['image']; ?>" class="img">
                                <h3 class="name"><?= $fetch_products['name']; ?></h3>
                                <div class="flex">
                                    <p class="price">Price: Rs.<?= $fetch_products['price']; ?>/-</p>
                                    <input type="number" name="qty" required min="1" value="<?= $fetch_cart['qty']; ?>" max="99" maxlength="2" class="qty">
                                    <button type="submit" name="update_cart" class="bx bxs-edit fa-edit"></button>
                                </div>
                                <p class="sub-total">Sub Total : <span>Rs.<?= $sub_total = ($fetch_cart['qty'] * $fetch_cart['price']) ?></span></p>

                                <button type="submit" name="delete_item" class="btn" onclick="return confirm('Delete this item')">Delete</button>
                            </form>
                <?php
                            $grand_total += $sub_total;
                        } else {
                            echo '<p class="empty">Product was not found</p>';
                        }
                    }
                } else {
                    echo '<p class="empty">No products added yet!</p>';
                }
                ?>
            </div>
            <?php
            if ($grand_total != 0) {
            ?>
                <div class="cart-total">
                    <p>Total amount payable : <span>Rs. <?= $grand_total; ?>/-</span></p>
                    <div class="button">
                        <form method="post">
                            <button type="submit" name="empty_cart" class="btn" onclick="return confirm('Are you sure to empty your cart?')">Empty cart</button>
                        </form>
                        <a href="checkout.php" class="btn">Proceed to checkout</a>
                    </div>
                </div>
            <?php } ?>


        </section>
        <?php include 'components/footer.php'; ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>

</html>