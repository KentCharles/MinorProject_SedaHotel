
<?php
    include('config.php');
    $currentID = 0;
    
    if(!empty($_GET['id'])){
        
        $id = $_GET['id'];
        
        $select_sql = "SELECT * FROM bookings WHERE id = $id";
        $select_res = mysqli_query($link, $select_sql);
        $select_data = mysqli_fetch_assoc($select_res);
        
        $id1 = $select_data['id'];
        $fname = $select_data['fname'];
        $email = $select_data['email'];
        $phone = $select_data['phone'];
        $troom = $select_data['troom'];
        $nroom = $select_data['nroom'];
        $meal = $select_data['meal'];
        $cin = $select_data['cin'];
        $cout = $select_data['cout'];
        
        $sql = "INSERT INTO rejects (id, fname, email, phone, troom, nroom, meal, cin, cout, status) values ($id1, '$fname', '$email', '$phone', '$phone', '$nroom', '$meal', '$cin' , '$cout', 'REJECTED')";
        
        mysqli_query($link, $sql);
        
        $currentID = $_GET['id'];
        echo $currentID;
        $query = "delete from bookings where id = $currentID";
        mysqli_query($link, $query);
        header("location: admin2.php");
    }

?>

