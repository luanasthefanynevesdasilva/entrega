
<?php
include_once("conexao.php");






?>
<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>atualizar devolucao</title>

      
      
</head>
<body>

<section class="menu2">
      <a href="cadastroitemaluguel.php">Cadastrar</a>
      <a href=" pesquisaritemaluguel.php">listar</a><a href="excluiritemaluguel.php">excluir</a>
       <a href="Atualizaritemaluguel.php">atualizar</a><br>
</section>
      <h1><a class="voltar" class="btn" href="index1.php">voltar</a><br></h1>

                <hr><br><br>  
<form method="post" class="Formulario">

    <input type="text" placeholder="itemaluguel" name="itemaluguel" size="20" maxlength="10" required><br>
    <input type="text" placeholder="idaluguel" name="idaluguel" size="20" maxlength="10" required><br>
    <input type="text" placeholder="idveiculo" name="idveiculo" size="20" maxlength="10" required><br>

    <input type="submit" name="Executar" value="Atualizar">

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dados";

    if(isset($_POST["itemaluguel"])) {
        $itemaluguel = $_POST["itemaluguel"];
        $idaluguel = $_POST["idaluguel"];
        $idveiculo = $_POST["idveiculo"];


        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Erro na conexão com o Banco");
        }
        else {
            $sql = "UPDATE itemaluguel set idveiculo = '$idveiculo', idaluguel = '$idaluguel' where itemaluguel = $itemaluguel";
            echo"<br><br>";
            if ($conn->query($sql) === TRUE) {
                echo "<span><b>Aviso:</b>Dados Atulizados com Sucesso</span>";
            } else {
                echo "<span><b>Aviso:</b> Erro ao atualizar, verifique os dados!<span>" . $sql . "<br>" . $conn->error;
            }
        }
        $conn->close();
    }
    ?>
</form>


<footer>

</footer>
</body>
</html>
