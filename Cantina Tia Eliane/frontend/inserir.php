<?php
include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO text (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if ($conn->exec($sql)) {
    echo "<script>alert('Conta criada com sucesso.');</script>";
    echo "<script>window.location.href = './pages/form-login.php';</script>";
} else {
    echo "<script>alert('Erro ao criar conta.');</script>";
    echo "<script>window.location.href = './pages/index.php';</script>";
}

$conn = null;
?>