
<?php 
function isAdmin()
{
	// $status = $_SESSION['user']['Status'];
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}
session_start();
// connect to database
require 'config.php';

// variable declaration
$username = "";
$names    = "";
$password = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username,$password;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  e($_POST['username']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);

	$sqli = "SELECT * users WHERE username='$username'";
	$result = mysqli_query($db, $sqli);
	$resultcheck = mysqli_num_rows($result);


	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}
	if($resultcheck > 0){
		array_push($errors, "The Username has been already taken");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database

		if (isset($_POST['Post'])) {
			$Post = e($_POST['Post']);
			$query = "INSERT INTO users VALUES(NULL'$names', '$username','$email','$post', '$password', '$pic', 'Yes')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: set.php');
		}else{
			$query = "INSERT INTO users VALUES(NULL'$names', '$username','$email','$post', '$password', '$pic', 'Yes')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: login.php');				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE User_id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	
function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../index.php");
}
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username,$password, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);
?>
<?php
	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password1 = md5($password);

		$query = "SELECT * FROM users WHERE username='$username' AND password='$password1' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { 
			$logged_in_user = mysqli_fetch_assoc($results);
			{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: V/inbox.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}