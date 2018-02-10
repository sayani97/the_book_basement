<?php
$host="localhost";
$uname="root";
$pass="";
$db="book_basement";
$conn=mysqli_connect($host,$uname,$pass,$db); // Establishing Connection with Server// Selecting Database from Server
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['click'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$gender = $_POST['gender'];
$reg = $_POST['reg'];
if($name !=''||$email !='' || $phone!='' || $password!='' || $cpassword!='' || $gender!='' || $reg!='')
{
//Insert Query of SQL
if($password==$cpassword)
{
$query ="INSERT INTO user_info(RegNo,Name,Gender,Email,Password,CPassword) VALUES ('$reg','$name','$gender', '$email','$password','$cpassword')";

if($conn->query($query)==TRUE)
{
	header("Location:login.html");
	
}}
else
{
	header("Location:register.html");
}
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
$conn->close(); // Closing Connection with Server
?>