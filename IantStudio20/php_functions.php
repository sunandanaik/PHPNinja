<?php
//include & require 
include('testdb.php');
require('testdb.php');
//function definition with default value
function sayHello($name='shaun', $time ='morning')
{
	echo "Good $time, $name";
}
//function invoking
sayHello();
echo "<br/>";

function formatProduct($product)
{
	//echo "{$product['name']} costs Rs. {$product['price']} to buy <br/>";
	return "{$product['name']} costs Rs. {$product['price']} to buy <br/>";
}

//pasing associtive array
$formatted=formatProduct(['name'=>'gold star','price'=>20]);
echo $formatted;

echo "<br/>";
//Variable Scope
//local variables
function myfunc()
{
	$price=10;
	echo $price;
}
myfunc();

function myfuncTwo($age)
{
	echo $age;
}
myfuncTwo(22);
echo "<br/>";

//Global variables
$name="pari";

function greet()
{
	global $name;
	$name="hrutika"; //overridden
	echo "hello $name";
}

greet();

echo "<br/>";

echo $name;

echo "<br/>";


function sayBye(&$name)
{
	$name='wario';
	echo "Bye  $name";
}

sayBye($name);
echo "<br/>";
echo $name;
echo "<br/>";





?>
<!DOCTYPE html>
<html>
<head>
	<title>Functions</title>
</head>
<body>
<?php include('content.php'); ?>
</body>
</html>