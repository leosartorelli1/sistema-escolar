<?php 
    class Disciplina{

        public $id;
        public $nomeDisciplina;
        public $cargaHoraria;

        public function inserir() {

            $sql = "INSERT INTO tb_disciplinas (nomeDisciplina, cargaHoraria) VALUES (
                ' " . $this -> nomeDisciplina . " ',
                ' " . $this -> cargaHoraria . " '
            )";

            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar', 'root', '');

            $conexao->exec($sql);

            echo "Registro gravado com sucesso";

            header("refresh:3; URL= disciplinas-listar.php");
        }

        public function listar( ){
            $sql = "SELECT * FROM tb_disciplinas"; 
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar', 'root', '');
            $resultado = $conexao->query($sql);

            $lista = $resultado->fetchAll();

            return $lista;
        }
            
    }

?>