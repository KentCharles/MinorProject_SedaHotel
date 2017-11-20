<?php
    include('config.php');
    $room = 0;
    $chek_in = "";
    $check_out = "";
    $receive = explode('?', $_GET['room_num']);
    print_r ($_GET);
    
    if(!empty($_GET['room_num'])){
            $room = $_REQUEST['room_num'];
            $check_in = $_REQUEST['check_in'];
            $check_out = $_REQUEST['check_out'];
            
                $query = "delete from availability where room_num = '$room' and check_in = '$check_in' and check_out = '$check_out'";
                mysqli_query($link, $query);
        header("location: admin3.php");
    }
?>