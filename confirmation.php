<?php
include('config.php');

    
session_start();
    $troom = $_SESSION['troom'];
    $cin = $_SESSION['cin'];
    $cout = $_SESSION['cout'];
    $fname = $_SESSION['fname'];
    $email = $_SESSION['email'];
    $phone = $_SESSION['phone'];
    $nroom = $_SESSION['nroom'];
    $meal = $_SESSION['meal'];
    $username = $_SESSION['username'];
    $fixRoom = $nroom;
        
        if(isset($_POST['c_submit'])){
            
            
            
            if(strcmp($troom, "DELUXE")==0) {
    		
    		$room_num  = 301;
    		$roomCHECK = 301;
    		$available =5;
    		$rooms = array();	
    		$check = "select DISTINCT room_num from availability where check_in <= '$cin' or check_out >= '$cout' and id =1";

			$users=mysqli_query($link, $check);

			while($rows=mysqli_fetch_array($users)){
				if($room_num == $rows['room_num']) {
						$rooms[] = $rows['room_num'];
						$roomCHECK++;
						$available--;
					}
			}

			if($nroom==1){
				for($x=0; $x<sizeof($rooms);$x++){
					if($room_num==$rooms[$x]){
						$room_num++;
					}
				}
				$sql = "INSERT INTO availability (id, room_num, check_in, check_out, fname, username) VALUES 
						(1, '$room_num', '$cin', '$cout', '$fname', '$username')";
				mysqli_query($link, $sql);
				header("location: guest.php");
			}
			else{
				if($nroom<=$available){
					while($nroom!=0){
						for($x=0; $x<sizeof($rooms);$x++){
							if($room_num==$rooms[$x]){
								$room_num++;
							}
						}
						$sql = "INSERT INTO availability (id, room_num, check_in, check_out, fname, username) VALUES 
								(1, '$room_num', '$cin', '$cout', '$fname', '$username')";
						mysqli_query($link, $sql);
						$rooms[] = $room_num;
						$nroom--;
					}
					header("location: guest.php");
				}
				else{
					?><script type="text/javascript"> alert("NOT ENOUGH ROOMS");</script><?php
				}
			}	
			
		}
    elseif(strcmp($troom, "PREMEIRE")==0) {
    		
    		$room_num  = 501;
    		$roomCHECK = 501;
    		$available =5;
    		$rooms = array();	
    		$check = "select DISTINCT room_num from availability where check_in <= '$cin' or check_out >= '$cout' and id =3";

			$users=mysqli_query($link, $check);

			while($rows=mysqli_fetch_array($users)){
				if($room_num == $rows['room_num']) {
						$rooms[] = $rows['room_num'];
						$roomCHECK++;
						$available--;
					}
			}

			if($nroom==1){
				for($x=0; $x<sizeof($rooms);$x++){
					if($room_num==$rooms[$x]){
						$room_num++;
					}
				}
				$sql = "INSERT INTO availability (id, room_num, check_in, check_out, fname, username) VALUES 
						(3, '$room_num', '$cin', '$cout', '$fname', '$username')";
				mysqli_query($link, $sql);
				header("location: guest.php");
			}
			else{
				if($nroom<=$available){
					while($nroom!=0){
						for($x=0; $x<sizeof($rooms);$x++){
							if($room_num==$rooms[$x]){
								$room_num++;
							}
						}
						$sql = "INSERT INTO availability (id, room_num, check_in, check_out, fname, username) VALUES 
								(3, '$room_num', '$cin', '$cout', '$fname', '$username')";
						mysqli_query($link, $sql);
						$rooms[] = $room_num;
						$nroom--;
					}
					header("location: guest.php");
				}
				else{
					?><script type="text/javascript"> alert("NOT ENOUGH ROOMS");</script><?php
				}
			}	
			
		}
    elseif(strcmp($troom, "CLUB HOUSE")==0) {
    		
    		$room_num  = 401;
    		$roomCHECK = 401;
    		$available =5;
    		$rooms = array();	
    		$check = "select DISTINCT room_num from availability where check_in <= '$cin' or check_out >= '$cout' and id =2";

			$users=mysqli_query($link, $check);

			while($rows=mysqli_fetch_array($users)){
				if($room_num == $rows['room_num']) {
						$rooms[] = $rows['room_num'];
						$roomCHECK++;
						$available--;
					}
			}

			if($nroom==1){
				for($x=0; $x<sizeof($rooms);$x++){
					if($room_num==$rooms[$x]){
						$room_num++;
					}
				}
				$sql = "INSERT INTO availability (id, room_num, check_in, check_out, fname, username) VALUES 
						(2, '$room_num', '$cin', '$cout', '$fname', '$username')";
				mysqli_query($link, $sql);
				header("location: guest.php");
			}
			else{
				if($nroom<=$available){
					while($nroom!=0){
						for($x=0; $x<sizeof($rooms);$x++){
							if($room_num==$rooms[$x]){
								$room_num++;
							}
						}
						$sql = "INSERT INTO availability (id, room_num, check_in, check_out, fname,  username) VALUES 
								(2, '$room_num', '$cin', '$cout', '$fname', '$username')";
						mysqli_query($link, $sql);
						$rooms[] = $room_num;
						$nroom--;
					}
					header("location: guest.php");
				}
				else{
					?><script type="text/javascript"> alert("NOT ENOUGH ROOMS");</script><?php
				}
			}	
			
		}		
           
            $sql = "INSERT INTO bookings (troom, cin, cout, fname, email, phone, nroom, meal, username) 
            VALUES ('$troom', '$cout', '$cin', '$fname', '$email', '$phone', '$fixRoom', '$meal', '$username')";
            
            mysqli_query($link, $sql); 
            
            header('location: success.php');
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
                           
						   <form name="form" method="post" action="confirmation.php">
							  <div class="form-group">
                                            <label name="fname">
                                                Name of Guest: <?php echo $fname; ?>
                                            </label>
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
                               <hr>
                               
                                     <div class="form-group">
                                                            <label><h4><b>Payment Method</b></h4></label><br>
                                                            <label>Pay with*</label><br>
                                                            
                                                            <label style="float: left; margin-right: 20px;"><input name="payment" class="form-control" type="radio" value="Paypal" style="width: 15px;" required><img src="img/visa.jpg" style="width: 80px;"></label>
                                        
                                                            <label style="float: left; margin-left: 20px;">
                                                            <input name="payment" class="form-control" type="radio" value="Paypal" style="width: 15px;" required><img src="img/paypal.png" style="width: 150px;"></label>
                                        
                                                            <label style="float: left; margin-left: 20px;"><input name="payment" class="form-control" type="radio" value="MasterCard" style="width: 15px;" required><img src="img/mastercard.jpg" style="width: 80px;"></label>
                                        
                                        <div class="form-group">
                                                        <label><br>Cardholder's Name *</label>
                                                        <input name="cardholder" type ="text" class="form-control" required>
                                            </div>
                                        
                                        <div class="form-group">
                                                        <label>Card Number *</label>
                                                        <input name="cardnumber" type ="text" class="form-control" required>

                                            </div>
                                        
                                        <label>Card Expiration *<br></label>
                                        <div class="form-group">
                                                            <select name="month" class="form-control" required style=" width:60%; float:left; margin-right:5%;">
                                                                <option value selected ></option>
                                                                <option value="jan">January</option>
                                                                <option value="feb">February</option>
                                                                <option value="mar">March</option>
                                                                <option value="apr">April</option>
                                                                <option value="may">May</option>
                                                                <option value="jun">June</option>
                                                                <option value="jul">July</option>
                                                                <option value="aug">August</option>
                                                                <option value="sep">September</option>
                                                                <option value="oct">October</option>
                                                                <option value="nov">November</option>
                                                                <option value="dec">December</option>
                                                            </select>
                                              
                                                            <select name="month" class="form-control" required style=" width:35%;">
                                                                <option value selected ></option>
                                                                <option value="jan">2017</option>
                                                                <option value="feb">2018</option>
                                                                <option value="mar">2019</option>
                                                                <option value="apr">2020</option>
                                                            </select>
                                        
                                    </div>
                                <div>
                            </div>
                        </div>
                                <div>
                                    <input type="submit" name="c_submit" id="btn-primary">
                                    <a href = "javascript:history.back()"><center>Edit Booking Information<br><br></center></a>
                                </div>
                            </form>   
                            
                        </div>
                    </div>
                </div>
            </div><br><br><br>
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
