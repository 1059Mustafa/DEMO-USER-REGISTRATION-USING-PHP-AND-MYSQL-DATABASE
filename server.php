<<?php 

session_start();

//initialise variable

$username = "";
$email = "";

$errors = array();

//connect to database

$db=mysql_connect('localhost','root','','practice') or die("could not connect to database");

//register users

$username = mysqli_real_escape_string($db,$_POST[username]);
$email = mysqli_real_escape_string($db,$_POST[email]);
$password_1 = mysqli_real_escape_string($db,$_POST[password_1]);
$password_2 = mysqli_real_escape_string($db,$_POST[password_2]);

//form validation

if(empty($username)){array_push($errors, "Username is required")}
if(empty($email)){array_push($errors, "Email is required")}
if(empty($password_1)){array_push($errors, "Password is required")}
if($password_1 != $password_2){array_push($errors, "Password do not match")};


// check db for existing with same username

$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email'  LIMIT 1";

$result = mysqli_qiery($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user) {

	if($user['username'] == $username){array_push($errors, "Username already exists");}
	if($user['email'] == $email){array_push($errors, "this email already has a registerde username");}

}

//register the user if no error 
	
if(count($errors)==0){

	$password md5($password_1); //this will encrypt the password
	$query = "INSERT INTO user (username,email,password) VALUES("$username","$email","$password");

	mysqli_query($db,$query);
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "You are now log in";

	header('location: index.php');
	
}













































 ?>