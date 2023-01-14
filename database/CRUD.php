<?php

class DataBase{
    public string $fileName;

    public function __construct($fileName){
        $this->fileName = "database/jsonfiles/".$fileName.".json";
    }
    public function Create(){
        $filename = $this->fileName;
        file_put_contents($filename,'{"users":[]}');
    }
    public function Delete(){
        unlink($this->fileName);
    }
    public function getJSON(){
        $array = json_decode(file_get_contents($this->fileName),true);
        return $array;
    }
    public function addUser($login, $password, $email, $name){
        $jsonArr = $this->getJSON();
        $jsonArr["users"][] = [
            "login" => $login,
            "password" => $password,
            "mail" => $email,
            "name" => $name,
        ];
        file_put_contents($this->fileName, json_encode($jsonArr,JSON_UNESCAPED_UNICODE));
    }
}
?>
