
<?php include("conecta.php");

function listaProdutos($conexao){
  $produtos = array();
  $resultado = mysqli_query($conexao, "select * from produtos");

    while($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
      }
      return $produtos;
}

 function salvaProduto ($conexao, $nome, $preco, $descricao){
     $sqlquery = "insert into produtos (nome, preco, descricao) values ('{$nome}',{$preco}, '{$descricao}')";
     return mysqli_query($conexao, $sqlquery);
 }

function removeProduto($conexao, $id){
  $sqlquery = "delete from produtos where id = {$id}";
  return mysqli_query($conexao, $sqlquery );
}
