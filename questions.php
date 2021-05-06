
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
<body background="images/im.jpg">
<div class="container">
<div class="row">
 <div class="col-sm-12">
<form method="post">
<h2>Quiz</h2>
<hr>
<table border="0" height="100" width="100%" cellpadding="20" cellspacing="20">

<!--Question 1 starts-->

<tr>
<td><span style="color:green;font-weight:bold">1.  What is the built in library function to adjust the allocated dynamic memory size. </span></td>
</tr>
<tr>
<td>
<span style="color:red;font-weight:bold">A </span><input type="radio" name="r1" value="A"> malloc
<span style="color:red;font-weight:bold">B  </span><input type="radio" name="r1" value="B">calloc 
<span style="color:red;font-weight:bold">C  </span><input type="radio" name="r1" value="C">realloc
<span style="color:red;font-weight:bold">D  </span><input type="radio" name="r1" value="D"> resize

<hr style="border:1px dotted">
</td>
</tr>
<!--Question 1 ends -->
<tr>
<td><span style="color:green;font-weight:bold">2. C Language is a successor to which language.?  </span></td>
</tr>
<tr>
<td>
<span style="color:red;font-weight:bold">A </span><input type="radio" name="r2" value="A"> FORTRAN
<span style="color:red;font-weight:bold">B  </span><input type="radio" name="r2" value="B">D Language
<span style="color:red;font-weight:bold">C  </span><input type="radio" name="r2" value="C">BASIC
<span style="color:red;font-weight:bold">D  </span><input type="radio" name="r2" value="D"> B Language

<hr style="border:1px dotted">
</td>
</tr>


<tr>
<td><span style="color:green;font-weight:bold">3.A C program is a combination of.? </span></td>
</tr>
<tr>
<td>
<span style="color:red;font-weight:bold">A </span><input type="radio" name="r3" value="A"> Statements
<span style="color:red;font-weight:bold">B  </span><input type="radio" name="r3" value="B">Functions
<span style="color:red;font-weight:bold">C  </span><input type="radio" name="r3" value="C">Variables
<span style="color:red;font-weight:bold">D  </span><input type="radio" name="r3" value="D"> All of the above

<hr style="border:1px dotted">
</td>
</tr>


<tr>
<td><span style="color:green;font-weight:bold">4.Who invented C Language.?
 </span></td>
</tr>
<tr>
<td>
<span style="color:red;font-weight:bold">A </span><input type="radio" name="r4" value="A"> Charles Babbage
<span style="color:red;font-weight:bold">B  </span><input type="radio" name="r4" value="B">Grahambel
<span style="color:red;font-weight:bold">C  </span><input type="radio" name="r4" value="C">Dennis Ritchie
<span style="color:red;font-weight:bold">D  </span><input type="radio" name="r4" value="D"> Steve Jobs

<hr style="border:1px dotted">
</td>
</tr>



<tr>
<td><span style="color:green;font-weight:bold">5.Low level language is .?
 </span></td>
</tr>
<tr>
<td>
<span style="color:red;font-weight:bold">A </span><input type="radio" name="r5" value="A"> Human readable like language.
<span style="color:red;font-weight:bold">B  </span><input type="radio" name="r5" value="B">language with big program size.
<span style="color:red;font-weight:bold">C  </span><input type="radio" name="r5" value="C">language with small program size.
<span style="color:red;font-weight:bold">D  </span><input type="radio" name="r5" value="D"> Difficult to understand and readability is questionable.

<hr style="border:1px dotted">
</td>
</tr>





</table>
<center>
 <button type="submit" name="submit"  class="btn btn-success">Submit</button>
 <a class="btn btn-success" href='answer.php'>View Result</a>
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

echo'<div hidden>';
$answer1=$_POST['r1'];
$answer2=$_POST['r2'];
$answer3=$_POST['r3'];
$answer4=$_POST['r4'];
$answer5=$_POST['r5'];
echo'</div';

$db=mysqli_select_db($con,'test');
$qry="INSERT INTO `questions`(q1,q2,q3,q4,q5,userid,score) VALUES ('$answer1','$answer2','$answer3','$answer4','$answer5','$userid','1')";
$ex=mysqli_query($con,$qry);

}
?>

<?php

// $host="localhost";
// $user="root";
// $pass="";
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


?>

</body>
</html>


</body>
</html>




