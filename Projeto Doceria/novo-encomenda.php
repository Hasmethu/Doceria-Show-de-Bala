<h1>Cadastrar Encomenda</h1>

<form action="?page=salvare" method="POST">
    <input type="hidden" name="acao" value="cadastrar-encomenda">

    <div class="mb-3">
        <label>Nome do Cliente</label>
        <input type="text" name="nome_cliente" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Doce</label>
        <select name="doce_id" class="form-control" required>
            <option value="">Selecione um doce...</option>
            <?php
                $sql = "SELECT * FROM doces ORDER BY nome";
                $res = $conn->query($sql);
                while($row = $res->fetch_object()){
                    echo "<option value='{$row->id}'>{$row->nome}</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Salvar Encomenda</button>
</form>
