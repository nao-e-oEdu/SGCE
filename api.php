<?php
$host = 'localhost';
$db   = 'VertNest';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $stmt = $pdo->query("SELECT 'Conexão bem-sucedida!' AS mensagem;");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($row);
} catch (\PDOException $e) {
    echo json_encode(['erro' => $e->getMessage()]);
}
?>
