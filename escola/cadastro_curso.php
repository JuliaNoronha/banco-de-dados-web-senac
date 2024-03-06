<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Curso</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include_once "header.php";
    ?>

    <main>
        <section>
        <h1>Cadastro de Alunos</h1>
        <form action="" method = "post">
            <label for="nome">Nome do curso: </label>
            <input type="text" name="nome" id="nome">

            <label for="area">Area: </label>
            <input type="number" name="area" id="area">
            
            <br>
            <button name="cadastrar"> Cadastrar </button>
        </form>

        <?php
        include_once "conexao.php";
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nome = $_POST['nome'];
            $area = $_POST['area'];
            
            $insert = mysqli_query($conexao, "INSERT INTO curso (nome, area) VALUES ('$nome', '$area')"); 

            if($insert){
                echo "Cadastro efetuado com sucesso!";
            }
        }
        ?>
        </section>
    </main>
</body>
</html>