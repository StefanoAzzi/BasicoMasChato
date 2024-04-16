<?php
require('inc/banco.php');

$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;

// Conecta banco de dados 
$con = mysqli_connect("localhost", "root", "", "login");
$sql = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '{$email}'");
 
// Verifica se o email já existe no banco, pode ser o nome de usuario tbm
if(mysqli_num_rows($sql) > 0) {
    header('Location: adcUsuario.php');
    die();
}

// filtrando a senha
$senhaFiltrada = filter_input(INPUT_POST, $senha, FILTER_SANITIZE_STRING);

// Codificando a senha
$senhaCodificada = password_hash($senhaFiltrada, PASSWORD_DEFAULT);

// Preparando o insert
$query = $pdo->prepare('INSERT INTO usuarios (`email`, `senha`) VALUES(:email, :senha)');

// Executando o insert
$query->execute(
    [
        ':email'=> $email,
        ':senha' => $senhaCodificada
    ]
);

header('location: index.php');
