<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastrar funcionario</title>

      
      
</head>
<body>

<section class="menu2">
          <a href="cadastrofuncionario.php">Cadastrar</a> <a href=" pesquisarfuncionario.php">lista</a><a href="excluirfuncionario.php">excluir</a>
       <a href="Atualizarfuncionario.php">atualizar</a><br>
</section>
      <h1><a class="voltar" class="btn" href="index1.php">voltar</a><br></h1>
                <hr><br><br>  
<form id="cadcliente" method="post"  class="Formulario" action="processafuncionario.php">


                    Nome<br>
                    <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
                    cpf<br>
                    <input type="text" name="cpf" class="campo" maxlength="40" required autofocus><br>


                    <input type="submit" value="salvar" class="btn">
                    <input type="reset" value="limpar" class="btn">

                    <br><br>
        </form>


<footer>

</footer>
</body>
</html>

