<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Formation php-inscription</title>
</head>
<body>
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <p>Formation en PHP</p>
        </div>
        <div class="nav-menu" id="navMenu">
            
        </div>
        <div class="nav-button">
        <a href="connexion.php"><button class="btn white-btn" id="loginBtn" onclick="login()">Connexion</button></a>
            <a href="inscription.php"> <button class="btn" id="registerBtn" onclick="register()">Inscription</button></a>
         
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>
  
    <div class="form-box">
        
   
  
       
        <div class="login-container" id="register">
            <div class="top">
                <span></span>
                <header></header>
            </div>
            <form class="form"  action="traitement_poo.php" method="POST">
            
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" name="nom" class="input-field" placeholder="Nom">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" name="prenom" class="input-field" placeholder="Prenom">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" name="email" class="input-field" placeholder="Email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" class="input-field" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="S'inscrire">
            </div>

            </form>



            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check"></label>
                </div>
                <div class="two">
                    <label><a href="#">Terms & conditions</a></label>
                </div>
            </div>
        </div>
    </div>
</div>   




</body>
</html>