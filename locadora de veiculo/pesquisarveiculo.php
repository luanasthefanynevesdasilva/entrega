<?php
include_once "conexao.php";

 ?>



<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">


      
      
</head>
<body>

<section class="menu2">
      <a href="Cadastroveiculo.php">Cadastrar</a>
      <a href=" pesquisarveiculo.php">listar</a><a href="excluirveiculo.php">excluir</a>
       <a href="Atualizarveiculo.php">atualizar</a><br>
</section>
      <h1><a class="voltar" class="btn" href="index1.php">voltar</a><br></h1>
            

       
    <form method="post">
        <input type="search" name="txtprocurar" placeholder="Procure por veiculo">
        <input type="submit" value="Buscar">
    </form>

                
				
<?php


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dados";
    

     $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Falha na conexao: " . $conn->connect_error);
    }
    else {

        if(isset($_POST["pr"]))
        {
            $dado = $_POST["pr"];

            if(!$dado == "")
                $sql = 'Select * from veiculo where nome LIKE "%'.$dado.'%"';
            else
                $sql = "Select * from veiculo";
        }
        else
        {
            if(isset($_POST["txtprocurar"]))
            {
                $dado = $_POST["txtprocurar"];
                $sql = 'Select * from veiculo where nome LIKE "%'.$dado.'%"';
            }
            else
            {

                $sql = "Select * from veiculo";
            }
        }
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {

       echo"<table>
    <tr>
        
        <th >ano</th>
        <th >cor</th>
        <th >modelo</th>
        <th >tipoveiculo</th>
        <th >placa</th>
        <th >idseguro</th>
        <th >chassin</th>

    </tr>";

            while ($row = $result->fetch_assoc()) {
                

                $ano = $row['ano'];
                $cor = $row['cor'];
                $modelo = $row['modelo'];
                $tipoveiculo = $row['tipoveiculo'];
                $placa = $row['placa'];
                $idseguro = $row['idseguro'];
                $chassin = $row['chassin'];

                echo " <tr>";
               
                echo "<td>" . $ano . "</td>";
                echo "<td>" . $cor . "</td>";
                echo "<td>" . $modelo . "</td>";
                echo "<td>" . $tipoveiculo . "</td>";
                echo "<td>" . $placa . "</td>";
                echo "<td>" . $idseguro . "</td>";
                echo "<td>" . $chassin . "</td>";

                echo "</tr>";


            }
        } else {
          
            echo "<h2>Nenhum veiculo encontrado!!..</h2>";
        }
        $conn->close();
    }
    ?>
</table>

</section>
<footer>

</footer>
</body>
</html>
