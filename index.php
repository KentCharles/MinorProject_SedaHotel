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
        
        <div id="MainContainer">

            <div id="Header">
                  
                    <div id="NavBar">
                        <ul>
                        <li><a id="nav" href="#contact">Contact</a></li>
                        <li><a id="nav" href="#reserve">Book</a></li>
                        <li><a id="nav" href="#about">About</a></li>
                        <li><a id="nav" href="#home">Home</a></li>
                        </ul> 
                        
                        </div>    
                        <div id="logo"><img src="img/logo2.png" width="70px" hieght="auto"></div>                
                        </div>
                    </div>   

        
            <a id="homebg"></a>
                    <div id="reservebg">
                        <br><br><br>
                        
                        <center>
                            <h3 ><span><b>EXPERIENCE A GOOD  STAY, ENJOY FANTASTIC OFFERS </b></span></h3>
                            
                        <h4><span>Find our friendly welcoming reception</span></h4><br>
                        </center>
                        
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                    </div>
        
        
            <a id="about"></a>
                    <div id="aboutbg">
                        
                        <div id="aboutparagraph">
                            
                            <h1> About Seda Hotel</h1>
                            <p> Seda Abreeza offers 186 guestrooms for discerning travelers searching for the best hotels in Davao City, Southern Mindanao Island’s hub for commerce, tourism and industry. Located just across Abreeza Mall, the hotel ushers guests to a world of unparalleled comfort and convenience, and reflects the city’s progress with cutting-edge features that include an e-lounge with a bank of iMacs at the lobby and complimentary Wi-Fi throughout the premises.<br><br>

                            Seda Abreeza’s interiors are sleek, clean and elegant, showcasing commissioned pieces from esteemed Philippine artists. Design accents also feature regional arts and crafts that are gaining an enviable niche in the fashion and interior design industry worldwide.<br><br>

                            Seda Abreeza is an easy 20-minute drive to the Davao International Airport. Its location enables convenient access to various tourist attractions such as the Philippine Eagle breeding camp, white water rafting, and one of the country's longest zip lines. It is also just an hour to the port from where boats depart for Samal Island’s white sand beaches and diving spots, and a few hours away to the Philippines’ highest peak, Mt. Apo.<br><br>
                            
                            For room reservations, <a href="#reserve">click to check availability and prices.</a>
                            </p>
                            
                        </div>
                        
                        
                        <br><br><br><br><br><br><br><br><br>

                        </div>

   

	</body>


</html>