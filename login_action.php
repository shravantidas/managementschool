<?php
 include('connection.php'); 
 session_start();
// Set session variables
 $email=$_POST['email'];
 $pass=$_POST['password'];
 $loginas=$_POST['loginas'];

if($loginas=='admin'){
  $sql = "SELECT * FROM admin WHERE email='$email'";
  $result = $conn->query($sql);
  
  if($result){
    $row = $result->fetch_assoc();
    $pass=md5($pass);
   
    if($pass==$row['password']){
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $email; 
     include('admindashboard.php');
    }
  }
  else {
    header('Location: login.php');
  }
}
if($loginas=='student'){
  $sql = "SELECT * FROM student WHERE email='$email'";
  $result = $conn->query($sql);
  
  if($result){
    $row = $result->fetch_assoc();
    if($pass==$row['password']){
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $email; 
      include('studentdashboard.php');
    }
  }
  else {
    header('Location: login.php');
  }
}

if($loginas=='instructor'){
  $sql = "SELECT * FROM instructor WHERE email='$email'";
  $result = $conn->query($sql);
  
  if($result){
    $row = $result->fetch_assoc();
    $pass=md5($pass);
    if($pass==$row['pass']){
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $email; 
      include('instructordashboard.php'); 
       }
  }
  else {
    header('Location: login.php');
  }
}
// include('connection.php');
// global $conn;
// if($_SERVER["REQUEST_METHOD"]==POST){
//   $email=$_POST['email'];
//   $pass=$_POST['password'];
//   $login=$_POST['loginas'];
//   $sql="select * from user where email='".$email."' AND password='".$pass."' ";
//   $result=$conn->query($sql);
//   $row=mysqli_fetch_array($result);
//   if($row["login"]=="student"){
//     header("loaction:studenthome.php");
//   }
//   else if($row["login"]=="admin"){
//     header("loaction:adminhome.php");
//   }
//   else{
//     echo "Username or password do not match";
//   }
  
// }
?>