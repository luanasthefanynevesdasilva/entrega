<?php
include_once("conexao.php");

$idaluguel = $_POST['idaluguel'];
$idveiculo = $_POST['idveiculo'];


$sql="insert into itemaluguel (idaluguel,idveiculo) values ('$idveiculo','$idaluguel')";
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
    <title>Cadastrar itemaluguel</title>

      
      
</head>
<body>

<section class="menu2">
      <a href="cadastroitemaluguel.php">Cadastrar</a>
      <a href=" pesquisaritemaluguel.php">listar</a><a href="excluiritemaluguel.php">excluir</a>
       <a href="Atualizaritemaluguel.php">atualizar</a><br>
</section>
            <section>
                <h1>Confirmacao de Cadastro</h1>
                <hr><br><br>  
                    <h1><a class="voltar" class="btn" href="index1.php">voltar</a><br></h1>
  
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