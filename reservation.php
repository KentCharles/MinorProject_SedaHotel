<?php
include('config.php');

    session_start();

    if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $troom=$_POST['troom'];
    $nroom=$_POST['nroom'];
    $meal=$_POST['meal'];
    $cin=$_POST['cin'];
    $cout=$_POST['cout'];
    
    $_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
    $_SESSION['troom'] = $troom;
    $_SESSION['nroom'] = $nroom;
    $_SESSION['meal'] = $meal;
    $_SESSION['cin'] = $cin;
    $_SESSION['cout'] = $cout;
        
     header("location:confirmation.php");
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
                            Reservation Form<br><br>
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
						
                        <form name="form" method="POST" action="reservation.php">
							  <div class="form-group">
                                            <label>First Name</label>
                                            <input name="fname" class="form-control" required>   
                               </div>
                                   <div class="form-group">
                                                <label>Last Name</label>
                                                <input name="lname" class="form-control" required>
                                   </div>
                                       <div class="form-group">
                                                    <label>Email</label>
                                                    <input name="email" type="email" class="form-control" required>

                                       </div>
                                            <div class="form-group">
                                                        <label>Phone Number</label>
                                                        <input name="phone" type ="text" class="form-control" required>

                                            </div>
                                                <div class="form-group">
                                                            <label>Type of Room *</label>
                                                            <select name="troom"  class="form-control" required>
                                                                <option value selected ></option>
                    
                                                                <option value="Deluxe Room">DELUXE ROOM</option>
                                                                <option value="Guest House">PREMEIRE ROOM</option>
                                                                <option value="Single Room">CLUB HOUSE</option>
                                                            </select>
                                                  </div>
                                              <div class="form-group">
                                                            <label>No.of Rooms *</label>
                                                            <select name="nroom" class="form-control" required>
                                                                <option value selected ></option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                              </div>
                                            <div class="form-group">
                                                            <label>Meal Plan</label>
                                                            <select name="meal" class="form-control"required>
                                                            <option value selected ></option>
                                                            <option value="Room only">Room only</option>
                                                            <option value="Breakfast">Breakfast</option>
                                                            <option value="Full Board">Full Board</option>
                                                        </select>
                                            </div>
                                        <div class="form-group">
                                                     <label>Check-In</label>
                                                     <input name="cin" type ="date" class="form-control">
                                        </div>
                                    <div class="form-group">
                                                <label>Check-Out</label>
                                                <input name="cout" type ="date" class="form-control">
                                    </div>
                                <div>
                                    <input type="submit" name="submit" id="btn-primary">
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
                        <li><a id="nav" href="guest.php">Back to homepage</a></li>
                        </ul> 
                        
                        </div>    
                        <div id="logo"><img src="img/logo2.png" width="70px" hieght="auto">
                </div>                
            </div>
        </div> 
    </body>
</html>


                
        