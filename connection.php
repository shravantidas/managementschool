<?php  
$sName = "localhost";
$uName = "root";
$pass  = "";
$db_name = "managementschool";
$conn = new mysqli($sName, $uName, $pass, $db_name);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// $host="localhost";
// $user="root";
// $password="";
// $db="managementschool";
// $data=mysqli_connect($host,$user,$password,$db);
// if($data==false){
//   die("Connection error");
// }
?>