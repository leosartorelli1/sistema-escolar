<?php 
    class Turma{

        public $id;
        public $descTurma;
        public $ano;

        public function inserir() {

            $sql = "INSERT INTO tb_turmas (descTurma, ano) VALUES (
                ' " . $this -> descTurma . " ',
                ' " . $this -> ano . " '
            )";

            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar', 'root', '');

            $conexao -> exec($sql);

            echo "Registro gravado com sucesso";

            header("refresh:5; URL= turmas-listar.php");
        }
    }

?>