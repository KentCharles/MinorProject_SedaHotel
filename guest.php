<!DOCTYPE html>

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
        
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.34/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.34/js/uikit.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.34/js/uikit-icons.min.js"></script>


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
    
    <body>
	
        <a id="home"></a>
        
        <!-- -----------------Carousel------------------- -->
        
        <div>
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!--Indicators -->
                
                <ol class="carousel-indicators">
		        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		        <li data-target="#myCarousel" data-slide-to="1"></li>
		        <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>   

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                  <div class="item active">
                    <img src="img/cover.jpg" alt="Los Angeles" style="width:100%;">
                  </div>

                  <div class="item">
                    <img src="img/cover1.jpg" alt="Chicago" style="width:100%;">
                  </div>

                  <div class="item">
                    <img src="img/cover2.jpg" alt="New York" style="width:100%;">
                  </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            

        </div>
        <!-- -----------------End of Carousel------------------- -->
        
        <div id="MainContainer" >

            <div id="Header">
                  
                    <div id="NavBar">
                        <ul>
                        <li style="color: antiquewhite; width: 160px;"><b>Welcome, <?php echo $username ?>!</b></li>
                        <li><a id="nav" href="index.php">Log out</a></li>
                        <li><a id="nav" href="#contact">Contact</a></li>
                        <li><a id="nav" href="#about">About</a></li>
                        <li><a id="nav" href="reservation.php">Book</a></li>
                        <li><a id="nav" href="#home">Home</a></li>
                        </ul> 
                        
                        </div>    
                        <div id="logo"><a href="guest.php"><img src="img/logo2.png" width="70px" hieght="auto"></a></div>                
                        </div>
                    </div>   

                
                    <div id="reservebg">
                        
                        <center>
                        <h3 id="textcolor" style="margin-top: 100px;" ><span><b>A warm smile from a familiar face. </b></span></h3>
                            
                        <h4 id="textcolor" style="margin-top: 2px;"><span>Discover the best feeling in the world and experience genuine hospitality.</span></h4><br><br><br><br>
                        </center>
                        
                            <div style="margin-right: 200px; text-align: justify; ">
                                
                                <img src="img/deluxe.jpg" width="700px" style="float: left; margin-left: 50px; margin-right: 20px; margin-bottom: 50px;">
                                
                                <p> <h4><b><br>Deluxe Rooms</b></h4>Deluxe Rooms are executed in soothing earth tones that evoke a warm and restful ambiance. At 28sqm, each is equipped with a king or twin beds, a 40-inch LED HDTV with cable channels, media panel with HDMI, USB and audio-visual connectivity, complimentary Wi-Fi and broadband internet access, IDD phone with iPod dock, alarm clock, voice mail and radio,coffee and tea making facilities, mini-bar and in-room safe.<br><br><br><br><br><br><br><br>
                            </div>
                        
                              <div style="margin-left: 200px; text-align:justify; ">
                                
                                <img src="img/clubroom.jpg" width="700px" style="float: right; margin-right: 50px; margin-left: 20px; margin-bottom: 50px;">
                                
                                <p> <h4 style="text-align:right;"><b><br><br>Club Rooms</b></h4>Club Rooms offer a range of privileges for discerning travelers. Located on the 10th and 11th floors, they provide access to the Club Lounge where guests enjoy exclusivity and premium service; daily Continental breakfast; all-day refreshments and cocktails; iMac stations; work tables; reading materials; a wide-screen LED HDTV with cable channels; and secretarial assistance.<br><br><br><br><br><br><br><br><br><br><br><br>
                            </div>
                        
                            <div style="margin-right: 200px; text-align: justify; ">
                                
                                <img src="img/premiere.jpg" width="700px" style="float: left; margin-left: 50px; margin-right: 20px; margin-bottom: 50px;">
                                
                                <p> <h4><b><br><br>Premier Rooms</b></h4>Premier Rooms offer bigger accommodations and supplementing facilities. With a floor area of 35 sqm, additional features include a bath tub and kitchenette, as well as Club Lounge access.safe.<br><br><br><br><br><br><br><br>
                            </div>
                
                
                        <br><br><br>

                    </div>
        
        
            <a id="about"></a>
                    <div id="aboutbg">
                        
                        <div id="aboutparagraph">
                            
                            <h3 id="textcolor" ><span><b>About Seda Hotel</b></span></h3>
                            <p> Seda Abreeza offers 186 guestrooms for discerning travelers searching for the best hotels in Davao City, Southern Mindanao Island’s hub for commerce, tourism and industry. Located just across Abreeza Mall, the hotel ushers guests to a world of unparalleled comfort and convenience, and reflects the city’s progress with cutting-edge features that include an e-lounge with a bank of iMacs at the lobby and complimentary Wi-Fi throughout the premises.<br><br>

                            Seda Abreeza’s interiors are sleek, clean and elegant, showcasing commissioned pieces from esteemed Philippine artists. Design accents also feature regional arts and crafts that are gaining an enviable niche in the fashion and interior design industry worldwide.<br><br>

                            Seda Abreeza is an easy 20-minute drive to the Davao International Airport. Its location enables convenient access to various tourist attractions such as the Philippine Eagle breeding camp, white water rafting, and one of the country's longest zip lines. It is also just an hour to the port from where boats depart for Samal Island’s white sand beaches and diving spots, and a few hours away to the Philippines’ highest peak, Mt. Apo.<br><br>
                            
                            For room reservations, <a href="reservation.php">click to check availability and prices.</a>
                            </p>
                            
                        </div>
                        
                        
                        <br><br><br><br><br><br><br><br><br>

                        </div>
        
        	<div id="contact" class="container col-lg-12">
			<div id = "contactparagraph">
				<h3 id="textcolor" ><span><b>Contact Seda Hotel </b></span></h3>
				<p class="con">The best of business and pleasure come together at Seda Abreeza. <br>Experience it all and stay at this elegant and trendy hotel in Davao.</p><br>
               
			
			<div>
			    <div class="row">
			        <div class="col-md-8">
			            <div id="panel-heading">
			                <form>
			                <div class="row">
			                    <div class="col-md-6 ">
			                        <div class="form-group">
			                            <label for="name">
			                                Name</label>
			                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
			                        </div>
			                         <div class="form-group">
			                            <label for="name">
			                                Contact</label>
			                            <input type="text" class="form-control" id="name" placeholder="Enter number" required="required" />
			                        </div>
			                        <div class="form-group">
			                            <label for="email">
			                                Email Address</label>
			                            <div class="input-group">
			                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
			                                </span>
			                                <input type="text" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
			                        </div>
			                    </div>
			                    <div class="col-md-6">
			                        <div class="form-group">
			                            <label for="name">
			                                Message</label>
			                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
			                                placeholder="Message"></textarea>
			                        </div>
			                    </div>
			                    <div class="col-md-12">
			                        <button type="submit" class="btn btn-primary pull-right" id="btn-send">
			                            Send Message</button>
			                    </div>
			                </div>
			                </form>
			            </div>
			        </div>
                    
			        <div class="col-md-4 offset col-md-4">
			            <form><center>
                            <p class="con">J.P. Laurel Ave., Bajada<br>
                    Davao City 8000, Philippines<br>
                    Phone Number: (6382) 3228888    <br>
                    Email Address: sales.dvo@sedahotels.com</p>
			     			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3074.7905052320443!2d-77.84987248482734!3d39.586871613613056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c9f6a80ccf0661%3A0x7210426c67abc40!2sVirginia+Welcome+Center%2FSafety+Rest+Area!5e0!3m2!1sen!2sin!4v1485760915662" ></iframe>

			            </center></form>
			        </div>
                    
                    </div>
                </div>	
            </div>
        </div>
        
		<!--endOfContact-->
		


	</body>


</html>