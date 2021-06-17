<?php
include_once("conexao.php");






?>

<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>excluir veiculo</title>

      
      
</head>
<body>

<section class="menu2">
      <a href="Cadastroveiculo.php">Cadastrar</a>
      <a href=" pesquisarveiculo.php">listar</a><a href="excluirveiculo.php">excluir</a>
       <a href="Atualizarveiculo.php">atualizar</a><br>
</section>
      <h1><a class="voltar" class="btn" href="index1.php">voltar</a><br></h1>
                <hr><br><br>  
                
         <form method="post" class="Formulario" action="#">
    <br>
    <br>

    <input type="text" placeholder="Codigo do veiculo" name="idveiculo" class="txtcodigo" required><br>
    <input type="submit" name="Executar" value="Excluir">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dados";

    if(isset($_POST["idveiculo"])) {
        $idveiculo = $_POST["idveiculo"];

        $conn = new mysqli($servername, $username, $password, $dbname);
        echo"<br><br>";

        if ($conn->connect_error) {
            die("Erro na conexão com o Banco");
        }
        else {
            $sql = "delete from veiculo WHERE  idveiculo = $idveiculo";

            if ($conn->query($sql) === TRUE) {
                echo "<span><b>Aviso:</b>veiculo excluido com sucesso!</span>";
            } else {
                echo "<span><b>Aviso:</b>Erro ao excluir, verifique Código</span>";
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
