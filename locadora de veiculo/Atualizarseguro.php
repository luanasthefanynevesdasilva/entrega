
<?php
include_once("conexao.php");






?>
<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>atualizar seguro</title>

      
      
</head>
<body>

<section class="menu2">
      <a href="Cadastroseguro.php">Cadastrar</a>
      <a href=" pesquisarseguro.php">listar</a><a href="excluirseguro.php">excluir</a>
       <a href="Atualizarseguro.php">atualizar</a><br>
</section>
<h1><a class="voltar" class="btn" href="index1.php">voltar</a><br></h1>
                <hr><br><br>  
<form method="post" class="Formulario">

    <input type="text" placeholder="idseguro" name="idseguro" size="20" maxlength="10" required><br>
    <input type="date" placeholder="datainicio" name="datainicio" size="40" maxlength="43" required><br>
    <input type="date" placeholder="datafinal" name="datafinal" size="20" maxlength="20" required><b>
    <input type="text" placeholder="valor" name="valor" size="20" maxlength="20" required><b>

    <input type="submit" name="Executar" value="Atualizar">

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dados";

    if(isset($_POST["idseguro"])) {
        $idseguro = $_POST["idseguro"];
        $datainicio = $_POST["datainicio"];
        $datafinal = $_POST["datafinal"];
        $valor = $_POST["valor"];

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Erro na conexão com o Banco");
        }
        else {
            $sql = "UPDATE seguro set datafinal = '$datafinal', datainicio =  '$datainicio',valor =  '$valor' where idseguro = $idseguro";
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
