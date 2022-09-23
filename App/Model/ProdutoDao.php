<?php

namespace App\Model;

class ProdutoDao {

    public function create(Produto $p){

        $sql = 'INSERT INTO produto (nome, descricao) VALUES (?, ?)';
        $insert = Conexao::getConexao()->prepare($sql);
        $insert->bindValue(1, $p->getNome());
        $insert->bindValue(2, $p->getDescricao());
        $insert->execute();

    }

    public function read(){

        $sql = 'SELECT * FROM produto';
        $select = Conexao::getConexao()->prepare($sql);
        $select->execute();

        if($select->rowCount() > 0){
            $resultado = $select->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return [];
        }

    }

    public function update(Produto $p){

        $sql = 'UPDATE produto SET nome = ?, descricao = ? WHERE id = ?';
        $update = Conexao::getConexao()->prepare($sql);
        $update->bindValue(1, $p->getNome());        
        $update->bindValue(2, $p->getDescricao());        
        $update->bindValue(3, $p->getId());        

        $update->execute();
    }

    public function delete($id){

        $sql = 'DELETE FROM produto WHERE id = ?';
        $delete = Conexao::getConexao()->prepare($sql);
        $delete->bindValue(1, $id);
        $delete->execute();
    }

}