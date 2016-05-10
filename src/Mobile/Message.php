<?php

namespace App\Mobile;

if(!isset($_SESSION)){
    session_start();
}

class Message{
    static public function message($message = null){
        if(is_null($message)){
            $_message = self::getMessage();
            return $_message;
        }else{
            self::setMessage($message);
        }
    }
    
    static private function getMessage(){
        $_message = $_SESSION['message'];
        $_SESSION['message'] = "";
        return $_message;
    }
    
    static private function setMessage(){
        $_SESSION['message'] = $message;
    }
            
}
