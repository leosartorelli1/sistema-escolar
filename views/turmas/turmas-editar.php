<?php 
    require_once "../../classes/Turma.php";
    $id = $_GET['id'];
    $turma = new Turma($id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar turmas</title>
</head>
<body>
    <h1>Sistema Academico</h1>
    <h3>Nova turma </h3>
    <form action="turmas-editar-gravar.php" method="post">
        <input type="hidden" name="id" value="<?= $turma->id ?>">
        <label for="descTurma">Turma:</label>
        <input type="text" name="descTurma" value="<?= $turma->descTurma ?>">
        <br><br>
        <label for="ano">Ano:</label>
        <input type="text" name="ano" value="<?= $turma->ano ?>">
        <br><br>
        <input type="submit" value="Gravar">
    </form>
    
</body>
</html>