<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database')



$con = mysqli_connect('localhost', 'root', '054','br41ne_dates');

// get the post records
$txtSurname = $_REQUEST['Surname'];
$txtfirstname = $_REQUEST['Firstname'];
$txtEmail = $_REQUEST['email'];
$txtUsername = $_REQUEST['username'];
$txtpassword = $_REQUEST['password'];

// database insert SQL code
$sql = "INSERT INTO users (`Id`,'surname', 'firstname', 'username', 'email', 'password') VALUES ('0', '$txtSurname', '$txtfirstname', '$txtEmail', '$txtpassword')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
else
{
	echo "Sorry not completed";
}

	include_once 'main.html'
?>