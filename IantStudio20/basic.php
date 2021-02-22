<?php
	define('NAME','Yoshi');
   // echo " Hello Ninjas";
   $n=10;
   // $name="Saldinha";
   
   $age=30;
   $name="Mario";
// echo 'Hey , my Name is '.$name;
// echo "My name is $name";

   $stringOne='my email is ';
   $stringTwo='sun12@gmail.com';

	// echo $stringOne . $stringTwo;

   echo "The ninja screamed \"whaaaaaaa...\" ";
   echo 'the ninjas screamed "whaaaaaa"';

   // To get certain character out of the string
   echo $name[0];
   // String functions
   echo "The length of name is". strlen($name);

   echo strtoupper($name);
   echo strtolower($name);
   echo str_replace('M', 'W', $name);
   echo "<br/>";
    $radius=25;
    $pi=3.14;
    // basic operators in PHP
    echo $pi;
echo "<br/>";
echo $radius++;
echo "<br/>";
echo $radius;
echo "<br/>";
$age+=10; //shorthand assignment operators
echo $age;
echo "<br/>";
echo floor($pi);
echo "<br/>";
echo ceil($pi); //displays after round up value
echo "<br/>";
echo pi();
echo "<br/>";
//Arrays in PHP
//1. Indexed Arrays
$peopleOne=['shaun', 'crystal', 'kevin'];
echo $peopleOne[1]."<br/>";
$peopleTwo=array('ken','chin','pari');
echo $peopleTwo[1];

$ages=[20,30,40,50];

print_r($ages);
array_push($ages, 70);
print_r($ages);
echo "<br/>". count($ages);

$peopleThree=array_merge($peopleOne, $peopleTwo);

print_r($peopleThree);

echo "<br/>";
// Associative Arrays
$one= ['apple'=>'red', 'banana'=>'yellow', 'grapes'=>'green','orange'=>'orange'];
echo $one['orange'];
echo "<br/>";
$two=array("papaya"=>"orange", 'berry'=>'purple','straw'=>'red');
print_r($two);
$two['peach']='pink';
print_r($two);

//Multidim Arrays
$blogs=[
		['title'=>'mario party','author'=>'mario','content'=>'lorem','likes'=>30],
		['title'=>'kevin party','author'=>'toad','content'=>'lorem','likes'=>25],
		['title'=>'zelda party','author'=>'link','content'=>'lorem','likes'=>50]

];
//print_r($blogs[1][1]);
echo count($blogs);
$popped= array_pop($blogs);
print_r($popped);

//Loops in PHP
echo "<br/>";
 $ninjas= ['shaun','dora','suneo'];

 for($i =0; $i<count($ninjas); $i++)
 {
 	echo $ninjas[$i]."<br/>";
 }

 foreach($ninjas as $n)
 {
 	echo $n . "<br/>";
 }
echo "<br/>";
 foreach($blogs as $b)
 {
 	echo $b['title'].' - '.$b['likes'];
 	echo "<br/>";
 }

echo "<br/>";
$i=0;
 while($i<count($blogs))
 {
 echo $blogs[$i]['title'];
 echo "<br/>";
 $i++;
 }
echo "<br/>";

// Comparison booleans (true or false)
echo true; //returns "1"
echo false; //returns empty string ""
echo "<br/>";
// Comparison with numbers
echo 5 <10;
echo "<br/>";
echo 5>10;
echo 5==10;
echo "<br/>";
echo 10 == 10;
echo "<br/>";
echo 5 != 10;
echo "<br/>";
echo 'mario' == 'Mario';

// loose vs strict equal comparison
 echo 5 =='5'; //loosely equal, returns true
 echo 5 ==='5'; //strictly equal, returns false
echo "<br/>";

// Conditional Statements
$price = 20;
if($price < 10)
{
	echo 'Condition is met';
}
elseif($price < 20){
	echo 'elseif condition met';
}
else{
	echo 'Condition not met';
}
echo "<br/>";
foreach ($blogs as $like) {
	# code...
    // echo $key."<br/>";
    // if($like['likes'] >20 || $like['likes'] < 10)
    // {
    // 	echo $like['author']."<br/>";
    // }
    // if($like['likes'] >=50 && $like['likes'] < 10)
    // {
    // 	echo $like['author']."<br/>";
    // }
    if($like['title'] === 'mario party')
    {
    	break;
    }
    echo $like['title']."<br/>";
}




?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>
<h1>User Profile Page</h1>
<div><?php echo $name ?></div>
<div><?php echo $age ?></div>
<div><?php echo NAME ?></div>

<h1>Blogs</h1>
<ul>
	<?php foreach($blogs as $blog)
	{
		if($blog['likes'] ==25){ ?>
			<li><?php echo $blog['title']; ?></li>

		<?php }
		?>
		<h3><?php echo $blog['author'];?></h3>
      <p><?php echo $blog['likes'];?></p>
      
	<?php }?>
</ul>
</body>
</html>