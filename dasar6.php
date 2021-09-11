<?php
$array = [];
$array[] = 'One';
$array[] = 'Two';
$array[] = 'Three';
echo '<pre>';
print_r($array);
echo "<br>";


$employee = [
    'name' => 'John',
    'email' => 'john@example.com',
    'phone' => '1234567890',
];

// get the value of employee name
print_r($employee);
echo $employee['name'];
echo '<pre>';
echo "<br>";

// get all values
foreach ($employee as $key => $value) {
    echo $key . ' : ' . $value;
    echo '<br>';
}
