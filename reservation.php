<?php
include('config.php');

    session_start();

    if(isset($_POST['submit'])){
        
    $troom=$_POST['troom'];
    $cin=$_POST['cin'];
    $cout=$_POST['cout'];
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $nroom=$_POST['nroom'];
    $meal=$_POST['meal'];
    print_r($_POST);
    
    $_SESSION['troom'] = $troom;
    $_SESSION['cin'] = $cin;
    $_SESSION['cout'] = $cout;
    $_SESSION['fname'] = $fname;
    $_SESSION['email'] =$email;
    $_SESSION['phone'] = $phone;
    $_SESSION['nroom'] = $nroom;
    $_SESSION['meal'] = $meal;
    
    header("location:confirmation.php");
    }
 /* ?><script> alert("ASDKAKSDAKSD"); </script><?php */
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
						
                          <form name="form" > 
								 <div class="form-group">
                                                            <label>Type of Room *</label>
                                                            <select name="troom" id ="room_type" class="form-control" onchange ="getType(this.value)" required >
                                                                <option value selected ></option>                    
                                                                <option value="DELUXE">DELUXE ROOM</option>
                                                                <option value="PREMEIRE">PREMEIRE ROOM</option>
                                                                <option value="CLUB HOUSE">CLUB HOUSE</option>
                                                            </select>
                                                  </div>
                                              <div class="form-group">
                                                     <label>Check-In</label>
                                                     <input name="cin" type ="date" id ="check-in" class="form-control" onchange="GetDays()" >
                                        </div>
                                    <div class="form-group">
                                                <label>Check-Out</label>
                                                <input name="cout" type ="date" class="form-control" id = "check-out" onchange="GetDays()">
                                    </div> 
                                                    <div clas="form-group">
                                                        <button id="btn_send" class="check">CHECK AVAILABLE ROOMS</button>
                                                    </div> 
                                            <div class = "form-group">
                                                    <label>AVAILABILITY</label>
                                                    <p id="available_rooms" name = "avail" ></p>
                                            </div>
                              
                                         <div class="form-group">
                                            <label>Name of Guest</label>
                                            <input name="fname" class="form-control" required>   
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
                                                            <label>Meal Plan</label>
                                                            <select name="meal" class="form-control" id ="meal_plan" onchange="getMeal()" required>
                                                            <option value selected ></option>
                                                            <option value="Room only">Room only</option>
                                                            <option value="Breakfast">Breakfast</option>
                                                            <option value="Full Board">Full Board</option>
                                                        </select>
                                            </div>
                                        <div class="form-group">
                                                            <label>No.of Rooms *</label>
                                                            <select name="nroom" class="form-control" onchange ="getRoomNum(this.value)" required>
                                                                <option value selected ></option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                              </div>
                                            
                                            <div class = "form-group">
                                                    <label>TOTAL AMOUNT TO PAY (Php.)</label>
                                                    <input type="text" name="roomprice" id="total"  size="5px" readonly="" />
                                            </div>  
                                        
                                <div>
                                    <input type="submit" name="submit" id="btn-primary"  formmethod="post" formaction="reservation.php"> 
                                   
                                </div> </form>
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


<!--- PARA NI DLI MAG RELOAD ANG PAGE KUNG ANG CHECK NA BUTTON ANG MA CLICK -->
<script src = "jquery.js" type="text/javascript"> </script>
<script>
   $(document).ready(function(){
    $('#btn_send').click(function(){
        $.post("check.php", 
            {type: $('#room_type').val(), check_in: $('#check-in').val(), check_out: $('#check-out').val()}, 
            function(data){
                $('#available_rooms').html(data);
            }
        );
        
    });

});
    
</script>
<?php// para ni siya sa mag solve sa total na bayad sa customer ?>
<script type="text/javascript">
var roomType ="";
var roomNum =0;

    function getType(str){
        roomType = str;
        if(roomNum!=0){getTotal();}
    }

    function getRoomNum(roomnum){
        roomNum = roomnum;
        getTotal();
    }

function getTotal(){ 
    var planPrice = getMeal();
    if(roomType == "DELUXE"){
        var numDays= GetDays();
        
        document.getElementById('total').value = (roomNum * 6800 * numDays + (numDays * planPrice));
        }
    else if (roomType == "PREMEIRE"){ 
        var numDays= GetDays();
        document.getElementById('total').value = (roomNum * 8800 * numDays + (numDays * planPrice)); 
     }
    else if(roomType == "CLUB HOUSE"){
        var numDays= GetDays();
        document.getElementById('total').value = (roomNum * 7800 * numDays + (numDays * planPrice));
        }
    }

var planPrice;
function getMeal(){
    var plan = document.getElementById("meal_plan").value;

    if(plan=="Room only"){
        planPrice = 0;
        return planPrice;
    }
    else if (plan=="Breakfast"){
        planPrice = 500;
        return planPrice;
    }
    else if (plan=="Full Board") {
        planPrice =1500;
        return planPrice;
    }
}

// calculate number of days
var numDays;
 function GetDays(){
                var cin = new Date(document.getElementById("check-in").value);
                var cout = new Date(document.getElementById("check-out").value);
                numDays = parseInt((cout - cin) / (24 * 3600 * 1000));
                return numDays;
        }
 
</script>

