<?php

// if(isset($_GET['name'])){
//     echo $_GET['name']. '<br>';
// }
// if(isset($_GET['age'])){
//     echo $_GET['age']. '<br>';
// }

// if(isset($_GET['gpa'])){
//     echo $_GET['gpa']. '<br>';
// }
// var_dump($_GET);

foreach($_GET as $key => $elm){
    echo $key.': '. $elm . ' >> <br>';
}