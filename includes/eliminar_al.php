<?php


$id = $_GET['id'];
require_once("db.php");
$query = mysqli_query($conexion, "DELETE FROM empresas WHERE id = '$id'");

header('Location: ../views/empresas.php?m=1');
