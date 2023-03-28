<?php
// Dados de conexão ao banco de dados
$host = "localhost";
$user = "seu_usuario_mysql";
$password = "sua_senha_mysql";
$dbname = "nome_do_seu_banco_de_dados";

// Conexão ao banco de dados
$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// Dados provenientes do formulário do Google
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

// Preparação e execução da query de inserção
$sql = "INSERT INTO tabela (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
if (mysqli_query($conn, $sql)) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . mysqli_error($conn);
}

// Fechamento da conexão ao banco de dados
mysqli_close($conn);
?>
