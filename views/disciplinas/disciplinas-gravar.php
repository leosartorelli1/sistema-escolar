<?php 

require_once "../../classes/Disciplina.php";

$disciplina = new Disciplina();

$disciplina->nomeDisciplina = $_POST['nomeDisciplina'];
$disciplina->cargaHoraria = $_POST['cargaHoraria'];

$disciplina->inserir();



?>