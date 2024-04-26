<?php
require_once "../../classes/Disciplina.php";

$id = $_POST['id'];

$disciplina = new Disciplina($id);

$disciplina->nomeDisciplina = $_POST['nomeDisciplina'];

$disciplina->cargaHoraria = $_POST['cargaHoraria'];

$disciplina->atualizar();

header('Location: disciplinas-listar.php');

?>


