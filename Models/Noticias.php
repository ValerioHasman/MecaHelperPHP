<?php

class Noticias{
    private PDO $con;

    public function __construct(){
        $this->con = Conexao::getConexao();
    }
    public function getNoticias():array|bool{
        $cmd = $this->con->query('SELECT n.not_id,
                                  n.not_titulo,
                                  n.not_imagem,
                                  n.not_texto,
                                  t.tip_descricao
                                  FROM noticias n
                                  INNER JOIN tipos_noticias t
                                  ON n.tip_id = t.tip_id
                                  ');
        return $cmd->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getNoticiasPorID($id):array|bool{
        $cmd = $this->con->prepare('SELECT n.*
                                    FROM noticias n
                                    INNER JOIN tipos_noticias t
                                    ON n.tip_id = t.tip_id
                                    WHERE not_id = :id
                                    ');
        $cmd->bindValue(':id', $id);
        $cmd->execute();
        return $cmd->fetch(PDO::FETCH_ASSOC);
    }
}
