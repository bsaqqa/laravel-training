<?php
include('db.php');

$users = getUsers();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" style="border: 1px solid #000;">
        <thead >
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php foreach($users as $user){ ?>
                <tr>
                    <td><?= $user['id']?></td>
                    <td><?= $user['username']?></td>
                    <td><?= $user['email']?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>

