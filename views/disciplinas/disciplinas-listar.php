<?php 

require_once "../../classes/Disciplina.php";
$disciplina = new Disciplina();
$lista = $disciplina->listar();

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
            <th>Disciplina</th>
            <th>Carga Horaria</th>
        </tr>

        <?php foreach ($lista as $linha) : ?>
            <tr>
                <td><?php echo $linha['id'] ?></td>
                <td><?php echo $linha['nomeDisciplina'] ?></td>
                <td><?php echo $linha['cargaHoraria']?></td>
                <td>
                    <a href="disciplinas-editar.php?id=<?php echo $linha['id'] ?>">Atualizar</a>
                    <a href="disciplinas-excluir.php?id=<?php echo $linha['id'] ?>">Excluir</a>
                </td>
            </tr>
            <?php endforeach?>

        
    </table>
</body>
</html>