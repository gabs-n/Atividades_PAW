<?php
// Configuração do banco de dados MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Obtém os dados do formulário de login
$user = $_POST['username'];
$pass = $_POST['password'];

// Conecta ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Executa a consulta para verificar as credenciais do usuário
$sql = "SELECT * FROM usuarios WHERE username = '$user' AND password = '$pass'";
$result = $conn->query($sql);

// Verifica se a consulta retornou algum resultado
if ($result->num_rows > 0) {
    echo "Login bem-sucedido!";
} else {
    echo "Usuário ou senha inválidos.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>