<h1>ARRAY</h1>
<h2>types of array</h2>
<ul>
<li>Indexed array</li>
<li>Associative array</li>
<li>Multidimensional</li>
</ul>
<h3>Indexed array</h3>
<?php
$fruits=['apple','banana','guava'];
$vegetables=array('cabbage','mushroom','brinjal');
echo $fruits[0];
echo "<br>";
echo $vegetables[0];
?>

<h3>Associative array</h3>
<?php 
$students=[
    "id" => 001,
    "student name" =>"mingmar",
    "address" =>"aarubari",
    "email" =>  "zingm@gmail.com",
    "phone" => 980338311
];
echo "my email:".$students['email'];
?>

<h3>multidimensional array</h3>
<?php  
$meals =[
    ['mango','apple','banana','guava'],
    ['potato','brinjal','cabbage','spinach'],
    ['fish','mutton','chicken',]
];

echo $meals[1][0];
echo"<br>";
echo $meals[0][3];
echo"<br>";
echo $meals[0][1];
echo"<br>";
echo $meals[2][2];
?>

<p>Multidimensional Associative Array</p>
<?php
$student = [
    [
    "id" => "A05",
    "name" => "Ram kc",
    "email"=>"ram1@gmail.com",
    "Mobile" =>0233445
    ],
    [
        "id" => "A02",
        "name" => "Sam kc",
        "email"=>"sam1@gmail.com",
        "Mobile" =>0233467
        ]

    ];
    echo $student[0]['name'];
?>