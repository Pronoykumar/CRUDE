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
    <body>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $singleData['id'];?>">
            <input type="checkbox" name="hobby[]" value="Cricket"
                   <?php if(preg_match("/Cricket/", $singleData['hobby'])){
                        echo "checked";
                   }else{echo "";}?>>Cricket<br>
            <input type="checkbox" name="hobby[]" value="Football"
                   <?php 
                   if(preg_match("/Football/", $singleData['hobby'])){
                       echo "checked";
                   }else{
                       echo "";}?>>Football<br>
            <input type="checkbox" name="hobby[]" value="Coding"
                   <?php 
                   if(preg_match("/Coding/", $singleData['hobby'])){
                       echo "checked";
                   }else{
                       echo "";}?>>Coding<br>
            <input type="checkbox" name="hobby[]" value="Gardening"
                   <?php 
                   if(preg_match("/Gardening/", $singleData['hobby'])){
                       echo "checked";
                   }else{
                       echo "";}?>>Gardening<br>
            <input type="submit" value="Update">
        </form>
    </body>
</html>