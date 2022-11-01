<?php

require 'config.php';

if(isset($_POST['submit'])){
    $name_cs = $_POST['name_cs'];
    $class = $_POST['class'];
    $telpon = $_POST['telpon'];
    $guest = $_POST['guest'];
    $date_book = $_POST['date_book'];
    $note = $_POST['note'];

    $result = mysqli_query($db, "INSERT INTO booking_table (name_cs, class, telpon, guest, date_book, note) 
    VALUES ('$name_cs', '$class', '$telpon', '$guest', '$date_book', '$note')");

    if($result){
        echo " 
            <script> 
            alert('Your Reservation is Successful');
            document.location.href = 'preview-booking.php';
            </script>
        ";
    } else {
        echo " 
            <script> 
            alert('Failed to make a Reservation');
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="logo.png">
    <title>Posttest 6 Pemrograman WEB</title>
    <!-- <link rel="stylesheet" href="our-service.css" /> -->
    <link rel="stylesheet" href="our-service-booking-table.css?v3" />
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
    <div><h1 class="text-h1" align = "center">BOOKING TABLE</h1>
        <p class="text-p">😊Fill in the complete form below for your booking table😊</p>
        <p class="text-p2"><a href = "preview-booking.php"><button>History Booking</button></a></p></div>

    <div class="kotak4"><br>
        <form action="" method="post">
            <h2 class="text-h2">Booking Your Table</h2>
            <label for=""1>Customer Name : </label>
                <input type="text" name="name_cs" required=""> <br>
                <br>
            <label for="">Class</label>
            <select name = "class" required="">
                <option >--select--</option>
                <option >Private VVIP</option>
                <option >Private VIP</option>
                <option >Private Class II</option>
                <option >Private Class III</option>
                <option >Public</option>
            </select><br>
            <br>
            <label for="">Phone Number : </label>
            <input type="text" name = "telpon" required=""><br>
            <br>
            <label for="">Total Guest : </label>
            <input type="number" name="guest" required=""> <br>
            <br>
            <label for="">Booking Date: </label>
            <input type="date" name = "date_book" required=""><br>
            <br> 
            <label for="">Note : </label>
            <input type="text" name="note"> <br>
            <a href = "preview-booking.php"><button type="submit" name="submit" id="button1" class="btn btn-primary deep-purple btn-block">Booking</button></a>
            
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