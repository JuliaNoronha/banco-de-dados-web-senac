<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola SENAC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include_once "header.php";
    ?>
    <main>
        <h1>Bem vindo ao SENAC</h1>
        <section id="home">
            <div class="registros">
                <div>
                 <!-- TABELA ALUNO -->
                 <h2>Alunos</h2>
                <table border="1">
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Turma</th>
                        <th>Nascimento</th>
                        <th>Telefone</th>
                        
                    </tr>
                    <?php
                    include_once "conexao.php";
                    $select = mysqli_query($conexao, "SELECT * FROM aluno");
                    
                    while($dAlunos = mysqli_fetch_assoc($select)) { //estrutura de repetição
                    echo "<tr>
                            <td> {$dAlunos['nome']} </td>
                            <td>{$dAlunos['cpf']}</td>
                            <td>{$dAlunos['turma']}</td>
                            <td>{$dAlunos['nascimento']}</td>
                            <td>{$dAlunos['telefone']}</td>
                        </tr>";
                    }
                    ?>
                </table>
                </div>
                <!-- TABELA PROFESSOR -->
                <div>
                <h2>Professores</h2>
                    <?php
                        //seleciona dados na tabela professor
                        $select_prof = mysqli_query($conexao, "SELECT * FROM professor");
                        //recupera os dados na variável $dProf
                        $dProf = mysqli_fetch_assoc($select_prof);

                        //var_dump($dProf);
                    ?>
                <table border="1">
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Formação</th>
                        <th>Turma</th>
                    </tr>
                    <?php
                    $select = mysqli_query($conexao, "SELECT * FROM professor");
                 
                    while($dProf = mysqli_fetch_assoc($select)) { //estrutura de repetição
                        $id_professor = $dProf['id_professor'];
                    echo "<tr>
                            <td> {$dProf['nome']} </td>
                            <td>{$dProf['formacao']}</td>
                            <td>{$dProf['cpf']}</td>";
                    $select_turma = mysqli_query($conexao,"SELECT titulo from turma where
                    professor=$id_professor");
                    $turma = mysqli_fetch_assoc($select_turma);        
                    echo "<td>$turma[titulo]</td>
                        </tr>";
                    }
                    ?>
                </table>
                </div>

                <!-- TABELA TURMA -->
                <div>
                <h2>Turma</h2>
                <table border="1">
                    <tr>
                        <th>Título</th>
                        <th>data de início</th>
                        <th>data fim</th>
                        <th>Curso</th>
                        <th>Professor</th>
                        
                    </tr>
                    <?php
                    $select_turma = mysqli_query($conexao, "SELECT * FROM turma");
                    
                    while($dTurma = mysqli_fetch_assoc($select_turma)) { //estrutura de repetição
                    echo "<tr>
                            <td> {$dTurma['titulo']} </td>
                            <td>{$dTurma['data_inicio']}</td>
                            <td>{$dTurma['data_fim']}</td>
                            <td>{$dTurma['curso']}</td>
                            <td>{$dTurma['professor']}</td>
                        </tr>";
                    }
                    ?>
                </table>
                </div>

                <!-- TABELA CURSO -->
                <div>
                <h2>Curso</h2>
                <table border="1">
                    <tr>
                        <th>Nome</th>
                        <th>Area</th>
                                                
                    </tr>
                    <?php
                    $select_curso = mysqli_query($conexao, "SELECT * FROM curso");
                    
                    while($dCurso = mysqli_fetch_assoc($select_curso)) { //estrutura de repetição
                    echo "<tr>
                            <td> {$dCurso['nome']} </td>
                            <td>{$dCurso['area']}</td>
                            
                        </tr>";
                        }
                    ?>
                </table>
                </div>
            </div>
        </section>
    </main>
</body>
</html>