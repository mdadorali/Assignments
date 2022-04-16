<?php 

// Question 01:make a result grade calculato

$bangla = 72;
$english = 82;
$math = 93;
$physics = 65;
$total_marks = $bangla = 72+ $english+$math+$physics;
$average_mark = $total_marks /4; 

echo "Average Mark: $average_mark";

echo "<br>";
$marks =  $average_mark;

if( $marks <= 32 ){
    echo "Result :F Grade";
}elseif( ($marks >= 33) && ($marks <= 39) ){
    echo "Result  Grade";
}elseif( ($marks >= 40) && ($marks <= 49) ){
    echo "Result :C Grade";
}elseif( ($marks >= 50) && ($marks <= 59) ){
    echo "Result :B Grade";
}elseif( ($marks >= 60) && ($marks <= 69) ){
    echo "Result :A- Grade";
}elseif( ($marks >= 70) && ($marks <= 79) ){
    echo "Result :A Grade";
}elseif( ($marks >= 80) && ($marks <= 100) ){
    echo "Result :C Grade";
}else{
   echo "Invalid Number";
}
echo "<br>";

// Question 02: make a game with your bike

$bike_star = 2;

switch ($bike_star) {
   
    case '1';
    echo " Click stop button, bike stop ";
    break;
     case '2';
    echo " Click star button, bike start";
    break;
    default:
    echo " valid erorr";
    break;
}
echo "<br>";

switch ($bike_star) {
    case '1';
    echo " Click star button, bike start";
    break;
    case '2';
    echo " Click stop button, bike stop ";
    break;
    default:
    echo " valid erorr";
    break;
}
echo "<br>";

switch ($bike_star) {
    case '1';
    echo " Click star button, bike start";
    break;
    case '2';
    echo " Press the break, bike break ";
    break;
    default:
    echo " valid erorr";
    break;
}

echo "<br>";

switch ($bike_star) {
    case '1';
    echo " Click star button, bike start";
    break;
    case '2';
    echo " Give the gear, bike move faster and faster ";
    break;
    default:
    echo " valid erorr";
    break;
}
echo "<br>";

switch ($bike_star) {
    case '1';
    echo " Click star button, bike start";
    break;
    case '2';
    echo "Press the signal button,bike shows a signal light";
    break;
    default:
    echo " valid erorr";
    break;
}
echo "<br>";

switch ($bike_star) {
    case '1';
    echo " Click star button, bike start";
    break;
    case '2';
    echo "Press the headlight button, bike’s headlight will start";
    break;
    default:
    echo " valid erorr";
    break;
}


	

?>