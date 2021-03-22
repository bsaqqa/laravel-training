<?php

$arr = [1,2,3,4,5]; // array

//associatve array
$accArr = [ 'name' => "Marah" , "age" => 20, "GPA"=> 99.8]; 

// for ($i=0; $i < count($arr); $i++) { 
//     echo  "This is an elemnet of array: $arr[$i]".
//             ", Key is: $i <br/>";
// }
// foreach($accArr as $key=>$elm){
//     echo ucfirst($key).": $elm<br/>";
// }
 
$newArray = array_map(function($elm){
    return $elm . "___Edit";
}, $accArr);

// var_dump($accArr);
// echo '<br>';
// var_dump($newArray);

foreach($accArr as $key=>$elm){
    echo ucfirst($key).": $elm<br/>";
}

foreach($newArray as $key=>$elm){
    echo ucfirst($key).": $elm<br/>";
}