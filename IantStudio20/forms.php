<?php
 require('user_validator.php');
 if(isset($_POST['submit']))
 {
     //validate form entries
     //echo 'form submitted!!';
    $validation = new UserValidator($_POST);
    $errors = $validation->validateform();

    //save data to db

 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
 <div class="new-user">
  <h2>Create New User</h2>

  <form action="<?php  echo $_SERVER['PHP_SELF'] ?>" method="POST">
   <label for="username">Username :</label>
   <input type="text" name="username" id="username" value="<?php echo htmlspecialchars($_POST['username']) ?? ''; ?>">
   <div class="error">
    <?php echo $errors['username'] ?? ''?>
   </div>
<br/>
   <label for="email">Email ID :</label>
   <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($_POST['email']) ?? ''; ?>">
   <div class="error">
    <?php echo $errors['email'] ?? ''?>
   </div>
<br/>
   <input type="submit" value="Submit" name="submit">
  </form>
 </div>
</body>
</html>