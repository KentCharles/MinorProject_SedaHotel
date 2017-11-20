<?php
include('config.php');

    session_start();

    if(isset($_POST['submit'])){
    $cin=$_POST['cin'];
    $cout=$_POST['cout'];
    
    $_SESSION['cin'] = $cin;
    $_SESSION['cout'] = $cout;
        
    
     header("location:reservation.php");
    }
?>

<!DOCTYPE html>
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
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h2>
                            <br><br><br>
                            Reserve a Room<br><br>
                        </h2>
                    </div>
                </div>               
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div id="panel-primary">
                        <div id="panel-heading">
                            Select Dates
                        </div>
                        <div class="panel-body">
						
                        <form name="form" method="POST" action="reservation.php">
							 
                                       
                                        <div class="form-group">
                                                     <label>Check-In</label>
                                                     <input name="cin" type ="date" class="form-control" required>
                                        </div>
                                    <div class="form-group">
                                                <label>Check-Out</label>
                                                <input name="cout" type ="date" class="form-control" required>
                                    </div>
                            
                              
                                    <input type="submit" name="submit" id="btn-primary" value="Proceed">
                               
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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


                
        