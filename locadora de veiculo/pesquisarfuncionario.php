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
          <a href="cadastrofuncionario.php">Cadastrar</a> <a href=" pesquisarfuncionario.php">lista</a><a href="excluirfuncionario.php">excluir</a>
       <a href="Atualizarfuncionario.php">atualizar</a><br>
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
                $sql = 'Select * from funcionario where nome LIKE "%'.$dado.'%"';
            else
                $sql = "Select * from funcionario";
        }
        else
        {
            if(isset($_POST["txtprocurar"]))
            {
                $dado = $_POST["txtprocurar"];
                $sql = 'Select * from funcionario where nome LIKE "%'.$dado.'%"';
            }
            else
            {

                $sql = "Select * from funcionario";
            }
        }
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {

       echo"<table>
    <tr>
        
        <th >nome</th>
        <th >cpf</th>


    </tr>";

            while ($row = $result->fetch_assoc()) {
                

                $nome = $row['nome'];
                $cpf = $row['cpf'];



                echo " <tr>";
               
                echo "<td>" . $nome . "</td>";
                echo "<td>" . $cpf . "</td>";


                echo "</tr>";


            }
        } else {
          
            echo "<h2>Nenhum funcionario encontrado!!..</h2>";
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
