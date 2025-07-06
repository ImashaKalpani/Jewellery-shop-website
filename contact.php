<html>
    <body>
        <div class = "form-container">
    <form method="post">
        <div class="title">
            <img src="img/download.png" class="logo">
            <h1>leave a message</h1>
        </div>
        <div class="input-field">
            <P> your name<sup>*</sup></p>
            <input type="text" name="name">
        </div>
         <div class="input-field">
            <P> your email<sup>*</sup></p>
            <input type="email" name="email">
        </div>
         <div class="input-field">
            <P> your number<sup>*</sup></p>
            <input type="text" name="number">
        </div>
         <div class="input-field">
            <P> your message<sup>*</sup></p>
            <textarea name="message"></textarea>
        </div>
        <button type="submit" name="submit-btn" class="btn">send message</button>
    </form>
</div>
        <?php include 'components/footer.php'; ?>
        </div>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/sweeralert/2.1.2/sweetalert.min.js"></script>
        <script src="script.js"></script>
        <?php include 'components/alert.php'; ?>
    </body>
</html>
