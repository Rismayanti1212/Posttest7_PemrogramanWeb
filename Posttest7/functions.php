
<?php
function query($query){
    global $db;
    $result = mysqli_query("$db, $query");
    $rows=[];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
function cari($keyword){
    $query = "SELECT * FROM menus WHERE name_menu = '$keyword'";

     return query($query);
}
?>