<?php
    session_start();
    if(!isset($_SESSION['msg'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php if(isset($_SESSION['status']) && !$_SESSION['status']){ ?>
        <meta http-equiv="refresh" content="2; URL=login.php" />
    <?php }else{ ?>
        <meta http-equiv="refresh" content="2; URL=index.php" />
    <?php } ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_SESSION['msg'] ?></title>
</head>
<body>
    <h1> <?= $_SESSION['msg'] ?> </h1>
</body>
</html>

<?php
    $_SESSION['msg'] = null;
?>