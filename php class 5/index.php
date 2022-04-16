<?php

// Question 01: factors, prime number.

$given_array =[12,34,2,6,78];
foreach ($given_array as $key => $number) {
    $is_prime = true;
    for( $i =2; $i <= $number-1; $i++) {
        if($number % $i ==0) {
            $is_prime =false;
        }
    }

    if ( $is_prime) {
        echo "$number is a prime number <br>";
    } else {
        echo "$number is not a prime number <br>";
    }
}

// Question 02: daraz website and pick any 5 products

$products =['realmi_9i ( ram&rom 4&64 price:5000)' ,'oppo_a16 ( ram&rom 6&128 price:50000)','vivo_y21 ( ram&rom 4&64 price:8000)','poco_m3 ( ram&rom 4&64 price:9000)','motorola_edge ( ram&rom 4&64 price:5000)'
];

foreach ( $products as $name) {
    echo $name;
    echo "<br>";
}

// Question 03: maximum valu foreach loop.

$given_array = array(0,10,80,67,60,89,91,56,45,30,95,83,99);
$max_value = 0;

foreach ($given_array as $key => $number) {
    if ( $number > $max_value) {
        $max_value = $number;
    }
}

echo "This is our max number $max_value <br>";

// Question 04: this array(0,10,80,67,60,89,91,56,45,30,95,83,99) and print 0 index

$given_array = array(0,10,80,67,60,89,91,56,45,30,95,83,99);
foreach ($given_array as $key => $number) {
    if ( $key % 2 ==0) {
        echo "$number <br>";
    }
}



?>