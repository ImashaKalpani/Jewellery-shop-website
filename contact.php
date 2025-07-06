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

     <div class="address">
        <div class="title">
            <img src="img/download.png" class="logo">
            <h1>contact details</h1>
            <p>Use this information to get in touch with us.</p>
        </div>
            <div class="box-container">
                <div class="box">
                    <i class="bx bxs-map-pin"></i>
                        <div>
                            <h4>address</h4>
                            <P>123 Colombo, Sri Lanka</p>
                        </div>
                </div>

                    <div class="box">
                    <i class="bx bxs-phone-call"></i>
                        <div>
                            <h4>Phone number</h4>
                            <P>0751234567</p>
                        </div>
                </div>
                    <div class="box">
                    <i class="bx bxs-map-pin"></i>
                        <div>
                            <h4>email</h4>
                            <P>jewellaryshop@gmail.com</p>
                        </div>
                </div>
            </div>
    </div>

        <?php include 'components/footer.php'; ?>
        </div>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/sweeralert/2.1.2/sweetalert.min.js"></script>
        <script src="script.js"></script>
        <?php include 'components/alert.php'; ?>
    </body>
</html>
