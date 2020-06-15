<?php
            
include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from usuarios where profissao like '%$filtro%' order by nome";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);
            
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="container">
        <section>
            <h1>Tela de login</h1>
            <form method="POST" action="loginc.php">
                Nome<br>
                <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
                Email<br>
                <input type="email" name="email" class="campo" maxlength="50" required><br>
                <input type="submit" value="Acessar" class="btn">
                <input type="reset" value="Esqueci a senha" class="btn">
                <br><br>
            </form>
        </section>
    </div>
</body>
</html>