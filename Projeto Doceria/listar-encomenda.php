<h1>Lista de Encomendas</h1>

<?php
$sql = "SELECT encomendas.*, doces.nome AS doce_nome
        FROM encomendas
        JOIN doces ON doces.id = encomendas.doce_id";

$res = $conn->query($sql);
$qtd = $res->num_rows;

if($qtd > 0){
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>ID</th>";
    print "<th>Cliente</th>";
    print "<th>Doce</th>";
    print "<th>Endereço</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>{$row->id}</td>";
        print "<td>{$row->nome_cliente}</td>";
        print "<td>{$row->doce_nome}</td>";
        print "<td>{$row->endereco}</td>";
        print "<td>
                <button class='btn btn-danger'
                onclick=\"if(confirm('Excluir?')){location.href='?page=salvare&acao=excluir-encomenda&id={$row->id}'}\">
                Excluir</button>
               </td>";
        print "</tr>";
    }

    print "</table>";
} else {
    print "<p class='alert alert-danger'>Nenhuma encomenda encontrada</p>";
}
?>
