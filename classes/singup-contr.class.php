<?php 

class SignupContr extends Signup{

    private $uid;
    private $pwd;
    private $pwdReeat;
    private $email;

    public function __construct($uid, $pwd, $pwdReeat, $email){

        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdReeat = $pwdReeat;
        $this->email = $email;

    }
    public function sigupUser(){
        if($this->emptyInput() == false){
            header("Location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidUid() == false){
            header("Location: ../index.php?error=invalidUid");
            exit();
        }
        if($this->invalidEmail() == false){
            header("Location: ../index.php?error=invalidEmail");
            exit();
        }
        if($this->pwdMatch() == false){
            header("Location: ../index.php?error=pwdMatch");
            exit();
        }
        if($this->uidTakenCheck() == false){
            header("Location: ../index.php?error=uidTakenCheck");
            exit();
        }

        $this->setUser( $this->uid,$this->pwd,$this->email);
    }

    private function emptyInput(){

        $result = true;

        if( empty($this->uid) || empty($this->pwd) || empty($this->pwdReeat) || empty($this->email) ){
            $result= false;
        }

        return $result;

    }

    private function invalidUid(){

        $result = true;

        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->uid)){
            $result = false;
        }

        return $result;

    }

    private function invalidEmail(){

        $result = true;

        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }

        return $result; 

    }

    private function pwdMatch(){

        $result = true;

        if($this->pwd !== $this->pwdReeat){
            $result = false;
        }

        return $result;

    }

    public function uidTakenCheck(){

        $result = true;

        if(!$this->checkUser($this->uid, $this->email)){
            $result = false;
        }

        return $result;

    }
}
?>