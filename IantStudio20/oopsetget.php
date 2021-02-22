<?php
 class User
 {
     //declare properties
    public $username;
    private $email;
    
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

    //setter method
    public function setEmail($email)
    {
        //add validation of email address
        if(strpos($email, '@') > -1)
        {
            $this->email =  $email;
        }
        
    }

    //getter method
    public function getEmail()
    {
        return $this->email;
    }


 }

 //create new user object
  $userOne = new User('mario', 'mario@ninja.co.uk');
  $userTwo = new User('pari','pari@gmail.com');

  //now you may change value of property using setter method
    $userOne->setEmail('sungmail.com');

  echo $userOne->getEmail()."<br/>";
  echo $userTwo->getEmail()."<br/>";


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