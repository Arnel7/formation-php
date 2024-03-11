<?php
session_start();


echo "je suis " .$_SESSION["nom"] ." Mon age est " .$_SESSION["age"] ." Ma fofesssion est :" .$_SESSION["profession"];


session_destroy();