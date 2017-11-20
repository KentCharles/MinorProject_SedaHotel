<?php
$server="localhost";
$username="root";
$password="";
$connect_mysql=mysqli_connect($server,$username,$password) or die ("Connection Failed!");
$mysql_db=mysqli_select_db($connect_mysql, "seda") or die ("Could not Connect to Database");

$query = "SELECT * FROM bookings";
$result=mysqli_query($connect_mysql, $query) or die("Query Failed : ".mysqli_error());


$accounts = "SELECT * FROM accounts";
$users=mysqli_query($connect_mysql, $accounts) or die("Query Failed : ".mysqli_error());



$rooms = "SELECT * FROM rejects";
$room=mysqli_query($connect_mysql, $rooms) or die("Query Failed : ".mysqli_error());
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
                        <li style="color: white;">Admin Page</li>
                        </ul> 
                    </div>    
                    <div id="logo"><img src="img/logo2.png" width="70px" hieght="auto"></div>                
            </div>
        </div> 
        
         <div id="admin-wrapper" >
            <div id="page-inner">
                
                  <div class="fluid-container" style="padding: 30px; margin-top: 100px; ">
                    <center>
                    <ul class="nav nav-tabs" role="tablist">
                        <li style="color: white;"><a href="admin1.php" ><h4 id="textcolor">Users</h4></a></li>
                        <li style="color": white;><a href="admin2.php" ><h4 id="textcolor">Pendings</h4></a></li>
                        <li style="color": white;><a href="admin5.php" ><h4 id="textcolor">Bookings</h4></a></li>
                        <li class="active" ><a href="admin6.php" ><h4 id="textcolor">Rejects</h4></a></li>
                        <li style="color: white;"><a href="admin3.php" ><h4 id="textcolor">Occupied</h4></a></li>
                        <li style="color: white;" ><a href="admin4.php" ><h4 id="textcolor">Rooms</h4></a></li>
                    </ul>
                    </center>
                </div>
                
                    <div class="tab-content" style="background-color: beige; color: #170a02;">
                      <div role="tabpanel" class="tab-pane fade in active" id="profile" style="overflow: auto; padding: 0 55px;">
                        <table id="table" class="table table-hover">  
                            <thead> 
                              <tr id="panel-heading" style="font-size: 16spx;">
                                        <th>Guest Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Type of Room</th>
                                        <th># of Rm</th>
                                        <th>Meal</th>
                                        <th>Check-in</th>
                                        <th>Check-out</th>
                                        <th>STATUS</th>
                                       
                                    </tr>
                            </thead>
                            <tbody>
                              <?php while($rows=mysqli_fetch_array($room)) { ?>
                                    <tr> 
                                        <td><?php echo $rows['fname'] ?></td>
                                        <td><?php echo $rows['email'] ?></td>
                                        <td><?php echo $rows['phone'] ?></td>
                                        <td><?php echo $rows['troom'] ?></td>
                                        <td><?php echo $rows['nroom'] ?></td>
                                        <td><?php echo $rows['meal'] ?></td>
                                        <td><?php echo $rows['cout'] ?></td>
                                        <td><?php echo $rows['cin'] ?></td>
                                        <td style = "color : red;"><?php echo $rows['status'] ?></td>
                                            <?php } ?>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                 <div>
		  	           
                    </div>   
                
                    
                    </div>
                </div>
            </div>
    </body>
</html>

