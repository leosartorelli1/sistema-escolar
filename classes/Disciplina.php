<?php 
    class Disciplina{

        public $id;
        public $nomeDisciplina;
        public $cargaHoraria;    
        public function __construct($id = false) 
        {
            if($id){
                $this->id = $id;
                $this->carregar();
            }
            
        }

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

        public function excluir(){
            $sql = "DELETE FROM tb_disciplinas WHERE id=" . $this -> id;
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar', 'root', '');
            $conexao->exec($sql);
        }

        public function carregar() {
            $sql = "SELECT * FROM tb_disciplinas WHERE id=" . $this-> id;
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar', 'root', '');
            $resultado = $conexao->query($sql);
            $linha = $resultado->fetch();
            $this->nomeDisciplina = $linha['nomeDisciplina'];
            $this->cargaHoraria = $linha['cargaHoraria'];
        }

        public function atualizar() {
            $sql = "UPDATE tb_disciplinas SET
                    nomeDisciplina = '$this->nomeDisciplina',
                    cargaHoraria = '$this->cargaHoraria'
                    WHERE id = $this->id";

            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar', 'root', '');
            $conexao->exec($sql);
        }


    }

?>