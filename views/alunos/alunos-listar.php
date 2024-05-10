<?php 

    require_once "../../classes/Aluno.php";
    $aluno = new Aluno();
    $lista =  $aluno->listar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Academico</title>
</head>
<body>
    <h3>Sistema Academico</h3>
    <table border ="1">
        <tr>
            <th>Código</th>
            <th>Foto</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Turma</th>
            <th>Ano</th>
        </tr>

        <?php foreach ($lista as $linha) : ?>
            <tr>
                <td><?php echo $linha['id'] ?></td>
                <td><img src="../../img/<?=$linha['foto']?>" alt="foto" height="80"></td>
                <td><?php echo $linha['nome']?></td>
                <td><?php echo $linha['email']?></td>
                <td><?php echo $linha['descTurma']?></td>
                <td><?php echo $linha['ano']?></td>
                <td>
                    <a href="alunos-editar.php?id=<?php echo $linha['id'] ?>">Atualizar</a>
                    <a href="alunos-excluir.php?id=<?php echo $linha['id'] ?>">Excluir</a>
                </td>
            </tr>
            <?php endforeach?>
    </table>

    <a href="alunos-inserir.php">Novo Aluno</a> <br> <br>

    <a href="../../index2.php">Voltar</a>
</body>
</html>
