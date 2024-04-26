<?php
require_once "../../classes/Turma.php";

$id = $_POST['id'];

$turma = new Turma($id);

$turma->descTurma = $_POST['descTurma'];

$turma->ano = $_POST['ano'];

$turma->atualizar();

header('Location: turmas-listar.php');

?>


