<?php
include_once("conexao.php");

$valor = $_POST['valor'];
$datainicio = $_POST['datainicio'];
$datafinal = $_POST['datafinal'];



$sql="insert into seguro (datafinal,datainicio,valor) values ('$datafinal','$datainicio','$valor')";
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
    <title>Cadastrar seguro</title>

      
      
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