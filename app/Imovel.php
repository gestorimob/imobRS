<?php
require_once 'Conexao.php';

class Imovel
{
    public function cadastrar($descricao, $tipo, $valor, $endereco, $status)
    {
        $pdo = Conexao::getConexao();
        $stmt = $pdo->prepare("INSERT INTO Imoveis (descricao, tipo, valor, endereco, status) 
            VALUES (:descricao, :tipo, :valor, :endereco, :status)");
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':tipo', $tipo);
        $stmt->bindParam(':valor', $valor);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':status', $status);

        return $stmt->execute();
    }

    public function listar()
    {
        $pdo = Conexao::getConexao();
        $stmt = $pdo->prepare("SELECT * FROM Imoveis");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function atualizar($id, $descricao, $tipo, $valor, $endereco, $status)
    {
        $pdo = Conexao::getConexao();
        $stmt = $pdo->prepare("UPDATE Imoveis 
            SET descricao = :descricao, tipo = :tipo, valor = :valor, endereco = :endereco, status = :status
            WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':tipo', $tipo);
        $stmt->bindParam(':valor', $valor);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':status', $status);

        return $stmt->execute();
    }

    public function excluir($id)
    {
        $pdo = Conexao::getConexao();
        $stmt = $pdo->prepare("DELETE FROM Imoveis WHERE id = :id");
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }
}
