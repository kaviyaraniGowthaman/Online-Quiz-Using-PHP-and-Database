<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Test Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <style>
 .container
 {
margin: auto;
  width: 50%;
  
  padding: 10px;
 }
 h3
 {
 color:#2525ad;
 }
.form-group
 {
 color:#2525ad;
 }
 </style>
</head>
<body background="images\im.jpg">
<div class="container">
<div class="row">
 <div class="col-sm-12">
 <h3>LOGIN FORM</h3>
 <br>
<form method="post">
  <div class="form-group">
  <label for="exampleusername">Email </label>
    <input type="text" name="nme" class="form-control" id="exampleusername"  placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pswd" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 <center>
 <button type="submit" name="login"  class="btn btn-success">Login</button>
 </center>
</form>
</div>
</div>
</div>
<?php
if(isset($_POST['login']))
{
$host="localhost";
$user="root";
$pass="";
$con=mysqli_connect($host,$user,$pass);
/*if($con)
{
	echo "Connection established";
}
else
{
	echo "no connection";
}
*/
session_start();
$username=$_POST['nme'];
$password=$_POST['pswd'];
$db=mysqli_select_db($con,'test');
$sql="SELECT * FROM `user` WHERE email='$username' and password='$password'";
$execute=mysqli_query($con,$sql);
$res=mysqli_fetch_assoc($execute);///getting the values from the database table...
if($res)
{
  $_SESSION["userid"] = $username;
	echo '<script language="javascript">';
  echo 'alert("WELCOME  TO ONLINE QUIZ");location.href="Start.php"';  //not showing an alert box.
  echo '</script>';
}
else
{
	echo '<script language="javascript">';
  echo 'alert("Sorry! Invalid Credentials");location.href="login.php"';  //not showing an alert box.
  echo '</script>';
}
}
?>
</body>
</html>