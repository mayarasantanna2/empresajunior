<?php
session_start();
require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // 1. Coleta e Limpeza dos dados
    $id_empresa = $_POST['id_empresa'];
    $novo_nome = $_POST['novo_nome'];
    $novo_telefone = $_POST['novo_telefone']; 
    $novo_email = $_POST['novo_email'];
    $nova_senha = $_POST['nova_senha'];
    $novo_CNPJ = $_POST['novo_CNPJ'];
    $nova_area_de_atuacao = $_POST['nova_area_de_atuacao'];
    $nova_descricao_institucional = $_POST['nova_descricao_institucional'];
    $novo_ano_de_fundacao = $_POST['novo_ano_de_fundacao'];

    // 2. TRATAMENTO DE SENHA (Apenas atualiza se não estiver vazia e usando hash)
    $sql_senha_parte = "";
    if (!empty($nova_senha)) {
        // ⚠️ ALTAMENTE RECOMENDADO: Use password_hash para criptografar
        $hash_senha = password_hash($nova_senha, PASSWORD_DEFAULT);
        $sql_senha_parte = ", senha_empresa = :hash_senha";
    }

    // 3. Monta o SQL de Update
    $sql = "UPDATE empresa
            SET nome_empresa = :novo_nome,
                telefone_empresa = :novo_telefone,
                email_empresa = :novo_email,
                CNPJ = :novo_CNPJ,
                area_de_atuacao = :nova_area_de_atuacao,
                descricao_institucional = :nova_descricao_institucional,
                ano_de_fundacao = :novo_ano_de_fundacao
                $sql_senha_parte
            WHERE id_empresa = :id_empresa";

    $stmt = $pdo->prepare($sql);

    // 4. Bind dos Parâmetros
    $stmt->bindParam(':id_empresa', $id_empresa);
    $stmt->bindParam(':novo_nome', $novo_nome);
    $stmt->bindParam(':novo_telefone', $novo_telefone);
    $stmt->bindParam(':novo_email', $novo_email);
    $stmt->bindParam(':novo_CNPJ', $novo_CNPJ);
    $stmt->bindParam(':nova_area_de_atuacao', $nova_area_de_atuacao);
    $stmt->bindParam(':nova_descricao_institucional', $nova_descricao_institucional);
    $stmt->bindParam(':novo_ano_de_fundacao', $novo_ano_de_fundacao);

    // Bind condicional para a nova senha
    if (!empty($nova_senha)) {
        $stmt->bindParam(':hash_senha', $hash_senha); // Usa o hash aqui
    }

    // 5. Execução e Redirecionamento
    try {
        if ($stmt->execute()) {
            // Redireciona para a página de perfil da empresa com sucesso
            header("Location: perfilempresa.php?status=sucesso");
            exit;
        } else {
            // Redireciona com erro
            header("Location: perfilempresa.php?status=erro");
            exit;
        }
    } catch (PDOException $e) {
        // Redireciona com erro e loga o problema em ambiente real
        error_log("Erro de UPDATE: " . $e->getMessage());
        header("Location: perfilempresa.php?status=erro_bd");
        exit;
    }
} else {
    // Acesso direto ao arquivo
    header("Location: index.php");
    exit;
}
?>