
<?php
include_once("conexao.php");






?>
<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>atualizar veiculo</title>

      
      
</head>
<body>

<section class="menu2">
      <a href="Cadastroveiculo.php">Cadastrar</a>
      <a href=" pesquisarveiculo.php">listar</a><a href="excluirveiculo.php">excluir</a>
       <a href="Atualizarveiculo.php">atualizar</a><br>
</section>
      <h1><a class="voltar" class="btn" href="index1.php">voltar</a><br></h1>
                <hr><br><br>  
<form method="post" class="Formulario">

    <input type="text" placeholder="idveiculo" name="idveiculo" size="20" maxlength="10" required><br>
    <input type="text" placeholder="cor" name="cor" size="40" maxlength="43" required><br>
    <input type="text" placeholder="ano" name="ano" size="20" maxlength="20" required><b>
    <input type="text" placeholder="modelo" name="modelo" size="20" maxlength="20" required><b>
    <input type="text" placeholder="tipoveiculo" name="tipoveiculo" size="20" maxlength="20" required><b>
    <input type="text" placeholder="placa" name="placa" size="20" maxlength="20" required><b>
    <input type="text" placeholder="idseguro" name="idseguro" size="20" maxlength="20" required><b>
    <input type="text" placeholder="chassin" name="chassin" size="20" maxlength="20" required><b>

    <input type="submit" name="Executar" value="Atualizar">

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dados";

    if(isset($_POST["idveiculo"])) {
        $idveiculo = $_POST["idveiculo"];
        $cor = $_POST["cor"];
        $ano = $_POST["ano"];
        $modelo = $_POST["modelo"];
        $tipoveiculo = $_POST["tipoveiculo"];
        $placa = $_POST["placa"];
        $idseguro = $_POST["idseguro"];
        $chassin = $_POST["chassin"];

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Erro na conexão com o Banco");
        }
        else {
            $sql = "UPDATE veiculo set cor = '$cor', ano =  '$ano',modelo =  '$modelo' ,tipoveiculo =  '$tipoveiculo' ,placa =  '$placa',idseguro =  '$idseguro',chassin =  '$chassin' where idveiculo = $idveiculo";
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
