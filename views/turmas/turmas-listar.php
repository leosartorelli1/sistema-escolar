<?php 

require_once "../../classes/Turma.php";
$turma = new Turma();
$lista = $turma->listar();

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
            <th>Turma</th>
            <th>Ano</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($lista as $linha) : ?>
            <tr>
                <td><?php echo $linha['id'] ?></td>
                <td><?php echo $linha['descTurma'] ?></td>
                <td><?php echo $linha['ano']?></td>
                <td>
                    <a href="turmas-editar.php?id=<?php echo $linha['id'] ?>">Atualizar</a>
                    <a href="turmas-excluir.php?id=<?php echo $linha['id'] ?>">Excluir</a>
                </td>
            </tr>
            <?php endforeach?>
    </table>

    <a href="../../index2.php">Voltar</a>

</body>
</html>