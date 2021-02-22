<?php
 class User
 {
     //declare properties
    public $username;
    protected $email; //allows to access to child class
    public $role = 'member';
    
    //create constructor
    public function __construct($username, $email)
    {
        // $this->username = 'ken';
        // $this->email = "ken@gmail.com";
        $this->username = $username;
        $this->email = $email;
    }
    //create detructor method to clean up
    public function __destruct()
    {
        echo "The User $this->username  was removed !! <br/>";
    }

    public function __clone()
    {
        $this->username = $this->username . "(cloned)<br/>";
    }

    //create methods
    public function addFriend()
    {
        //$this->username=$username;
        return $this->username." Added a new Friend!!";
    }

    //overidden method
    public function message()
    {
        return "$this->email sent you a new message";
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

}//end of User class

 class AdminUser extends User
 {
    public $level;
    public $role = 'admin'; //overridding propertiy of parent class here
    
    //create constructor
    public function __construct($username, $email, $level)
    {
        $this->level = $level;
        parent ::__construct($username, $email); //invoking parent class constructor
        
    }

    //overidden method
    public function message()
    {
        return "$this->email, an admin, sent you a new message";
    }
 }

 //create new user object
 $userOne = new User('mario', 'mario@ninja.co.uk');
 $userTwo = new User('pari','pari@gmail.com');
 $userThree = new AdminUser('hrutu', 'hrutu@gmail.com',5);

 //unset($userOne); //remove the reference to that instance of user automatically

 $userFour= clone $userOne; //another magic method to copy
 echo $userFour->username."<br/>";

 ?>