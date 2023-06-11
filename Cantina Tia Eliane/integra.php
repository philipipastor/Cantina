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

$senha = $_POST['senha'];

$loginn = $_POST['loginn']; 

$sql = "INSERT INTO formulario (nome, celular, nasc, endereco, numero, matricula, turma, ano, sexo, senha, loginn)
        VALUES ('$nome', '$celular', '$nasc', '$endereco', $numero, '$matricula', '$turma', '$ano', '$sexo', '$senha', '$loginn')";

$result = $conn->exec($sql); 

echo "<p> $result registro foi incluído</p>"; 

echo "<a href='consulta.php'>Consultar dados <br></a>"; 

echo "<a href='editar.php'>Editar dados</a>"; 

echo "<br><a href='excluir.php'>Excluir dados</a>"; 

echo "<br><a href='index.html'>Voltar ao Inicio</a>";

?>