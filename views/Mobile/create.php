<!DOCTYPE html>
<html>
<head>
    <title>Create an Item</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
    
</head>
<body>

    <h1>Create an Item</h1>
    
    <form action="store.php" method="post">
        <fieldset>
            <legend>Add an Mobile Item</legend>
            
            <div>
                <label for="title">Enter Mobile Title</label>
                <input name="title" id="title" autofocus="true" tabindex="10" placeholder="Place enter your mobile name" />
            </div>
            <br/>
            
            <button type="submit" tabindex="0">Save</button>
            <button type="submit">Save & Create</button>
            <button type="reset">Reset</button>
        </fieldset>
    </form>

</body>
</html> 
