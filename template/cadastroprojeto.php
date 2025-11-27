<?php
session_start();
require 'conexao.php';

// ATENÇÃO: Corrigido o uso da variável de sessão para 'id_empresa'
if (!isset($_SESSION['id_empresa'])) {
    // Redireciona para login se não estiver logado.
    header("Location: login.php");
    exit;
}

// Usando 'id_empresa' padronizado
$id_empresa = $_SESSION['id_empresa'];

// Coleta os dados do formulário
$nome_projeto = $_POST['nome_projeto'] ?? '';
$descricao_do_projeto = $_POST['descricao_do_projeto'] ?? '';
$requisitos_necessarios = $_POST['requisitos_necessarios'] ?? '';
$data_limite = $_POST['data_limite'] ?? '';
$qt_horas = $_POST['qt_horas'] ?? 0;

if (empty($nome_projeto) || empty($descricao_do_projeto)) {
    // Adicionar um tratamento de erro ou redirecionamento se os dados essenciais estiverem faltando
    die("Erro: Dados essenciais do projeto ausentes.");
}


$sql = "INSERT INTO projeto 
(nome_projeto, descricao_do_projeto, requisitos_necessarios, data_limite, qt_horas, id_empresa) 
VALUES 
(:nome_projeto, :descricao_do_projeto, :requisitos_necessarios, :data_limite, :qt_horas, :id_empresa)";

try {
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome_projeto', $nome_projeto);
    $stmt->bindParam(':descricao_do_projeto', $descricao_do_projeto);
    $stmt->bindParam(':requisitos_necessarios', $requisitos_necessarios);
    $stmt->bindParam(':data_limite', $data_limite);
    $stmt->bindParam(':qt_horas', $qt_horas);
    $stmt->bindParam(':id_empresa', $id_empresa);

    $stmt->execute();
    // ATENÇÃO: Redirecionado para a página restrita correta
    header("Location: restritaempresa.php");
    exit;
} catch (PDOException $e) {
    // Tratar erro de banco de dados
    die("Erro ao cadastrar projeto: " . $e->getMessage());
}