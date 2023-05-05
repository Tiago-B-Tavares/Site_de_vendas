<?php
include_once("../dao/manipuladados.php");
$id = $_POST["id"];
$nomecurso = $_POST["txtNome"];
$descricao = $_POST["txtDesc"];
$duracao = $_POST["txtDuracao"];

$manipula = new manipuladados();

$manipula->setTable("tb_personagen");
$manipula->setFieldId('id');
$manipula->setFields("nome='$nomecurso', descricao='$descricao', duracao='$duracao'");
$manipula->setValueId($id);

$manipula->update();

$status = $manipula->getStatus();

?>