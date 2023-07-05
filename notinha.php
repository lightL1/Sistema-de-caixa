<?php

//mesma pasta
$dir = "";

// glob() - Retorna um array contendo todos os arquivos (*) com extensão .txt do diretorio indicado
$array = glob($dir."*.txt");

// se for um array e não vazio
if (is_array($array) && !empty($array)) {
  $numeros = [];
  foreach ($array as $val) {
    //cria um array somente com a parte numérica dos nomes dos arquivos
    $numeros[] = preg_replace("/[^0-9]/", "", $val);
  }

  // max() recupera o maior valor do array $numeros
  // cria o numero do próximo nome do arquivo de texto
  $numArquivo = max($numeros);

}

//cria o nome do arquivo de texto
$filename = "notinha".($numArquivo).".txt";

if (isset($_POST['login']) && isset($_POST['senha'])) {

  // cria conteudo para escrever no arquivo de texto
  $textoPublicar = "produto: ".$_POST['login']." valor: ".$_POST['senha'];

  //cria o arquivo e grava
  $arquivo = fopen($dir.$filename, 'w');
  fwrite($arquivo, $textoPublicar);
  fclose($arquivo);

}

?>
<!--#css aqui -->
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <title></title>
  
</head>
<link rel="stylesheet" href="style.css" type="text/css" media="all" />
<body>
 
<form method="post">
  <span style="font-family:lucida sans unicode,lucida grande,sans-serif">produto:</span>
  <input type="text" name="login" style="height: 40px">
</span>valor:</span>
<input type="text" name="senha" style="height: 40px"><br></font>
<button style="width:90px, height:40px">Enviar</button></center>
</form>
<a href="notinha.txt">notinha</a>
 
</body>
</html>