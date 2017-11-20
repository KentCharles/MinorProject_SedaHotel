<?php
include ('config.php');

$roomType = $_POST['type'];
$checkIn = $_POST['check_in'];
$checkOut = $_POST['check_out'];

	if(strcmp($roomType, "DELUXE")==0){
		$available =5;
		$check = "select DISTINCT room_num from availability where check_in <= '$checkIn' and check_out >= '$checkOut' and id =1";
			$users=mysqli_query($link, $check);

			while(mysqli_fetch_array($users)){
				$available--;
			}
			echo $available;
	}
	elseif(strcmp($roomType, "PREMEIRE")==0){
		$available =5;
		$check = "select DISTINCT room_num from availability where check_in <= '$checkIn' and check_out >= '$checkOut' and id =2";
			$users=mysqli_query($link, $check);

			while(mysqli_fetch_array($users)){
				$available--;
			}
			echo $available;
	}
	elseif(strcmp($roomType, "CLUB HOUSE")==0){
		$available =5;
		$check = "select DISTINCT room_num from availability where check_in <= '$checkIn' and check_out >= '$checkOut' and id =3";
			$users=mysqli_query($link, $check);

			while(mysqli_fetch_array($users)){
				$available--;
			}
			echo $available;
	}
	

?>


