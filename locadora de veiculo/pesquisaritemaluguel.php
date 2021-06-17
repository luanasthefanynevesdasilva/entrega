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
      <a href="cadastroitemaluguel.php">Cadastrar</a>
      <a href=" pesquisaritemaluguel.php">listar</a><a href="excluiritemaluguel.php">excluir</a>
       <a href="Atualizaritemaluguel.php">atualizar</a><br>
</section>
         <br><br>
                  <h1><a class="voltar" class="btn" href="index1.php">voltar</a><br></h1>


       
    <form method="post">
        <input type="search" name="txtprocurar" placeholder="Procure por itemaluguel">
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
                $sql = 'Select * from itemaluguel where itemaluguel LIKE "%'.$dado.'%"';
            else
                $sql = "Select * from itemaluguel";
        }
        else
        {
            if(isset($_POST["txtprocurar"]))
            {
                $dado = $_POST["txtprocurar"];
                $sql = 'Select * from itemaluguel where itemaluguel LIKE "%'.$dado.'%"';
            }
            else
            {

                $sql = "Select * from itemaluguel";
            }
        }
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {

       echo"<table>
    <tr>
        

        <th >idaluguel</th>
        <th >idveiculo</th>


    </tr>";

            while ($row = $result->fetch_assoc()) {
                


                $idaluguel = $row['idaluguel'];
                $idveiculo = $row['idveiculo'];



                echo " <tr>";
               
                echo "<td>" . $idaluguel . "</td>";
                echo "<td>" . $idveiculo . "</td>";


                echo "</tr>";


            }
        } else {
          
            echo "<h2>Nenhum itemaluguel encontrado!!..</h2>";
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
