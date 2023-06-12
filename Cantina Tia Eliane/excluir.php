<?php
include 'conexao.php';
$id = $_GET['id']; 
$sql = "DELETE FROM formulario WHERE id='$id'";
$result = $conn->exec($sql);
echo "<p> $result registro foi removido</p>";
echo "<a href='consulta.php'>Consultar dados</a>";
?>