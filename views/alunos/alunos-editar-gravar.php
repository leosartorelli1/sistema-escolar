<?php
require_once "../../classes/Aluno.php";

$id = $_POST['id'];

$aluno = new Aluno($id);

$aluno->nome = $_POST['nome'];

$aluno->foto = $_FILES['foto']; //apenas para teste, nao é ideal armazenar fotos no banco de dados

$aluno->email = $_POST['email'];

$aluno->turma_id = $_POST['turma_id'];



$aluno->atualizar();

header('Location: alunos-listar.php');

?>


