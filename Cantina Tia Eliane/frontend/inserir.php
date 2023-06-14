<?php
include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if ($conn->exec($sql)) {
    echo "<p>Registro foi incluído.</p>";
    echo "<a href='consulta.php'>Consultar dados</a><br>";
    echo "<a href='editar.php'>Editar dados</a><br>";
    echo "<a href='excluir.php'>Excluir dados</a><br>";
    echo "<a href='cantina.html'>Voltar ao Início</a>";
} else {
    echo "Erro ao incluir o registro: " . $conn->errorInfo()[2];
}

$conn = null;
?>