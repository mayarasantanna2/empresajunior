<?php
   session_start();    
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    include_once 'conexao.php';
    $cnpj_com_mascara = $_POST['cnpj'] ?? '';
    $cnpj = preg_replace('/[^0-9]/', '', $cnpj_com_mascara);
    $senha_digitada = trim($_POST['senha_empresa'] ?? ''); 
    
    $consulta = "SELECT id_empresa, nome_empresa, cnpj, senha_empresa FROM empresa WHERE trim(cnpj) = :cnpj";    
    
    $stmt = $pdo->prepare($consulta)?? '';
    
    $stmt->bindParam(':cnpj', $cnpj)?? '';
    
    // Executa a consulta
    $stmt->execute();
    
    // Obtém o resultado
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    // ----- INÍCIO DO DEBUG -----
    if (empty($cnpj) || empty($senha_digitada)) {
        echo "ERRO FATAL: Cnpj ou Senha VAZIOS. Verifique o 'name' do formulário HTML.";
    }

    echo "1. E-mail recebido: " . $cnpj . "<br>";
    if ($stmt->rowCount() == 0) {
        echo "2. USUÁRIO NÃO ENCONTRADO no banco de dados. O e-mail está errado ou não existe.";
    } else {
        $hash_do_banco = $resultado['senha_empresa'];
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
        $hash_do_banco = $resultado['senha_empresa'];

        if (password_verify($senha_digitada, $hash_do_banco)) {
            
            
            $_SESSION['id'] = $resultado['id_empresa'];
            $_SESSION['nome'] = $resultado['nome_empresa'];
            $_SESSION['email'] = $resultado['cnpj'];

            header('Location: restritaempresa.php');
            exit(); 
        }
    } 
    
     //$_SESSION['login_error'] = 'E-mail ou senha incorretos.';
    //header('Location: index.html');
    //exit();
?>