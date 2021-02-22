<?php
 class User
 {
     //declare properties
    public $username = "Pari";
    public $email = "pari@yahoo.com";

    //create methods

    public function addFriend()
    {
        //$this->username=$username;
        return $this->username." Added a new Friend!!";
    }
 }

 //create new user object
  $userOne = new User();
  $userTwo = new User();
  echo $userOne->username. "<br/>";
  echo $userOne->email. "<br/>";
  echo $userOne->addFriend(). "<br/>";

  //to set properties to diff values
  $userTwo->username= "shaun"; //by overriding values
  $userTwo->email = "shaun@ninja.co.uk";
  
  echo $userTwo->username. "<br/>";
  echo $userTwo->email. "<br/>";
  echo $userTwo->addFriend(). "<br/>";

// print_r(get_class_vars('User'));
// print_r(get_class_methods('User'));
//   echo 'The class is '. get_class($userOne);
//   echo 'The class is '. get_class($userTwo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes & Objects in PHP</title>
</head>
<body>
    
</body>
</html>