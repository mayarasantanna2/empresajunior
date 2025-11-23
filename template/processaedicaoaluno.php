<?php
// processa_edicao_aluno.php

session_start();
require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // 1. Colete os dados do POST
    $id_aluno = $_POST['id_aluno'];
    $novo_nome = $_POST['novo_nome'];
    $nova_senha = $_POST['nova_senha']; // ⚠️ ATENÇÃO: Tratar a senha no item 2!
    $novo_curso = $_POST['novo_curso'];
    $novo_RM = $_POST['novo_RM'];
    $novo_telefone = $_POST['novo_telefone'];
    $nova_descricao = $_POST['nova_descricao'];
    $novas_habilidades = $_POST['novas_habilidades'];
    $novo_email = $_POST['novo_email'];
    $nova_datanasc = $_POST['nova_datanasc']; 

    // 2. TRATAMENTO DE SENHA (MUITO IMPORTANTE!)
    // Você só deve atualizar a senha se o usuário digitou uma nova.
    // E nunca salve a senha sem criptografia (hash) (ex: password_hash).
    $sql_senha_parte = "";
    if (!empty($nova_senha)) {
        // Use password_hash para criptografar a senha antes de salvar
        $hash_senha = password_hash($nova_senha, PASSWORD_DEFAULT);
        $sql_senha_parte = ", senha_aluno = :nova_senha";
    }

    // 3. Monte o SQL de Update
    $sql = "UPDATE aluno
            SET nome_aluno = :novo_nome,
                curso = :novo_curso,
                datanasc = :nova_datanasc,
                RM = :novo_RM,
                telefone_aluno = :novo_telefone,
                descricao = :nova_descricao,
                habilidades = :novas_habilidades,
                email_aluno = :novo_email
                $sql_senha_parte
            WHERE id_aluno = :id_aluno";

    $stmt = $pdo->prepare($sql);

    // 4. Bind dos Parâmetros
    $stmt->bindParam(':id_aluno', $id_aluno);
    $stmt->bindParam(':novo_nome', $novo_nome);
    $stmt->bindParam(':novo_curso', $novo_curso);
    $stmt->bindParam(':nova_datanasc', $nova_datanasc);
    $stmt->bindParam(':novo_RM', $novo_RM);
    $stmt->bindParam(':novo_telefone', $novo_telefone);
    $stmt->bindParam(':nova_descricao', $nova_descricao);
    $stmt->bindParam(':novas_habilidades', $novas_habilidades);
    $stmt->bindParam(':novo_email', $novo_email);
    
    // Bind condicional para a nova senha
    if (!empty($nova_senha)) {
        $stmt->bindParam(':nova_senha', $hash_senha);
    }

    // 5. Execute e Redirecione
    if ($stmt->execute()) {
        // Redireciona para a página principal com uma mensagem de sucesso
        header("Location: perfilaluno.php?status=sucesso");
        exit;
    } else {
        // Redireciona com uma mensagem de erro
        header("Location: perfilaluno.php?status=erro");
        exit;
    }
} else {
    // Se não for um POST, redireciona para evitar acesso direto
    header("Location: perfilaluno.php");
    exit;
}
?>