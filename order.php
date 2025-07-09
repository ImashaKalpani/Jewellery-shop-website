<?php
include 'components/connection.php';
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

if (isset($_POST['logout'])) {
    session_destroy();
    header('location: login.php');
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
    <title>Jewellery Shop - Order page</title>
</head>

<body>
    <?php include 'components/header.php'; ?>
    <div class="main">
        <div class="banner">
            <h1>My Order</h1>
        </div>
        <div class="title2">
            <a href="home.php">home </a><span>Order</span>
        </div>
        <section class="products">
            <div class="box-container">
                <?php
                $select_products = $conn->prepare("SELECT * FROM `products`");
                $select_products->execute();
                if ($select_products->rowCount() > 0) {
                    while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) {
                ?>
                        <form action="" method="post" class="box">
                            <img src="image/<?php echo $fetch_products['image']; ?>" class="img">
                            <div class="button">
                                <button type="submit" name="add_to_cart" class="bx bx-cart"></button>
                                <button type="submit" name="add_to_wishlist" class="bx bx-heart"></button>
                                <a href="view_page.php?pid=<?php echo $fetch_products['id']; ?>" class="bx bxs-show"></a>
                            </div>
                            <h3 class="name"><?php echo $fetch_products['name']; ?></h3>
                            <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
                            <div class="fles">
                                <p class="price">$<?php echo $fetch_products['price']; ?></p>
                                <input type="number" name="qty" required min="1" value="1" max="99" maxlength="2" class="qty">
                            </div>
                            <a href="checkout.php?get_id=<?php echo $fetch_products['id']; ?>" class="btn">buy now</a>
                        </form>
                <?php
                    }
                } else {
                    echo '<p class="empty">no products added yet!</p>';
                }
                ?>
            </div>
        </section>
    </div>
    <?php include 'components/footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>

</html>