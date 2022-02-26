<?php

$movieMovie = $_GET['movie'];
include_once '../repository/userRepository.php';



$userRepository = new UserRepository();

$userRepository->deleteMovie($movieMovie);

header("location:dashboard.php");


?>