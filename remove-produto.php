<?php
     include("banco-produtos.php");
     include("conecta.php");


$id = $_POST['id'];

removeProduto($conexao, $id);
header("Location: lista-produto.php?removido=true");
die();
