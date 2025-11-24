<?php
require 'conexao.php';
$id = $_POST['id'];

  $sql = "DELETE FROM empresa WHERE id_empresa = :id_empresa";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id_empresa', $id);

    if ($stmt->execute()) {
        echo "Perfil da Empresa excluído com sucesso!";
    } else {
        echo "Erro ao excluir Perfil.";
    }
?>