<?php
    // include
    require 'config.php';

    // Menangkap value inputan dari id
    if(isset($_GET['id_menu'])){
        $id_menu = $_GET['id_menu'];
    } 
    // Tampilkan value inputan dari id
    $result = mysqli_query($db, 
    "SELECT * FROM menus WHERE id_menu = '$id_menu'");
    $row = mysqli_fetch_array($result);

    if(isset($_POST['submit'])){
        $date_upload = $_POST['date_upload'];
        $name_menu = $_POST['name_menu'];
        $class_menu = $_POST['class_menu'];
        $price = $_POST['price'];

        $image_menu = $_FILES['image_menu']['name'];
        $x = explode('.', $image_menu);
        $extension = strtolower(end($x));
        $new_image = "$name_menu.$extension";
        $tmp = $_FILES['image_menu']['tmp_name'];
    
        if(move_uploaded_file($tmp, "images/".$new_image)){
            $query = "UPDATE menus SET
            date_upload ='$date_upload',
            name_menu ='$name_menu',
            class_menu ='$class_menu',
            price='$price',
            image_menu = '$new_image'
            WHERE id_menu = '$id_menu'";
            $result = $db->query($query);
    
            if($result){
                echo "
                    <script>
                        alert('Successfully Updated Menu');
                        document.location.href = 'menus-admin.php';
                    </script>
                ";
            }else{
                echo "
                    <script>
                        alert('failed to Update Menu');
                    </script>
                ";
            }
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
        <div><h1 class="text-h1" align = "center">UPDATE MENU</h1>
        <p class="text-p2"><a href = "menus-admin.php"><button>Preview Menu</button></a></p></div>
        <div class="kotak4"><br>
            <form action="" method="post" enctype="multipart/form-data">
                <label> Tanggal Update : <?=date("d-m-Y");?></label>
                <input type="hidden" name = "date_upload" value= <?=date("d-m-Y");?>><br><br>
                
                <label for=""1>Name Menu : </label>
                    <input type="text" name="name_menu" required="" value=<?=$row['name_menu']?>> <br>
                    <br>
                <label for="">Class Menu</label>
                <select name = "class_menu" required="" value=<?=$row['class_menu']?>>
                    <option >--select--</option>
                    <option >Main Course</option>
                    <option >Soup</option>
                    <option >Coffe</option>
                    <option >Beverage</option>
                    <option >Dessert</option>
                </select><br>
                <br>
                <label for=""1>Menu Price: </label>
                    <input type="number" name="price" required="" value=<?=$row['price']?>> <br>
                    <br>
                <label for="">Upload Menu Image : </label>
                <input type="file" name= "image_menu" required="" value=<?=$row['image_menu']?>><br><br>
                <a href = "menus-admin.php"><button type="submit" name="submit" id="button1" class="btn btn-primary deep-purple btn-block">Update</button></a>
                
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

