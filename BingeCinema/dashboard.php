<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <table border="1">
             <tr>
                 <th>Type</th>
                 <th>Movie</th>
                 <th>Date</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

             <?php 
             include_once '../repository/userRepository.php';

             $userRepository = new UserRepository();

             $movies = $userRepository->getAllUsers();

             foreach($movies as $movie){
                echo 
                "
                <tr>
                     <td>$movie[Type]</td>
                     <td>$movie[Movie]</td>
                     <td>$movie[Date] </td>
                     <td><a href='edit.php?movie=$movie[Movie]'>Edit</a> </td>
                     <td><a href='delete.php?movie=$user[Movie]'>Delete</a></td>
                     
                </tr>
                ";
             }

             
             
             ?>
    </table>
</body>
</html>