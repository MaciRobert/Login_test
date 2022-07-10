<?php
session_start();
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
    <ul>
        <?php 
            if(isset($_SESSION['userid'])){
                echo $_SESSION['useruid']."</br>";

            }
        ?>
    </ul>
    <form action="./includes/signup.inc.php" method="post">
        <input type="text" name="uid">
        <input type="password" name="pwd">
        <input type="password" name="pwdrepeat">
        <input type="email" name="email" placeholder="E-mail">
        <button type="submit" name="submit">SIGN UP</button>
    </form>
    </br>
    <form action="./includes/login.inc.php" method="post">
        <input type="text" name="uid">
        <input type="password" name="pwd">
        <button type="submit" name="submit">LOGIN</button>
    </form>
</body>
</html>