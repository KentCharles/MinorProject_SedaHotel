
<?php
    include('config.php');
    $currentID = 0;
    
    if(!empty($_GET['id'])){
        $currentID = $_REQUEST['id'];
    }

    if (!empty($_POST['id'])){
        $currentID = $_POST['id'];
        echo $currentID;
        $query = "delete from bookings where id = $currentID";
        mysqli_query($link, $query);
        header("location: admin.php");
    }
?>

<html>
    <form method = "post" action = "delete.php">
    <input type = hidden name='id' value ="<?php echo $currentID;?>"/>
    <input type= "submit" value = "CONFIRM DELETE" />
    </form>
</html>