<?php 

require_once "../../classes/Aluno.php";

$aluno = new Aluno();

$aluno->nome = $_POST['nome'];
$aluno->foto = $_FILES['foto'];
$aluno->email = $_POST['email'];
$aluno->turma_id = $_POST['turma'];



$aluno->inserir();



?>