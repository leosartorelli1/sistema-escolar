<?php 
    require_once "../../classes/Disciplina.php";
    $id = $_GET['id'];
    $disciplina = new Disciplina($id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar disciplinas</title>
</head>
<body>
    <h1>Sistema Academico</h1>
    <h3>Editar disciplina </h3>
    <form action="disciplinas-editar-gravar.php" method="post">
        <input type="hidden" name="id" value="<?= $disciplina->id ?>">
        <label for="nomeDisciplina">Disciplina:</label>
        <input type="text" name="nomeDisciplina" value="<?= $disciplina->nomeDisciplina ?>">
        <br><br>
        <label for="cargaHoraria">Carga Horaria:</label>
        <input type="text" name="cargaHoraria" value="<?= $disciplina->cargaHoraria ?>">
        <br><br>
        <input type="submit" value="Gravar">
    </form>
    
</body>
</html>