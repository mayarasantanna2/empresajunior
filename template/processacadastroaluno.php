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
    $nome = $_POST['nome_aluno'] ?? '';
    $email = $_POST['email_aluno'] ?? '';
    $senhabruta =$_POST['senha_aluno'] ?? '';
    $senha =trim($senhabruta);
    $confsenha_aluno = $_POST['confsenha_aluno'] ?? '';
    $RM = $_POST['RM'] ?? '';
    $datanasc = $_POST['datanasc'] ?? '';
    $descricao = $_POST['descricao'] ?? '';
    $curso = $_POST['curso'] ?? '';
    $habilidades = $_POST['habilidades'] ?? '';
    $telefone_aluno = $_POST['telefone_aluno'] ?? '';
    
    // ⚠️ Validação de Senhas (redundante, mas bom manter no backend)
    if ($senha !== $confsenha_aluno) {
        $_SESSION['erro_cadastro'] = 'As senhas fornecidas não coincidem.';
        header('Location: cadastro.php?error=senhas_diferentes');
        exit();
    }
    
    // Criptografia da senha
   $senhaHash = password_hash($senha, PASSWORD_DEFAULT); 
   
    $insercao = "INSERT INTO `aluno` (`nome_aluno`, `email_aluno`, `senha_aluno`, `RM`, `datanasc`, `descricao`, `curso`, `habilidades`, `telefone_aluno`) 
    VALUES (:nome_aluno, :email_aluno, :senha_aluno, :RM, :datanasc, :descricao, :curso, :habilidades, :telefone_aluno)";

    $stmt = $pdo->prepare($insercao);
    
    // Vincular os parâmetros
    $stmt->bindParam(':nome_aluno', $nome);
    $stmt->bindParam(':email_aluno', $email);
    $stmt->bindParam(':senha_aluno', $senhaHash);
    $stmt->bindParam(':RM', $RM);
    $stmt->bindParam(':datanasc', $datanasc);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':curso', $curso);
    $stmt->bindParam(':habilidades', $habilidades);
    $stmt->bindParam(':telefone_aluno', $telefone_aluno);

    // Executar a consulta
    if ($stmt->execute()) {
        $id_aluno = $pdo->lastInsertId();

        // Salvar dados na sessão
        $_SESSION['id_aluno'] = $id_aluno;
        $_SESSION['nome_aluno'] = $nome;
        $_SESSION['email_aluno'] = $email;
        
        // 🟢 SUCESSO: Redireciona o usuário para a página de perfil
        header('Location: perfilaluno.php'); 
        exit();

    } else {
        // 🔴 FALHA NA EXECUÇÃO: Tenta pegar o erro e redireciona de volta
        $errorInfo = $stmt->errorInfo();
        // Se for erro de duplicidade (geralmente e-mail ou RM), informe.
        if ($errorInfo[1] == 1062) { // Código de erro MySQL para chave duplicada
             $_SESSION['erro_cadastro'] = 'E-mail ou RM já cadastrado. Tente outro.';
        } else {
             $_SESSION['erro_cadastro'] = 'Erro ao inserir no banco de dados. Tente novamente.';
        }
        header('Location: cadastro.php?status=failed'); 
        exit();
    }
} catch (PDOException $e) {
    // 🔴 ERRO DE CONEXÃO/PDO
    $_SESSION['erro_cadastro'] = 'Erro grave de conexão com o banco de dados. Tente mais tarde.';
    header('Location: cadastro.php?status=error');
    exit();
} 
// REMOVIDO: O código final que retornava JSON.
?>