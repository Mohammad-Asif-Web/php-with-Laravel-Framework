h<?php

$arr = [1, 2, 3, 4];
$fruits = array('apple', 'orange', 'mango', 1, 2, false);
print_r($arr);
echo '<br>';
print_r($fruits);
echo '<br>';

// var_dump in arr is different from others. It shows total array length, what types of data store inside the array, like bool, int, string with their lengths.
var_dump($fruits);
echo'<br>';

// arrays index count is starts from 0.
echo $fruits[0];
echo'<br>';
echo $fruits[1];
echo'<br>';

// associative array
$hex = [
    'white' => '#fff',
    'black' => '#000',
    'blue' => 'fe08f3'
];
print_r($hex);
echo'<br>';
print_r('white');
echo'<br>';

// Multi dimensional array
$people = [
    [
        'name' => 'MD. asif',
        'age' => 28,
        'subject' => 'ECE'
    ],
    [
        'name' => 'hijir',
        'age' => 34,
        'subject' => 'CSE'
    ],
    [
        'name' => 'kelly rose',
        'age' => 25,
        'subject' => 'BBA'
    ]
];
print_r($people[0]['name']);
echo'<br>';
print_r($people[2]['age']);
echo'<br>';

// we can store array to a single variable and get result from echo
$kely = $people[2]['name'];
echo $kely;
echo'<br>';

// array converts to json
var_dump(json_encode($people));

echo '<br><br><h1 style="text-align:center;color:red">Multidimensional Array with loop Result</h1>';

// Multidimensional array with forEach loop
$emp = [
    [1, 'Asif', 'Engineer', 40000],
    [2, 'Kawser', 'Designer', 35000],
    [3, 'Riaz', 'Lecturere', 24000],
    [4, 'Limon', 'Hr.Admin', 2200]
];

echo "<table border='1' cellpadding='5px'>";
echo '<tr>
         <th>Sl.</th>
        <th>Name</th>
        <th>Designation</th> 
        <th>Salary</th>
    </tr>';
foreach($emp as $row){

    echo '<tr>';
    foreach($row as $col){
        echo "<td>$col</td>";
    }
    echo '</tr>';
}
echo '</table>';

// Associative array in foreach loop
$age = [
    "asif" => 28,
    "Limon" => 27,
    "Biplob" => 35
];

echo "<ul>";
foreach($age as $key => $value){
    echo "<li>$key : $value</li>";
}
echo "</ul>";






