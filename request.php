<?php

// if(isset($_GET['username'])){
//     echo $_GET['username']. '<br>';
// }
// if(isset($_GET['age'])){
//     echo $_GET['age']. '<br>';
// }

// if(isset($_GET['gpa'])){
//     echo $_GET['gpa']. '<br>';
// }
// var_dump($_GET);

foreach($_GET as $key => $elm){
    echo $key.': '. $elm . '  <br>';
}

// foreach($_POST as $key => $elm){
//     echo $key.': '. $elm . '  <br>';
// }
