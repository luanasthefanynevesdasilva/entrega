<?php
include_once("conexao.php");






?>
<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastrar aluguel</title>

      
      
</head>
<body>

<section class="menu2">
      <a href="Cadastroaluguel.php">Cadastrar</a>
      <a href="pesquisaluguel.php">listar</a><a href="excluiraluguel.php">excluir</a>
       <a href="Atualizaraluguel.php">atualizar</a><br>
</section>
      <h1><a class="voltar" class="btn" href="index1.php">voltar</a><br></h1>
                <hr><br><br>  
<form id="cadcliente" method="post"  class="Formulario" action="processaaluguel.php">


                    datalocacao<br>
                    <input type="date" name="datalocacao" class="campo" maxlength="40" required autofocus><br>
                    idfuncionario<br>
                    <input type="text" name="idfuncionario" class="campo" maxlength="40" required autofocus><br>
    				combustivelatual<br>
                    <input type="text" name="combustivelatual" class="campo" maxlength="40" required autofocus><br>
                    desconto<br>
                    <input type="text" name="desconto" class="campo" maxlength="40" required autofocus><br>
                    troco<br>
                    <input type="text" name="troco" class="campo" maxlength="40" required autofocus><br>
                    total<br>
                    <input type="text" name="total" class="campo" maxlength="40" required autofocus><br>
                    pago<br>
                    <input type="text" name="pago" class="campo" maxlength="40" required autofocus><br>
                    diaria<br>
                    <input type="text" name="diaria" class="campo" maxlength="40" required autofocus><br>
                    idusuario<br>
                    <input type="text" name="idusuario" class="campo" maxlength="40" required autofocus><br>

                    <input type="submit" value="salvar" class="btn">
                    <input type="reset" value="limpar" class="btn">

                    <br><br>
        </form>


<footer>

</footer>
</body>
</html>

