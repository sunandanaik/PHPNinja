<?php
  //ternary operators

$score=50;
// if($score >40)
// {
// 	echo 'High Score!';
// }
// else
// {
// 	echo 'Low Score!';
// }

$result=$score > 40 ? 'High Score' : 'Low Score';
echo $result;
echo "<br/>";

//superglobals in PHP

echo $_SERVER['SERVER_NAME']."<br/>";
echo $_SERVER['REQUEST_METHOD']."<br/>";
echo $_SERVER['SCRIPT_FILENAME']."<br/>";
echo $_SERVER['PHP_SELF']."<br/>";

//$_SESSION superglobal
if(isset($_POST['submit']))
{
	//cookie for gender field
	setcookie('gender', $_POST['gender'], time() + 86400);



	session_start();

	$_SESSION['name'] = $_POST['name'];

	//echo $_SESSION['name'];
	header('Location:index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Ternary</title>
</head>
<body>
	<p>
<?php  
  echo $score > 40 ? 'High Score' : 'Low Score';
?></p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<input type="text" name="name">
	<select name="gender">
		<option value="male">Male</option>
		<option value="female">Female</option>
	</select>


	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>