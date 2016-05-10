<?php

include_once ("../../vendor/autoload.php");
session_start();

use App\Mobile\Mobile;
use App\Mobile\Message;
use App\Mobile\Utility;

$mobile = new Mobile();
$mobiles = $mobile->index();

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
    
    <div class="warning">
        <?php
        if(array_key_exists('message', $_SESSION)&& !empty($_SESSION['message'])){
            echo Message::message();
        }
        ?>
    </div>
    
    <h1>List of Mobiles</h1>
    
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
            $slno = 0;
            foreach ($mobiles as $allmobile){
                $slno++;
            ?>
            
            <tr>
                <td><?php echo $slno; ?></td>
                <td><a href="show.php?id=<?php echo $allmobile['id']; ?>"> <?php echo $allmobile['title']; ?> </a></td>
                <td>
                    <a href="edit.php?id=<?php echo $allmobile['id']; ?>">Edit</a> |
                    <a href="delete.php?id=<?php echo $allmobile['id']; ?>">Delete</a>
                    |<a href="trash.php?id=<?php echo $allmobile['id']; ?>">Trash</a>
                    
                    <form action="delete.php" method="post">
                        <input type="hidden" name='id' value="<?php echo $allmobile['id']; ?>">
                        <button class="delete" type="submit">Delete</button>
                    </form>
                    | <a href="#">Trash</a> /
                    Recovery
                    | Email to Friend
                    
                </td>
            </tr>
            
            <?php } ?>
        </tbody>
        
    </table>
    
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