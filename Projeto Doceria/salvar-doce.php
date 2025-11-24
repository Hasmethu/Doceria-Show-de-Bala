<?php
    switch($_REQUEST['acao']){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $preco = $_POST["preco"];

            $sql = "INSERT INTO doces (nome, preco) VALUE ('{$nome}', '{$preco}')";

            $res = $conn->query($sql);
            break;
        case 'editar':
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];

    $sql = "UPDATE doces SET nome='{$nome}', preco='{$preco}' WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);
    if($res==true){
        print "<script>alert('Editado com sucesso!');</script>";
        print "<script>location.href='?page=listar';</script>";
    }else{
        print "<script>alert('Não foi possível editar, tente novamente!');</script>";
        print "<script>location.href='?page=listar';</script>";
    }
break;

            break;
        case 'excluir':

            $sql = "DELETE FROM doces WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);
    if($res==true){
        print "<script>alert('Excluido com sucesso!');</script>";
        print "<script>location.href='?page=listar';</script>";
    }else{
        print "<script>alert('Não foi possível excluir, tente novamente!');</script>";
        print "<script>location.href='?page=listar';</script>";
    }
            break;
        default:
            break;
    }
        if($res==true){
            print "<script>alert('Novo doce Cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Não foi possível cadastrar, tente novamente!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }

?>