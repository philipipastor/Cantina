<?php 
include("conexao.php");

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

$sql = "INSERT INTO formulario (nome, celular, nasc, endereco, numero, matricula, turma, ano, sexo, loginn, senha)
        VALUES ('$nome', '$celular', '$nasc', '$endereco', $numero, '$matricula', '$turma', '$ano', '$sexo', '$loginn', '$senha')";

$result = $conn->exec($sql); 

echo "<p> $result registro foi incluído</p>"; 

echo "<a href='consulta.php'>Consultar dados <br></a>"; 

echo "<a href='editar.php'>Editar dados</a>"; 

echo "<br><a href='excluir.php'>Excluir dados</a>"; 

echo "<br><a href='index.html'>Voltar ao Inicio</a>";

?>