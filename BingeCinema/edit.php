<?php
$usermovie = $_GET['movie'];
include_once '../repository/userRepository.php';



$userRepository = new UserRepository();

$movie  = $userRepository->getUserByType($movieMoview\;


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edit User</h3>
    <form action="" method="post">
        <input type="text" name="Type" value="<?=$movie['Type']?>"> <br><br>
        <input type="text" name="Movie" value="<?=$movie['Movie']?>"> <br><br>
        <input type="text" name="Date" value="<?=$movie['Date']?>"> <br><br>

        <input type="submit" name="saveBtn" value="save"><br><br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $type = $_POST['type'];
    $movie = $_POST['movie'];
    $date = $_POST['date'];

    $userRepository->updateUser($type,$movie,$date);
    header("location:dashboard.php");
}


?>