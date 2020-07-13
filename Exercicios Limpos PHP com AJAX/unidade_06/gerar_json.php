<?php
  // config gerais
  // qualquer dominio conseguirar consultar esse arquivo gerado
  header('Access-Control-Allow-Origin:*');

  // open connection
  $conecta = mysqli_connect("127.0.0.1", "root","", "andes");

  $selecao = "SELECT nomeproduto, precounitario, imagempequena FROM produtos ";
  $produtos = mysqli_query ($conecta, $selecao);

  $retorno = array();

  while ($linha = mysqli_fetch_object($produtos)) {
    $retorno[] = $linha;

  }

  //print_r($retorno);

  //saída para um json
  echo json_encode($retorno);

  // close connection
  mysqli_close($conecta);
?>