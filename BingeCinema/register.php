<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="type" placeholder="type..."> <br><br>
        <input type="text" name="movie" placeholder="movie..."> <br><br>
        <input type="text" name="date" placeholder="date..."> <br><br>

        <input type="submit" name="registerBtn" value="register"><br><br>
    </form>

   <?php include_once '../controller/registerController.php';?>
</body>
</html>