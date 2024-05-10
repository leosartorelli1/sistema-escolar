<?php 
class Aluno {

    public $id;
    public $nome;
    public $foto;
    public $email;
    public $turma_id;

    public $nomeFoto;
    public $caminhoFoto;

    public function __construct($id = false) {
        if ($id) {
            $this->id = $id;
            $this->carregar();
        }
    }

        public function carregar() {
            $sql = "SELECT * FROM tb_alunos WHERE id=" . $this-> id;
            include "Conexao.php";
            $resultado = $conexao->query($sql);
            $linha = $resultado->fetch();
            $this->nome = $linha['nome'];
            $this->foto = $linha['foto'];
            $this->email = $linha['email'];
            $this->turma_id = $linha['turma_id'];
        }

        public function listar(){
            $sql = "SELECT a.id, a.nome, a.foto, a.email, t.descTurma, t.ano
            FROM tb_alunos a 
            INNER JOIN tb_turmas t
            ON a.turma_id = t.id";

            include "Conexao.php";
            $resultado = $conexao->query($sql);

            $lista = $resultado->fetchAll();

            return $lista;
        }

        public function inserir() {
            
            preg_match("./(gif|bmp|png|jpg|jpeg){1}$/i", $this->foto["name"], $ext);

            $this->foto = md5(uniqid(time())) . "." . $ext[1];

            $this-> caminhoFoto = '../img' . $this->foto;

            $sql = "INSERT INTO tb_alunos (nome, foto, email, turma_id) VALUES (
                ' " . $this -> nome . " ',
                ' " . $this -> foto . " ',
                ' " . $this -> email . " ',
                ' " . $this -> turma_id . " '
            )";

            include "Conexao.php";

            $conexao->exec($sql);

            echo "Registro gravado com sucesso";

            header("refresh:3; URL= alunos-listar.php");
        }

        public function atualizar() {
            $sql = "UPDATE tb_alunos SET
                    nome = '$this->nome',
                    foto = '$this->foto',
                    email = '$this->email',
                    turma_id = '$this->turma_id'
                    WHERE id = $this->id";
        
            include "Conexao.php";
            $conexao->exec($sql);
        }

        public function excluir(){
            $sql = "DELETE FROM tb_alunos WHERE id=" . $this -> id;
            include "Conexao.php";
            $conexao->exec($sql);
        }



    }
?>
    
