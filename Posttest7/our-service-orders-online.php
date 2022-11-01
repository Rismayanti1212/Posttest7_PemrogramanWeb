
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="logo.png">
    <title>Posttest 7 Pemrograman WEB</title>
    <!-- <link rel="stylesheet" href="our-service.css" /> -->
    <link rel="stylesheet" href="our-service-orders-online.css?v3" />
</head>
<body>
    <div class="container"></div>
    
    <header>
        <nav >
            <div class = "box-nav" align = "center"> 
            <ul class = "button-nav">
                <li><a href="index.php">HOME</a></li>
                <li><a href="menus.php">MENUS</a></li>
                <li><a href="our-service.php">OUR SERVICES</a></li>
                <li><a href="#">PROMO</a></li>
                <li><a href="aboutme.php">ABOUT ME</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="logout.php">LOG OUT</a></li>
            </ul>
            <img src = "lightmode.png" id = "icon">
            </div>
        </nav>
        <main>
    <div><h1 class="text-h1" align = "center">ORDERS ONLINE</h1>
        <p class="text-p">😊Fill in the complete form below for your online order😊</p></div>

    <div class="kotak4"><br>
        <form action="preview-order.php" method="post">
            <h2 class="text-h2">Fill in Your Personal</h2>
            <label for=""1>Customer Name : </label>
                <input type="text" name="customer_name" required=""> <br>
                <br>
            <label for="">Payment Method : </label>
            <select name = "payment" required="">
                <option >--select--</option>
                <option >Bank Transfer</option>
                <option >Cash on Delevery</option>
                <option name = "Dana">Dana</option>
            </select><br>
            <br>
            <label for="">Phone Number : </label>
            <input type="text" name = "no_hp" required=""><br>
            <br>
            <label for="">Complate Address : </label>
            <input type="text" name="address" required=""> <br>
            <br>
            <label for="">Email Address : </label>
            <input type="email" name="email_address" required=""> <br>
            <br>
            <label for="">Order Date: </label>
            <input type="date" name = "date" required=""><br>


            <h2 class="text-h3">Enter Your Order</h2>
            <label for="" >Your Order : </label>
                <input type="text" name = "order" required=""> <br>
                <br>
            <label for="">Amount : </label>
            <input type="number" name = "amount" required=""><br>
            <br>
            <label for="">Note : </label>
            <input type="text" name="note"> <br>

            <a href = "preview-order.php"><button type="submit" name="submit" id="button1" class="btn btn-primary deep-purple btn-block">ORDER</button></a>
            
        </form>
    </div>
    </main>
</header>
 
    <footer align="center">
        <p>Chimaa Owner The C'MZy RESTAURANT<br>
            Copyright &copy; 2022
        </p>
    </footer>
    <script src = "javascript.js"></script>
</body>
</html>