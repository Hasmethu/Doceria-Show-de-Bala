<h1>Cadastre o novo doce</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome do doce</label>
        <br>
        <input type="text" name="nome" class="form=control">
    </div>
    <div class="mb-3">
        <label>Preço</label>
        <br>
        <input type="text" name="preco" class="form=control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>