<?php
include 'resources/head.php';//chamo o cabeçalho da pagina salvo na pasta resources;
?>
<div class="container">
 <nav class="orange ">
    <div class="nav-wrapper col s12">
      <form method="POST" action="pesquisar.php">
        <div class="input-field">
          <input id="search" type="search" name="pesquisar" placeholder="digite o nome da sua rua." required>
          <label class="label-icon active" for="pesquisar"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
</div>
</div>
</center>
</div>
<div class="container">
        <table class="striped">
            <thead>
                <tr>
                    <th>Código: </th>
                    <th>Nome: </th>
                    <th>Preço: </th>
                    <th>Quantidade: </th>
                    <th>Custo: </th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once 'read.php';
                ?>
            </tbody>
        </table>
</div>
<?php
include 'resources/footer.php';//Faço a chamada do footer salvo na pasta resource.
?>
