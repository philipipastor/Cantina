<?php
include('conexao.php')

// Obter os dados enviados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Consulta SQL para verificar o email e a senha no banco de dados
$sql = "SELECT * FROM tabela_usuarios WHERE email = '$email' AND senha = '$senha'";
$result = $conn->query($sql);

// Verifica se a consulta retornou algum resultado
if ($result->num_rows > 0) {
    // Login bem-sucedido
    session_start(); // Inicia a sessão
    $_SESSION['email'] = $email; // Armazena o email na sessão (opcional)
    header("Location: index.html"); // Redireciona para a página index
    exit;
} else {
    // Usuário não encontrado
    echo "<script>alert('Usuário não encontrado');</script>";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>







