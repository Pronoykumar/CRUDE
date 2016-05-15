<?php

include_once '../../vendor/autoload.php';
use App\Hobby\Hobbies;

$obj = new Hobbies();
$singleData = $obj->prepare($_GET)->show();
//var_dump($singleData);
//die();
?>

<!DOCTYPE html>
<html>
<head>
    <title>View The Detiles one item</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
    
</head>
<body>
    <dl>
        <dt>ID</dt>
        <dd><?php echo $singleData['id'];?></dd>
    </dl>
    <h2>Hobbies</h2>
    <ul><?php echo $singleData['hobby'];?></ul>
    
   
    <nav>
        <li>
            <a href="index.php">Go to List</a>
        </li>
    </nav>
    

</body>
</html> 
