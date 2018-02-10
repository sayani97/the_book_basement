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
$reg= $_POST['reg'];
$password = $_POST['password'];
if($reg !='' ||$password!=''){
//Insert Query of SQL
 $query = "SELECT * FROM user_info WHERE RegNo='$reg' AND Password='$password'";
 /*$results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header('location: homepage.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }*/
$results=$conn->query($query);
if(mysqli_num_rows($results)==1 )
{

header("Location:http://www.facebook.com");
}
else
{
	echo "<br/><br/><span>Wrong Data...!!</span>";

}
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
$conn->close(); // Closing Connection with Server
?>