<?php
include_once("conexao.php");

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];


$sql="insert into usuario (nome,telefone,endereco,email) values ('$nome','$telefone','$email','$endereco')";
$salvar = mysqli_query($conexao,$sql);

$linhas=mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastrar Cliente</title>

      
      
</head>
<body>
<header>
    <nav class="Menu">
        <ul>
            <a href="Index1.php"><li>inicio</li></a>
            <a href="Cadastrocliente.php"><li> Cliente</li></a>
            <a href="cadastrofuncionario.php"><li>funcionario</li></a>
            <a href="cadastroseguro.php"><li>seguro</li></a>
            <a href="cadastroveiculo.php"><li>veiculo</li></a>
            <a href="cadastroaluguel.php"><li>aluguel</li></a>
            <a href="cadastrodevolucao.php"><li>devolucao</li></a>
            <a href="cadastroitemaluguel.php"><li>itemaluguel</li></a>
        </ul>
    </nav>
</header>

<section class="menu2">
      <a href="Cadastrocliente.php">Cadastrar</a>
      <a href=" pesquisarcliente.php">listar</a><a href="excluircliente.php">excluir</a>
       <a href="Atualizarcliente.php">atualizar</a><br>
</section>
            <section>
                <h1>Confirmacao de Cadastro</h1>
                <hr><br><br>  
                
                <?php
                if($linhas == 1){
                    print"Cadastro efetuado com sucesso!";
    
                }else{
                    print"Cadastro Não efetuado.<br>Já existe um usuário com este email!";
                }
            
                
                
                ?>
            </section>
        </div>
</body>
</html>