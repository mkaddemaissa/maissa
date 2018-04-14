<?php
require_once "connnexion.php";

$id= $_POST["id"];
$query = $pdo->prepare("UPDATE entretient SET valid = 1 where id = ".$id);
$query -> execute();
Header("Location:tablesentretien.php");
?>