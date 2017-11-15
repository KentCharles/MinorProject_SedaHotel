<?php
include('config.php');

if(isset($_POST['submit'])){

    $troom=$_POST['troom'];
    $nroom=$_POST['nroom'];
    $meal=$_POST['meal'];
    $cin=$_POST['cin'];
    $cout=$_POST['cout'];
    

    if(strcmp($troom, "DELUXE")==0) {
    		
    		$room_num  = 301;
    		$rooms = array();	
    		$check = "select DISTINCT room_num from availability where check_in <= '$cin' or check_out >= '$cout'";

			$users=mysqli_query($link, $check);

			while($rows=mysqli_fetch_array($users)){
				if($room_num == $rows['room_num']) {
								$room_num++;
					}
			}

			while($nroom!=0){
			if(($room_num+$nroom) >=305){
					echo "not enough rooms for you bitch ..";
					break;
			}
			elseif($room_num <=305){
				$sql = "INSERT INTO availability (room_num, check_in, check_out) 
                		VALUES ('$room_num', '$cin' , '$cout' )";
            		mysqli_query($link, $sql);
            	$nroom--;
            	$room_num++; 
			}
			else { echo "NO ROOMS AVAILABLE ! ";}
		}
		}

		if(strcmp($troom, "CLUB HOUSE")==0) {
    		
    		$room_num  = 401;
    		$rooms = array();	
    		$check = "select DISTINCT room_num from availability where check_in <= '$cin' or check_out >= '$cout'";

			$users=mysqli_query($link, $check);

			while($rows=mysqli_fetch_array($users)){
				if($room_num == $rows['room_num']) {
								$room_num++;
					}
			}

			while($nroom!=0){
			if(($room_num+$nroom) >=405){
					echo "not enough rooms for you bitch ..";
					break;
			}
			elseif($room_num <=405){
				$sql = "INSERT INTO availability (room_num, check_in, check_out) 
                		VALUES ('$room_num', '$cin' , '$cout' )";
            		mysqli_query($link, $sql);
            	$nroom--;
            	$room_num++; 
			}
			else { echo "NO ROOMS AVAILABLE ! ";}
		}
		}

		if(strcmp($troom, "PREMEIRE")==0) {
    		
    		$room_num  = 501;
    		$rooms = array();	
    		$check = "select DISTINCT room_num from availability where check_in <= '$cin' or check_out >= '$cout'";

			$users=mysqli_query($link, $check);

			while($rows=mysqli_fetch_array($users)){
				if($room_num == $rows['room_num']) {
								$room_num++;
					}
			}

			while($nroom!=0){
			if(($room_num+$nroom) >=505){
					echo "not enough rooms for you bitch ..";
					break;
			}
			elseif($room_num <=505){
				$sql = "INSERT INTO availability (room_num, check_in, check_out) 
                		VALUES ('$room_num', '$cin' , '$cout' )";
            		mysqli_query($link, $sql);
            	$nroom--;
            	$room_num++; 
			}
			else { echo "NO ROOMS AVAILABLE ! ";}
		}
		}
					
			
        }

 	
?>

<html>
 <form name="form" method="POST" action="practice.php">
								 <div class="form-group">
                                                            <label>Type of Room *</label>
                                                            <select name="troom"  class="form-control" required>
                                                                <option value selected ></option>
                    
                                                                <option value="DELUXE">DELUXE ROOM</option>
                                                                <option value="PREMEIRE">PREMEIRE ROOM</option>
                                                                <option value="CLUB HOUSE">CLUB HOUSE</option>
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

</html>
