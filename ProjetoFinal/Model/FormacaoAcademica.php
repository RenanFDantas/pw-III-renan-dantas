<?php
class FormacaoAcademica {
    private $id;
    private $idusuario;
    private $inicio;
    private $fim;
    private $descricao;

    public function setID($id){ $this->id = $id; }
    public function getID(){ return $this->id; }

    public function setIdUsuario($idusuario){ $this->idusuario = $idusuario; }
    public function getIdUsuario(){ return $this->idusuario; }

    public function setInicio($inicio){ $this->inicio = $inicio; }
    public function getInicio(){ return $this->inicio; }

    public function setFim($fim){ $this->fim = $fim; }
    public function getFim(){ return $this->fim; }

    public function setDescricao($descricao){ $this->descricao = $descricao; }
    public function getDescricao(){ return $this->descricao; }

    public function inserirBD() {
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();
        $sql = "INSERT INTO formacaoAcademica (idusuario, inicio, fim, descricao)
                VALUES ('{$this->idusuario}','{$this->inicio}','{$this->fim}','{$this->descricao}')";
        if ($conn->query($sql) === true) {
            $this->id = $conn->insert_id;
            $conn->close();
            return true;
        }
        $conn->close();
        return false;
    }

    public function excluirBD($id) {
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();
        $sql = "DELETE FROM formacaoAcademica WHERE idformacaoAcademica = '{$id}'";
        if ($conn->query($sql) === true) {
            $conn->close();
            return true;
        }
        $conn->close();
        return false;
    }

    public function listaFormacoes($idusuario) {
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();
        $sql = "SELECT * FROM formacaoAcademica WHERE idusuario = '{$idusuario}'";
        $re  = $conn->query($sql);
        $conn->close();
        return $re;
    }
}
?>