<?php
$usuarios = [
    "julio" => "junior06",
    "admin" => "Spimpolo@123",
    
];

$user = $_POST['username'] ?? '';
$pass = $_POST['password'] ?? '';

if (isset($usuarios[$user]) && $usuarios[$user] === $pass) {
    // Redireciona para a página painel.html após login bem-sucedido
    header("Location: painel.html");
    exit;
} else {
    echo "<p style='color:red;text-align:center;margin-top:50px;'>Usuário ou senha incorretos.</p>";
    echo "<p style='text-align:center;'><a href='index.html'>Tentar novamente</a></p>";
}
