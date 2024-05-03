<?php 
    class Turma{

        public $id;
        public $descTurma;
        public $ano;    
        public function __construct($id = false) 
        {
            if($id){
                $this->id = $id;
                $this->carregar();
            }
            
        }

        public function inserir() {

            $sql = "INSERT INTO tb_turmas (descTurma, ano) VALUES (
                ' " . $this -> descTurma . " ',
                ' " . $this -> ano . " '
            )";

            include "Conexao.php";

            $conexao->exec($sql);

            echo "Registro gravado com sucesso";

            header("refresh:3; URL= turmas-listar.php");
        }

        public function listar( ){
            $sql = "SELECT * FROM tb_turmas"; 
            include "Conexao.php";
            $resultado = $conexao->query($sql);

            $lista = $resultado->fetchAll();

            return $lista;
        }

        public function excluir(){
            $sql = "DELETE FROM tb_turmas WHERE id=" . $this -> id;
            include "Conexao.php";
            $conexao->exec($sql);
        }

        public function carregar() {
            $sql = "SELECT * FROM tb_turmas WHERE id=" . $this-> id;
            include "Conexao.php";
            $resultado = $conexao->query($sql);
            $linha = $resultado->fetch();
            $this->descTurma = $linha['descTurma'];
            $this->ano = $linha['ano'];
        }

        public function atualizar() {
            $sql = "UPDATE tb_turmas SET
                    descTurma = '$this->descTurma',
                    ano = '$this->ano'
                    WHERE id = $this->id";

            include "Conexao.php";
            $conexao->exec($sql);
        }
    

            
    }

?>