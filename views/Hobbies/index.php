<?php

include_once '../../vendor/autoload.php';
use App\Hobby\Hobbies;

$obj = new Hobbies();
$all_hobbies = $obj->prepare()->index();

//var_dump($allmobile);
//die();
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
//        if(array_key_exists('message', $_SESSION)&& !empty($_SESSION['message'])){
//            echo Message::message();
//        }
//        ?>
    </div>
    
    <h1>List of Hobbies</h1>
    
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
                <th>Id</th>
                <th>Seleted Hobbies</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
            $slno = 0;
            foreach ($all_hobbies as $hobby){
                $slno++;
            ?>
            
            <tr>
                <td><?php echo $slno; ?></td>
                <td><?php echo $hobby['id']; ?></td>
                <td><?php echo $hobby['hobby']; ?></td>
                <td><a href="show.php?id=<?php echo $hobby['id']; ?>"> View </a> |
               
                    <a href="edit.php?id=<?php echo $hobby['id']; ?>">Edit</a> |
                    <a href="delete.php?id=<?php echo $hobby['id']; ?>">Delete</a>
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