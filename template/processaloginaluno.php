<?php
   session_start();    
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    include_once 'conexao.php';
    
    $email_aluno = $_POST['email_aluno'] ?? '';
    $senha_digitada = trim($_POST['senha_aluno'] ?? ''); 
    
    $consulta = "SELECT id_aluno, nome_aluno, email_aluno, senha_aluno FROM aluno WHERE email_aluno = :email";    
    
    $stmt = $pdo->prepare($consulta)?? '';
    
    $stmt->bindParam(':email', $email_aluno)?? '';
    
    // Executa a consulta
    $stmt->execute();
    
    // Obtém o resultado
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    // ----- INÍCIO DO DEBUG -----
    if (empty($email_aluno) || empty($senha_digitada)) {
        echo "ERRO FATAL: E-mail ou Senha VAZIOS. Verifique o 'name' do formulário HTML.";
    }

    echo "1. E-mail recebido: " . $email_aluno . "<br>";
    if ($stmt->rowCount() == 0) {
        echo "2. USUÁRIO NÃO ENCONTRADO no banco de dados. O e-mail está errado ou não existe.";
    } else {
        $hash_do_banco = $resultado['senha_aluno'];
        echo "2. Hash do Banco: " . $hash_do_banco . "<br>";
        
        if (password_verify($senha_digitada, $hash_do_banco)) {
            echo "3. SUCESSO: password_verify retornou TRUE.";
        } else {
            echo "3. FALHA: password_verify retornou FALSE. Senha incorreta ou hash inválido.";
        }
    }
    echo "<hr>";
    // 6. Bloco de verificação de sucesso
    if ($resultado) {
        $hash_do_banco = $resultado['senha_aluno'];

        if (password_verify($senha_digitada, $hash_do_banco)) {
            
            
            $_SESSION['id'] = $resultado['id_aluno'];
            $_SESSION['nome'] = $resultado['nome_aluno'];
            $_SESSION['email'] = $resultado['email_aluno'];

            header('Location: restritaaluno.php');
            exit(); 
        }
    } 
    
     //$_SESSION['login_error'] = 'E-mail ou senha incorretos.';
    //header('Location: index.html');
    //exit();
?>