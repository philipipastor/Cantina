<?php
// Incluir arquivo de conexão com o banco de dados
include 'conexao.php';

// Verificar se o ID foi fornecido
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Verificar se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obter os valores atualizados do formulário
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $celular = $_POST['celular'];
        $nasc = $_POST['nasc'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero'];
        $matricula = $_POST['matricula'];
        $turma = $_POST['turma'];
        $ano = $_POST['ano'];
        $sexo = $_POST['sexo'];
        $loginn = $_POST['loginn'];
        $senha = $_POST['senha'];

        // Atualizar os dados no banco de dados
        $sql = "UPDATE formulario SET nome = '$nome', celular = $celular, nasc = $nasc, endereco = '$endereco', numero = $numero, matricula = $matricula, turma = $turma, ano = $ano, sexo = '$sexo', loginn = '$loginn', senha = '$senha' WHERE id = $id";

        // Executar a atualização no banco de dados
        $result = $conn->query($sql);

        // Verificar se a atualização foi bem-sucedida
        if ($result) {
            echo "Dados atualizados com sucesso.";
            echo "<br>";
            echo "<a href='consulta.php'>Consultar dados</a>";
        } else {
            echo "Erro ao atualizar os dados: " . $conn->errorInfo()[2];
        }
    }

    // Buscar os dados da pessoa no banco de dados
    $sql = "SELECT id, nome, celular, nasc, endereco, numero, matricula, turma, ano, sexo, loginn, senha FROM formulario WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);

    // Verificar se o registro foi encontrado
    if (!$row) {
        echo "Registro não encontrado.";
        exit;
    }
} else {
    echo "ID não fornecido.";
    exit;
}
?>
