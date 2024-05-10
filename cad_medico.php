<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Entrada de Dados - MEDICO</title>
    </head>
<body bgcolor="green">
   <font color="white">
   <br><br><center><h1>Entrada de Dados - MEDICO</h1>
    <br><br>
   <center>
    <form method="POST" action="insere_medico.php">     
      Nome : <input type="text" name="nome"><br><br>
      CGM : <input type="text" name="cgm"><br><br>
      Telefone : <input type="text" name="telefone"><br><br>
      Serie:<select name="serie">
                <option value="6A">6A</option>
                <option value="6B">6B</option>
                <option value="7A">7A</option>
                <option value="8A">8A</option>
                <option value="9A">9A</option>
                <option value="1A">1A</option>
                <option value="2A">2A</option>
                <option value="2TEC">2TEC</option>
                <option value="3A">3A</option>
                <option value="3B">3B</option>

            </select>    
      <br><br>
        <input type="submit" value="Cadastrar">
    </form><br> 
    <a href="menu.php">Voltar</a>  
</body>
</html>