<?php
include "database/CRUD.php";

class Registration{
    private $login;
    private $password;
    private $mail;
    private $name;
    private $database;
    private $salt = "qw@qnb#%g";

    public function __construct($login, $password, $mail, $name,$database){
        $this->login = $login;
        $this->password = $password;
        $this->mail = $mail;
        $this->name = $name;
        $this->database = new DataBase($database);
    }
    public function createUser(){
        if ($this->checkUser()){
            $this->cryptPassword();
            $this->database->addUser($this->login, $this->password, $this->mail, $this->name);
            print("Зарегистрирован успешно!");
        }
        else{
            print("С таким логином/почтой уже зарегистрирован пользователь");
        }
    }
    private function checkUser(){
        $json = $this->database->getJSON();
        for ($i = 0;$i < count($json["users"]);$i++){
            if ($json["users"][$i]["login"] == $this->login){
                return false;
                break;
            }
            if ($json["users"][$i]["mail"] == $this->mail){
                return false;
                break;
            }
        }
        return true;
    }
    public function cryptPassword(){
        $passSh = sha1($this->password);
        $this->password = sha1($this->salt . $passSh);
    }
}

class Login extends Registration{
    public function __construct($login, $password,$database){
        $this->login = $login;
        $this->password = $password;
        $this->database = new DataBase($database);
        $this->salt = "qw@qnb#%g";
        $this->name = $this->getName();
        
        
    }
    public function cryptPassword(){
        $passSh = sha1($this->password);
        $this->password = sha1($this->salt . $passSh);
    }
    public function loginUser(){
        session_start();
        setcookie("name",$this->name);
        $this->checkUser();
    }
    private function getName(){
        $json = $this->database->getJSON();
        $this->cryptPassword();
        for ($i = 0;$i < count($json["users"]);$i++){
            if ($json["users"][$i]["login"] == $_GET["login"]){
                if ($json["users"][$i]["password"] == $this->password){
                    return $json["users"][$i]["name"];
                }
            }
        }
    }
    private function checkUser(){
        $json = $this->database->getJSON();
        for ($i = 0;$i < count($json["users"]);$i++){
            if ($json["users"][$i]["login"] == $_GET["login"]){
                if ($json["users"][$i]["password"] == $this->password){
                    print("Добро пожаловать");
                    break;
                }
                else{
                    print("Неверный пароль");
                }
            }else if ($i == count($json["users"])-1){
                print("Неверный логин");
            }
        }
        
    }

}




if(isset($_GET["login"]) and isset($_GET["password"]) and isset($_GET["mail"]) and isset($_GET["name"])){
    $reg = new Registration($_GET["login"],$_GET["password"],$_GET["mail"],$_GET['name'],"js1");
    $reg->createUser();
}
if(isset($_GET["login"]) and isset($_GET["password"]) and !isset($_GET["mail"]) and !isset($_GET["name"])){
    $log = new Login($_GET["login"],$_GET["password"],"js1");
    $log->loginUser();
}
?>

