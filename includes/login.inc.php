<?php 
if(isset($_POST["submit"])){

    //Grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];


    //Instantate Sin
    include "../classes/dbh.class.php";
    include "../classes/login.class.php";
    include "../classes/login-contr.class.php";

    $login = new LoginContr($uid, $pwd);

    $login->loginUser();

    header("Location: ../index.php?error=none");

}
?>