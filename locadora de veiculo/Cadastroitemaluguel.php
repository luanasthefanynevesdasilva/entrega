<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastrar item aluguel</title>

      
      
</head>
<body>

<section class="menu2">
      <a href="cadastroitemaluguel.php">Cadastrar</a>
      <a href=" pesquisaritemaluguel.php">listar</a><a href="excluiritemaluguel.php">excluir</a>
       <a href="Atualizaritemaluguel.php">atualizar</a><br>
</section>
      <h1><a class="voltar" class="btn" href="index1.php">voltar</a><br></h1>

                <hr><br><br>  
<form id="cadcliente" method="post"  class="Formulario" action="processaitemaluguel.php">


                    idaluguel<br>
                    <input type="text" name="idaluguel" class="campo" maxlength="40" required autofocus><br>
                    idveiculo<br>
                    <input type="text" name="idveiculo" class="campo" maxlength="40" required autofocus><br>


                    <input type="submit" value="salvar" class="btn">
                    <input type="reset" value="limpar" class="btn">

                    <br><br>
        </form>


<footer>

</footer>
</body>
</html>

