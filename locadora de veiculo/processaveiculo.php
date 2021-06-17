<?php
include_once("conexao.php");

$ano = $_POST['ano'];
$cor = $_POST['cor'];
$modelo = $_POST['modelo'];
$tipoveiculo = $_POST['tipoveiculo'];
$placa = $_POST['placa'];
$idseguro = $_POST['idseguro'];
$chassin = $_POST['chassin'];

$sql="insert into veiculo (chassin,idseguro,placa,tipoveiculo,modelo,cor,ano) values ('$chassin','$idseguro','$placa','$tipoveiculo','$modelo','$cor','$ano')";
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
    <title>Cadastrar Veiculo</title>

      
      
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