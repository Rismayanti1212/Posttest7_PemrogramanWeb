<?php
    require 'config.php';
    $result = mysqli_query($db, "SELECT * FROM booking_table ORDER BY name_cs ASC");
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
    <link rel="stylesheet" href="preview-booking.css?v3" />
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
<table class = "table" border = 5 align = "center">
    <tr>
        <th colspan = '9'>Preview Booking Table</th>
    </tr>
    <tr>
        <th>Number</th>
        <th>Name Customer</th>
        <th>Class</th>
        <th>Number Phone</th>
        <th>Guest</th>
        <th>Date</th>
        <th>Note</th>
        <th colspan = '2'>Action</th>
    </tr>
    <?php
        $i = 1;
        while($row = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $row['name_cs']; ?></td>
        <td><?= $row['class']; ?></td>
        <td><?= $row['telpon']; ?></td>
        <td><?= $row['guest']; ?></td>
        <td><?= $row['date_book']; ?></td>
        <td><?= $row['note']; ?></td>
        <td><a href = "edit-booking.php?id=<?=$row['id']?>">Update</td>
        <td><a href="delete-booking.php?id=<?=$row['id']?>">Delete</td>
    </tr>
    <?php 
     $i++;
        }
    ?>
    <tr>
         <th colspan = '9'><a href = "our-service-booking-table.php">+ Booking</a></th>
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