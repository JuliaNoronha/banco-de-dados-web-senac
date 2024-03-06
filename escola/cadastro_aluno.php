<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
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
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome">
            <label for="cpf">CPF: </label>
            <input type="text" name="cpf" id="cpf">
            <label for="nascimento">Data de Nascimento: </label>
            <input type="date" name="nascimento" id="nascimento">
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" id="telefone">
            <label for="turma"> Turma</label>
            <input type="number" name="turma" id="turma">

            <?php
            include_once "conexao.php";
            $select_turmas = mysqli_query($conexao, "SELECT * FROM turma");
            $turmas = mysqli_fetch_assoc($select_turmas);

            echo '
            <select name = "select_turma" id="select_turma">
            <option value= "0" selected>SELECIONE</option>
            <option value= '.$turmas['id_turma'].'>'.$turmas['titulo'].'</option>
            </select>';
            ?>
            <br>
            <button name="cadastrar"> Cadastrar </button>
        </form>

        <?php
       
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $nascimento = $_POST['nascimento'];
            $telefone = $_POST['telefone'];
            $turma = $_POST['turma'];

            $insert = mysqli_query($conexao, "INSERT INTO aluno (nome, cpf, nascimento, telefone, turma) VALUES ('$nome', '$cpf', '$nascimento', '$telefone', $turma)"); 

            if($insert){
                echo "Cadastro efetuado com sucesso!";
            }
        }
        ?>
        </section>
    </main>
</body>
</html>