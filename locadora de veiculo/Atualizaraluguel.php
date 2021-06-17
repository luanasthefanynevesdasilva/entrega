
<?php
include_once("conexao.php");






?>
<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>atualizar aluguel</title>

      
      
</head>
<body>

<section class="menu2">
      <a href="Cadastroaluguel.php">Cadastrar</a>
      <a href="pesquisaluguel.php">listar</a><a href="excluiraluguel.php">excluir</a>
       <a href="Atualizaraluguel.php">atualizar</a><br>
</section>
      <h1><a class="voltar" class="btn" href="index1.php">voltar</a><br></h1>
                <hr><br><br>  
<form method="post" class="Formulario">

    <input type="text" placeholder="idaluguel" name="idaluguel" size="20" maxlength="10" required><br>
    data-locacao<br>
    <input type="date" placeholder="datalocacao" name="datalocacao" size="40" maxlength="43" required><br>
    <input type="text" placeholder="idfuncionario" name="idfuncionario" size="20" maxlength="20" required><b>
    <input type="text" placeholder="combustivelatual" name="combustivelatual" size="20" maxlength="20" required><b>
    <input type="text" placeholder="desconto" name="desconto" size="20" maxlength="20" required><b>
    <input type="text" placeholder="troco" name="troco" size="20" maxlength="20" required><b>
    <input type="text" placeholder="total" name="total" size="20" maxlength="20" required><b>
    <input type="text" placeholder="pago" name="pago" size="20" maxlength="20" required><b>
    <input type="text" placeholder="diaria" name="diaria" size="20" maxlength="20" required><b>
    <input type="text" placeholder="idusuario" name="idusuario" size="20" maxlength="20" required><b>

    <input type="submit" name="Executar" value="Atualizar">

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dados";

    if(isset($_POST["idaluguel"])) {
        $idaluguel = $_POST["idaluguel"];
        $datalocacao = $_POST["datalocacao"];
        $idfuncionario = $_POST["idfuncionario"];
        $combustivelatual = $_POST["combustivelatual"];
        $desconto = $_POST["desconto"];
        $troco = $_POST["troco"];
        $total = $_POST["total"];
        $pago = $_POST["pago"];
        $diaria = $_POST["diaria"];
        $idusuario = $_POST["idusuario"];


        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Erro na conexão com o Banco");
        }
        else {
            $sql = "UPDATE aluguel set datalocacao = '$datalocacao', idfuncionario =  '$idfuncionario' 
            , combustivelatual =  '$combustivelatual', desconto =  '$desconto', troco =  '$troco', total =  '$total', pago =  '$pago', diaria =  '$diaria', idusuario =  '$idusuario'

            where idaluguel = $idaluguel";
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
