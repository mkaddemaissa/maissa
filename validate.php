<?php


require_once "connnexion.php";

$cin = $_POST["cin"];
$query = $pdo->prepare("UPDATE rhemploye SET valide = 1 where cin = ".$cin);
$query->execute();

Header("Location:datagreed.php");