<?php
 class User
 {
     //declare properties
    public $username;
    public $email;
    
    //create constructor
    public function __construct($username, $email)
    {
        // $this->username = 'ken';
        // $this->email = "ken@gmail.com";
        $this->username = $username;
        $this->email = $email;
    }


    //create methods

    public function addFriend()
    {
        //$this->username=$username;
        return $this->username." Added a new Friend!!";
    }
 }

 //create new user object
  $userOne = new User('mario', 'mario@ninja.co.uk');
  $userTwo = new User('pari','pari@gmail.com');

  echo $userOne->username. "<br/>";
  echo $userOne->email. "<br/>";
  echo $userOne->addFriend(). "<br/>";

  
  echo $userTwo->username. "<br/>";
  echo $userTwo->email. "<br/>";
  echo $userTwo->addFriend(). "<br/>";



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