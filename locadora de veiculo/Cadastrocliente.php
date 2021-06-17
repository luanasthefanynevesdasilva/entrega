<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastrar Cliente</title>

      
      
</head>
<body>


<section class="menu2">
      <a href="Cadastrocliente.php">Cadastrar</a>
      <a href=" pesquisarcliente.php">listar</a><a href="excluircliente.php">excluir</a>
      <a href="Atualizarcliente.php">atualizar</a><br>
</section>
      <h1><a class="voltar" class="btn" href="index1.php">voltar</a><br></h1>
                <hr><br><br>  
<form id="cadcliente" method="post"  class="Formulario" action="processa.php">
                    

                    Nome<br>
                    <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
                    endereco<br>
                    <input type="text" name="endereco" class="campo" maxlength="40" required autofocus><br>
    				telefone<br>
                    <input type="text" name="telefone" class="campo" maxlength="40" required autofocus><br>
                    email<br>
                    <input type="text" name="email" class="campo" maxlength="40" required autofocus><br>

                    <input type="submit" value="salvar" class="btn"><br>
                    <input type="reset" value="limpar" class="btn">

                    <br><br>
        </form>


<footer>

</footer>
</body>
</html>

