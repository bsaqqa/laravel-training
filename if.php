<?php 


// if(/*condition*/){
//     // code
// }else if(/*condition*/){
//     // code2
// }else{
//     // otherwise code
// }
// // >>>

// $baraaAge = 24;
// $ahedAge = 24;

// if($baraaAge > $ahedAge){
//     echo "Baraa is bigger than Ahed";
// }else if($baraaAge < $ahedAge){
//     echo "Ahed is bigger than Baraa";
// }else{
//     echo "Ahed and Baraa are the same";
// }


$arr = [1,2,3,4,5,6,7,8,9,10]; // array

// foreach($arr as $value){
//     if($value%2){
//         echo "Odd: $value <br>";
//     }else{
//         echo "Even: $value <br>";
//     }
// }

$arr = [
    "Ahed",
    "Ahmed",
    "Marah",
    "Mohammed",
]; // array

foreach($arr as $index => $value){
    if($index%2 == 0){
        echo "<span style='color:red'>Even: $value </span><br>";
    }else{
        echo "<span style='color:green'>Odd: $value </span><br>";
    }
}
