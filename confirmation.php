<?php
include('config.php');

    
session_start();
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $email = $_SESSION['email'];
    $phone = $_SESSION['phone'];
    $troom = $_SESSION['troom'];
    $nroom = $_SESSION['nroom'];
    $meal = $_SESSION['meal'];
    $cin = $_SESSION['cin'];
    $cout = $_SESSION['cout'];
        
        if(isset($_POST['c_submit'])){
            $sql = "INSERT INTO bookings (fname, lname, email, phone, troom, nroom, meal, cin, cout) 
            VALUES ('$fname', '$lname', '$email', '$phone', '$troom', '$nroom', '$meal', '$cin', '$cout')";
            mysqli_query($link, $sql);
            header("location: guest.php");  
        }       


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

        <script>
            $(document).ready(function(){
                // Add smooth scrolling to all links
                $("a").on('click', function(event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {

                        // Prevent default anchor click behavior
                            event.preventDefault();

                            // Store hash
                            var hash     = this.hash;

                            // Using jQuery's animate() method to add smooth page scroll
                            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                            $('html, body').animate({
                            scrollTop: $(hash).offset().top
                            }, 1500, function(){

                            // Add hash (#) to URL when done scrolling (default click behavior)
                             window.location.hash = hash;
                            });
                        } // End if
                });
            });
            
            
        </script>
	
    </head>
    
    <body id="aboutbg">
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h2>
                            <br><br><br>
                            Confirmation<br><br>
                        </h2>
                    </div>
                </div> 
                 
                               
            <div class="row">
                
                <div class="col-md-6 col-sm-6">
                    <div id="panel-primary">
                        <div id="panel-heading">
                            Booking Information
                        </div>
                        <div class="panel-body">
                           
						   <form name="form" method="post">
							  <div class="form-group">
                                            <label name="fname">
                                                First Name: <?php echo $fname; ?>
                                            </label>
                               </div>
                               
                               
                               <div class="form-group">
                                            <label>Last Name:</label>
                                            <label name="lname"><?php echo $lname;?></label> 
                               </div>
                               
                               <div class="form-group">
                                            <label>Email:</label>
                                            <label name="email"><?php echo $email;?></label> 
                               </div>
                               
                               <div class="form-group">
                                            <label>Phone Number:</label>
                                            <label name="phone"><?php echo $phone;?></label> 
                               </div>
                               
                               <div class="form-group">
                                            <label>Type of Room:</label>
                                            <label name="troom"><?php echo $troom;?></label> 
                               </div>
                               
                               <div class="form-group">
                                            <label>No. of Room:</label>
                                            <label name="nroom"><?php echo $nroom;?></label> 
                               </div>
                               
                               <div class="form-group">
                                            <label>Meal:</label>
                                            <label name="meal"><?php echo $meal;?></label> 
                               </div>
                               
                               <div class="form-group">
                                            <label>Check-in Date:</label>
                                            <label name="cin"><?php echo $cin;?></label> 
                               </div>
                               
                               <div class="form-group">
                                            <label>Check-out Date:</label>
                                            <label name="cout"><?php echo $cout;?></label> 
                               </div>
                                   
                                <div>
                                    <input type="submit" name="c_submit" id="btn-primary">
                                      <input type="submit" name="cancel" id="btn-cancel" value="Back">
                                </div>
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
                        <ul>
                        <li><a id="nav" href="#contact">Reservation Form</a></li>
                        </ul> 
                        
                        </div>    
                        <div id="logo"><img src="img/logo2.png" width="70px" hieght="auto"></div>                
                        </div>
                    </div> 
    </body>
</html>
