<?php

include_once '../../vendor/autoload.php';

use App\Mobile\Mobile;
use App\Mobile\Message;
use App\Mobile\Utility;

$mobiles = new Mobile();
$mobile =  $mobiles->trashed();

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .warning{
            background-color: green;
        }
    </style>
    <title>Create an Item</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
    
</head>
<body>
    
    <h1>List of Mobiles</h1>
    
    <div class="warning">
        <?php
//        if(array_key_exists('message', $_SESSION)&& !empty($_SESSION['message'])){
//            echo Message::message();
//        }
       ?>
    </div>
 
    <div>
        <span>Search / Filter</span>
        <span id="utility">Download as <a href="#">PDF</a> | <a href="#">XL</a>&nbsp;&nbsp;&nbsp;<a href="create.php">Create New </a></span>
        <select>
            <option>10</option>
            <option>20</option>
            <option>30</option>
            <option>40</option>
        </select>
    </div>
    
    <table border="1">
        <thead>
            <tr>
                <th>SL</th>
                <th>Mobile Model</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
            if(count($mobile)>0){
                $slno = 1;
                foreach ($mobile as $_mobile){
            ?>
            
            <tr>
                <td><?php echo $slno; ?></td>
                <td><a href="show.php?id=<?php echo $_mobile['id']; ?>"> <?php echo $_mobile['title']; ?> </a></td>
                <td>
                    <a href="delete.php?id=<?php echo $_mobile['id']; ?>" class="delete">Delete</a>
                    |<a href="recovre.php?id=<?php echo $_mobile['id']; ?>">Recover</a>               
                </td>
            </tr>
            
            <?php 
                $slno++;}
                }else{
            ?>
            <tr>
                <td colspan="6">
                    No record is available
                </td>
            </tr>    
            <?php }?>
        </tbody>
        
    </table>
    
    <div><span>prev 1|2|3 next</span></div>
    
    <nav><a href="index.php">Go to list</a></nav>
    
    <script src="https://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="../../js/jquery-1.12.3.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
           $(".warning").show().delay(500).fadeOut('slow'); 
        });
        
        $(document).ready(function(){
            $('.delete').bind('click',function(e))
            var isOk = confirm("Are you sure you want to delete?");
            //console.log(isOk);
            if(!isOk){
                e.preventDefault();
            }
        });
    </script>
</body>
</html> 