
<?php
include_once("conexao.php");






?>
<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>atualizar Cliente</title>

      
      
</head>
<body>

<section class="menu2">
      <a href="Cadastrocliente.php">Cadastrar</a>
      <a href=" pesquisarcliente.php">listar</a><a href="excluircliente.php">excluir</a>
       <a href="Atualizarcliente.php">atualizar</a><br>
</section>
      <h1><a class="voltar" class="btn" href="index1.php">voltar</a><br></h1>
                <hr><br><br>  
<form method="post" class="Formulario">

    <input type="text" placeholder="idusuario" name="idusuario" size="20" maxlength="10" required><br>
    <input type="text" placeholder="nome" name="nome" size="40" maxlength="43" required><br>
    <input type="text" placeholder="endereco" name="endereco" size="20" maxlength="20" required><br>
    <input type="text" placeholder="telefone" name="telefone" size="20" maxlength="20" required><br>
    <input type="text" placeholder="email" name="email" size="20" maxlength="20" required><br>
    <input type="submit" name="Executar" value="Atualizar">


    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dados";

    if(isset($_POST["idusuario"])) {
        $idusuario = $_POST["idusuario"];
        $nome = $_POST["nome"];
        $endereco = $_POST["endereco"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Erro na conexão com o Banco");
        }
        else {
            $sql = "UPDATE usuario set nome = '$nome', endereco = '$endereco',telefone = '$telefone',email = '$email' where idusuario = $idusuario";
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
