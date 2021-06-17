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
      <a href="Cadastroaluguel.php">Cadastrar</a>
      <a href=" pesquisaraluguel.php">listar</a><a href="excluiraluguel.php">excluir</a>
       <a href="Atualizaraluguel.php">atualizar</a><br>
</section>
         <br><br>
         <h1><a class="voltar" class="btn" href="index1.php">voltar</a><br></h1>         

       
    <form method="post">
        <input type="search" name="txtprocurar" placeholder="Procure por Clientes">
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
                $sql = 'Select * from aluguel where idaluguel LIKE "%'.$dado.'%"';
            else
                $sql = "Select * from aluguel";
        }
        else
        {
            if(isset($_POST["txtprocurar"]))
            {
                $dado = $_POST["txtprocurar"];
                $sql = 'Select * from aluguel where idaluguel LIKE "%'.$dado.'%"';
            }
            else
            {

                $sql = "Select * from aluguel";
            }
        }
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {

       echo"<table>
    <tr>
        
        <th >combustivelatual</th>
        <th >idfuncionario</th>
        <th >datalocacao</th>
        <th >desconto</th>
        <th >troco</th>
        <th >total</th>
        <th >pago</th>
        <th >diaria</th>
        <th >idusuario</th>

    </tr>";

            while ($row = $result->fetch_assoc()) {
                

                $combustivelatual = $row['combustivelatual'];
                $idfuncionario = $row['idfuncionario'];
                $datalocacao = $row['datalocacao'];
                $desconto = $row['desconto'];
                $troco = $row['troco'];
                $total = $row['total'];
                $pago = $row['pago'];
                $diaria = $row['diaria'];
                $idusuario = $row['idusuario'];


                echo " <tr>";
               
                echo "<td>" . $combustivelatual . "</td>";
                echo "<td>" . $idfuncionario . "</td>";
                echo "<td>" . $datalocacao . "</td>";
                echo "<td>" . $desconto . "</td>";
                echo "<td>" . $troco . "</td>";
                echo "<td>" . $total . "</td>";
                echo "<td>" . $pago . "</td>";
                echo "<td>" . $diaria . "</td>";
                echo "<td>" . $idusuario . "</td>";

                echo "</tr>";


            }
        } else {
          
            echo "<h2>Nenhum aluguel encontrado!!..</h2>";
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
