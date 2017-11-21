<?php

include('config.php');

    session_start();
    $username = $_SESSION['username'];

    $sql = "select * from accounts where username = '$username'";
    $booked = "select * from availability where username = '$username'";

    $result = mysqli_query($link, $sql);
    $bookResult = mysqli_query($link, $booked);
    $bookData = mysqli_fetch_assoc($bookResult);
    $data = mysqli_fetch_assoc($result);
    
?>

<html>
    <div id="MainContainer">
            <div id="Header">
                <div id="NavBar">
                        <ul>
                        <li><a id="nav" href="index.php">Log out</a></li>
                        <li><a id="nav" href="guest.php#contact">Contact</a></li>
                        <li><a id="nav" href="guest.php#about">About</a></li>
                        <li><a id="nav" href="reservation.php">Book</a></li>
                        <li><a id="nav" href="guest.php#home">Home</a></li>
                        </ul> 
                        
                        </div>       
                        <div id="logo"><a href="guest.php"><img src="img/logo2.png" width="70px" hieght="auto"></a></div>             
            </div>
        </div> 
    
    <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="icon" type="image/png" href="img/sedalogo.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <body>
    
     <h2 style="margin-top: 150px; margin-left: 205px;">User Profile</h2>
        
    <table style="margin-left: 205px; margin-top:50px;">
        <tr>
        <th><h4>Username : <?php echo $data['username'] ;?></h4></th>
        </tr>
        
        <tr>
        <th><h4>Email : <?php echo $data['email'];?></h4></th>
        </tr>
    </table>
       
       
    <table style="margin-top: 10px; border: 1px solid black; width: 70%; padding: 10px;">
        <tr>
            <th style="padding: 15px; text-align: left;">ROOM NO.</th>
            <th style="padding: 15px; text-align: left;">GUEST NAME</th>
            <th style="padding: 15px; text-align: left;">CHECK IN DATE</th>
            <th style="padding: 15px; text-align: left;">CHECK OUT DATE</th>
        </tr>
            <?php while($rows=mysqli_fetch_array($bookResult)) { ?>
        <tr> 
            <td style="padding: 15px; text-align: left;"><?php echo $rows['room_num'] ?></td>
            <td style="padding: 15px; text-align: left;"><?php echo $rows['fname'] ?></td>
            <td style="padding: 15px; text-align: left;"> <?php echo $rows['check_in'] ?></td>
            <td style="padding: 15px; text-align: left;"> <?php echo $rows['check_out'] ?></td>
        <?php } ?>
        </tr>
    </table>
    </body>
    
</html>