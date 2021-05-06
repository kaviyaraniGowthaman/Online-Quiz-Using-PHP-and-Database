
<?php
session_start();
$userid=$_SESSION["userid"];
?>



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
 <br>
</div>
</div>
</div>
<center>

<form>
 <center>
<?php

$host="localhost";
$user="root";
$pass="";
// $con=mysqli_connect($host,$user,$pass);
// $db=mysqli_select_db($con,'test');

//  $totalQuestions = 5;
//  $correctAnswers = 0;
//  foreach($_POST as $key => $value) {
    
//             $tempAnswer = $_POST[$key];
//             // count total questions and correct answers
//  $sqlAnswer = "select  count(*) count from correct where qno = '$key' and answer = '$tempAnswer'";
//  $resultAnswer = mysqli_query($con, $sqlAnswer);
//  $rowAnswer = mysqli_fetch_assoc($resultAnswer);
//  $numAnswer = $rowAnswer['count'];
//  if ($numAnswer < 1){
//  //wrong answer
//  }
//  else {
//  // correct answer
//  $correctAnswers++;
//  }
//  $totalQuestions++;
//         }  
    
//  // Store score in db
//  $sqlSubmit = "insert into questions (score) values ('$correctAnswers/$totalQuestions')";
//  mysqli_query($con, $sqlSubmit);

/*$sql="SELECT * FROM `correct`";
$execute=mysqli_query($con,$sql);
$res=mysqli_fetch_assoc($execute);///getting the values from the database table...
if($res)
{
	echo "correct answers";
}
else
{
	echo "wrong answers";
}
*/


$con = new mysqli("localhost", $user, $pass, "test");
$sqlget = "SELECT * FROM correct";
$sqlgetuser = "SELECT * FROM questions where userid='$userid' LIMIT 1";
//$result = $con->query($sqlget);
$result = mysqli_query($con, $sqlget) or die( mysqli_error($con));
$result2 = mysqli_query($con, $sqlgetuser) or die( mysqli_error($con));
//$result=mysqli_query($con,$sqlget);
$answer=array();
while($row = mysqli_fetch_array($result)){
  $answer[$row["qno"]]=$row["answer"];
}
$useranswer=array();
while($row1 = mysqli_fetch_array($result2)){
  $useranswer[1]=$row1["q1"];
  $useranswer[2]=$row1["q2"];
  $useranswer[3]=$row1["q3"];
  $useranswer[4]=$row1["q4"];
  $useranswer[5]=$row1["q5"];
}
$right_answer=array();
$wrong_answer=array();
foreach($answer as $key=>$answerval){
if($answerval== $useranswer[$key]){
  $right_answer[]=$key;
}
else{
  $wrong_answer[]=$key;
}
}


?>
<h2>Result</h2>
<table border='1' width='100%' style='text-align:center'>
<tr >
<th style='text-align:center'>User Id</th>
<th  style='text-align:center'>Total Qs</th>
<th style='text-align:center'>Right Answer</th>
<th style='text-align:center'>Wrong Answer</th>
<th style='text-align:center'>%</th>
</tr>
<tr>
<td><?php echo $userid;  ?></td>
<td>5</td>
<td><?php echo count($right_answer).'<br>qs.no:'.implode(",",$right_answer);   ?></td>
<td><?php echo count($wrong_answer).'<br>qs.no:'.implode(",",$wrong_answer);   ?></td>
<td><?php echo  (count($right_answer)/5)*100  ?></td>
</tr>




</table>

<br>
<a href='login.php'>logout</a>

 </center>
</form>
</body>
</html>