<h1>Editar</h1>
<?php
    $sql = "SELECT * FROM doces WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <br>
        <input type="text" name="nome" value="<?php print $row->nome;?>" class="form=control">
    </div>
    <div class="mb-3">
        <label>Preço</label>
        <br>
        <input type="text" name="preco" value="<?php print $row->preco;?>" class="form=control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>