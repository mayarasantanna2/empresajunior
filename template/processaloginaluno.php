<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once 'conexao.php';

$email = $_POST['email_aluno'] ?? '';
$senha = trim($_POST['senha_aluno'] ?? '');

if (empty($email) || empty($senha)) {
    die("E-mail ou senha vazios!");
}

// 
$sql = "SELECT id_aluno, nome_aluno, email_aluno, senha_aluno 
        FROM aluno 
        WHERE email_aluno = :email";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$usuario) {
    die("Usuário não encontrado!");
}

if (!password_verify($senha, $usuario['senha_aluno'])) {
    die("Senha incorreta!");
}

$_SESSION['id'] = $usuario['id_aluno'];
$_SESSION['nome'] = $usuario['nome_aluno'];
$_SESSION['email'] = $usuario['email_aluno'];

header("Location: restritaaluno.php");
?>