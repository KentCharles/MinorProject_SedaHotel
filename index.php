<!DOCTYPE html>

<?php
session_start();
include('config.php');
$errors = array();

    if (isset($_POST['login'])) {
        
        $username = trim($_POST['username']);
        $password = md5($_POST['password']);
        
        
        $sql = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($link, $sql);
        $data = mysqli_fetch_assoc($result);
    
        if(empty($errors)) {
            
            if($username == $data['username'] && $password == $data['password']) {
                
                $_SESSION["id"] = $data['id'];
                header("location: guest.php");
            }else {
            
                $errors["match_form"] = "Username/Password do not match";
            }
        }
        mysqli_close($link);
    }
?>
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
                        </div>    
                        <div id="logo"><img src="img/logo2.png" width="70px" hieght="auto"></div>                
                        </div>
                    </div>   

        
            <a id="login"></a>
        
                    <div id="aboutbg">
                    <div style="width:270px; margin:0 auto; margin-top: 100px; margin-bottom: 100px;">   
                        
                        <form action="index.php" method="post">
                            <div id="#aboutparagraph">
                           
                            Username:<br><input type="text" name="username" id = "uname" class="form-control" required/><br  />
                            Password:<br><input type="password" name="password" id="password" class="form-control" required/><br  />
                            <input type="submit" name="login" id ="btn-login" value="Sign-in" class="form-control" required  />
                            <div><center>
                                <p style="margin-top: 10px;"> Not a member? <a href="register.php">Register here</a></p>
                                </center>
                            </div>  
                            
                            </div>
                        </form> 
                    </div>
                    </div>
	</body>


</html>