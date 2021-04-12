<?php
session_start();

include('db.php');


$users  = [
    ['username' => 'ahmed',     'password' => '123123'],
    ['username' => 'ahed',      'password' => '123123'],
    ['username' => 'marah',     'password' => '123123'],
    ['username' => 'afnane',    'password' => '123123'],
    ['username' => 'afnane',    'password' => '123123'],
];

function isTrueUser($username, $password){
    global $users;
    foreach($users as $user){
        if(
            $user['username'] == $username &&
            $user['password'] == $password  
        ){
            return true;
        }
    }
    return false;
}

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(isTrueUser($username, $password)){
        $message = "Login Succeccfully!";
        $_SESSION['status'] = true;
    }else{
        $_SESSION['status'] = false;
        $message = "Login Faild!";
    }
    $_SESSION['msg'] = $message;
    header('location: response.php');

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        <label>
            Username: 
            <input type="text" name="username" />
        </label>
        <br>
        <label>
            Password: 
            <input type="password" name="password" />
        </label>
        <br>
        <button name="submit">Submit </button>
    </form>
</body>
</html>

