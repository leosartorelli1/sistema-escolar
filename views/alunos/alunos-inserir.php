<?php 

require_once "../../classes/Turma.php";
$turma = new Turma();
$lista = $turma ->listar();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Academico</title>
</head>
<body>
    <div>
        <div>
            <h1>Cadastro de alunos</h1>
        </div>
        <div>
            <h3>Novo Aluno</h3>
            <form enctype="multipart/form-data" action="alunos-gravar.php" method="post">
                <div>
                    <label for="nome">Nome :</label>
                    <input type="text" name="nome" id="nome">
                </div>

                <div>
                    <label for="foto">Foto : </label>
                    <input type="file" name="foto" id="foto">
                </div>

                <div>
                    <label for="email">Email : </label>
                    <input type="text" name="email" id="email">
                </div>

                <div>
                    <label for="turma">Turma : </label>
                    <select name="turma" id="turma">
                        <option value="">Selecione a turma</option>
                        <?php 
                            foreach($lista as $linha):
                                echo "<option value='{$linha['id']}'>
                                                        {$linha['descTurma']}
                                    </option>";
                            endforeach
                        ?>
                    </select>
                </div>

                <div>
                    <input type="submit" value="Gravar"> <br> <br>
                </div>

            </form>
        </div>
    </div>

    <a href="../../index2.php">Voltar</a>
</body>
</html>