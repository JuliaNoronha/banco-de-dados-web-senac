<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Turma</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include_once "header.php";
    ?>

    <main>
        <section>
        <h1>Cadastro de Turma</h1>
        <form action="" method = "post">
            <label for="titulo">Título: </label>
            <input type="text" name="titulo" id="titulo" required>
            <label for="cpf">CPF: </label>
            <input type="text" name="cpf" id="cpf" required>
            
            <br>
            <button name="cadastrar"> Cadastrar </button>
        </form>

        <?php
        include_once "conexao.php";
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nome = $_POST['nome'];
            $data_inicio = $_POST['data_inicio'];
            $data_fim = $_POST['data_fim'];
            $curso = $_POST['curso'];
            $professor = $_POST['professor'];

           
            $insert = mysqli_query($conexao, "INSERT INTO turma (titulo, data_inicio, data_fim, curso, professor) VALUES ('$nome', '$data_inicio', '$data_fim', '$curso', '$professor')"); 

            if($insert){
                echo "Cadastro efetuado com sucesso!";
            }
        }
        ?>
        </section>
    </main>
</body>
</html>