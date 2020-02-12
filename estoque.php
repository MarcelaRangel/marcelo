<?php
session_start();
include_once("conexao.php");
<html>
<head>
    <meta charset="utf-8">
     <title>Estoque</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
     
	  
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
</head>
<body>
<?php
include 'topo.php';
?>

<h1>Estoque</h1>
<form id="estoquebusca">
<fieldset id="Produto">Buscar Produto

<div   class="row" >
<div class="col s2 center" >
Nome: <input type="text" name="tNome" id="nome" size="20" maxlength="30" required="required" placeholder="Nome do produto">
</div>

<button class="btn-floating btn-large waves-effect waves-light" type="submit" name="action"><i class="material-icons right">send</i></button>

</fieldset>

</form>
<?php
    // se o número de resultados for maior que zero, mostra os dados
    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do {
?>
            <p><?=$linha['nome']?> / <?=$linha['telefone']?></p>
<?php
        // finaliza o loop que vai mostrar os dados
        }while($linha = mysql_fetch_assoc($dados));
    // fim do if 
    }
?>
</body>
</html>