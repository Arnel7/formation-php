<?php 
session_start();

$_SESSION["nom"]="LAWSON";

$_SESSION["age"]=25;

$_SESSION["profession"]="Dev";

echo $_SESSION["nom"];
