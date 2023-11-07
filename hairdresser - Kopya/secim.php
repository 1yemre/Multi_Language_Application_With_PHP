<?php
session_start();

$gelenDilSecimi=$_GET["dilSecimi"];
$_SESSION["sitedili"]=$gelenDilSecimi;
header("Location:index.php");


?>