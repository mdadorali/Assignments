<?php
    //   Question 02:Operator:
    $day = “sun”;

	switch($day) {

		case ‘sat’:

			Echo “Today is Saturday”;

			break;

		case ‘sun’:

			Echo “Today is Sunday”;

			break;

case ‘mon’:

	Echo “Today is Monday”;

			break;

		default: 

			Echo “Day does not match”;

			break;

}
  
//   Question 02:Operator: Increment (++) ,For Loop, Assignment(=), Comparison(!==,<=)

for ($n=0; $n <= 100; $n++) {
    if ($n % 2 !== 0 ) 
    echo"$n" . "<br>";
}


    // Question 03:Operator:Decrement (--),Comparison(>=) calculate the factorial

$num = 4;
$factorial = 1;
for($n=$num; $n >=1; $n--)
{
    $factorial = $factorial *$n;
}
echo"Factorial of $num is $factorial" . "<br>";

$num = 7;
$factorial = 1;
for($n=$num; $n >=1; $n--)
{
    $factorial = $factorial *$n;
}
echo"Factorial of $num is $factorial" . "<br>";


// Quetion04;Operator:Decrement (--), print

$n = 100;

while($n >= 1) {
  echo " $n <br>";
  $n--;
}
    // Quetion:05 Operator:(Foreach)

$products = ['apple', 'orange', 'banana', 'mango'];


foreach ($products as $key => $name){
echo $key.'-'. $name;
echo"<br>";
}
?>