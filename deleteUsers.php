<?php
    include('config.php');
    $currentID = 0;
    

    if (!empty($_GET['id'])){
        $currentID = $_GET['id'];
        echo $currentID;
        $query = "delete from accounts where id = $currentID";
        mysqli_query($link, $query);
        header("location: admin1.php");
    }
?>
