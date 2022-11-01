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
    <div><h1 class="text-h1" align = "center">APPEND MENU</h1>
        <p class="text-p2"><a href = "menus-admin.php"><button>Preview Menu</button></a></p></div>

    <div class="kotak4"><br>
        <form action="" method="post" enctype="multipart/form-data">
            <label> Tanggal Upload : <?=date("d-m-Y");?></label>
                <input type="hidden" name = "date_upload" value= <?=date("d-m-Y");?>><br><br>
            
            <label for=""1>Name Menu : </label>
                <input type="text" name="name_menu" required=""> <br>
                <br>
            <label for="">Class Menu</label>
            <select name = "class_menu" required="">
                <option >--select--</option>
                <option >Main Course</option>
                <option >Soup</option>
                <option >Coffe</option>
                <option >Beverage</option>
                <option >Dessert</option>
            </select><br>
            <br>
            <label for=""1>Menu Price: </label>
                <input type="number" name="price" required=""> <br>
                <br>
            <label for="">Upload Menu Image : </label>
            <input type="file" name= "image_menu" required=""><br><br>
            <a href = "menus-admin.php"><button type="submit" name="submit" id="button1" class="btn btn-primary deep-purple btn-block">Append</button></a>
            
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

<?php
require 'config.php';

if(isset($_POST['submit'])){
    $date_upload = $_POST['date_upload'];
    $name_menu = $_POST['name_menu'];
    $class_menu = $_POST['class_menu'];
    $price = $_POST['price'];
    // $image_menu = $_POST['image_menu'];

    $image_menu = $_FILES['image_menu']['name'];
    $x = explode('.', $image_menu);
    $extension = strtolower(end($x));
    $new_image = "$name_menu.$extension";
    $tmp = $_FILES['image_menu']['tmp_name'];

    if(move_uploaded_file($tmp, "images/".$new_image)){
        $query = "INSERT INTO menus (date_upload, name_menu, class_menu, price, image_menu)
        VALUES ('$date_upload', '$name_menu', '$class_menu', '$price', '$new_image')";
        $result = $db->query($query);

        if($result){
            echo "
                <script>
                    alert('Successfully Append Menu');
                    document.location.href = 'menus-admin.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('failed to Append Menu');
                </script>
            ";
        }
    }
}

?>