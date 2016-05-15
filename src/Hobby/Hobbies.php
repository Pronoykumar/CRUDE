<?php

namespace App\Hobby;
use App\Hobby\Message;


class Hobbies{
    public $id = '';
    public $hobby = '';
    
    public function __construct() {
        $conn = mysql_connect("localhost", "root", "") or die("Database has not been connected");
        $select_db = mysql_select_db('atomicproject1');
        date_default_timezone_set('Asia/Dhaka');
    }
    
    public function prepare($data = array()){
        if(is_array($data) && array_key_exists('hobby', $data)){
            $this->hobby = $data['hobby'];
        }
        
        if(array_key_exists('id', $data) && !empty($data['id'])){
            $this->id = $data['id'];
        }
        
        return $this;
    }
    
    public function store(){
        $query = "INSERT INTO `hobbies`(`id`, `hobby`, `created_at`) VALUES (NULL, '".$this->hobby."', '".date("Y-m-d H:i:s")."')";
        $run_query = mysql_query($query);
        if($run_query){
            Message::message("Data has been inserted successfully");
        }  else {
            //Message::message();
        }
        header('location:index.php');
    }
    
    public function index(){
        $_hobbies = array();
        $query = "SELECT * FROM `hobbies` WHERE deleted_at IS NULL";
        $result = mysql_query($query);
        //echo $result;
        //die();
        
        while($row = mysql_fetch_assoc($result)){
            $_hobbies[] = $row;
            //var_dump($row);
            //die();
        }
        return $_hobbies;
    }
    
    public function show(){
        $query = "SELECT * FROM `hobbies` WHERE id='".$this->id."'";
        $run_query = mysql_query($query);
        $singleData = mysql_fetch_assoc($run_query);
        
        return $singleData;
    }
    
    public function update(){
        $query = "UPDATE `hobbies` SET `hobby` = '".$this->hobby."', `modified_at` = '".date("Y-m-d H:i:s")."' WHERE `hobbies`.`id` = ".$this->id;
        $run_query = mysql_query($query);
        if($run_query){
            Message::message('Hobby Update sucessfully');
        }  else {
            Message::message('Error');
        }
        header('location:index.php');
    }
    
    public function delete(){
        $query = "DELETE FROM `hobbies` WHERE `hobbies`.`id` = ".$this->id;
        $run_query = mysql_query($query);
        if($run_query){
            Message::message('Ok');
        }else{
            Message::message('Error');
        }
        header('location:index.php');
    }
    
}






