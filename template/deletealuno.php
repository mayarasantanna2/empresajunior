<?php 
require 'conexao.php';
$id = $_POST['id'];

  $sql = "DELETE FROM aluno WHERE id_aluno = :id_aluno";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id_aluno', $id);

    if ($stmt->execute()) {
        echo "Perfil do aluno excluído com sucesso!";
    } else {
        echo "Erro ao excluir Perfil.";
    }
?>