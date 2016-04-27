<?php

include_once ('../../vendor/autoload.php');
use App\Mobile\Mobile;
$mobile = new Mobile();
$mobiles = $mobile->prepare($_GET)->show();

//var_dump($mobiles);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View The Detiles one item</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
    
</head>
<body>

    <h1><?php echo $mobiles->title;?></h1>
    <dl>
        <dt>ID</dt>
        <dd><?php echo $mobiles->id;?></dd>
    </dl>
   
    <nav>
        <li>
            <a href="index.php">Go to List</a>
        </li>
    </nav>
    

</body>
</html> 


