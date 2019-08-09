<?php
session_start();

//initilize variables.
$username = "";
$email ="";
$password ="";
$confirm_password ="";
$id =0;


//connect to  database
$db = mysqli_connect('localhost', 'root', '', 'quickk');

//register 
//if submit button is clicked.
if (isset($_POST['register']))
{
	echo 'here';
	//echo "here";
	$username = $_POST['username'];
	$email =$_POST['email'];
	$password =$_POST['password'];
	$confirm_password =$_POST['confirm_password'];
	$agree =$_POST['agree'];
	$id=0;


	if($agree==='on'){
		$agree = 1;
	}
	else{
		$agree = 0;
	}

/*//first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }*/

	$query = "INSERT INTO user (username, email, password, confirm_password, agree)VALUES('$username','$email','$password','$confirm_password','$agree')";



	if(mysqli_query($db, $query)) {
		echo 'ok  ';
	} else {
		echo 'error:'.$query.'   check: '.$db->error;
	}
	// check connection
	if ($db->connect_error){
		die("connection failed:" . $db->connect_error);
	}
	else {
		echo "connected successfully";
	}
	header('location:in.php');


}


//login
//grab user submitted information
if (isset($_POST['signin']))
{
	$username = $_POST['username'];
	$password =$_POST['password'];

//make sure we connected successfully
	if (! $db) {
		die ('connection failed' .mysqli_error());
	}
// select the database to use
	mysqli_select_db($db,"quick");

	$query="SELECT username, password FROM user WHERE username = '$username'";

	$result = mysqli_query($db, $query);
	if($result){
		echo 'ok';
	} else {
		echo 'error: '.$query.' check:'.$db->error;
	}

	$row = mysqli_fetch_array($result);

	if($row["username"] ==$username && $row["password"] ==$password ) {
		echo "You are a validated user. " ;
	}
	else{
		echo "Sorry, your credentials are not valid, please try again.";
	}
	header('location:in.php');

}
//if post button is clicked.

if (isset($_POST['post']))
{
	echo 'here';
	//echo "here";
	$title = $_POST['title'];
	$description =$_POST['description'];

	$query = "INSERT INTO blogs (title, description)VALUES('$title','$description')";



	if(mysqli_query($db, $query)) {
		echo 'ok  ';
	} else {
		echo 'error:'.$query.'   check: '.$db->error;
	}
	// check connection
	if ($db->connect_error){
		die("connection failed:" . $db->connect_error);
	}
	else {
		echo "connected successfully";
	}
	//header('location:in.php');


}	
//for show post on index page
	echo 'here';
	//echo "here";
	$title = $_POST['title'];
	$description =$_POST['description'];

$sql = "SELECT title, description FROM blogs";

if(mysqli_query($db, $query)) {
		echo 'ok  ';
	} else {
		echo 'error:'.$query.'   check: '.$db->error;
	}
	// check connection
	if ($db->connect_error){
		die("connection failed:" . $db->connect_error);
	}
	else {
		echo "connected successfully";
	}


?>