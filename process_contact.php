<?php
// Configurações do banco de dados
$host = '193.203.175.122';
$db   = 'u952620753_nex';
$user = 'u952620753_nex';
$pass = '6iKCfgX?c';
$charset = 'utf8mb4';

// DSN (Data Source Name) para a conexão PDO
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // Criação da conexão PDO
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Recebendo os dados do formulário
$nome = $_POST['name'];
$email = $_POST['email'];
$telefone = $_POST['phone'];
$mensagem = $_POST['message'];

// Preparando a consulta SQL
$sql = "INSERT INTO contatos (nome, email, telefone, mensagem) VALUES (:nome, :email, :telefone, :mensagem)";
$stmt = $pdo->prepare($sql);

// Vinculando os parâmetros
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':telefone', $telefone);
$stmt->bindParam(':mensagem', $mensagem);

// Executando a consulta e redirecionando com a mensagem de status
if ($stmt->execute()) {
    header("Location: " . $_SERVER['HTTP_REFERER'] . "?status=success");
} else {
    header("Location: " . $_SERVER['HTTP_REFERER'] . "?status=error");
}
exit();
?>
