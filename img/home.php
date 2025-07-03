<?php
include 'components/connection.php';
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
    <title>Green Tea - Home Page</title>
</head>

<body>
    <?php include 'components/header.php'; ?>
    <div class="main">
        <?php include 'components/footer.php'; ?>
        <div class="home-section">
            <div class="slider_slider slide1">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1></h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat necessitatibus repellendus atque, placeat libero delectus expedita doloremque nostrum laudantium quod sint sit incidunt consequuntur reprehenderit, ut, suscipit voluptate voluptates rerum.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>
    

</body>

</html>