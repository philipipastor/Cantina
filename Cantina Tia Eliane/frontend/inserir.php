<?php 
include("/conexao.php");

$nome = $_POST['nome']; 

$email = $_POST['email']; 

$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios (nome, email, senha)
        VALUES ('$nome', '$email', '$senha')";

$result = $conn->exec($sql); 

echo "<p> $result registro foi incluído</p>"; 

echo "<a href='consulta.php'>Consultar dados <br></a>"; 

echo "<a href='editar.php'>Editar dados</a>"; 

echo "<br><a href='excluir.php'>Excluir dados</a>"; 

echo "<br><a href='cantina.html'>Voltar ao Inicio</a>";

?>