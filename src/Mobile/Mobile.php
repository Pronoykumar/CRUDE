<?php

namespace App\Mobile;

class Mobile {
    public $id='';
    public $title='';
    
    public function __construct() {
        $conn = mysql_connect("localhost", "root", "") or die("Cannot connect");
        mysql_select_db('atomicproject1');
        date_default_timezone_set('Asia/Dhaka');
    }
    
    public function prepare($data = array()){
        if(is_array($data) && array_key_exists('title', $data)){
            $this->title = $data['title'];
        }
        
        if(is_array($data) && array_key_exists('id', $data)){
            $this->id = $data['id'];
        }
        
        return $this;
    }
    
    public function store(){
        $query = "INSERT INTO `atomicproject1`.`mobile` (`id`, `title`, `created_at`) VALUES (NULL, '".$this->title."', '".date("Y-m-d H:i:s")."')";
        if(mysql_query($query)){
            echo "Mobile Model add Sucessfully";
            header('location:index.php');
        }else{
            echo "Error";
        }
    }
    
    public function index(){
        $_mobiles = array();
        $query = "SELECT * FROM `mobile`";
        $result = mysql_query($query);
        //echo $result;
        
        while($row = mysql_fetch_assoc($result)){
            $_mobiles[] = $row;
        }
        return $_mobiles;
    }
    
    public function show(){
        $query = "SELECT * FROM `mobile` WHERE id = ".$this->id;
        $result = mysql_query($query);
        $_mobiles = mysql_fetch_object($result);
        return $_mobiles;
    }
    
    public function edit() {    
        $query = $query = "SELECT * FROM `mobile` WHERE id = ".$this->id;
        $result = mysql_query($query);
        $mobiles = mysql_fetch_object($result);
        return $mobiles;
        
    }
    
   public function update($data = NULL) {
        //session_start();
        $query = "UPDATE `atomicproject1`.`mobile` SET `title` = '" . $data['title'] . "' WHERE `mobile`.`id` =" . $data['id'];
        if(mysql_query($query)){
            echo 'Data update sucessfully';
            header('location:index.php');
        }else{
            echo 'Error';
        }
    }
    
    public function delete(){
        $query = "DELETE FROM `atomicproject1`.`mobile` WHERE id =".$this->id;
        if(mysql_query($query)){
            echo 'Data delete sucessull';
            header('location:index.php');
        }else{
            echo error_reporting();
        }
    }
}
