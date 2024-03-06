<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Professor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include_once "header.php";
    ?>

    <main>
        <section>
        <h1>Cadastro de Professor</h1>
        <form action="" method = "post">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome">

            <label for="formacao">Formação </label>
            <input type="text" name="formacao" id="formacao">

            <label for="cpf">CPF: </label>
            <input type="text" name="cpf" id="cpf">

            <label for="titulo"> Título</label>
            <input type="text" name="titulo" id="titulo">
            
            <br>
            <button name="cadastrar"> Cadastrar </button>
        </form>

        <?php
        include_once "conexao.php";
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nome = $_POST['nome'];
            $formacao = $_POST['formacao'];
            $cpf = $_POST['cpf'];
            $titulo = $_POST['titulo'];
            
            $insert = mysqli_query($conexao, "INSERT INTO professor (nome, formacao, cpf, titulo) VALUES ('$nome', '$formacao', '$cpf', '$titulo')"); 

            if($insert){
                echo "Cadastro efetuado com sucesso!";
            }
        }
        ?>
        </section>
    </main>
</body>
</html>