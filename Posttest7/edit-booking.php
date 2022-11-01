<?php

    // include
    require 'config.php';

    // Menangkap value inputan dari id
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    } 
    // Tampilkan value inputan dari id
    $result = mysqli_query($db, 
    "SELECT * FROM booking_table WHERE id = '$id'");
    $row = mysqli_fetch_array($result);

    if(isset($_POST['submit'])){
        
        $name_cs = $_POST['name_cs'];
        $class = $_POST['class'];
        $telpon = $_POST['telpon'];
        $guest = $_POST['guest'];
        $date_book = $_POST['date_book'];
        $note = $_POST['note'];
        
        $result = mysqli_query($db,  "UPDATE booking_table SET
        name_cs ='$name_cs',
        class ='$class',
        telpon ='$telpon',
        guest = '$guest',
        date_book = '$date_book',
        note = '$note'
        WHERE id='$id'");

        if($result){
            echo "
                <script>
                    alert('Successfully Updated Reservation');
                    document.location.href = 'preview-booking.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('failed to Update Reservation');
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
    <title>Posttest 7 Pemrograman WEB</title>
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
    <div><h1 class="text-h1" align = "center">UPDATE BOOKING TABLE</h1>

    <div class="kotak4"><br>
        <form action="" method="post">
            <label for=""1>Customer Name : </label>
                <input type="text" name="name_cs" required="" value=<?=$row['name_cs']?>> <br>
                <br>
            <label for="">Class</label>
            <select name = "class" required="" value=<?=$row['class']?>>
                <option >--select--</option>
                <option >Private VVIP</option>
                <option >Private VIP</option>
                <option >Private Class II</option>
                <option >Private Class III</option>
                <option >Public</option>
            </select><br>
            <br>
            <label for="">Phone Number : </label>
            <input type="text" name = "telpon" required="" value=<?=$row['telpon']?>> 
            <br>
            <br>
            <label for="">Total Guest : </label>
            <input type="number" name="guest" required="" value= <?=$row['guest']?>> <br>
            <br>
            <label for="">Booking Date: </label>
            <input type="date" name = "date_book" required="" value= <?=$row['date_book']?>> <br>
            <br> 
            <label for="">Note : </label>
            <input type="text" name="note" value=<?=$row['note']?>> <br>
            <a href = "preview-booking.php"><button type="submit" name="submit" id="button1" class="btn btn-primary deep-purple btn-block">Update</button></a>
            
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