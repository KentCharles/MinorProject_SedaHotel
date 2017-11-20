<?php
    session_start();
    $username = $_SESSION['username'];
?>

<html>
    <head>
	<title>Seda Hotel</title>
	
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="icon" type="image/png" href="img/sedalogo.png">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    
    <body id="aboutbg">
      
			
         <div  style="margin-top:300px; margin-left: 380px">  
                <h2>Hi, <?php echo $username ?> </h2>
                <h2>Your reservation has been successfully booked!</h2>
                <h4>Thank you and enjoy staying!</h4>
                <a href="guest.php">Back to homepage.</a>
        </div> 
            
        
         <div id="MainContainer">

            <div id="Header">
                  
                    <div id="NavBar">   
                        </div>    
                        <div id="logo"><a href="guest.php"><img src="img/logo2.png" width="70px" hieght="auto"></a></div>             
                        </div>
                    </div> 
    </body>
</html>
