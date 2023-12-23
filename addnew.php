<?php
//insert.php
if(isset($_POST["firstname"]))
{
	include('conn.php');
	$studentid = mysqli_real_escape_string($conn, $_POST['studentid']);
	$dateg = mysqli_real_escape_string($conn, $_POST['dateg']);
	$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$phonenum = mysqli_real_escape_string($conn, $_POST['phonenum']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);
	$dater = mysqli_real_escape_string($conn, $_POST['dater']);
	$request = mysqli_real_escape_string($conn, $_POST['request']);

	mysqli_query($conn,"insert into `userr` (studentid, dateg, firstname, lastname, email, phonenum, description, dater, request) values ('$dateg', '$studentid', '$firstname', '$lastname','$email', '$phonenum', '$description', '$dater', '$request')");
}
?>