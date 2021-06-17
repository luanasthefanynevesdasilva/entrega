<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastrar devolucao</title>

      
      
</head>
<body>

<section class="menu2">
      <a href="cadastrodevolucao.php">Cadastrar</a>
      <a href=" pesquisardevolucao.php">listar</a><a href="excluirdevolucao.php">excluir</a>
       <a href="Atualizardevolucao.php">atualizar</a><br>
</section>
      <h1><a class="voltar" class="btn" href="index1.php">voltar</a><br></h1>
                <hr><br><br>  
<form id="cadcliente" method="post"  class="Formulario" action="processadevolucao.php">


                    avaria<br>
                    <input type="text" name="avaria" class="campo" maxlength="40" required autofocus><br>
                    idaluguel<br>
                    <input type="text" name="idaluguel" class="campo" maxlength="40" required autofocus><br>
    				data-devolucao<br>
                    <input type="date" name="datadevolucao" class="campo" maxlength="40" required autofocus><br>
                    combustiveldevolucao<br>
                    <input type="text" name="combustiveldevolucao" class="campo" maxlength="40" required autofocus><br>
                    extra<br>
                    <input type="text" name="extra" class="campo" maxlength="40" required autofocus><br>

                    <input type="submit" value="salvar" class="btn">
                    <input type="reset" value="limpar" class="btn">

                    <br><br>
        </form>


<footer>

</footer>
</body>
</html>

