<?php

function OpenCon()
{
	$dbhost = "Localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "br41ne";


	if(isset($_POST['submit']))
{ 
	$conn = new mysqli($dbhost, $dbuser,$dbpass,$db) or die("connect failed: %s\n".$conn -> error);

	$txtSurname = $_REQUEST['Surname'];
	$txtfirstname = $_REQUEST['Firstname'];
	$txtEmail = $_REQUEST['email'];
	$txtUsername = $_REQUEST['username'];
	$txtpassword = $_REQUEST['password'];

		$sql = "INSERT INTO users ('surname', 'firstname', 'username', 'email', 'password') VALUES( '$txtSurname', '$txtfirstname', '$txtEmail', '$txtpassword')";

// insert in database 
$rs = mysqli_connect($dbhost,$dbuser,$dbpass,$db,$sql);

if($rs)
{
	echo "Contact Records Inserted";
}
else
{
	echo "Sorry not completed";
}

	return $conn;
}

function CloseCon($conn)
{
	$conn -> close();
}
}
?>