<?php 
if(isset($_POST["submit"])){

    //Grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    //Instantate Sin
    include "../classes/dbh.class.php";
    include "../classes/signup.class.php";
    include "../classes/singup-contr.class.php";

    $signup = new SignupContr($uid, $pwd, $pwdrepeat, $email);

    $signup->sigupUser();

    header("Location: ../index.php?error=none");

}
?>