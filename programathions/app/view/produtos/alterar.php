<form method="post" action="produto.php?action=alterar">
    <input type="hidden" name="id" value="<?= $produto->getId() ?>">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value="<?= $produto->getNome() ?>">
    <br>
    <label for="descricao">Decrição</label>
    <textarea name="descricao" id="descricao" cols="30" rows="10"><?= $produto->getDescricao() ?></textarea>
    <br>
    <input type="submit" name="gravar" value="Gravar">
    <label for="preco">Preço</label>
    <input type="text" name="nome" id="nome" value="<?= $produto->getPreco() ?>">
    <br>
</form>