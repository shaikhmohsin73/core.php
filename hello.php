<!-- <?php
$day = "5 <br>";
switch ($day) {
    case "1":
        echo "It is Monday!";
        break;
    case "2":
        echo "It is today!";
        break;
    case "3":
        echo "It is Wednesday!";
        break;
	case "4":
        echo "It is Thursday!";
        break;
    case "5":
        echo "It is Friday!";
        break;
    case "6":
        echo "It is Saturday!";
        break;
	case "7":
        echo "It is Sunday!";
        break;
    default:
        echo "Invalid number!";
}
?> -->

<!-- <?php  
$year = 2015;  
 
if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400))
{
echo "$year is a Leap Year.";    
}
 
else  
{  
echo "$year is not a Leap Year.";    
}
?>  -->
 
 <!-- <!-- <?php
function checkNum($n1, $n2, $n3)
{
    if ($n1 > $n2 && $n1 > $n3)
        $temp = $n1;
    elseif ($n2 > $n3)
        $temp = $n2;
    else
        $temp = $n3;
    return $temp;
}
$num1 = readline("Enter the 1st number: ");
$num2 = readline("Enter the 2nd number: ");
$num3 = readline("Enter the 3rd number: ");
echo "Greatest among $num1 $num2 $num3 is " . checkNum($num1, $num2, $num3);
?> -->

<!-- <?php  

function Fibonacci($number){
      
    
    if ($number == 0)
        return 0;    
    else if ($number == 1)
        return 1;    
      
    
    else
        return (Fibonacci($number-1) + 
                Fibonacci($number-2));
}
  

$number = 10;
for ($counter = 0; $counter < $number; $counter++){  
    echo Fibonacci($counter),' ';
}
?> -->




<?php
function check($number){
	if($number % 2 == 0){
		echo "Even";
	}
	else{
		echo "Odd";
	}
}


$number = 59;
check($number)
?>
<?php
function armstrongCheck($number){
	$sum = 0;
	$x = $number;
	while($x != 0)
	{
		$rem = $x % 10;
		$sum = $sum + $rem*$rem*$rem;
		$x = $x / 10;
	}
	if ($number == $sum)
		return 1;
	return 0;
}

$number1 = 153;
$number = 457;
$flag = armstrongCheck($number1);
if ($flag == 1)
	echo "Yes";
else
	echo "No";
    $flag = armstrongCheck($number);
if ($flag == 1)
	echo "Yes";
else
	echo "No";

// ?> -->
<?php
$a =33;
$b=33;
if($a==$b){
    echo"a is smaller";
}
else{
    echo "b is greater than  a";
}
?>
 