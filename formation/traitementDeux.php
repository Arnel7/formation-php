<?php  

session_start();


if(!isset($_SESSION["token"])){

    $_SESSION['token']=1415;
}


if(isset($_GET["submit"])){

    if($_GET['token']==$_SESSION['token']){

        echo "la requete est acceptée";
    }

    else{

        echo "la requete est refusée";
    }
}

?>