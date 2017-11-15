<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'seda');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


//registration
if(isset($_POST['register'])){
    $username = $_POST['username'];
	$email = $_POST['email'];
	$password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

            if (empty($username)){
                array_push($errors, "Username is required");
            }
            if (empty($email)){
                array_push($errors, "Email is required");
            }
            if (empty($password_1)){
                array_push($errors, "Password is required");
            }
            if ($password_1 != $password_2){
                array_push($errors, "The two passwords do not match");
            }
        
            if (count($errors) == 0){
                $password = md5($password_1);
                $sql = "INSERT INTO accounts (username, email, password)
                        VALUES ('$username', '$email', '$password')";
                mysqli_query($link, $sql);
            }
            header("location: index.php");
}

