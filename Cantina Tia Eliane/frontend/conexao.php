<?php
$url = "mysql://root:FPRL4LbgPi96q1oQufZr@containers-us-west-118.railway.app:6253/railway";

// Obtendo as informações da URL
$urlParts = parse_url($url);

// Obtendo as informações do servidor
$servername = $urlParts['host'];
$port = $urlParts['port'];
$username = urldecode($urlParts['user']);
$password = urldecode($urlParts['pass']);

// Obtendo o nome do banco de dados
$dbname = ltrim($urlParts['path'], '/');

try {
  $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
  // Definindo o modo de erro do PDO para exceções
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Conexão falhou!: <br>" . $e->getMessage();
}
?>