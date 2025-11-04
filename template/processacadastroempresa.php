<?php
session_start();
// Remova o cabeçalho JSON! A resposta agora é um redirecionamento.
// header('Content-Type: application/json'); // <-- REMOVIDO

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Lembre-se de verificar se 'conexao.php' está no caminho correto
include_once 'conexao.php'; 

// Use um bloco try-catch para lidar com erros de conexão/execução
try {
    // Coleta dos dados
    $nome_empresa = $_POST['nome_empresa'] ?? '';
    $email_empresa = $_POST['email_empresa'] ?? '';
    $senha_bruta =$_POST['senha_empresa'] ?? '';
    $senha_empresa =trim($senha_bruta);
    $confsenha_empresa = $_POST['confsenha_empresa'] ?? '';
    $cnpj = $_POST['cnpj'] ?? '';
    $ano_de_fundacao = $_POST['ano_de_fundacao'] ?? '';
    $descricao_institucional = $_POST['descricao_institucional'] ?? '';
    $area_de_atuacao = $_POST['area_de_atuacao'] ?? '';
    $telefone_empresa = $_POST['telefone_empresa'] ?? '';
    
    // ⚠️ Validação de senha_empresas (redundante, mas bom manter no backend)
    if ($senha_empresa !== $confsenha_empresa) {
        $_SESSION['erro_cadastro'] = 'As senha_empresas fornecidas não coincidem.';
        header('Location: cadastro.php?error=senha_empresas_diferentes');
        exit();
    }
    
    // Criptografia da senha_empresa
   $senha_empresaHash = password_hash($senha_empresa, PASSWORD_DEFAULT); 
   
    $insercao = "INSERT INTO `empresa` (`nome_empresa`, `email_empresa`, `senha_empresa`, `cnpj`, `ano_de_fundacao`, `descricao_institucional`, `area_de_atuacao`, `telefone_empresa`) 
    VALUES (:nome_empresa, :email_empresa, :senha_empresa, :cnpj, :ano_de_fundacao, :descricao_institucional, :area_de_atuacao, :telefone_empresa)";

    $stmt = $pdo->prepare($insercao);
    
    // Vincular os parâmetros
    $stmt->bindParam(':nome_empresa', $nome_empresa);
    $stmt->bindParam(':email_empresa', $email_empresa);
    $stmt->bindParam(':senha_empresa', $senha_empresaHash);
    $stmt->bindParam(':cnpj', $cnpj);
    $stmt->bindParam(':ano_de_fundacao', $ano_de_fundacao);
    $stmt->bindParam(':descricao_institucional', $descricao_institucional);
    $stmt->bindParam(':area_de_atuacao', $area_de_atuacao);
    $stmt->bindParam(':telefone_empresa', $telefone_empresa);

    // Executar a consulta
    if ($stmt->execute()) {
        $id = $pdo->lastInsertId();

        // Salvar dados na sessão
        $_SESSION['id'] = $id;
        $_SESSION['nome_empresa'] = $nome_empresa;
        $_SESSION['email_empresa'] = $email_empresa;
        
        // 🟢 SUCESSO: Redireciona o usuário para a página de perfil
        header('Location: perfilempresa.php'); 
        exit();

    } else {
        // 🔴 FALHA NA EXECUÇÃO: Tenta pegar o erro e redireciona de volta
        $errorInfo = $stmt->errorInfo();
        // Se for erro de duplicidade (geralmente e-mail ou cnpj), infocnpje.
        if ($errorInfo[1] == 1062) { // Código de erro MySQL para chave duplicada
             $_SESSION['erro_cadastro'] = 'E-mail ou cnpj já cadastrado. Tente outro.';
        } else {
             $_SESSION['erro_cadastro'] = 'Erro ao inserir no banco de dados. Tente novamente.';
        }
        header('Location: cadastroempresa.php?status=failed'); 
        exit();
    }
} catch (PDOException $e) {
    // 🔴 ERRO DE CONEXÃO/PDO
    $_SESSION['erro_cadastro'] = 'Erro grave de conexão com o banco de dados. Tente mais tarde.';
    header('Location: cadastroempresa.php?status=error');
    exit();
} 
// REMOVIDO: O código final que retornava JSON.
?>