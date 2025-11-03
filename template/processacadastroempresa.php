<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once 'conexao.php'; 

try {
    // Coleta dos dados
    $nome_empresa = $_POST['nome_empresa'] ?? '';
    $email_empresa = $_POST['email_empresa'] ?? '';
    $senhabruta = $_POST['senha_empresa'] ?? '';
    $senha = trim($senhabruta);
    $confsenha_empresa = $_POST['confsenha_empresa'] ?? '';
    $ano = $_POST['ano'] ?? '';
    $descricao_empresa = $_POST['descricao_empresa'] ?? '';
    $cnpj = $_POST['cnpj'] ?? '';
    $atuacao = $_POST['atuacao'] ?? '';
    $telefone_empresa = $_POST['telefone_empresa'] ?? '';
    
    // Limpeza dos dados
    $cnpj_limpo = preg_replace('/[^0-9]/', '', $cnpj); 
    $telefone_empresa_limpo = preg_replace('/[^0-9]/', '', $telefone_empresa);

    // Validação de Senhas
    if ($senha !== $confsenha_empresa) {
        $_SESSION['erro_cadastro'] = 'As senhas fornecidas não coincidem.';
        header('Location: cadastroempresa.php?error=senhas_diferentes'); 
        exit();
    }
    
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    
    $insercao = "INSERT INTO `empresa` (`nome_empresa`, `email_empresa`, `senha_empresa`, `ano`, `descricao_empresa`, `cnpj`, `atuacao`, `telefone_empresa`) 
    VALUES (:nome_empresa, :email_empresa, :senha_empresa, :ano, :descricao_empresa, :cnpj, :atuacao, :telefone_empresa)";

    $stmt = $pdo->prepare($insercao);

    $stmt->bindParam(':nome_empresa', $nome_empresa);
    $stmt->bindParam(':email_empresa', $email_empresa);
    $stmt->bindParam(':senha_empresa', $senhaHash);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':descricao_empresa', $descricao_empresa);
    $stmt->bindParam(':cnpj', $cnpj_limpo);
    $stmt->bindParam(':atuacao', $atuacao);
    $stmt->bindParam(':telefone_empresa', $telefone_empresa_limpo);

    $stmt->execute(); 
    
    $id_empresa = $pdo->lastInsertId();

    // Salvar dados na sessão
    $_SESSION['id_empresa'] = $id_empresa;
    $_SESSION['nome_empresa'] = $nome_empresa;
    $_SESSION['email_empresa'] = $email_empresa;
    
    header('Location: perfilempresa.php'); 
    exit();

} catch (PDOException $e) {
    
    if ($e->getCode() == 23000 || strpos($e->getMessage(), '1062') !== false) {
        $_SESSION['erro_cadastro'] = 'E-mail ou CNPJ já cadastrado. Por favor, tente outro.';
    } else {
      
        error_log("Erro no cadastro de empresa: " . $e->getMessage());
        
        $_SESSION['erro_cadastro'] = 'Erro grave ao cadastrar. Detalhes: ' . $e->getMessage(); 
    }
    
    header('Location: cadastroempresa.php?status=failed'); 
    exit();
} 
?>