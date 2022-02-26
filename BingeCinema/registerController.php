<?php
include_once '../repository/userRepository.php';
include_once '../models/movie.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['Type']) || empty($_POST['Movie']) || empty($_POST['Date']))){
        echo "Fill all fields!";
    }else{
        $type = $_POST['Type'];
        $movie = $_POST['Movie'];
        $date = $_POST['Date'];


        $moview  = new Movie($type,$movie,$date);
        $userRepository = new UserRepository();

        $userRepository->insertMovie($movie);


    }
}



?>