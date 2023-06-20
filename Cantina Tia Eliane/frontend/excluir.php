<?php
include 'conexao.php';
$id = $_GET['id']; 
$sql = "DELETE FROM text WHERE id='$id'";
$result = $conn->exec($sql);
echo "<script>alert('Usuário deletado.');</script>";
echo "<script>window.location.href = 'consulta.php';</script>";
?>