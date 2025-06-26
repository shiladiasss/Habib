<?php
// conexao.php
$host = "localhost";
$user = "root"; 
$password = "";
$database = "cadastro"; // Removi o 'habib.' pois você deve conectar diretamente ao banco

try {
    $conexao = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conexao; // Adicionei este return
} catch(PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>
