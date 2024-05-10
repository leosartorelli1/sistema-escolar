<?php 
    require_once "../../classes/Aluno.php";
    $id = $_GET['id'];
    $aluno = new Aluno($id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar alunos</title>
</head>
<body>
    <h1>Sistema Academico</h1>
    <h3>Editar tb_alunos </h3>
    <form action="alunos-editar-gravar.php" method="post">
        <input type="hidden" name="id" value="<?= $aluno->id ?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?= $aluno->nome ?>">
        <br><br>

        <label for="foto">Foto:</label>
        <input type="file" name="foto" value="<?= $aluno->foto ?>">
        <br><br>

        <label for="email">Email:</label>
        <input type="text" name="email" value="<?= $aluno->email ?>">
        <br><br>

        <label for="turma_id">Turma:</label>
        <input type="text" name="turma_id" value="<?= $aluno->turma_id ?>">
        <br><br>


        <input type="submit" value="Gravar">
    </form>
    
</body>
</html>