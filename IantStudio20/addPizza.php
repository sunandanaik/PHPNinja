<?php
	include('config/db_connect.php');
// if(isset($_GET['submit']))
// {
// 	echo $_GET['email'];
// 	echo $_GET['title'];
// 	echo $_GET['ingredients'];
// }

$title=$email = $ingredients ='';
//Showing errors
$errors = array('email'=>'', 'title'=>'', 'ingredients'=>'');


if(isset($_POST['submit']))
{
	//to protect from cross site scripting attacks(xss attacks)
	// echo htmlspecialchars($_POST['email']);
	// echo htmlspecialchars($_POST['title']);
	// echo htmlspecialchars($_POST['ingredients']);

	//check email
	if(empty($_POST['email']))
	{
		//echo 'An email is required <br/>';
		$errors['email']= 'An email is required <br/>';
	}
	else
	{
		//echo htmlspecialchars($_POST['email']);
		$email=$_POST['email'];
		//Use PHP filter to validate email address
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$errors['email']= "The $email is not a valid email address";
		}
		
	}

	//check title
	if(empty($_POST['title']))
	{
		//echo 'A title is required <br/>';
		$errors['title']='A title is required <br/>';
	}
	else
	{
		//echo htmlspecialchars($_POST['title']);
		//Use PHP filter to validate title
		$title=$_POST['title'];
		if(!preg_match('/^[a-zA-Z\s]+$/', $title))
		{
			//echo 'Title must be letters and spaces only!!';
			$errors['title']='Title must be letters and spaces only!!';
		}
	}
	//check ingredients
	if(empty($_POST['ingredients']))
	{
		//echo 'At least one ingredients is required <br/>';
		$errors['ingredients']='At least one ingredients is required <br/>';
	}
	else
	{
		//echo htmlspecialchars($_POST['ingredients']);
		//Use PHP filter to validate Ingredients
		$ingredients=$_POST['ingredients'];
		if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients))
		{
			//echo 'Ingredients must be comma separated list..!!';
			$errors['ingredients']='Ingredients must be comma separated list..!!';
		}
	}
//Check if any error returned in arrays
	if(array_filter($errors))
	{
		//echo 'errors in the form';
	}
	else
	{
		//echo 'Form is Valid..!!';
		$email=mysqli_real_escape_string($conn, $_POST['email']);
		$title=mysqli_real_escape_string($conn, $_POST['title']);
		$ingredients=mysqli_real_escape_string($conn, $_POST['ingredients']);

		//create insert sql stmt
		$sql = "INSERT INTO pizzas(title,email,ingredients) VALUES('$title', '$email', '$ingredients')";

		//save to db & check
		if(mysqli_query($conn , $sql))
		{
			//success
			//Lets do redirect if no error
			header('Location: index.php');
		}
		else{
			//error
			echo 'Query Error:'.mysqli_error($conn);
		}

		
	}
}//end of POST check



?>
<!DOCTYPE html>
<html>
<?php  include('Templates/header.php'); ?>

<section class="container grey-text">
	<h4 class="center">Add a Pizza</h4>
	<form class="white" action="addPizza.php" method="POST">
		<label>Your Email :</label>
		<input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
		<div class="red-text"><?php echo $errors['email']; ?></div>
		<label>Pizza Title :</label>
		<input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>">
		<div class="red-text"><?php echo $errors['title']; ?></div>
		<label>Ingredients (comma separated) :</label>
		<input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients); ?>">
		<div class="red-text"><?php echo $errors['ingredients']; ?></div>
		<div class="center">
			<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
		</div>
	</form>
</section>


<?php  include('Templates/footer.php'); ?>


</html>