<?php
$server="localhost";
$username="root";
$password="";
$connect_mysql=mysqli_connect($server,$username,$password) or die ("Connection Failed!");
$mysql_db=mysqli_select_db($connect_mysql, "seda") or die ("Could not Connect to Database");

$query = "SELECT * FROM bookings";
$result=mysqli_query($connect_mysql, $query) or die("Query Failed : ".mysqli_error());

$deluxe = "SELECT * FROM deluxe";
$room1=mysqli_query($connect_mysql, $deluxe) or die("Query Failed : ".mysqli_error());


$premeire = "SELECT * FROM premeire";
$room2=mysqli_query($connect_mysql, $premeire) or die("Query Failed : ".mysqli_error());

$clubh = "SELECT * FROM clubh";
$room3=mysqli_query($connect_mysql, $clubh) or die("Query Failed : ".mysqli_error());

$accounts = "SELECT * FROM accounts";
$users=mysqli_query($connect_mysql, $accounts) or die("Query Failed : ".mysqli_error());
?>

<script>
    
</script> 

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
   
    <body id="adminbg">
        <div id="MainContainer">
            <div id="Header">
                    <div id="NavBar">
                        <ul>
                        <li><a id="nav" href="#contact">Admin</a></li>
                        </ul> 
                    </div>    
                    <div id="logo"><img src="img/logo2.png" width="70px" hieght="auto"></div>                
            </div>
        </div> 
        
         <div id="admin-wrapper" >
            <div id="page-inner">
                </div>
		<div class="fluid-container" style="padding: 50px; margin-top: 50px">
			<center>
			<ul class="nav nav-tabs" role="tablist">
			    <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><h4 id="textcolor">Users</h4></a></li>
			    <li role="presentation"><a href="#book" aria-controls="book" role="tab" data-toggle="tab"><h4 id="textcolor">Bookings</h4></a></li>
			    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><h4 id="textcolor">Rooms</h4></a></li>
                <li role="presentation"><a href="#mess" aria-controls="mess" role="tab" data-toggle="tab"><h4 id="textcolor">Messages</h4></a></li>
			</ul>
			</center>
		</div>
		<div class="tab-content" style="background-color: white; color: #170a02;">
		  <div role="tabpanel" class="tab-pane fade in active" id="profile" style="overflow: auto; padding: 0 55px;">
		  	<table id="table" class="table table-hover">
                <thead>
                  <tr id="panel-heading">
                    <th>ID No.</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th colspan=2>Action</th>
                  </tr>
                </thead>
                <tbody>
                   <?php while($rows=mysqli_fetch_array($users)) { ?>
                        <tr> 
                            <td><?php echo $rows['id'] ?></td>
                            <td><?php echo $rows['username'] ?></td>
                            <td><?php echo $rows['email'] ?></td>
                            <td><?php echo $rows['password'] ?></td>
                            <td><?php echo '<a href="delete.php?id='.$rows['id'].'">Delete</a>' ?></td>
                                <?php } ?>

                        </tr>
                </tbody>
          </table>  
		  </div>
		  <div role="tabpanel" class="tab-pane fade" id="book">
		  	<div class="fluid-container" style="overflow: auto; padding: 0 55px;">
            <table id="table" class="table table-hover">
                <thead> 
                  <tr id="panel-heading">
                            <th>ID No.</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Type of Room</th>
                            <th>No. of Room</th>
                            <th>Meal</th>
                            <th>Check-in</th>
                            <th>Check-out</th>
                            <th colspan=2>Action</th>
                        </tr>
                </thead>
                <tbody>
                  <?php while($rows=mysqli_fetch_array($result)) { ?>
                        <tr> 
                            <td><?php echo $rows['id'] ?></td>
                            <td><?php echo $rows['fname'] ?></td>
                            <td><?php echo $rows['lname'] ?></td>
                            <td><?php echo $rows['email'] ?></td>
                            <td><?php echo $rows['phone'] ?></td>
                            <td><?php echo $rows['troom'] ?></td>
                            <td><?php echo $rows['nroom'] ?></td>
                            <td><?php echo $rows['meal'] ?></td>
                            <td><?php echo $rows['cin'] ?></td>
                            <td><?php echo $rows['cout'] ?></td>
                            <td><?php echo '<a href="delete.php?id='.$rows['id'].'">Delete</a>' ?></td>
                                <?php } ?>

                        </tr>
                </tbody>
          </table>        
               </div>
		  </div>
		  <div role="tabpanel" class="tab-pane fade" id="settings">
            <div class="fluid-container" style="overflow: auto; padding: 0 55px;">
                                <div>
		  	           <table id="table" class="table table-hover">  
                            <tr id="panel-heading">
                                <th>Deluxe Room</th>
                                <th>Available</th>
                                <th>Booked</th>
                            </tr>
                           
                            <?php while($rows=mysqli_fetch_array($room1)) { ?>
                            <tr> 
                                <td>Room <?php echo $rows['roomnumber'] ?></td>
                                <td><?php echo $rows['available'] ?></td>
                                <td><?php echo $rows['booked'] ?></td>
                            
                                <?php } ?>
                            </tr>
                        </table>
                    </div>
                 <div>
		  	           <table id="table" class="table table-hover">  
                            <tr id="panel-heading">
                                <th>Premeire Room</th>
                                <th>Available</th>
                                <th>Booked</th>
                            </tr>
                           
                            <?php while($rows=mysqli_fetch_array($room2)) { ?>
                            <tr> 
                                <td>Room <?php echo $rows['roomnumber'] ?></td>
                                <td><?php echo $rows['available'] ?></td>
                                <td><?php echo $rows['booked'] ?></td>
                            
                                <?php } ?>
                            </tr>
                        </table>
                    </div>   
                
                     <div>
		  	           <table id="table" class="table table-hover">  
                            <tr id="panel-heading">
                                <th>Club House</th>
                                <th>Available</th>
                                <th>Booked</th>
                            </tr>
                           
                            <?php while($rows=mysqli_fetch_array($room3)) { ?>
                            <tr> 
                                <td>Room <?php echo $rows['roomnumber'] ?></td>
                                <td><?php echo $rows['available'] ?></td>
                                <td><?php echo $rows['booked'] ?></td>
                            
                                <?php } ?>
                            </tr>
                        </table>
                    </div> 
                
                
            <div role="tabpanel" class="tab-pane fade" id="mess">
		  	<div class="fluid-container" style="overflow: auto; padding: 0 55px;">
            <table id="table" class="table table-hover">
                <thead> 
                  <tr id="panel-heading">
                            <th>ID No.</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th colspan=2>Action</th>
                        </tr>
                </thead>
                <tbody>
                  <?php while($rows=mysqli_fetch_array($result)) { ?>
                        <tr> 
                            <td><?php echo $rows['id'] ?></td>
                            <td><?php echo $rows['fname'] ?></td>
                            <td><?php echo $rows['lname'] ?></td>
                            <td><?php echo $rows['email'] ?></td>
                            <td><?php echo $rows['phone'] ?></td>
                            <td><?php echo '<a href="delete.php?id='.$rows['id'].'">Delete</a>' ?></td>
                                <?php } ?>

                        </tr>
                </tbody>
          </table>        
               </div>
		  </div>
            </div>
            
        </div>
		
                
		     
                
            </div>
        </div>
    </body>
</html>

