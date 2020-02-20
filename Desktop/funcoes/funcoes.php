<meta charset="utf-8">

<?php

    function inserirDados($nome, $conexao){
        $insert = "insert into tb_simples values (null, '$nome')";
        $res = mysqli_query($conexao, $insert);
    };

    function listarDados($conexao){
        $listar = "select * from tb_simples";
        $result = mysqli_query($conexao, $listar);

        while($dados = mysqli_fetch_array($result)){
            echo $dados['nm_simples']."<br>";
        }
    };

    function alterarDados($nome, $conexao, $nmnovo){
        $alterar = "update tb_simples set nm_simples = '$nmnovo' where nm_simples = '$nome'";
        $alterarRes = mysqli_query($conexao, $alterar);
    };

    function deletarDados($nome, $conexao){
        $deletar = "delete from tb_simples where nm_simples = '$nome'";
        $resdell = mysqli_query($conexao, $deletar);
    }