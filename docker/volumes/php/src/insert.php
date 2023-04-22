<?php
// Conexão com o banco de dados
$mysqli = new mysqli("localhost", "seu_usuario", "sua_senha", "seu_banco_de_dados");

if ($mysqli->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);
}

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$password = $_POST["password"];

$query = "INSERT INTO usuarios (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("ssss", $first_name, $last_name, $email, $password);
$result = $stmt->execute();

if ($result) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . $stmt->error;
}

$stmt->close();
$mysqli->close();
?>
