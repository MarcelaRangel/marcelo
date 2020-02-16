<?php
include 'resources/head.php';//chamo o cabeçalho da pagina salvo na pasta resources;
?>
<div class="container">

 <nav class="orange ">
    <div class="nav-wrapper col s12">
      <form method="POST" action="pesquisar.php">
        <div class="input-field">
          <input id="search" type="search" name="pesquisar" placeholder="digite o código ou nome do produto." required>
          <label class="label-icon active" for="pesquisar"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>

<?php
	$servidor="localhost";
	$usuario="root";
	$senha="";
	$dbname="controle";
	
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$pesquisa = $_POST['pesquisar'];
	if($pesquisa==null){
		header("location: busca.php");
	}else{
	$result_pesquisa = "SELECT * FROM produto WHERE codproduto LIKE '%$pesquisa%' OR nome LIKE '$pesquisa%' LIMIT 100";
	$resultado_pesquisa = mysqli_query($conn, $result_pesquisa);
?>
    <table>
            <thead>
                <tr>
                    <th>Código: </th>
                    <th>Nome: </th>
                    <th>Preço: </th>
					<th>Quantidade: </th>
					<th>Custo: </th>
                </tr>
<?php
	while($row_produtos = mysqli_fetch_array($resultado_pesquisa)){
		$row_produtos['codproduto']; $row_produtos['nome']; $row_produtos['preco']; $row_produtos['qntd']; $row_produtos['custo'];
		$codproduto = $row_produtos['codproduto'];
		$nome = $row_produtos['nome'];
		$preco = $row_produtos['preco'];
		$qntd = $row_produtos['qntd'];
		$custo = $row_produtos['custo'];
?>
				<tbody>
				<?php echo "<td>$codproduto</td>"; ?>
				<?php echo "<td>$nome</td>"; ?>
				<?php echo "<td>$preco</td>"; ?>
				<?php echo "<td>$qntd</td>"; ?>
				<?php echo "<td>$custo</td>"; ?>
				</tbody>
<?php	
			}
		}
?>
            </thead>
    </table>
</div>
<?php
include 'resources/footer.php';//Faço a chamada do footer salvo na pasta resource.
?>
