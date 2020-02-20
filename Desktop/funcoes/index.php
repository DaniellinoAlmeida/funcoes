<!--<form action="#" methody="POST">
    Nome: <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>-->

<?php
    include_once("db.php");
    include_once("funcoes.php");

    //listar
    listarDados($conexao);

    //inserir
    inserirDados('Brayo', $conexao);

    //listar
    listarDados($conexao);

    //alterar
    alterarDados("Brayo", $conexao, "Jorjim");

    //listar
    listarDados($conexao);

    //inserir
    inserirDados('Jorjim', $conexao);

    //listar
    listarDados($conexao);

    //Deletar
    deletarDados("Jorjim", $conexao);

    //listar
    listarDados($conexao);
?>
