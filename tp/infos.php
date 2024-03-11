<?php
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
   <center> <table class="content-table">
    <h1> Information</h1>
    <thead>
      <tr>
        <th>id</th>
        <th>nom</th>
        <th>prenom</th>
        <th>email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> <?php   echo $_SESSION['id'] ?>  </td>
        <td><?php   echo $_SESSION['nom'] ?> </td>
        <td><?php   echo $_SESSION['prenom'] ?> </td>
        <td><?php   echo $_SESSION['email'] ?> </td>
      </tr>
    
     
    </tbody>
  </table></center>
</body>
</html>