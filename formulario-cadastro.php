<?php include("cabecalho.php")  ?>

<form action="adiciona-produto.php" method="post">
	<table class="table">
            <tr>
                <td>Nome</td>
                <td><input type="text" class="form-control" name="nome" /></td>
            </tr>
            <tr>
                <td>Preço</td>
                <td><input type="number" class="form-control" name="preco" /></td>
            </tr>
						<tr>
								<td>Descricao</td>
								<td><textarea class="form-control" name="descricao"></textarea></td>
						</tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Cadastrar" class="btn btn-primary" /></td>
            </tr>
        </table>
</form>
<?php include ("rodape.php")?>
