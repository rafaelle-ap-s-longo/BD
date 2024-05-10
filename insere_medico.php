<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Insere MEDICO</title>
    </head>
<body bgcolor="green">
   <font color="white"> 
   <br><br><center><h1>Insere Dados - MEDICO</h1> 
   <br><br><center>
    <?php 
        include "conecta.php";
        
        $nome = $_POST["nome"];
        $cgm = $_POST["cgm"];
        $telefone = $_POST["telefone"];
        $serie = $_POST["serie"];

        $sql="INSERT INTO medico () VALUES ()";
         
        if (mysqli_query($ligacao, $sql)) {
             echo "<br>Dados inseridos com sucesso.";
        }else {
            echo "Erro nao consegui inserir:" . $sql . "<br>" . mysqli_error($ligacao);
             } 
        mysqli_close($ligacao); 

    ?>
    <br><a href="menu.php">Voltar</a>
    </center>
</body>
</htm