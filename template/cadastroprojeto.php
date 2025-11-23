<?php
session_start();
require 'conexao.php';

if (!isset($_SESSION['id_empresa'])) {
    die("Empresa não identificada.");
}

$id_empresa = $_SESSION['id_empresa'];

$nome_projeto = $_POST['nome_projeto'];
$descricao_do_projeto = $_POST['descricao_do_projeto'];
$requisitos_necessarios = $_POST['requisitos_necessarios'];
$data_limite = $_POST['data_limite'];
$qt_horas = $_POST['qt_horas'];

$sql = "INSERT INTO projeto 
(nome_projeto, descricao_do_projeto, requisitos_necessarios, data_limite, qt_horas, id_empresa) 
VALUES 
(:nome_projeto, :descricao_do_projeto, :requisitos_necessarios, :data_limite, :qt_horas, :id_empresa)";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nome_projeto', $nome_projeto);
$stmt->bindParam(':descricao_do_projeto', $descricao_do_projeto);
$stmt->bindParam(':requisitos_necessarios', $requisitos_necessarios);
$stmt->bindParam(':data_limite', $data_limite);
$stmt->bindParam(':qt_horas', $qt_horas);
$stmt->bindParam(':id_empresa', $id_empresa);

$stmt->execute();
header("Location: index.php");
exit;