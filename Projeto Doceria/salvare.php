<?php
switch($_REQUEST["acao"]){

    case "cadastrar-encomenda":
        $nome = $_POST["nome_cliente"];
        $doce = $_POST["doce_id"];
        $endereco = $_POST["endereco"];

        $sql = "INSERT INTO encomendas (nome_cliente, doce_id, endereco)
                VALUES ('{$nome}', {$doce}, '{$endereco}')";

        $res = $conn->query($sql);

        if($res){
            print "<script>alert('Encomenda cadastrada com sucesso!');</script>";
            print "<script>location.href='?page=listare';</script>";
        } else {
            print "<script>alert('Erro ao cadastrar encomenda!');</script>";
        }
    break;

    case "excluir-encomenda":
        $sql = "DELETE FROM encomendas WHERE id=".$_REQUEST["id"];
        $res = $conn->query($sql);

        if($res){
            print "<script>alert('Encomenda excluída!');</script>";
        }
        print "<script>location.href='?page=listare';</script>";
    break;
}
?>
