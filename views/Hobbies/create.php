<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="tamplate/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="tamplate/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="tamplate/css/style.css">
        <title></title>
    </head>
    <body>
        
        <section class="container">
            <div class="col-sm-12">
                <form action="store.php" method="post">
                    <div class="checkbox">
                        <label class="checkbox">
                            <input type="checkbox" name="hobby[]" value="Cricket">Cricket<br>
                            <input type="checkbox" name="hobby[]" value="Football">Football<br>
                            <input type="checkbox" name="hobby[]" value="Coding">Coding<br>
                            <input type="checkbox" name="hobby[]" value="Gardening">Gardening<br>
                      </label>
                    </div>
                    <button type="submit" class="btn btn-success" value="Submit">Submit</button>
              </form>
            </div>
        </section>
        
        <script type="text/javascript" src="tamplate/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="tamplate/js/jquery.min.js"></script>
    </body>
</html>
