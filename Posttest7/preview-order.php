<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="logo.png">
    <title>Posttest 7 Pemrograman WEB</title>
    <!-- <link rel="stylesheet" href="our-service.css" /> -->
    <link rel="stylesheet" href="preview-order.css?v3" />
    <link href="our-service-orders-online.php" />
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
    <div><h1 class="text-h1" align = "center">PREVIEW ORDER</h1>
<div class = "box-preview">
<table align = "center" style = "font-family : 'Roboto', sans-serif;">
    <tr>
        <td><br>Customer Name</td>
        <td><br>:</td>
        <td><br><?php $cus_name = $_POST['customer_name'];echo $cus_name;?>
        </td>
    </tr>
    <tr>
        <td><br>Payment Method</td>
        <td><br>:</td>
        <td><br><?php $payment = $_POST['payment']; echo $payment;?>
        </td>
    </tr>
    <tr>
        <td><br>Phone Number</td>
        <td><br>:</td>
        <td><br><?php $phone_num = $_POST['no_hp'];echo $phone_num;?>
        </td>
    </tr>
    <tr>
        <td><br>Address</td>
        <td><br>:</td>
        <td><br><?php $address = $_POST['address']; echo $address;?>
        </td>
    </tr>
    <tr>
        <td><br>Email Address</td>
        <td><br>:</td>
        <td><br><?php $email_address = $_POST['email_address']; echo $email_address;?>
        </td>
    </tr>
    <tr>
        <td> <br> Date</td>
        <td> <br> :</td>
        <td> <br> <?php $date = $_POST['date']; echo $date;?>
        </td>
    </tr>
    <tr>
        <td> <br> Order</td>
        <td> <br> :</td>
        <td> <br> <?php $order = $_POST['order']; echo $order;?>
        </td>
    </tr>
    <tr>
        <td> <br> Amount</td>
        <td> <br> :</td>
        <td> <br> <?php $amount = $_POST['amount']; echo $amount;?>
        </td>
    </tr>
    <tr>
        <td> <br> Note</td>
        <td> <br> :</td>
        <td> <br> <?php $note = $_POST['note']; echo $note;?>
        </td>
    </tr>
</table>
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