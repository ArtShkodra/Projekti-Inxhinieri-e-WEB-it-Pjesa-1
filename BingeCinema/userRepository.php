<?php 
include_once '../database/databaseConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertMovie($movie){

        $conn = $this->connection;

        $type = $movie->getType();
        $movie = $movie->getMovie();
        $date = $movie->getDate();

        $sql = "INSERT INTO user (Type,Movie,Date) VALUES (?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$type,$movie,$date]);

        echo "<script> alert('Movie has been inserted successfuly!'); </script>";

    }

    function getAllMovies(){
        $conn = $this->connection;

        $sql = "SELECT * FROM movie";

        $statement = $conn->query($sql);
        $movies = $statement->fetchAll();

        return $movies;
    }

    function getUserByMovie($movie){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id='$id'";

        $statement = $conn->query($sql);
        $movie = $statement->fetch();

        return $movie;
    }

    function updateUser($type,$movie,$date){
         $conn = $this->connection;

         $sql = "UPDATE user SET type=?, movie=?, date=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$type,$movie,$date]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteMovie($movie){
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE movie=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$movie]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}


?>