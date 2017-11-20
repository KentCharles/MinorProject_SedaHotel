<!DOCTYPE html>

<?php
include('config.php');
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
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h2>
                            <br><br><br>
                            Registration Form<br><br>
                        </h2>
                    </div>
                </div>               
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div id="panel-primary">
                        <div id="panel-heading">
                            Create an account
                        </div>
                        <div class="panel-body">
						
                        <form name="form" method="post" action="register.php">
							  
                            
                                <div class="form-group">
                                            <label>Username</label>
                                            <input name="username" type="text" class="form-control" required>   
                               </div>
                                   <div class="form-group">
                                                <label>Email</label>
                                                <input name="email" type="email" class="form-control" required>
                                   </div>
                                       <div class="form-group">
                                                    <label>Password</label>
                                                    <input name="password_1" type="password" class="form-control" required>
                                       </div>
                                            <div class="form-group">
                                                        <label>Confirm Password</label>
                                                        <input name="password_2" type ="password" class="form-control" required>
                                            </div>
                                        <div>
                                        
                                    <input type="submit" name="register" id="btn-primary">
                                                
                                        <div>
                                            <p> Already a member? <a href="index.php">Sign in</a></p>
                                        </div>  
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
                        <li><a id="nav" href="index.php">Back to Home page</a></li>
                        </ul> 
                        
                        </div>    
                        <div id="logo"><img src="img/logo2.png" width="70px" hieght="auto">
                </div>                
            </div>
        </div> 
    </body>
</html>


                
        