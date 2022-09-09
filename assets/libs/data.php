<?php
class Data {
    public $header;
    public $login;
    public $password;
    public $name;
    public $mail;
    public $token;
    public $department;
    public $age;
    public $option;

    public $свойство1;
    
    public function getRandomString($length = 8) {
        $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $charsLength = strlen($chars);
        $randomString = "";
        for($i = 0; $i < $length; $i++) {
            $randomString .= $chars[rand(0, $charsLength - 1)];
        }
        return $randomString;
    }
    public $session;

}
?>