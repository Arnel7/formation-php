<?php

session_start();
include("../php/db.php");
include("../php/Users.php");

$users=new Users($bdd);

$formationnsUser=$users->achatsUser($_SESSION["id"]);



?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.html" class="logo">Educa.</a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name"><?php echo $_SESSION["nom"];  ?></h3>
         <p class="role"></p>
         <a href="profile.html" class="btn">Voir le profil</a>
         <div class="flex-btn">
            <a href="login.html" class="option-btn">Seconnecter</a>
            <a href="register.html" class="option-btn">S'inscrire</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name"><?php echo $_SESSION["nom"];  ?></h3>
      <p class="role"><?php echo $_SESSION["email"];  ?></p>
      <a href="profile.html" class="btn">Voir le profil</a>
   </div>

   <nav class="navbar">
      <a href="home.html"><i class="fas fa-home"></i><span>Accueil</span></a>
      <a href="about.html"><i class="fas fa-question"></i><span>Apropos</span></a>
      <a href="courses.html"><i class="fas fa-graduation-cap"></i><span>Cours</span></a>
      <a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span>Enseignant</span></a>
      <a href="contact.html"><i class="fas fa-headset"></i><span>Contactez-nous</span></a>
   </nav>

</div>


<section class="courses">

   <h1 class="heading">Nos cours</h1>

   <div class="box-container">
      <?php

      while($resultat=$formationnsUser->fetch()){

         ?>
               <div class="box">
         <div class="tutor">
            <img src="images/pic-2.jpg" alt="">
            <div class="info">
               <h3><?php  echo $resultat["auteur"] ?></h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-1.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title"><?php  echo $resultat["titre"] ?></h3>
         <a href="playlist.html" class="inline-btn">Voir la liste de lecture</a>
      </div>

         
         
         <?php


      }
      
      
      ?>


    
    
   

   </div>

   <div class="more-btn">
      <a href="courses.html" class="inline-option-btn">Voir tous les cours</a>
   </div>

</section>















<footer class="footer">

   &copy; copyright @ 2022 by <span>mr. web designer</span> | Tous doits réservés!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>