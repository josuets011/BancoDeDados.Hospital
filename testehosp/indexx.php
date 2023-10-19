<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospício CAPS</title>
</head>
<body>



        <form action="salvar.php" method="post">
            <h2> Acesso aos Pacientes: </h2>

            Nome: <input type="text" name="nome" id="">
             <br>
            Seu CPF: <input type="text" name="CPF" id="">
            <br>
            Data de Nascimento: <input type="date" name="data" id="" >

            <input type="submit" value="salvar">
        </form>



    <h2> Listagem de usuarios</h2>
    
    <?php include 'listar.php';?>

</body>
</html>