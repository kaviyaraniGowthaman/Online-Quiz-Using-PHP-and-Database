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
 <h3>Registration Form</h3>
 <br>
<form method="post">
  <div class="form-group">
  <label for="exampleusername">Name</label>
    <input type="text" name="nme" class="form-control" id="exampleusername"  placeholder="Name" required>
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pswd" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" name="cpswd" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <div class="form-group form-check">
      </div>
 <center>
 <button type="submit" name="submit"  class="btn btn-success">Submit</button>
 </center>
</form>
</div>
</div>
</div>
<?php
if(isset($_POST['submit']))
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
//Insert User Data
$name=$_POST['nme'];
$email=$_POST['mail'];
$password=$_POST['pswd'];
$cpassword=$_POST['cpswd'];
$db1=mysqli_select_db($con,'test');
$sql="SELECT * FROM `user` WHERE email='$email'";

      $res=mysqli_query($con,$sql);

      if (mysqli_num_rows($res) > 0) {
        
        $row = mysqli_fetch_assoc($res);
        //if($email==isset($row['email']))
			if($row)
        {
				echo "<center>";
	echo "<b style='color:red'>";
            	die ("Email Already Exists");
					echo"</b>";
	echo"</center>";
        }
	  }
if($_POST['pswd'] != $_POST['cpswd'])
{
	echo "<center>";
	echo "<b style='color:red'>";
	die("Password  does not match");
	echo"</b>";
	echo"</center>";
	
}

else
{

$db=mysqli_select_db($con,'test');
$qry="INSERT INTO `user`(`name`, `email`, `password`, `cpassword`) VALUES ('$name','$email','$password','$cpassword')";
$ex=mysqli_query($con,$qry);

}
if($ex)
{
echo '<script language="javascript">';
  echo 'alert("Succesfully Registered");location.href="login.php"';  //not showing an alert box.
  echo '</script>';
}
}
?>
</body>
</html>