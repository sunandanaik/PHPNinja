<?php
//classes - is a blueprint for data type.
class User
{
	//properties of user
	private $email;
	private $name;

	//1.create constructor to initializa values to properties
	public function __construct($name, $email)
	{
		// $this->email = 'pari@gmail.com';
		// $this->name = 'Hrutika';
		$this->email = $email;
		$this->name = $name;
	}

	public function login()
	{
		//echo ' The User Logged In !!';
		echo $this->name.' Logged In!!';
	}

	//2.getter method to access private properties of class
	public function getName()
	{
		return $this->name;
	}
	//setter method to set value for class properties.
	public function setName($name)
	{
		//add validation
		if(is_string($name) && strlen($name) > 1)
		{
			$this->name=$name;
			return "Name has been updated to $name";
		}
		else
		{
			return "Not a Valid name";
		}
	}
}//end of class

//instantiate object of user class
// $userOne = new User();

// $userOne->login();
// echo $userOne->name;
// echo $userOne->email;
echo "<br/>";
$userTwo = new User('Sunanda','sungitmca@gmail.com');
//$userTwo->name = 'mario'; //overridden value for private name not allowed

$userTwo->getName();
echo "<br/>";
//echo $userTwo->setName(50);
echo $userTwo->setName("Pari");
//echo $userTwo->name; //cannot access private property of class.
//$userTwo->login();

?>