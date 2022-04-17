<?php
// Question 01: Purchase product array
$purchased_products = array(

    array('name' => 'banana',  'qty' => 10, 'total_price' => 550
),

    array('name' => 'apple',     'qty' => 50,  'total_price' => 1500
),

    array('name' => 'orange',  'qty' => 7,    'total_price' => 600
    )

);
$first_names = array_column($purchased_products, 'name');

print_r($first_names);
echo "<br>";

$two_names = array_column($purchased_products, 'qty');

print_r($two_names);
echo "<br>";

$three_names = array_column($purchased_products, 'total_price');

print_r($three_names);
echo "<br>";

$product = array_column($purchased_products, 'qty');
$equal = array_sum($product);
echo "All Product=";
print_r($equal);
echo "<br>";

$total = array_column($purchased_products, 'total_price');

$price = array_sum($total);
echo "Total_price=";
print_r($price);
echo " <br> <br> <br>";





// Question 02: single & multiple array

$first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"];

$second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];

$union_array = array_merge($first_email_array, $second_email_array);

echo "<pre>";

print_r(array_unique($union_array));
echo " <br> <br> <br>";


// Question 03: solved


$Citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );

$City = array_chunk($Citylist, 4, true);

echo '<pre>';
print_r($Citylist);




 ?>