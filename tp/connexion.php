<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Formation php-connexion</title>
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
       

        

        <div class="login-container" id="login">
            <form action="connexionTraitement_poo.php"  method="POST"> 
            <div class="top">
                <span></span>
                <header></header>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name="email" placeholder="Email">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" name="password" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Connexion">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"></label>
                </div>
                <div class="two">
                    <label><a href="#">Mot de passe oublié?</a></label>
                </div>
            </div>
       
        </form>
       
        </div>

    

      
        
    </div>
</div>   


<script>
   
   function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
   }
 
</script>

<script>

    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");

    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }


</script>

</body>
</html>