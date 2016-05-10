<?php

include_once ('../../vendor/autoload.php');
use App\Mobile\Mobile;

$mobile = new Mobile();
$themobile = $mobile->prepare($_GET)->edit();
//var_dump($themobile);
//die();

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit the Item</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
    
</head>
<body>

    <h1>Update an Item</h1>
    
    <form action="update.php" method="post">
        <fieldset>
            <legend>Update Mobile Item</legend>
            <input type="hidden" name="id" value="<?php echo $themobile->id;?>">
            
            <div>
                <label for="title">Mobile Title</label>
                <input name="title" id="title" autofocus="true" tabindex="10" placeholder="Place enter your mobile name"
                       value="<?php echo $themobile->title; ?>" />
            </div>
            <br/>
            
            <button type="submit" tabindex="0">Save</button> 
        </fieldset>
    </form>
    <nav><li><a href="index.php">Go to List</a></li></nav>

</body>
</html>