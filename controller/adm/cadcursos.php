<?php
include_once("../dao/manipuladados.php");

if(isset($_FILES['arquivo'])) {
    $caminhoTemporario = $_FILES['arquivo']['tmp_name'];
    $caminhoDefinitivo = 'adm/imgPersonagem/' . $_FILES['arquivo']['name'];
    move_uploaded_file($caminhoTemporario, $caminhoDefinitivo);

    // Obter o caminho absoluto do arquivo
    $caminhoAbsoluto = realpath($caminhoDefinitivo);

    $nomecurso = $_POST["txtNome"];
    $descricao = $_POST["txtDesc"];
    $duracao = $_POST["txtDuracao"];
    echo "Nome: " . $nomecurso . "<br/>Descrição: " . $descricao . "<br/>Duração: " . $duracao . "<br/>Caminho absoluto do arquivo: " . $caminhoAbsoluto;

    $manipula = new manipuladados();
    $manipula->setTable("tb_personagen");
    $manipula->setFields("nome,descricao,duracao,url");
    $manipula->setDados("'$nomecurso','$descricao','$duracao', '$caminhoDefinitivo'");
    $manipula->insert();
    echo $manipula->getStatus();
    $status = $manipula->getStatus();

    if ($status == "Cadastro com Sucesso!!!") {
        echo '<script>alert("Personagem cadastrado com sucesso!");</script>';
        header("Location: principal.php?");
        exit();

    } else {
        echo '<script>alert("Erro ao Cadstrar personagem");</script>';
    }
} else {
    echo "deu ruim";
}
?>
