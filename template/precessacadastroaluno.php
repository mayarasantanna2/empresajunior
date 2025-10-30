<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once 'conexao.php';

$nome = $_POST['nome_aluno'];
$email = $_POST['email_aluno'];
$senha = $_POST['senha_aluno'];
$confsenha_aluno = $_POST['confsenha_aluno'];
$RM = $_POST['RM'];
$datanasc = $_POST['datanasc'];
$descricao = $_POST['descricao'];
$curso = $_POST['curso'];
$habilidades = $_POST['habilidades'];
$telefone_aluno = $_POST['telefone_aluno'];



// Criptografia da senha
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

$insercao = "INSERT INTO `aluno` (`nome_aluno`, `email_aluno`, `senha_aluno`, `confsenha_aluno`, `RM`, `datanasc`, `descricao`, `curso$curso`, `habilidades`, `telefone_aluno`) 
VALUES (:nome_aluno, :email_aluno, :senha_aluno, :RM, :datanasc, :descricao, :curso, :habilidades, :telefone_aluno)";

$stmt = $pdo->prepare($insercao);

// Vincular os parâmetros
$stmt->bindParam(':nome_aluno', $nome);
$stmt->bindParam(':email_aluno', $email);
$stmt->bindParam(':senha_aluno', $senhaHash);
$stmt->bindParam(':rm', $rm);
$stmt->bindParam(':datanasc', $datanasc);
$stmt->bindParam(':descricao', $descricao);
$stmt->bindParam(':curso', $curso);
$stmt->bindParam(':habilidades', $habilidades);
$stmt->bindParam(':telefone_aluno', $telefone_aluno);

// Executar a consulta
if ($stmt->execute()) {
    // Obter o ID do último aluno inserido
    $id_aluno = $pdo->lastInsertId();

    // Salvar dados na sessão
    $_SESSION['id_aluno'] = $id_aluno;
    $_SESSION['nome_aluno'] = $nome;
    $_SESSION['email_aluno'] = $email;

    header('Location: login.php');
    exit();
} else {
    header('Location: index.php?error=registration_failed');
    exit();
}
?>
