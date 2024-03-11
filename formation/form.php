<?php

include("traitementDeux.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>


<form   method="GET"  >

               <div> <span  style="color: red;"> 
               <?php

               if(isset($erreur)){

                echo $erreur;
               }
               
               
               ?>
            
            </span></div> <br> <br>

    <input type="hidden" id="nom" name="token"   value="<?php echo $_SESSION['token'];?>" > <br> <br>

    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom"> <br> <br>

    <label for="email">Email :</label>
    <input type="text" id="email" name="email"> <br><br>

    <input type="submit" value="Envoyer"  name="submit" >
</form>




    
</body>
</html>