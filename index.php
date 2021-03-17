<?php 

$myName = "Ahmed";
$rate = 95.9;
$arr = [1,2,3,4,5];

//print($x);
//echo ($myname);
//echo $rate;
// ECho $my_name;



// echo calcSalary($hours = 160, $price = 5); 

/**
 *  This function can help you to
 *  calculate your salary
 *  @param int $hours
 *  @param float $price
 *  @return double
 */
function calcSalary($hours, $price){
    return $hours * $price;
}


// $name = "Marah";

// function getName(){
//     // global $name;
    
//     $age = 20;
//     echo $GLOBALS['name'];
//     echo $age;
// }

// getName();


// $arr = [1,2,3,4,5];

// var_dump($arr);
// die();

// echo "***************************** </br>";
// echo "***************************** </br>";
// echo "***************************** </br>";
// echo "***************************** </br>";
// echo "***************************** </br>";
// echo "***************************** </br>";
// echo "***************************** </br>";
// echo "***************************** </br>";


$arr = [1,2,3,4,5];

$accArr = [ "name" => "Marah" , "age" => 20];

// var_dump($accArr);

// echo $accArr["name"];

$arr2D = [
    [ 1, 2, 3],
    [ 4, 5, 6],
    [ "name" => "Marah" , "age" => 20, "GPA" => 92]
];

echo $arr2D[2][0];