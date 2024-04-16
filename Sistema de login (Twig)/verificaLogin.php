<?php
require('inc/banco.php');

$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;

// Conecta ao banco de dados
$con = mysqli_connect("localhost", "root", "", "login");
$sql = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '{$email}'");
$row = mysqli_fetch_assoc($sql); 

// Verifica se encontrou o usuário com o email fornecido
if (!$row) {
    header('Location: adcUsuario.php');
    exit();
}

echo $senha;
echo '<br>';
echo $row['senha'];
echo '<br>';
$teste = password_verify($senha, $row['senha']);
echo $teste ? 'Senha correta' : 'Senha incorreta';
var_dump($teste);
// Verifica se a senha fornecida corresponde à senha armazenada no banco de dados
if (password_verify($senha, $row['senha'])) {

    header('Location: funcionou.php');
    exit(); 
} else {
    echo '<br>Authentication failed for ' . htmlspecialchars($email) . '.';
}
